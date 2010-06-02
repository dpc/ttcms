# Tiny Trivial CMS (with Markdown)

## Goal

Simple CMS for small sites with non-technical page editors.
Good base for custom features development.

It's quite often that people want small company/business/personal sites
on which they could edit content. And it's easier for them to use natural
markup like Markdown then HTML. And WYSIWYG editors are more of pain then real
help. With mostly-static content it's "setup once and let them use" approach.

## Overview

### Features

* tiny & simple PHP code
* prepared to be used with Apache out of the box, but should work with other web servers with little work
* page editing via plain files (FTP/SSH access) with Markdown markup
* Markdown
* multilingual sites prepared


### How does it basically works

`index.php` is handling all the requests (except existing files). It
uses `router.php` to decide if it should use file content or do any special
work.
Currently language switching is implemented here, but it's a place to plug
custom functionality. If the page is to be served it reads txt files and
converts to HTML using Markdown plugin.


## Installation

* install in `htdocs` apache folder
* download Markdown plugin to `./3rd` party folder
* check `./config.php`

# License

BSD (see `LICENSE` file). But if you need anything other, just let me know.
