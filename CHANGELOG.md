# Scraper Changelog

The format of this file is based on ["Keep a Changelog"](http://keepachangelog.com/). This project adheres to [Semantic Versioning](http://semver.org/). Version numbers follow the pattern: `MAJOR.FEATURE.BUGFIX`


## 4.0.0 - 2022-10-01

### Improved

- Scraper is ready for Craft 4!

### Changed

- Updated Symfony (Goutte) package to 4.x; Some internal methods and return types have changed.

### Removed

- Removed `Scraper::$plugin` static accessor; use `Scraper::getInstance()` instead.

### Deprecated

- Deprecated SimpleHTMLDom driver. In future versions, `scraper.get()` will use a different driver by default. 

## 3.0.0 - 2020-10-26

### Changed

- Refactored SimpleHtmlDom library classes to satisfy PSR-4.

## 3.0.0-beta.3 - 2019-06-20

### Added

- Added plugin icon.

## 3.0.0-beta.2 - 2019-06-20

## Changed

- Updated SimpleHtmlDom library to Rev. 1.9 (290), bringing massive improvements in performance and resilience to malformed HTML.

## 3.0.0-beta.1 - 2019-06-01

### Added

- 3.x Beta release!
