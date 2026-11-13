# TODO

The first milestone, the selector on prosilver forum and topic pages with an ACP visibility setting, is built. These items are still open.

## Before declaring phpBB 4.0 compatibility

- Recheck the final diff of [phpBB PR #6927](https://github.com/phpbb/phpbb/pull/6927) once it is merged. This extension was built against revision 5f96997; if the merged version keeps different events, template variables or `make_jumpbox()` behavior, adjust to match.
- Recheck against phpBB 4.0's new default style when it replaces prosilver. The templates here are prosilver only.

## Other places the removal touched

PR #6927 also removes the jumpbox, or the "Return to" links next to it, from these pages. Bringing it back on any of them needs a suitable template event; where core has none, write the request for one under `docs/events/`:

- Search results
- Posting, the forum login page and the FAQ/help page
- Memberlist, team page, user profile and Who is online

## Ideas

- An index page placement, for clients that cannot reach nested forums from the board index.
