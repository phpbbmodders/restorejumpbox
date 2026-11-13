# Restore Jumpbox

[![Tests](https://github.com/phpbbmodders/restorejumpbox/actions/workflows/tests.yml/badge.svg)](https://github.com/phpbbmodders/restorejumpbox/actions/workflows/tests.yml) [![Lint](https://github.com/phpbbmodders/restorejumpbox/actions/workflows/lint.yml/badge.svg)](https://github.com/phpbbmodders/restorejumpbox/actions/workflows/lint.yml)

Restores the public forum jumpbox on phpBB 4.0.

phpBB 4.0 removes the "Jump to" forum selector, as proposed in [phpBB PR #6927](https://github.com/phpbb/phpbb/pull/6927). This extension puts it back on prosilver's forum and topic pages.

## Features

- **"Jump to" selector** at the bottom of forum and topic pages, listing only the forums the visitor is allowed to see, in board order with subforums nested.
- **Show the public jumpbox** setting under **ACP → General → Load settings**. Set it to **No** to hide the selector while keeping its forum links in the page for clients that read them, such as [phpbb-tui](https://github.com/drdewes/phpbb-tui).
- Keyboard support: Escape closes the open selector and returns focus to its button, and screen readers are told whether it is open.
- Steps aside on phpBB builds that still have their own jumpbox, so the board never shows two.

## Screenshots

[<img src="docs/images/screenshots/forum.png" alt="Forum page" width="440" height="309">](docs/images/screenshots/forum.png)
[<img src="docs/images/screenshots/topic.png" alt="Topic page" width="440" height="309">](docs/images/screenshots/topic.png)
[<img src="docs/images/screenshots/acp-load-settings.png" alt="ACP Load settings" width="440" height="39">](docs/images/screenshots/acp-load-settings.png)

[Full screenshot gallery](docs/images/screenshots/README.md)

## Requirements

- phpBB 4.0 (4.0.0-a2-dev or later in the 4.0 series). phpBB 3.3 still has its own jumpbox and does not need this extension.
- PHP 8.2 or later
- The prosilver style, or a style based on it

## Installation

1. Copy the extension to `ext/phpbbmodders/restorejumpbox`
2. In the Administration Control Panel, go to **Customise → Manage extensions**
3. Enable the **Restore Jumpbox** extension
4. Optionally change **Show the public jumpbox** under **General → Load settings**

## TODO

Ideas not yet built, practical and speculative alike: [`docs/TODO.md`](docs/TODO.md).

## Contributing

Contributions are welcome!

- **Bug reports**: [Open an issue](https://github.com/phpbbmodders/restorejumpbox/issues).
- **Everything else** (questions, feature requests, ideas, general discussion): [Use Discussions](https://github.com/phpbbmodders/restorejumpbox/discussions), or the [community forum](https://www.phpbbmodders.com/community/).
- Pull requests are welcome for bug fixes or discussed features.

## Acknowledgments

- First version written with [Codex](https://openai.com/codex/).
- Code review, bug fixes, and documentation assisted by [Claude](https://www.anthropic.com/claude).

## License

This extension is licensed under the **GNU General Public License v2.0**.

See [license.txt](license.txt) for more information.
