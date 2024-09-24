# phpmyBugs ~v1.1.4~ 2.0

basically a merge collaboration of two repos https://github.com/piero-la-lune/Bumpy-Booby + https://github.com/philipp-r/bugtracker into this repo.
phpmyBugs is a simple, responsive and highly customizable PHP bug tracking system. Currently supports top 6 Languages out of 10 Languages around the world (based on List of languages by number of native speakers).
![phpmyBugs logo](https://github.com/dineshkummarc/phpmyBugs2/blob/main/screenshots/phpmybugs-logo.png)

### Features:
### v0.3 -> initial by Pierre Monchalin
- [x] **No database required**
- [x] Statuses and tags highly customizable
- [x] File attachments
- [x] Syntax highlighting for code blocks
- [x] Permissions & groups highly customizable
- [x] Multiple projects management
- [x] Easy backup (one folder)
- [x] Protection against too many failed login attempts
- [x] URL rewriting
- [x] E-mail notifications
- [x] Various languages supported ( _fr_, _en_ for now)
- [x] RSS feeds
- [x] Language Switch and selection under settings

To get more information on v0.3 or to see it in action: <http://bumpy-booby.derivoile.fr>.

### v0.4
- [x] New Colors for the Design
- [x] /phpmyBugs/index.php?project=default&page=dashboard: change color 'FFCB83' to a similar color used on the page like with '618DB1'
- [x] /phpmyBugs/index.php?project=default&page=dashboard: change color 'FFF1DF' to a similar color used on the page like with 'BAE2FF'
- [x] /phpmyBugs/index.php?project=default&page=view_issue&id=1: UI issue due to a white Color spot seen on the boxes
- [x] renamed the label 'You are now logged' to 'You are now logged into the System.'
- [x] index.php?project=default&page=new_issue: removed the space by moving label 'new issue' to any other placeholder.
- [x] renamed portal name from 'Bumpy-Booby' to 'phpmyBugs'
- [x] /phpmyBugs/: removed \phpmyBugs\public\css\app\*
![NewColors](https://github.com/dineshkummarc/phpmyBugs2/blob/main/screenshots/new-colors.png)

### v0.5
- [x] New Language supported (_de_)
- [x] /phpmyBugs/index.php?page=install: Blank page is seen on using German Language as installer option
![Dutch](https://github.com/dineshkummarc/phpmyBugs2/blob/main/screenshots/Dutch_DE_de.png)

### v0.6
- [x] New Language supported (_hi_)
- [x] /phpmyBugs/index.php?page=install: Blank page is seen on using Hindi Language as installer option
![Hindi](https://github.com/dineshkummarc/phpmyBugs2/blob/main/screenshots/Hindi_IN_hi.png)

### v0.7
- [x] New Language supported (_ru_)
- [x] /phpmyBugs/index.php?page=install: Blank page is seen on using Russian Language as installer option
![Russian](https://github.com/dineshkummarc/phpmyBugs2/blob/main/screenshots/Russian_RU_ru.png)

### v0.8
- [x] New Language supported (_pt_)
- [x] /phpmyBugs/index.php?page=install: Blank page is seen on using Portuguese Language as installer option
![Portuguese](https://github.com/dineshkummarc/phpmyBugs2/blob/main/screenshots/Portuguese_PT_pt.png)

### v0.9
- [x] New Language supported (_es_)
- [x] /phpmyBugs/index.php?page=install: Blank page is seen on using Spanish Language as installer option
![Spanish](https://github.com/dineshkummarc/phpmyBugs2/blob/main/screenshots/Spanish_ES_es.png)

### v1.1.3 -> by philipp-r
#### API Management
- [x] Added manage [API](https://bugtrackr.github.io/api/) which has below features:
	- [x] [Default API](https://bugtrackr.github.io/api/bumpybooby/) to create new issues, edit them, and more.
	- [x] [Travis CI API](https://bugtrackr.github.io/api/travis-ci/) to create a new issue when a build with Travis CI fails.
	- [x] [Badges](https://bugtrackr.github.io/api/badges/) that can be displayed in GitHub 'README.md' file.
	- [x] [Import RSS Feeds](https://bugtrackr.github.io/api/rss/) to create new issues from RSS feeds.
#### Configuration
You can do all changes by opening `./index.php?page=settings` in your browser. [See our wiki](https://bugtrackr.github.io/wiki/config/) for details!
To configure the [API](https://bugtrackr.github.io/api/) change the settings manually in `./database/config_api.php`.
There is a sample configuration file `./sample_config/config_api.php`.
#### Captcha
You can also edit the [Captcha](https://bugtrackr.github.io/wiki/captcha/) which is displayed when a user who is not logged in wants to create a new issue.
You can do this with `./database/config_captcha.php` file. There is a sample configuration file `./sample_config/config_captcha.php`.

### v2.0
- [x] Merged github Repo https://github.com/philipp-r/bugtracker Features
- [x] Seperated Permissions into Groups and Users Menus
- [x] /phpmyBugs/index.php?project=default&page=dashboard: Error: Wrong username or password.
- [x] /phpmyBugs/: created a new directory named 'themes' under '\phpmyBugs\public\'
- [x] upgrade php version to php7.4.33 for upgrade considerations

### v2.1
- [x] Added new theme used in https://github.com/dineshkummarc/bugtracker-1
- [x] Added new theme 'phpmybugs'
- [x] Added new Dependencies into en and Fr Languages
- [x] /phpmyBugs/index.php?project=default&page=dashboard: the language dropdown field shows language short names, thats why user is not able to understand the languages
- [x] duplicate language files exists on the server like fr, french & en, English. removed redundent language files en and fr.
- [ ] link 'Powered by phpmyBugs' with github repo url
- [ ] phpmyBugs/: the theme \phpmyBugs\public\theme\pmb-red, shows dark blue color instead of red as marked in the theme.
- [ ] portal name is used as hardcoded name in several places of the portal.
- [ ] deprecation alerts on upgrading the test env to php7.4.33
- [ ] /phpmyBugs/: error 'Wrong token. Please send again the form.'
- [ ] /phpmyBugs/: Extend the settings to have themes based UI.
- [ ] seperate General settings from Global settings to have seperate section
- [ ] make default theme as that of phpmybugs default theme
- [ ] new button on view issue page is disabled, should navigate to new issue page for creating a new issue
- [ ] New issue link is seen without login, remove it from the nonlogged in page
- [ ] github repo links are hardcoded into the texts, make them using tags
- [ ] cdn links are hardcoded into the texts, make them using tags

### v2.2
- [ ] New Language supported (_cmn_)

### v2.3    
- [ ] New Language supported (_ar_)

### v2.4
- [ ] New Language supported (_bn_)

### v2.5    
- [ ] New Language supported (_ja_)

### v2.6
- [ ] New Language supported (_lah_)

### v2.7
- [ ] New Themes selection on dashboard

### Screenshots (Based on v0.9)

Dashboard:-
![Dashboard](https://github.com/dineshkummarc/phpmyBugs2/blob/main/screenshots/dashboard.png)
New Issues:-
![New Issues](https://github.com/dineshkummarc/phpmyBugs2/blob/main/screenshots/new-issue.png)
Issue Details:-
![Issue Details](https://github.com/dineshkummarc/phpmyBugs2/blob/main/screenshots/issue-details.png)
Issues:-
![Issues](https://github.com/dineshkummarc/phpmyBugs2/blob/main/screenshots/issues.png)
Settings:-
![Settings](https://github.com/dineshkummarc/phpmyBugs2/blob/main/screenshots/settings.png)
Users:-
![Users](https://github.com/dineshkummarc/phpmyBugs2/blob/main/screenshots/users.png)

## Running

### Installation Procedure
Copy all files, run `./` or `./index.php`, configure phpmyBugs and enjoy !
~Note : you can delete the `./public/css/app/` folder, it is useless.~

Installation:-
![Installation](https://github.com/dineshkummarc/phpmyBugs2/blob/main/screenshots/installation.png)
Successful Installation:-
![Successful Installation](https://github.com/dineshkummarc/phpmyBugs2/blob/main/screenshots/installation-completed.png)

### Backup
Before any update, it's highly recommended to make a backup. You only need to save the `./database/` folder.

### Requirements
- [x] ~phpmyBugs doesn't support IE 6, 7, 8, 9 either. It requires JavaScript to work properly.~
- [x] It requires JavaScript enabled browser to work properly.

### Testing
- [x] Tested using XAMPP control panel v3.2.4 (Apache/2.4.41, MySql 5.0.12-dev, PHP/7.1.33) on Chrome Version 86.0.4240.198
- [x] Tested using WAMPServer v3.3.5 (Apache/2.4.59, MySql 8.3.0, PHP/7.4.33) on Microsoft Edge Version 129.0.2792.52 (Official build) (64-bit)

## About ~Booby Bumpy~ phpmybugs
Booby Bumpy was created by Pierre Monchalin and is ~actually~ maintained by DINESHKUMMARC under name phpmyBugs. Please report bugs/issues here at [Issue Tracker](https://github.com/dineshkummarc/phpmyBugs2/issues)
phpmyBugs is distributed under the MIT License. See `./COPYING` for more information.
