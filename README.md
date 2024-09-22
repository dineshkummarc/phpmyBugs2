# Nireus

[![Issues](https://img.shields.io/github/issues/bugtrackr/Nireus.svg)](https://github.com/bugtrackr/Nireus/issues)
[![GPL License](https://img.shields.io/badge/license-GPL-blue.svg)](https://bugtrackr.github.io/license/)
[![Bitcoin donations](https://img.shields.io/badge/tips---%3E_bitcoin-ff69b4.svg)](https://blockchain.info/address/1PuhHFRSqYyxbtLmvoF3D1LkoY2mVENCia)
[![Gitter](https://img.shields.io/gitter/room/nwjs/nw.js.svg)](https://gitter.im/bugtrackr)

Nireus is a simple, responsive and highly customizable PHP bug tracking system. [Try the demo](https://bumpybooby.herokuapp.com/)

Version 1.1.3

## Install

Download the [latest release](https://github.com/bugtrackr/Nireus/releases/latest) and upload to your webserver.
The folder `./database` has to be writable for apache: `chmod -R 777 database`.
[See our wiki](https://bugtrackr.github.io/wiki/install/) for details!

## Configuration

You can do all changes by opening `./index.php?page=settings` in your browser. [See our wiki](https://bugtrackr.github.io/wiki/config/) for details!
To configure the [API](https://bugtrackr.github.io/api/) change the settings manually in `./database/config_api.php`.
There is a sample configuration file `./sample_config/config_api.php`.
You can also edit the [Captcha](https://bugtrackr.github.io/wiki/captcha/) which is displayed when a user who is not logged in wants to create a new issue.
You can do this with `./database/config_captcha.php` file. There is a sample configuration file `./sample_config/config_captcha.php`.

## API

The [API](https://bugtrackr.github.io/api/) has these features:

 * [Default API](https://bugtrackr.github.io/api/bumpybooby/) to create new issues, edit them, and more.
 * [Travis CI API](https://bugtrackr.github.io/api/travis-ci/) to create a new issue when a build with Travis CI fails.
 * [Badges](https://bugtrackr.github.io/api/badges/) that can be displayed in GitHub 'README.md' file.
 * [Import RSS Feeds](https://bugtrackr.github.io/api/rss/) to create new issues from RSS feeds.

## GNU GPL License

Copyright (C) 2017 for the software by
[bugtrackr team](https://github.com/bugtrackr) &
[contributors](https://github.com/bugtrackr/Nireus/graphs/contributors)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
