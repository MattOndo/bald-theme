# Bald Theme

<img src="https://raw.githubusercontent.com/MattOndo/bald-theme/main/screenshot.png" width="400px" alt="Bald Theme">

The Bald Theme is purpose-built for Headless WordPress. It is intended to be used in conjunction with a separate front-end application and does not contain any front-end assets. This theme is intended to be used in conjunction with ACF Pro.

This super-minimal theme includes a couple core features:

- Does not output any content
- Disable Gutenberg Editor 
  - Options to disable on the homepage, posts page, or any by any defined template. 
  - Found in the Theme Options, helpful when using custom fields for managing content (i.e. ACF or Carbon Fields)

**Dependencies**

Bald Theme requires the following dependencies.

- [Composer](https://getcomposer.org/)
- [Node.js and npm](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)
- [Carbon Fields](https://carbonfields.net/) for Theme Options
- [Tailwind CSS](https://tailwindcss.com/)

## Development

To begin, clone or download this repository.

```
$ git clone git@github.com:MattOndo/bald-theme.git
```

Install the necessary dependencies:

```
$ cd bald-theme
$ composer install
$ npm install
```

## Development Scripts

Compile Tailwind CSS & watch for file changes

```sh
$ dev:css
```

Build Tailwind CSS

```sh
build:css
```

Build & Minify Tailwind CSS

```sh
minify:css
```

## Installation

### Create a Release

We use a GitHub Action to build our project, prepare the plugin files and zip, add to the current GitHub release and then upload to our WP Update Server

#### In your code:

1. Update Changelog in /readme.txt
    - Version # and summary
2. Add Release version to /updox-blocks.php
    - Header
    - In constant UPDOX_BLOCKS_VERSION
3. Add a commit with comment as version number with a prefied "v" e.g. v1.5.1
4. Push/Merge etc.

#### In GitHub

1. Create a Release
2. Add a tag named with version number with a prefied "v" e.g. v1.5.1
3. Add title as "Release version 1.5.1" replacing the release number with this releases the semantic number. (no "v")
4. Any description necessary. Making this the same a the changelog comments is a nice touch or this can be left blank.
5. Click "Publish Release",
    - The release page will load. Note that there are only 2 assets
6. Check the repository's Actions panel and watch the workflow run.
    - If any errors, review and contact Web Dev Team on MS Teams for assistance
7. Check the repository's Releases panel for the current release.
    - Confirm that the plugin's zip file has been added to the assets.

### Download & Install ZIP

1. Download the latest release ZIP file
2. Login to WordPress and navigate to Appearance > Themes
3. Click "Add New" and then "Upload Theme"
4. Upload the ZIP file
5. Click Activate to activate the Bald Theme

## Useful Links

- [Download Theme](https://github.com/MattOndo/bald-theme/releases)
- [GitHub Repository](https://github.com/MattOndo/bald-theme)
- [Matt Ondo](https://mattondo.io/)

## Developers

`Bald Theme` requires the following dependencies. They are pre-installed and ready to go in the installable ZIP file.

- [Composer](https://getcomposer.org/)

Clone or download this repository.

```
$ git clone git@github.com:MattOndo/bald-theme.git
```

Install the necessary dependencies:

```
$ cd bald-theme
$ composer install
```
