# Keep Calm and Clear Cache
A tiny web project by Jesper Wøldiche

## Ideas for further development
### Roll your own
Allow users to roll their own mottos and have them shown on keepcalm.dk using GET or fragment-identifiers.

A model could be to serve default content (the current content) for the motto, but hide it when javascript is enabled, check for a fragment using the following pattern: http://keepcalm.dk/#/this-is-my-motto and write the motto from the fragment if one is present with js, otherwise show default content.

### Reload
Ability to load new motto through ajax without reloading page.

### Shake to reload
Support for accelerometer on iPhone to reload by shaking the app. Is it even possible to access accelerometer from a webpage?
