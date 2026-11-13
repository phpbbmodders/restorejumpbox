# Initial scope

[phpBB PR #6927, proposed revision 5f96997](https://github.com/phpbb/phpbb/pull/6927/files), removes the public jumpbox and its ACP load setting on the 4.0 development branch. It retains the Moderator Control Panel jumpbox and the forced-display path in `make_jumpbox()`.

## First milestone

- Restore the forum selector on prosilver forum and topic pages. Treat other removed placements and the old “Return to” links as follow-ups.
- Use phpBB events and an extension-owned template. Confirm that the target 4.0 revision supplies suitable events and that the retained helper can populate the public selector with the current visitor's permissions.
- Preserve the category order, nesting, forum URLs and anchor classes parsed by [phpbb-tui](https://github.com/drdewes/phpbb-tui). Its fallback checks forum pages linked from the index, so an index placement is optional for the first milestone.
- Verify that enabling the extension restores the selector and disabling it removes it. Leave the core ACP setting and removed search-results event outside this milestone.

## Acceptance checks

- On a phpBB 4.0 test board with the removal applied, verify nested navigation on forum and topic pages for a guest and a signed-in user. Check that restricted forums are absent for users who cannot list them.
- Run phpbb-tui against the board and compare its forum tree with the permitted hierarchy, including nested forums missing from the index. Check the Moderator Control Panel selector with the extension enabled.
- Recheck the final upstream diff and supported style before implementing or declaring 4.0 compatibility.
