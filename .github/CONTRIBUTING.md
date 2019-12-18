## How to contribute to ICTCRM


### **Code of Conduct**

This project and all community members are expected to uphold the [ICTCRM Code of Conduct.](https://github.com/salesagility/ICTCRM/blob/master/CODE_OF_CONDUCT.md)

#### **Bug Reporting**

* **Please do not open a GitHub issue if the bug is a security vulnerability**, and instead email us at security@ictcrm.com. This will be delivered to the product team who handle security issues. Please don't disclose security bugs publicly until they have been handled by the security team.

* Your email will be acknowledged within 24 hours during the business week (Mon - Fri), and you’ll receive a more detailed response to your email within 72 hours during the business week (Mon - Fri) indicating the next steps in handling your report.

* **Ensure the bug was not already reported** by searching on GitHub under [Issues.](https://github.com/salesagility/ICTCRM/issues)

* If you're unable to find an open issue that relates to your problem, [open a new one.](https://github.com/salesagility/ICTCRM/issues/new) Please be sure to follow the issue template as much as possible.

* **Ensure that the bug you are reporting is a core ICTCRM issue** and not specific to your individual setup. For these types of issues please use the [Community Forum.](https://www.ictcrm.com/forum/suite-forum)

#### **Did you fix a bug?**

* To provide a code contribution for an issue you will need to set up your own fork of the ICTCRM repository, make your code changes, commit the changes and make a Pull Request to the appropriate branch on the SuiteCM repository. See our [Quick Guide to Fork ICTCRM.](https://ictcrm.com/wiki/index.php/Contributing_to_ICTCRM#Quick_Guide_to_Fork_ICTCRM) Once you have set up your forked repository you can begin making commits to the project.

* Determine which base branch your bug fix should use. If your bug is present in both hotfix and hotfix-7.10.x then you will need to make a seperate pull request for each branch.

* Separate each fix into a new branch in your repository and name it with the issue ID e.g. bugfix_3062 or issue-1234.

* When committing to your individual bugfix branch, please try and use the following as your commit message 
```Fixed #1234 - <the subject of the issue>```. E.g. ```Fixed #1436 - Reports with nested Parentheses are removing parameters```. By using this format we can easily include all bug fixes within major and minor release notes on our [Wiki](https://ictcrm.com/wiki/index.php/Main_Page).

* If you are new to Writing Commit Messages in git, follow the guide [here.](http://chris.beams.io/posts/git-commit/#seven-rules)

* After you have made your commits and pushed them up to your forked repository you then create a [Pull Request](https://help.github.com/articles/about-pull-requests/) to be reviewed and merged into the ICTCRM repository. Make a new Pull Request for each issue you fix – do not combine multiple bugfixes into one Pull Request.
  Ensure that your Pull Request fork is salesagility/ICTCRM, base branch is either hotfix or hotfix-7.8.x, the head fork is your repository, and the base branch is your unique bugfix branch e.g. bugfix_1234.
  We will automatically reject any Pull Requests made to the wrong branch!

* If you have not signed our CLA [Contributor License Agreement](https://www.clahub.com/agreements/salesagility/ICTCRM) then your pull request will fail a check and we will be unable to merge it into the project. You will only be required to sign this once.

* When a new Pull Request is opened, Travis CI will test the merging of the origin and upstream branch and update the Pull Request. If this check fails you can review the test results and resolve accordingly. To test prior to making a Pull Request install PHPUnit via composer into your develop environment then cd into the tests directory and run: ```$ sh runtests.sh```

* Ensure that you follow the pull request [template](https://github.com/salesagility/ICTCRM/blob/master/.github/PULL_REQUEST_TEMPLATE.md) as much as possible.

#### **Did you create a new feature or enhancement?**

* Changes that can be considered a new feature or enhancement should be made to the develop branch instead of the hotfix or hotfix-7.8.x. branch.

* To contribute a feature to ICTCRM, similar to providing a Bug Fix, you must create a forked repository of ICTCRM and set up your git and development environment.
  Once done, create a new branch from **hotfix-7.10.x** (Issues effecting 7.10 & 7.11) or **hotfix** (Issues effecting 7.11 only) and name it relevant to the feature's purpose e.g campaign-wizard-ui. Following our [Code Standards,](https://ictcrm.com/wiki/index.php/Coding_Standards) develop the new feature and ensure your forked repository is kept up to date with minor/major releases. See our [Quick Guide to Fork ICTCRM](https://ictcrm.com/wiki/index.php/Contributing_to_ICTCRM#Quick_Guide_to_Fork_ICTCRM) to update your repository.
  Make sure your commit messages are relevant and descriptive. When ready to submit for review, make a Pull Request detailing your feature's functionality.
  Ensure that your Pull Requests base fork is **salesagility/ICTCRM**, the base branch is **hotfix-7.10.x** (Issues effecting 7.10 & 7.11) or **hotfix** (Issues effecting 7.11 only), the head fork is your repository, and the base branch is your feature branch.
  Add any new PHPUnit tests to the new feature branch if required e.g new modules or classes.

### Issue and Pull Request Labels

* This section lists the labels we use to help us track and manage issues and pull requests across the ICTCRM repositories.

* By using [GitHub search](https://help.github.com/articles/searching-issues/) you can use labels to help find issues and pull requests that you are interested in. If for example, you are interested in which PR's will be included in the next release of ICTCRM, you can use the [open issues "Resolved: Next Release"](https://github.com/salesagility/ICTCRM/issues?q=is%3Aopen+is%3Aissue+label%3A%22Resolved%3A+Next+Release%22) label.

* We encourage users whom feel an issue should be raised as a higher priority for a next release that they should make a comment to that affect. This also applies to incorrect labelling.

#### General Labels

| Label name | `salesagility/ICTCRM` | Description |
| --- | --- | --- |
| `Bug` | [search][search-ictcrm-label-Bug] | Bugs within the core ICTCRM codebase |
| `Community Contribution` | [search][search-ictcrm-label-Community-Contribution] | These are contribution made by the community |
| `Deprecated` | [search][search-ictcrm-label-Deprecated] | Issues & PRs related to an unsupported version of ICTCRM |
| `Enhancement` | [search][search-ictcrm-label-Enhancement] | Pull requests that provide more functionality. Associated Issues are called suggestions |
| `Fix Proposed` | [search][search-ictcrm-label-Fix-Proposed] | A issue that has a PR related to it that provides a possible resolution |
| `Good First Issue` | [search][search-ictcrm-label-Good-First-Issue] | A good issue for someone new to ICTCRM or web development |
| `Help Wanted` | [search][search-ictcrm-label-Help-Wanted] | Requesting help from the community to achieve a solution |
| `High Priority` | [search][search-ictcrm-label-High-Priority] | Issues & PRs that are critical; broken core functionality; fatal errors; there are no workarounds |
| `Medium Priority` | [search][search-ictcrm-label-Medium-Priority] | Issues & PRs that are important; broken functions; errors; there are workarounds |
| `Low Priority` | [search][search-ictcrm-label-Low-Priority] | Issues & PRs that are minor; broken styling; warns; there are practical workarounds |
| `Resolved: Next Release` | [search][search-ictcrm-label-Resolved-Next-Release] | Issues that have been resolved in a hotfix branch and scheduled to be in the next release |
| `Suggestion` | [search][search-ictcrm-label-Suggestion] | Issue containing a suggestion of functionality, process or UI. Associated PRs are called enhancement |
| `Question` | [search][search-ictcrm-label-Question] | This is a question raised about the functionality of ICTCRM |

#### Description Labels

| Label name | `salesagility/ICTCRM` | Description |
| --- | --- | --- |
| `API` | [search][search-ictcrm-label-API] | Issues & PRs related to all things regarding the API |
| `Campaigns` | [search][search-ictcrm-label-Campaigns] | Issues & PRs related to all things regarding campaigns |
| `Cases` | [search][search-ictcrm-label-Cases] | Issues & PRs related to all things regarding cases |
| `Clean Up` | [search][search-ictcrm-label-Clean-Up] | Issues & PRs related to all things regarding to technical debt and log files |
| `Databases` | [search][search-ictcrm-label-Databases] | Issues & PRs related to all things regarding databases |
| `Dependencies` | [search][search-ictcrm-label-Dependencies] | Pull Requests that update a core dependency |
| `Developer Tools` | [search][search-ictcrm-label-Developer-Tools] | Issues & PRs related to all things regarding development tools like Robo, Travis, etc |
| `Discussion` | [search][search-ictcrm-label-Discussion] | Issues & PRs related to ongoing discussions |
| `Elasticsearch` | [search][search-ictcrm-label-Elasticsearch] | Issues & PRs related to all things regarding Elasticsearch |
| `Emails:Campaigns` | [search][search-ictcrm-label-Emails:Campaigns] | Issues & PRs related to email campaigns |
| `Emails:Cases` | [search][search-ictcrm-label-Emails:Cases] | Issues & PRs related to email cases & AOP |
| `Emails:Compose` | [search][search-ictcrm-label-Emails:Compose] | Issues & PRs related to email compose |
| `Emails:Config` | [search][search-ictcrm-label-Emails:Config] | Issues & PRs related to email configuration |
| `Emails:Templates` | [search][search-ictcrm-label-Emails:Templates] | Issues & PRs related to email templates |
| `Emails` | [search][search-ictcrm-label-Emails] | Issues & PRs related to all things regarding emails & email module |
| `Enviroment` | [search][search-ictcrm-label-Enviroment] | Issues & PRs related to the application environment |
| `Installation` | [search][search-ictcrm-label-Installation] | Issues & PRs related to the installation of the application |
| `Language` | [search][search-ictcrm-label-Language] | Issues & PRs that are confirmed as issues with language & translation within the core |
| `Module` | [search][search-ictcrm-label-Module] | Issues & PRs related to modules that do not have specific label |
| `Reports` | [search][search-ictcrm-label-Reports] | Issues & PRs related to all things regarding reports |
| `Upgrading` | [search][search-ictcrm-label-Upgrading] | Issues & PRs related to all things regarding upgrading & UpgradeWizard |
| `Workflow` | [search][search-ictcrm-label-Workflow] | Issues & PRs related to all things regarding workflow |
| `Studio` | [search][search-ictcrm-label-Studio] | Issues & PRs related to all things regarding studio & module builder |
| `Styling` | [search][search-ictcrm-label-Styling] | Issues & PRs related to all things regarding styling |

#### Status Labels

| Label name | `salesagility/ICTCRM` | Description |
| --- | --- | --- |
| `Assessed` | [search][search-ictcrm-label-Assessed] | PRs that have been tested and confirmed to resolve an issue by a core team member |
| `Community Assessed` | [search][search-ictcrm-label-Community-Assessed] | PRs that have been tested and confirmed to resolve an issue by at least 2 community members |
| `In Review` | [search][search-ictcrm-label-In-Review] | Pull Requests that are activity being reviewed by the core team |
| `Wrong Branch` | [search][search-ictcrm-label-Wrong-Branch] | Pull requests that point towards a restricted branch such as master |
| `Needs Review` | [search][search-ictcrm-label-Needs-Review] | Needs the core team to code review |
| `Needs Assessed` | [search][search-ictcrm-label-Needs-Assessed] | Needs the core team to assess |
| `Invalid` | [search][search-ictcrm-label-Invalid] | Issues & PRs which are a duplicate of an existing issue/PR |
| `Duplicate` | [search][search-ictcrm-label-Duplicate] | Issues & PRs which are a duplicate of an existing issue/PR |
| `Requires Tests` | [search][search-ictcrm-label-Requires-Tests] | Suggestion to OP to provide automated testing (unit, or acceptance) |
| `Requires Updates` | [search][search-ictcrm-label-Requires-Updates] | Issues & PRs which requires input or update from the author |
| `Needs Documentation` | [search][search-ictcrm-label-Needs-Documentation] | Requires adding documentation |
| `Needs Duplicated: Latest` | [search][search-ictcrm-label-Needs-Duplicated-Latest] | Pull Requests that require being duplicated to the "latest" branches i.e. Hotfix |
| `Needs Duplicated: LTS` | [search][search-ictcrm-label-Needs-Duplicated-LTS] | Pull Requests that require being duplicated to the LTS branches i.e. hotfix-7.x.x |
| `Work In Progress` | [search][search-ictcrm-label-Work-In-Progress] | Pull Requests that are not yet ready to be assessed |

[search-ictcrm-label-Bug]: https://github.com/salesagility/ICTCRM/labels/Bug
[search-ictcrm-label-Community-Contribution]: https://github.com/salesagility/ICTCRM/labels/Community%20Contribution
[search-ictcrm-label-Deprecated]: https://github.com/salesagility/ICTCRM/labels/Deprecated
[search-ictcrm-label-Enhancement]: https://github.com/salesagility/ICTCRM/labels/Enhancement
[search-ictcrm-label-Fix-Proposed]: https://github.com/salesagility/ICTCRM/labels/Fix%20Proposed
[search-ictcrm-label-Good-First-Issue]: https://github.com/salesagility/ICTCRM/labels/Good%20First%20Issue
[search-ictcrm-label-Help-Wanted]: https://github.com/salesagility/ICTCRM/labels/Help%20Wanted
[search-ictcrm-label-High-Priority]: https://github.com/salesagility/ICTCRM/labels/High%20Priority
[search-ictcrm-label-Medium-Priority]: https://github.com/salesagility/ICTCRM/labels/Medium%20Priority
[search-ictcrm-label-Low-Priority]: https://github.com/salesagility/ICTCRM/labels/Low%20Priority
[search-ictcrm-label-Resolved-Next-Release]: https://github.com/salesagility/ICTCRM/labels/Resolved%3A%20Next%20Release
[search-ictcrm-label-Suggestion]: https://github.com/salesagility/ICTCRM/labels/Suggestion
[search-ictcrm-label-Question]: https://github.com/salesagility/ICTCRM/labels/Question

[search-ictcrm-label-API]: https://github.com/salesagility/ICTCRM/labels/API
[search-ictcrm-label-Campaigns]: https://github.com/salesagility/ICTCRM/labels/Campaigns
[search-ictcrm-label-Cases]: https://github.com/salesagility/ICTCRM/labels/Cases
[search-ictcrm-label-Clean-Up]: https://github.com/salesagility/ICTCRM/labels/Clean%20Up
[search-ictcrm-label-Databases]: https://github.com/salesagility/ICTCRM/labels/Databases
[search-ictcrm-label-Dependencies]: https://github.com/salesagility/ICTCRM/labels/Dependencies
[search-ictcrm-label-Developer-Tools]: https://github.com/salesagility/ICTCRM/labels/Developer%20Tools
[search-ictcrm-label-Discussion]: https://github.com/salesagility/ICTCRM/labels/Discussion
[search-ictcrm-label-Elasticsearch]: https://github.com/salesagility/ICTCRM/labels/Elasticsearch
[search-ictcrm-label-Emails:Campaigns]: https://github.com/salesagility/ICTCRM/labels/Emails%3ACampaigns
[search-ictcrm-label-Emails:Cases]: https://github.com/salesagility/ICTCRM/labels/Emails%3ACases
[search-ictcrm-label-Emails:Compose]: https://github.com/salesagility/ICTCRM/labels/Emails%3ACompose
[search-ictcrm-label-Emails:Config]: https://github.com/salesagility/ICTCRM/labels/Emails%3AConfig
[search-ictcrm-label-Emails:Templates]: https://github.com/salesagility/ICTCRM/labels/Emails%3ATemplates
[search-ictcrm-label-Emails]: https://github.com/salesagility/ICTCRM/labels/Emails
[search-ictcrm-label-Enviroment]: https://github.com/salesagility/ICTCRM/labels/Environment
[search-ictcrm-label-Installation]: https://github.com/salesagility/ICTCRM/labels/Installation
[search-ictcrm-label-Language]: https://github.com/salesagility/ICTCRM/labels/Language
[search-ictcrm-label-Module]: https://github.com/salesagility/ICTCRM/labels/Module
[search-ictcrm-label-Reports]: https://github.com/salesagility/ICTCRM/labels/Reports
[search-ictcrm-label-Studio]: https://github.com/salesagility/ICTCRM/labels/Studio
[search-ictcrm-label-Styling]: https://github.com/salesagility/ICTCRM/labels/Styling
[search-ictcrm-label-Upgrading]: https://github.com/salesagility/ICTCRM/labels/Upgrading
[search-ictcrm-label-Workflow]: https://github.com/salesagility/ICTCRM/labels/Workflow

[search-ictcrm-label-Duplicate]: https://github.com/salesagility/ICTCRM/labels/Duplicate
[search-ictcrm-label-Assessed]: https://github.com/salesagility/ICTCRM/labels/Assessed
[search-ictcrm-label-Community-Assessed]: https://github.com/salesagility/ICTCRM/labels/Community%20Assessed
[search-ictcrm-label-In-Review]: https://github.com/salesagility/ICTCRM/labels/In%20Review
[search-ictcrm-label-Invalid]: https://github.com/salesagility/ICTCRM/labels/Invalid
[search-ictcrm-label-Needs-Assessed]: https://github.com/salesagility/ICTCRM/labels/Needs%20Assessed
[search-ictcrm-label-Needs-Documentation]: https://github.com/salesagility/ICTCRM/labels/Needs%20Documentation
[search-ictcrm-label-Needs-Duplicated-Latest]: https://github.com/salesagility/ICTCRM/labels/Needs%20Duplicated%3A%20Latest
[search-ictcrm-label-Needs-Duplicated-LTS]: https://github.com/salesagility/ICTCRM/labels/Needs%20Duplicated%3A%20LTS
[search-ictcrm-label-Needs-Review]: https://github.com/salesagility/ICTCRM/labels/Needs%20Review
[search-ictcrm-label-Requires-Tests]: https://github.com/salesagility/ICTCRM/labels/Requires%20Tests
[search-ictcrm-label-Requires-Updates]: https://github.com/salesagility/ICTCRM/labels/Requires%20Updates
[search-ictcrm-label-Work-In-Progress]: https://github.com/salesagility/ICTCRM/labels/Work%20In%20Progress
[search-ictcrm-label-Wrong-Branch]: https://github.com/salesagility/ICTCRM/labels/Wrong%20Branch

Thanks!

ICTCRM Team
