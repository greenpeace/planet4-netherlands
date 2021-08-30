# Greenpeace Planet 4 Netherlands

![Planet4](./planet4.png)

CircleCI is used as the CI automation. Fulls teps for releasing new versions are in the [Planet4 Documentation](https://app.gitbook.com/@greenpeace/s/planet4/nro-customization/deployment))  
It's summarized as:
* Any commit with `[skip ci]` will.... skip the CI pipelines
* Any commit with `[HOLD]` will run pipelines, but will -regardless of CD tests- not automatically deploy to production  
* Any commit in this repo will trigger a rebuild of [the develop environment](https://www-dev.greenpeace.org/nl/)
* Any tag _(numbered consecutively)_ in the repo will run the release pipeline, which:
  * Builds new images and creates reference images for visual regression testing
  * Deploys on [the staging environment](https://www-stage.greenpeace.org/nl/)
  * Runs Codeception and BackstopJS tests
    * If tests run successfully, deploys to production.
    * If tests fail, pipeline will hold for manual check
  
`development.json` defines the repos to install for the develop environment. Normally this would be `dev-develop`. This can also be used for testing or demoing feature branches. ie `dev-feature/integrated_ab_tests`  
`composer-local.json` holds the repos to install for the production environment. This can be any valid semver. `*` could be used, but can be risky. It should be safe to pin to major versions.

Relevant repos:
* [Child theme](https://github.com/greenpeace/planet4-child-theme-netherlands)
* [Blocks](https://github.com/greenpeace/planet4-gpnl-plugin-gutenberg-blocks) 
