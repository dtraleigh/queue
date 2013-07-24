Queue
=====
A project by Leo Suarez

Queue is a project I am building to familiarize myself with some Javascript as well as HTML5 video. 

Using a locally run website, Queue will show a list of videos where a user can select a few and press play. The
web app will then play them in the order selected.

Tested and built with Windows 7 and the latest version of the Chrome browser.

Prerequisites:
  - WAMP server
  - Videos must be in .webm format
  - Videos need thumbnail in .jpg format
  - Familiarity with Video.js

Videos

Videos to be listed in Queue are to be put into a /videos folder. Associated thumbnails must go into a 
/videos/thumbnails folder. The video basename and thumbnail basename must match.

Issues/Improvements to work on:
  - Various CSS/JS styling to make the UI better
  - Ability to remove an already selected video from the Queue
  - Don't make the video player appear if no videos are selected
  - Create a default thumbnail is one doesn't exist
  - Ability to select your own video path
  - Use multiple video paths

