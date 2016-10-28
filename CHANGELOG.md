# Changelog

All Notable changes to `Coding Standards` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](http://keepachangelog.com/) principles.

## 1.1.4 - 2015-10-05

### Added
- Nothing

### Deprecated
- Nothing

### Fixed
- Made sure that we can break on the arrow operator.
- Made sure that the tests keep running on PHP versions older than 5.6

### Removed
- Nothing

### Security
- Nothing

## 1.1.3 - 2015-08-24

### Added
- Nothing

### Deprecated
- Nothing

### Fixed
- Added the $_SERVER variable to the list of valid variables.

### Removed
- Nothing

### Security
- Nothing

## 1.1.2 - 2015-08-21

### Added
- Nothing

### Deprecated
- Nothing

### Fixed
- The T_POW_EQUAL token does not exists on PHP version 5.5. Added a defined check to make sure that it's used only on newer versions.

### Removed
- Nothing

### Security
- Nothing

## 1.1.1 - 2015-08-11

### Added
- Nothing

### Deprecated
- Nothing

### Fixed
- Not all PHP versions support array constants.

### Removed
- Nothing

### Security
- Nothing

## 1.1.0 - 2015-08-11

### Added
- Added a sniff that detects if names of variables are in the correct format.
- Added a sniff that detects if the correct spacing is used around assignments.
- Added a sniff that detects if the correct spacing is used around the double arrow.
- Added unit tests for the sniffs.

### Deprecated
- Nothing

### Fixed
- Nothing

### Removed
- Nothing

### Security
- Nothing

## 1.0.0 - 2015-03-20

### Added
- Initial release with coding standards.

### Deprecated
- Nothing

### Fixed
- Nothing

### Removed
- Nothing

### Security
- Nothing
