# laravel-gmail
Gmail transport for Laravel, to send emails using Google Service Account Key, for Google Workspace

Note: this is currently a WIP!

## Situation
As of writing, there are several Laravel packages for sending emails from Google Workspace via Gmail.
However, they all have some kind of problems:
- Some do not support latest Laravel versions
- Some do not support Google Service Account Key

### "Just use SMTP, right?"
"Just use SMTP", you say. However, as of March 2025,
[Google has deprecated "less secure apps" usage](https://knowledge.workspace.google.com/admin/sync/transition-from-less-secure-apps-to-oauth),
which impacts Gmail integration:

> CalDAV, CardDAV, IMAP, SMTP, and POP will no longer work with legacy passwords (basic authentication).

There are currently two ways to integrate with Gmail:
- Using Google Service Account Keys (**you are here**), mostly for Google Workspace integration
- using OAuth2, mostly for personal accounts

Again, this package deals with **using Google Service Account Key from Google Workspace to send email**.
This package does NOT deal with using OAuth2 tokens for sending email.

## Install
via Composer:

```sh
#todo
```

### Change log
Please see `CHANGELOG.md`.

## Usage
(WIP)

## Testing
PHPUnit (using `orchestra/testbench`) via Composer:

(WIP)

```sh
composer run-script test
```
