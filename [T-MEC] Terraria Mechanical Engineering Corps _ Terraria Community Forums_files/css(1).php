@charset "UTF-8";

/********* public:notices.less ********/
.notices {
  list-style: none;
  margin: 0;
  padding: 0;
}
.notices.notices--block .notice {
  margin-bottom: 10px;
}
.notices.notices--floating {
  margin: 0 20px 0 auto;
  width: 300px;
  max-width: 100%;
  z-index: 800;
}
@media (max-width: 340px) {
  .notices.notices--floating {
    margin-right: 10px;
  }
}
.notices.notices--floating .notice {
  margin-bottom: 20px;
}
.notices.notices--scrolling {
  display: flex;
  align-items: stretch;
  overflow: hidden;
  border-width: 1px;
  border-style: solid;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(13, 4, 2, 0.5);
  border-bottom-color: rgba(13, 4, 2, 0.5);
  border-left-color: rgba(255, 255, 255, 0.1);
  box-shadow: #0A0A0A 0px 0px 15px;
  margin-bottom: 10px;
}
.notices.notices--scrolling.notices--isMulti {
  margin-bottom: 30px;
}
.notices.notices--scrolling .notice {
  width: 100%;
  flex-grow: 0;
  flex-shrink: 0;
  border: none;
}
.noticeScrollContainer {
  margin-bottom: 10px;
}
.noticeScrollContainer .lSSlideWrapper {
  border-width: 1px;
  border-style: solid;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(13, 4, 2, 0.5);
  border-bottom-color: rgba(13, 4, 2, 0.5);
  border-left-color: rgba(255, 255, 255, 0.1);
  box-shadow: #0A0A0A 0px 0px 15px;
}
.noticeScrollContainer .notices.notices--scrolling {
  border: none;
  margin-bottom: 0;
}
.notice {
  position: relative;
  border-width: 1px;
  border-style: solid;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(13, 4, 2, 0.5);
  border-bottom-color: rgba(13, 4, 2, 0.5);
  border-left-color: rgba(255, 255, 255, 0.1);
  box-shadow: #0A0A0A 0px 0px 15px;
}
.notice:before,
.notice:after {
  content: " ";
  display: table;
}
.notice:after {
  clear: both;
}
.notice.notice--primary {
  color: #eae3d1;
  background: rgba(0, 0, 0, 0.5);
}
.notice.notice--accent {
  color: #aa6709;
  background: #fff4e5;
}
.notice.notice--accent a:not(.button--notice) {
  color: #f2930d;
}
.notice.notice--dark {
  color: #fefefe;
  border: none;
  background: #141414;
}
.notice.notice--dark a:not(.button--notice) {
  color: #b4b4b4;
}
.notice.notice--light {
  color: #141414;
  background: #fefefe;
}
.notice.notice--light a:not(.button--notice) {
  color: #828282;
}
.notice.notice--enablePush {
  display: none;
}
@media (max-width: 900px) {
  .notice.notice--enablePush {
    padding: 3px 3px 10px;
    font-size: 13px;
  }
}
@media (max-width: 900px) {
  .notice.notice--cookie .notice-content {
    padding: 3px 3px 10px;
    font-size: 12px;
  }
  .notice.notice--cookie .notice-content .button--notice {
    font-size: 12px;
    padding: 3px 6px;
  }
  .notice.notice--cookie .notice-content .button--notice .button-text {
    font-size: 12px;
  }
}
.notices--block .notice {
  font-size: 15px;
  border-radius: 4px;
}
.notices--floating .notice {
  font-size: 11px;
  border-radius: 4px;
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
}
.notices--floating .notice.notice--primary {
  background-color: rgba(0, 0, 0, 0.8);
}
.notices--floating .notice.notice--accent {
  background-color: rgba(255, 244, 229, 0.8);
}
.notices--floating .notice.notice--dark {
  background-color: rgba(20, 20, 20, 0.8);
}
.notices--floating .notice.notice--light {
  background-color: rgba(254, 254, 254, 0.8);
}
.has-js .notices--floating .notice {
  display: none;
}
.notice.notice--hasImage .notice-content {
  margin-left: 68px;
  min-height: 68px;
}
@media (max-width: 900px) {
  .notice.notice--hidewide:not(.is-vis-processed) {
    display: none;
    visibility: hidden;
  }
}
@media (max-width: 650px) {
  .notice.notice--hidemedium:not(.is-vis-processed) {
    display: none;
    visibility: hidden;
  }
}
@media (max-width: 480px) {
  .notice.notice--hidenarrow:not(.is-vis-processed) {
    display: none;
    visibility: hidden;
  }
}
.notice-image {
  float: left;
  padding: 10px 0 10px 10px;
}
.notice-image img {
  max-width: 48px;
  max-height: 48px;
}
.notice-content {
  padding: 10px;
}
.notice-content a.notice-dismiss {
  float: right;
  color: inherit;
  font-size: 16px;
  line-height: 1;
  height: 1em;
  box-sizing: content-box;
  padding: 0 0 5px 5px;
  opacity: .5;
  -webkit-transition:  opacity 0.25s ease;
  transition:  opacity 0.25s ease;
  cursor: pointer;
}
.notice-content a.notice-dismiss:before {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f00d";
  display: inline-block;
  width: 0.6899999999999999em;
}
.notice-content a.notice-dismiss:hover {
  text-decoration: none;
  opacity: 1;
}
.notices--floating .notice-content a.notice-dismiss {
  font-size: 14px;
}

/********* public:structured_list.less ********/
.structItemContainer {
  border-collapse: collapse;
  list-style: none;
  margin: 0;
  padding: 0;
  width: 100%;
}
.structItemContainer > .structItem:first-child,
.structItemContainer > .structItemContainer-group:first-child > .structItem:first-child {
  border-top: none;
}
.structItem {
  display: table;
  table-layout: fixed;
  border-collapse: collapse;
  border-top: 1px solid #0f0f0f;
  list-style: none;
  margin: 0;
  padding: 0;
  width: 100%;
}
.structItem.is-highlighted,
.structItem.is-moderated {
  background: rgba(0, 0, 0, 0.5);
}
.structItem.is-deleted {
  opacity: .7;
}
.structItem.is-deleted .structItem-title {
  text-decoration: line-through;
}
.structItem.is-mod-selected {
  background: #f7f0e6;
  opacity: 1;
}
.structItem-cell {
  display: table-cell;
  vertical-align: top;
  padding: 10px 8px;
}
.structItem--middle .structItem-cell {
  vertical-align: middle;
}
.structItem-cell.structItem-cell--icon {
  width: 52px;
  position: relative;
}
.structItem-cell.structItem-cell--icon.structItem-cell--iconExpanded {
  width: 64px;
}
.structItem-cell.structItem-cell--icon.structItem-cell--iconEnd {
  width: 40px;
  padding-left: 4px;
}
.structItem-cell.structItem-cell--icon.structItem-cell--iconEnd .structItem-iconContainer {
  padding-top: 6px;
}
.structItem-cell.structItem-cell--icon.structItem-cell--iconFixedSmall {
  width: 76px;
}
.structItem-cell.structItem-cell--meta {
  width: 135px;
}
.structItem-cell.structItem-cell--latest {
  width: 190px;
  text-align: right;
}
.structItem-iconContainer {
  position: relative;
}
.structItem-iconContainer img {
  display: block;
  width: 100%;
}
.structItem-iconContainer .avatar {
  width: 36px;
  height: 36px;
  font-size: 22px;
}
.structItem-iconContainer .avatar.avatar--xxs {
  width: 24px;
  height: 24px;
  font-size: 14px;
}
.structItem-iconContainer .structItem-secondaryIcon {
  position: absolute;
  right: -5px;
  bottom: -5px;
  width: 20px;
  height: 20px;
  font-size: 12px;
}
.structItem-cell--iconExpanded .structItem-iconContainer .avatar {
  width: 48px;
  height: 48px;
  font-size: 29px;
}
.structItem-cell--iconExpanded .structItem-iconContainer .structItem-secondaryIcon {
  width: 22px;
  height: 22px;
  font-size: 13px;
}
.structItem-title {
  font-size: 17px;
  font-weight: 400;
  margin: 0;
  padding: 0;
}
.structItem-title .label {
  font-weight: 400;
}
.is-unread .structItem-title {
  font-weight: 700;
}
.structItem-minor {
  font-size: 12px;
  color: #b5bdb2;
}
.structItem-minor a {
  color: inherit;
  text-decoration: none;
}
.structItem-minor a:hover {
  text-decoration: underline;
}
.structItem-parts {
  list-style: none;
  margin: 0;
  padding: 0;
  display: inline;
}
.structItem-parts > li {
  display: inline;
  margin: 0;
  padding: 0;
}
.structItem-parts > li:nth-child(even) {
  color: #d0d0c2;
}
.structItem-parts > li:before {
  content: "\00B7\20";
}
.structItem-parts > li:first-child:before {
  content: "";
  display: none;
}
.structItem-pageJump {
  margin-left: 8px;
  font-size: 11px;
}
.structItem-pageJump a {
  color: #d0d0c2;
  background: #dfdfdf;
  border: 1px solid #000000;
  text-decoration: none;
  border-radius: 2px;
  padding: 0 3px;
  opacity: .5;
  -webkit-transition:  all 0.25s ease;
  transition:  all 0.25s ease;
}
.structItem:hover .structItem-pageJump a,
.has-touchevents .structItem-pageJump a {
  opacity: 1;
}
.structItem-pageJump a:hover {
  text-decoration: none;
  background: #e8e8e8;
}
.structItem-statuses,
.structItem-extraInfo {
  list-style: none;
  margin: 0;
  padding: 0;
  float: right;
}
.structItem-statuses > li,
.structItem-extraInfo > li {
  float: left;
  margin-left: 8px;
}
.structItem-statuses input[type=checkbox],
.structItem-extraInfo input[type=checkbox] {
  vertical-align: -2px;
}
.structItem-statuses .reactionSummary {
  vertical-align: -2px;
}
.structItem-extraInfo .reactionSummary {
  vertical-align: middle;
}
.structItem-status::before {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  display: inline-block;
  font-size: 90%;
  color: #b5bdb2;
}
.structItem-status--deleted::before {
  content: "\f2ed";
}
.structItem-status--locked::before {
  content: "\f023";
}
.structItem-status--moderated::before {
  content: "\f132";
  color: #f2930d;
}
.structItem-status--redirect::before {
  content: "\f08e";
}
.structItem-status--starred::before {
  content: "\f005";
  color: #f9c479;
}
.structItem-status--sticky::before {
  content: "\f08d";
}
.structItem-status--watched::before {
  content: "\f06e";
  color: #c4ebd0;
}
.structItem-status--poll::before {
  content: "\f080";
}
.structItem-status--attention::before {
  content: "\f0a1";
  color: #f2930d;
}
.structItem.structItem--note {
  color: #eae3d1;
  background: rgba(0, 0, 0, 0.5);
  color: #c4ebd0;
}
.structItem.structItem--note .structItem-cell {
  padding-top: 5px;
  padding-bottom: 5px;
  font-size: 12px;
  text-align: center;
}
@media (max-width: 900px) {
  .structItem-cell {
    vertical-align: top;
  }
  .structItem-cell.structItem-cell--meta {
    width: 115px;
    font-size: 12px;
  }
  .structItem-cell.structItem-cell--latest {
    width: 140px;
    font-size: 12px;
  }
}
@media (max-width: 650px) {
  .structItem-cell.structItem-cell--main {
    display: block;
    padding-bottom: .2em;
    padding-left: 0;
  }
  .structItem-cell.structItem-cell--meta {
    display: block;
    width: auto;
    float: left;
    padding-top: 0;
    padding-left: 0;
    padding-right: 0;
    color: #b5bdb2;
  }
  .structItem-cell.structItem-cell--meta .structItem-minor {
    display: none;
  }
  .structItem-cell.structItem-cell--meta .pairs > dt,
  .structItem-cell.structItem-cell--meta .pairs > dd {
    display: inline;
    float: none;
    margin: 0;
  }
  .structItem-cell.structItem-cell--latest {
    display: block;
    width: auto;
    float: left;
    padding-top: 0;
    padding-left: 0;
  }
  .structItem-cell.structItem-cell--latest:before {
    content: "\00A0\00B7\20";
    color: #b5bdb2;
  }
  .structItem-cell.structItem-cell--latest a {
    color: #b5bdb2;
  }
  .structItem-cell.structItem-cell--latest .structItem-minor {
    display: none;
  }
  .structItem-cell.structItem-cell--iconEnd {
    display: none;
  }
  .structItem-pageJump,
  .structItem-extraInfoMinor {
    display: none;
  }
  .is-unread .structItem-latestDate {
    font-weight: 400;
  }
}
@media (max-width: 480px) {
  .structItem-parts .structItem-startDate {
    display: none;
  }
}

/********* public:extra.less ********/
/* Crops the sub navigation bar underneath the main navigation bar to be the slightly smaller than the main navigation bar */
.p-sectionLinks {
  background: none;
  border: none !important;
}
@media (max-width: 1482px) {
  .p-sectionLinks {
    background: none;
    border: none !important;
    margin-left: auto;
    margin-right: auto;
    min-width: 95%;
  }
}
/* Creates the background for the sub navigation bar */
.p-sectionLinks-inner {
  max-width: 1450px !important;
  border-top-style: none;
  border-bottom-style: solid;
  border-right-style: solid;
  border-left-style: solid;
  border-right-color: rgba(13, 4, 2, 0.5);
  border-bottom-color: rgba(13, 4, 2, 0.5);
  border-left-color: rgba(255, 255, 255, 0.1);
  border-bottom-right-radius: 8px;
  border-bottom-left-radius: 8px;
  border-width: 1px;
  padding-right: none;
  background-image: url('styles/overworld/relogic/content/header_sub_bar.jpg');
  background-size: 100% 100%;
}
/* Dictates the positioning and style of the Grass Top Bar inserted HTML at PAGE_CONTAINER*/
.grassHeader {
  position: relative;
  top: -6px;
  z-index: 50;
}
.grassBar {
  background-image: url('styles/overworld/relogic/grass_top_border.png');
  background-position: 1px 0px;
  background-repeat: repeat-x;
  height: 13px;
  padding: 0px 1px 0px 1px;
}
.grassBar::before {
  content: '';
  display: block;
  background-image: url('styles/overworld/relogic/grass_top.png');
  background-repeat: repeat-x;
  height: 13px;
  width: 100%;
}
/* Overwrites inherency for Form Menu Footers */
form.menu-footer {
  background: url('styles/overworld/relogic/content/background.jpg') !important;
  background-position: top right !important;
}
/* Overwrites inherency for Menu Headers */
h4.menu-tabHeader.tabs {
  background: url('styles/overworld/relogic/content/background.jpg') !important;
  background-position: top right !important;
}
/* Edits the color of the user title in the pop-up menu */
span.userTitle {
  color: #c4ebd0;
}
/* Changes the divider colors in pop-up menus */
.menu-separator {
  border-top: 1px solid #0f0f0f;
  border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}
/* Changes the divider border in bookmarks menu */
.menu-row + .menu-scroller {
  border-top: 1px solid #0f0f0f;
}
/* changes the divider border in conversations menu */
.menu-row.menu-row--separated + .menu-row {
  border-top: 1px solid #000;
}
/* changes the board title to a block panel */
div.p-body-header {
  background-image: url('styles/overworld/relogic/content/background.jpg');
  background-position: top right;
  padding: 20px 20px 20px 20px;
  background-size: 100% 100%;
  margin-top: 10px;
  margin-bottom: 10px;
  border-width: 2px;
  border-top-style: solid;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-style: solid;
  border-right-color: rgba(13, 4, 2, 0.2);
  border-bottom-style: solid;
  border-bottom-color: rgba(13, 4, 2, 0.2);
  border-left-style: solid;
  border-left-color: rgba(255, 255, 255, 0.1);
  border-radius: 8px;
  box-shadow: #0A0A0A 0px 0px 15px;
  background-origin: border-box;
  background-clip: border-box;
}
div.p-title {
  background-image: url('styles/overworld/relogic/header/Top01.jpg');
  background-repeat: repeat;
  padding-top: 7px;
  padding-bottom: 3px;
  padding-left: 7px;
  padding-right: 7px;
  border-width: 1px;
  border-style: solid;
  border-top-color: rgba(13, 4, 2, 0.5);
  border-right-color: rgba(255, 255, 255, 0.1);
  border-bottom-color: rgba(255, 255, 255, 0.1);
  border-left-color: rgba(13, 4, 2, 0.5);
  border-radius: 5px;
  background-origin: border-box;
  background-size: auto auto;
  overflow: hidden;
  margin: 0px;
}
/* Changes font of title to be less ridiculous */
h1.p-title-value {
  font-family: 'Trebuchet MS', Helvetica, Arial, sans-serif;
}
/* adds tiny white border below each black border separator in node list */
div.node-body {
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}
/* adds non-transparent background to theme chooser */
div.overlay-title {
  background: url('styles/overworld/relogic/content/background.jpg');
  margin-bottom: 5px;
}
/* Removes ugle content faser */
.contentRow-fader {
  background: none !important;
}
/* adds old separators between posts */
.block-body {
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}
.block-row {
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  border-bottom: 1px solid #141414;
}
/*changes colors of message user on the left */
.message-cell.message-cell--user {
  background-color: rgba(20, 20, 20, 0.2);
}
/*makes arrow transparent in message user*/
.message-userArrow::after {
  border-right-color: #5b4439 !important;
}
/* Hides arrow in mobile screens because for whatever reason the mobile arrow won't become transparent at all ever */
@media only screen and (max-width: 900px) {
  .message-userArrow {
    display: none;
  }
}
/*changes reaction bar color*/
.message .reactionsBar {
  margin-top: 10px;
  padding: 6px;
  background-color: rgba(20, 20, 20, 0.5);
}
/* removes background on reaction image */
.reactionSummary > li {
  background: none !important;
}
/* changes page nav background */
.pageNav-page {
  box-shadow: none;
  background-image: url('styles/overworld/relogic/content/background.jpg');
}
.pageNav-page:hover {
  background: #2d221c;
}
.pageNav-jump.pageNav-jump--prev {
  box-shadow: none;
  background-image: url('styles/overworld/relogic/content/background.jpg');
}
.pageNav-jump.pageNav-jump--prev:hover {
  background: #2d221c;
}
.pageNav-jump.pageNav-jump--next {
  box-shadow: none;
  background-image: url('styles/overworld/relogic/content/background.jpg');
}
.pageNav-jump.pageNav-jump--next:hover {
  background: #2d221c;
}
.pageNav-page:not(:last-child) {
  border-right: 1px solid rgba(255, 255, 255, 0.1);
}
@media only screen and (max-width: 650px) {
  .pageNavSimple-el.pageNavSimple-el--next {
    background: url('styles/overworld/relogic/content/background.jpg') !important;
  }
  .pageNavSimple-el.pageNavSimple-el--next:hover {
    background: #2d221c !important;
  }
  .pageNavSimple-el.pageNavSimple-el--last {
    background: url('styles/overworld/relogic/content/background.jpg') !important;
  }
  .pageNavSimple-el.pageNavSimple-el--last:hover {
    background: #2d221c !important;
  }
  .pageNavSimple-el.pageNavSimple-el--prev {
    background: url('styles/overworld/relogic/content/background.jpg') !important;
  }
  .pageNavSimple-el.pageNavSimple-el--prev:hover {
    background: #2d221c !important;
  }
  .pageNavSimple-el.pageNavSimple-el--first {
    background: url('styles/overworld/relogic/content/background.jpg') !important;
  }
  .pageNavSimple-el.pageNavSimple-el--first:hover {
    background: #2d221c !important;
  }
}
/*changes color of some weird unlisted extra button */
.button.button--link,
a.button.button--link {
  background: url('styles/overworld/relogic/content/button_background.jpg');
  background-repeat: repeat;
  background-position: top;
  background-size: auto 105%;
  box-shadow: rgba(10, 10, 10, 0.5) 2px 2px 3px;
  border-top: 1px solid #976b45 !important;
  border-right: 1px solid #562f21 !important;
  border-bottom: 1px solid #562f21 !important;
  border-left: 1px solid #976b45 !important;
}
a.button.button--link {
  padding-bottom: 7px;
}
/* Modfies share bar */
.shareButtons.shareButtons--iconic {
  padding-left: 5px;
  background: url('styles/overworld/relogic/content/background.jpg');
  background-size: 100% auto;
  border-radius: 3px;
  border-width: 1px;
  border-style: solid;
  border-top-color: rgba(13, 4, 2, 0.5);
  border-right-color: rgba(255, 255, 255, 0.1);
  border-bottom-color: rgba(255, 255, 255, 0.1);
  border-left-color: rgba(13, 4, 2, 0.5);
}
.p-breadcrumbs {
  background-image: url('styles/overworld/relogic/content/dirt.png');
  background-repeat: repeat;
  background-size: auto 100%;
  border-width: 1px;
  border-style: solid;
  border-top-color: #cdab7b;
  border-right-color: #562f21;
  border-bottom-color: #562f21;
  border-left-color: #cdab7b;
  border-radius: 5px;
  padding-left: 10px;
  padding-right: 3px;
  padding-top: 3px;
  padding-bottom: 5px;
  box-shadow: #0A0A0A 0px 0px 10px;
  margin-bottom: 10px;
}
/* adds border to avatars */
.avatar img:not(.cropImage) {
  border: 1px solid black;
}
/* changes tag color */
.tagItem {
  background: #a58350;
  color: #eae3d1;
}
.tagItem:hover {
  background: #2d221c;
}
.p-breadcrumbs.p-breadcrumbs--bottom {
  display: none;
}
/* changes tag color of bookmark labels */
.select2 .select2-selection ul > li.select2-selection__choice {
  background: #a58350 !important;
  color: #eae3d1 !important;
}
.select2 .select2-selection ul > li.select2-selection__choice:hover {
  background: #2d221c !important;
}
/* changes button hover color for the buttons above threads*/
button.button--link.menuTrigger.button:hover {
  color: white;
  background: url('styles/overworld/relogic/content/button_background.jpg');
  background-repeat: repeat;
  background-position: top;
  background-size: auto 100%;
  box-shadow: rgba(10, 10, 10, 0.5) 2px 4px 3px;
  border-top: 1px solid #976b45 !important;
  border-right: 1px solid #562f21 !important;
  border-bottom: 1px solid #562f21 !important;
  border-left: 1px solid #976b45 !important;
  -moz-transform: translate(0px, -2px);
}
a.button--link.button:hover {
  color: white;
  background: url('styles/overworld/relogic/content/button_background.jpg');
  background-repeat: repeat;
  background-position: top;
  background-size: auto 100%;
  box-shadow: rgba(10, 10, 10, 0.5) 2px 4px 3px;
  border-top: 1px solid #976b45 !important;
  border-right: 1px solid #562f21 !important;
  border-bottom: 1px solid #562f21 !important;
  border-left: 1px solid #976b45 !important;
  -moz-transform: translate(0px, -2px);
}
.button--link.js-inlineModTrigger.button:hover {
  color: white;
  background: url('styles/overworld/relogic/content/button_background.jpg');
  background-repeat: repeat;
  background-position: top;
  background-size: auto 100%;
  box-shadow: rgba(10, 10, 10, 0.5) 2px 4px 3px;
  border-top: 1px solid #976b45 !important;
  border-right: 1px solid #562f21 !important;
  border-bottom: 1px solid #562f21 !important;
  border-left: 1px solid #976b45 !important;
  -moz-transform: translate(0px, -2px);
}
button.button--link.menuTrigger.button:focus {
  background: url('styles/overworld/relogic/content/button_background.jpg');
  background-repeat: repeat;
  background-position: top;
  background-size: auto 100%;
  box-shadow: rgba(10, 10, 10, 0.5) 2px 4px 3px;
  border-top: 1px solid #976b45 !important;
  border-right: 1px solid #562f21 !important;
  border-bottom: 1px solid #562f21 !important;
  border-left: 1px solid #976b45 !important;
}
a.button--link.button:focus {
  background: url('styles/overworld/relogic/content/button_background.jpg');
  background-repeat: repeat;
  background-position: top;
  background-size: auto 100%;
  box-shadow: rgba(10, 10, 10, 0.5) 2px 4px 3px;
  border-top: 1px solid #976b45 !important;
  border-right: 1px solid #562f21 !important;
  border-bottom: 1px solid #562f21 !important;
  border-left: 1px solid #976b45 !important;
}
.button--link.js-inlineModTrigger.button:focus {
  background: url('styles/overworld/relogic/content/button_background.jpg');
  background-repeat: repeat;
  background-position: top;
  background-size: auto 100%;
  box-shadow: rgba(10, 10, 10, 0.5) 2px 4px 3px;
  border-top: 1px solid #976b45 !important;
  border-right: 1px solid #562f21 !important;
  border-bottom: 1px solid #562f21 !important;
  border-left: 1px solid #976b45 !important;
}
/*removes overlay of filter bar which messes with block header background*/
.block-filterBar {
  background: url('styles/overworld/relogic/content/background.jpg');
  background-size: 100% auto;
  color: #eae3d1;
}
/*fixes background on profile post input*/
.message-responseRow {
  background: url('styles/overworld/relogic/content/background.jpg') !important;
}
/*fixes filter bar tag things*/
.block-filterBar .filterBar-filterToggle {
  background: #a58350;
}
.block-filterBar .filterBar-filterToggle:hover {
  background: #2d221c;
}
/*fixes the see more button background in member page*/
.memberOverviewBlock-seeMore {
  background: #a58350;
}
/*.memberOverviewBlock-seeMore:hover
{
    background: #2d221c;
}*/
/*fixes like count thing in account view*/
.block-minorTabHeader {
  background: none;
}
/*fixes labels for forms*/
.formRow > dt {
  background: none;
}
/*fixes filter button in mod page*/
.filterBar-menuTrigger {
  background: url('styles/overworld/relogic/content/button_background.jpg');
  background-repeat: repeat;
  background-position: top;
  background-size: auto 105%;
  box-shadow: rgba(10, 10, 10, 0.5) 2px 2px 3px;
  border-top: 1px solid #976b45 !important;
  border-right: 1px solid #562f21 !important;
  border-bottom: 1px solid #562f21 !important;
  border-left: 1px solid #976b45 !important;
  color: #fff4e5;
}
.block-filterBar .filterBar-menuTrigger:hover {
  background: url('styles/overworld/relogic/content/button_background.jpg');
  background-repeat: repeat;
  background-position: top;
  background-size: auto 105%;
  box-shadow: rgba(10, 10, 10, 0.5) 2px 2px 3px;
  border-top: 1px solid #976b45 !important;
  border-right: 1px solid #562f21 !important;
  border-bottom: 1px solid #562f21 !important;
  border-left: 1px solid #976b45 !important;
  color: #ffffff;
  -moz-transform: translate(0px, -2px);
}
/*removes gray overlay in mod page*/
.message-cell.message-cell--extra {
  background: none;
}
/* makes it so radio buttons don't inherit pallette 3*/
.inputChoices > .inputChoices-choice .iconic > input + i {
  color: #a58350;
}
.inputChoices > .inputChoices-choice .iconic > input + i:hover {
  color: #cdab78;
}
.formRow .iconic > i {
  color: #a58350;
}
.formRow .iconic > i:hover {
  color: #cdab78;
}
/*first layer of replicating older user-message-info blocks*/
.message-userDetails {
  background: rgba(20, 20, 20, 0.3);
  border-left: 1px solid black;
  border-right: 1px solid black;
  border-bottom: 1px solid black;
}
@media only screen and (max-width: 650px) {
  .message-userDetails {
    background: rgba(20, 20, 20, 0.3);
    border-left: 1px solid black;
    border-right: 1px solid black;
    border-bottom: 1px solid black;
    border-top: 1px solid black;
    padding-bottom: 3px;
    padding-right: 3px;
  }
}
/* second layer of replicating old user-message-info blocks this is the colored borders */
.avatarHolder {
  background: url('styles/overworld/relogic/content/avatar_holder.png');
  background-size: 100% 100%;
  padding-top: 10px;
  padding-bottom: 5px;
  background-position: center center;
  border-left: 1px solid black;
  border-right: 1px solid black;
  border-top: 1px solid black;
  border-radius: 5px 5px 0px 0px;
}
@media only screen and (max-width: 650px) {
  .avatarHolderAdmin {
    padding-left: 8px;
    padding-right: 8px;
    background: none !important;
    border: none !important;
  }
}
@media only screen and (max-width: 650px) {
  .avatarHolderModerator {
    padding-left: 8px;
    padding-right: 8px;
    border: none !important;
  }
}
@media only screen and (max-width: 650px) {
  .avatarHolderReg {
    border: none !important;
    padding-left: 8px;
    padding-right: 8px;
  }
}
.avatarHolderAdmin {
  background: url('styles/overworld/relogic/content/avatar_holder_admin.png');
  background-position: center center;
  background-size: 100% 100%;
}
.avatarHolderModerator {
  background: url('styles/overworld/relogic/content/avatar_holder_moderator.png');
  background-position: center center;
  background-size: 100% 100%;
}
.avatarHolderReg {
  background: url('styles/overworld/relogic/content/avatar_holder.png');
  background-size: 100% 100%;
  padding-top: 10px;
  padding-bottom: 5px;
  background-position: center center;
  position: static;
}
/*gets rid of gross white gradient in content preview*/
.tooltip--preview .tooltip-content-inner .tooltip-content-cover {
  background: none;
}
/*removes grey background from page jump preview*/
.structItem-pageJump a {
  background: none;
}
.structItem-pageJump a:hover {
  color: black;
}
/*creates the thread prefixes to be used from the ACP*/
.label {
  color: white;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  border: 1px solid black;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(0, 0, 0, 0.3);
  border-bottom-color: rgba(0, 0, 0, 0.3);
  border-left-color: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  display: inline-block;
  background-size: auto 1700% !important;
  background-origin: border-box;
  padding-left: 25px;
}
.menuPrefix {
  padding-left: 35px !important;
}
.labelTCFred {
  color: white;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  font-size: smaller;
  font-weight: normal;
  border: 1px solid black;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(0, 0, 0, 0.3);
  border-bottom-color: rgba(0, 0, 0, 0.3);
  border-left-color: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  display: inline-block;
  background-size: auto 1700% !important;
  background-origin: border-box;
  padding-left: 25px;
}
.labelTCFblue {
  color: white;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  font-size: smaller;
  font-weight: normal;
  border: 1px solid black;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(0, 0, 0, 0.3);
  border-bottom-color: rgba(0, 0, 0, 0.3);
  border-left-color: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  display: inline-block;
  background-size: auto 1700% !important;
  background-origin: border-box;
  padding-left: 30px;
  padding-right: 5px;
  background-position: 0px -100% !important;
}
.labelTCFyellow {
  color: white;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  font-size: smaller;
  font-weight: normal;
  border: 1px solid black;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(0, 0, 0, 0.3);
  border-bottom-color: rgba(0, 0, 0, 0.3);
  border-left-color: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  display: inline-block;
  background-size: auto 1700% !important;
  background-origin: border-box;
  padding-left: 30px;
  padding-right: 5px;
  background-position: 0px -200% !important;
}
.labelTCFgray {
  color: white;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  font-size: smaller;
  font-weight: normal;
  border: 1px solid black;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(0, 0, 0, 0.3);
  border-bottom-color: rgba(0, 0, 0, 0.3);
  border-left-color: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  display: inline-block;
  background-size: auto 1700% !important;
  background-origin: border-box;
  padding-left: 30px;
  padding-right: 5px;
  background-position: 0px -300% !important;
}
.labelTCFgreen {
  color: white;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  font-size: smaller;
  font-weight: normal;
  border: 1px solid black;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(0, 0, 0, 0.3);
  border-bottom-color: rgba(0, 0, 0, 0.3);
  border-left-color: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  display: inline-block;
  background-size: auto 1700% !important;
  background-origin: border-box;
  padding-left: 30px;
  padding-right: 5px;
  background-position: 0px -400% !important;
}
.labelTCFsteel {
  color: white;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  font-size: smaller;
  font-weight: normal;
  border: 1px solid black;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(0, 0, 0, 0.3);
  border-bottom-color: rgba(0, 0, 0, 0.3);
  border-left-color: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  display: inline-block;
  background-size: auto 1700% !important;
  background-origin: border-box;
  padding-left: 30px;
  padding-right: 5px;
  background-position: 0px -500% !important;
}
.labelTCFbrown {
  color: white;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  font-size: smaller;
  font-weight: normal;
  border: 1px solid black;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(0, 0, 0, 0.3);
  border-bottom-color: rgba(0, 0, 0, 0.3);
  border-left-color: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  display: inline-block;
  background-size: auto 1700% !important;
  background-origin: border-box;
  padding-left: 30px;
  padding-right: 5px;
  background-position: 0px -600% !important;
}
.labelTCFcyan {
  color: white;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  font-size: smaller;
  font-weight: normal;
  border: 1px solid black;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(0, 0, 0, 0.3);
  border-bottom-color: rgba(0, 0, 0, 0.3);
  border-left-color: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  display: inline-block;
  background-size: auto 1700% !important;
  background-origin: border-box;
  padding-left: 30px;
  padding-right: 5px;
  background-position: 0px -700% !important;
}
.labelTCFpurple {
  color: white;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  font-size: smaller;
  font-weight: normal;
  border: 1px solid black;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(0, 0, 0, 0.3);
  border-bottom-color: rgba(0, 0, 0, 0.3);
  border-left-color: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  display: inline-block;
  background-size: auto 1700% !important;
  background-origin: border-box;
  padding-left: 30px;
  padding-right: 5px;
  background-position: 0px -800% !important;
}
.labelTCFpink {
  color: white;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  font-size: smaller;
  font-weight: normal;
  border: 1px solid black;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(0, 0, 0, 0.3);
  border-bottom-color: rgba(0, 0, 0, 0.3);
  border-left-color: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  display: inline-block;
  background-size: auto 1700% !important;
  background-origin: border-box;
  padding-left: 30px;
  padding-right: 5px;
  background-position: 0px -900% !important;
}
.labelTCFimportant {
  color: white;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  font-size: smaller;
  font-weight: normal;
  border: 1px solid black;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(0, 0, 0, 0.3);
  border-bottom-color: rgba(0, 0, 0, 0.3);
  border-left-color: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  display: inline-block;
  background-size: auto 1700% !important;
  background-origin: border-box;
  padding-left: 30px;
  padding-right: 5px;
  background-position: 0px -1000% !important;
}
.labelTCFplaystation {
  color: white;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  font-size: smaller;
  font-weight: normal;
  border: 1px solid black;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(0, 0, 0, 0.3);
  border-bottom-color: rgba(0, 0, 0, 0.3);
  border-left-color: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  display: inline-block;
  background-size: auto 1700% !important;
  background-origin: border-box;
  padding-left: 30px;
  padding-right: 5px;
  background-position: 0px -1100% !important;
}
.labelTCFofficial {
  color: white;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  font-size: smaller;
  font-weight: normal;
  border: 1px solid black;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(0, 0, 0, 0.3);
  border-bottom-color: rgba(0, 0, 0, 0.3);
  border-left-color: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  display: inline-block;
  background-size: auto 1700% !important;
  background-origin: border-box;
  padding-left: 30px;
  padding-right: 5px;
  background-position: 0px -1200% !important;
}
.labelTCFconsole {
  color: white;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  font-size: smaller;
  font-weight: normal;
  border: 1px solid black;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(0, 0, 0, 0.3);
  border-bottom-color: rgba(0, 0, 0, 0.3);
  border-left-color: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  display: inline-block;
  background-size: auto 1700% !important;
  background-origin: border-box;
  padding-left: 30px;
  padding-right: 5px;
  background-position: 0px -1300% !important;
}
.labelTCFxbox {
  color: white;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  font-size: smaller;
  font-weight: normal;
  border: 1px solid black;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(0, 0, 0, 0.3);
  border-bottom-color: rgba(0, 0, 0, 0.3);
  border-left-color: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  display: inline-block;
  background-size: auto 1700% !important;
  background-origin: border-box;
  padding-left: 30px;
  padding-right: 5px;
  background-position: 0px -1400% !important;
}
.labelTCFmobile {
  color: white;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  font-size: smaller;
  font-weight: normal;
  border: 1px solid black;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(0, 0, 0, 0.3);
  border-bottom-color: rgba(0, 0, 0, 0.3);
  border-left-color: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  display: inline-block;
  background-size: auto 1700% !important;
  background-origin: border-box;
  padding-left: 30px;
  padding-right: 5px;
  background-position: 0px -1500% !important;
}
.labelTCFpc {
  color: white;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  font-size: smaller;
  font-weight: normal;
  border: 1px solid black;
  border-top-color: rgba(255, 255, 255, 0.1);
  border-right-color: rgba(0, 0, 0, 0.3);
  border-bottom-color: rgba(0, 0, 0, 0.3);
  border-left-color: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  display: inline-block;
  background-size: auto 1700% !important;
  background-origin: border-box;
  padding-left: 30px;
  padding-right: 5px;
  background-position: 0px -1600% !important;
}
/* fixes position of search bar */
.p-navgroup.p-discovery {
  margin-top: 2px;
}
/* fixes in line moderation highlight */
.structItem.is-mod-selected {
  background: rgba(20, 20, 20, 0.5);
}
.message.is-mod-selected {
  background: #342924 !important;
}
.message.is-mod-selected .message-cell--user,
.block--messages .message.is-mod-selected .message-cell--user {
  background: inherit;
}
/* adds divider in various pages, I made some if statements in page_container before finding I can mass apply it with this */
.structItem {
  border-bottom: 1px solid #0f0f0f;
  border-top: solid 1px rgba(255, 255, 255, 0.1);
}
/* fixes background on date block for our front page add-on */
.porta-article-item .porta-article-date .porta-date-block {
  background: url('styles/overworld/relogic/content/background.jpg');
}
/* fixes background on avatar holders in our front page, because it's a preview it does not support 
   our staff conditional statement so a regular avatar holder is used */
.porta-block-icon {
  background: url('styles/overworld/relogic/content/avatar_holder.png');
  background-position: center;
  background-size: 100% 100%;
  border-radius: 5px;
}
/* fixes separators in member pages */
.block-row.block-row--separated + .block-row {
  border-bottom: 1px solid #0f0f0f;
  border-top: solid 1px rgba(255, 255, 255, 0.1);
}
/* fixes duplicating background in overlays */
.overlay {
  background: none;
}
/* fixes text editor menu */
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper {
  background: url('styles/overworld/relogic/content/background.jpg');
  background-position: right;
}
/* fixes emjoi menu in text editor */
.menu--emoji .menu-header {
  background: url('styles/overworld/relogic/content/background.jpg');
}
/* the goal here is to change the ConVess labels WITHOUT changing the default labels 
   as such the label colors may not match with the code written here. The goal is to 
   try not to modify the add-ons templates but accomplish the same goals using extra.less*/
.label.label--hidden {
  padding-left: 20px;
  padding-right: 5px;
  background-position: 0px -1000% !important;
  border: 1px solid black;
}
.menuLabel.label.label--hidden {
  padding-left: 35px;
}
.label.label--hidden:hover {
  border: 1px solid orange;
  color: white;
  background: linear-gradient(rgba(20, 20, 20, 0.3), rgba(20, 20, 20, 0.3)), url('styles/overworld/relogic/prefix/generic.png');
}
.label.label--primary {
  background-position: 0px 0px !important;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  color: white;
  border: 1px solid black;
}
.menuLabel.label.label--primary {
  padding-left: 35px;
}
.menuLabel.label.label--primary:hover {
  border: 1px solid orange;
  background: linear-gradient(rgba(20, 20, 20, 0.3), rgba(20, 20, 20, 0.3)), url('styles/overworld/relogic/prefix/generic.png');
}
.label.label--accent {
  background-position: 0px -100% !important;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  color: white;
  border: 1px solid black;
}
.menuLabel.label.label--accent {
  padding-left: 35px;
}
.menuLabel.label.label--accent:hover {
  border: 1px solid orange;
  background: linear-gradient(rgba(20, 20, 20, 0.3), rgba(20, 20, 20, 0.3)), url('styles/overworld/relogic/prefix/generic.png');
}
.label.label--red {
  background-position: 0px -200% !important;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  color: white;
  border: 1px solid black;
}
.menuLabel.label.label--red {
  padding-left: 35px;
}
.menuLabel.label.label--red:hover {
  border: 1px solid orange;
  background: linear-gradient(rgba(20, 20, 20, 0.3), rgba(20, 20, 20, 0.3)), url('styles/overworld/relogic/prefix/generic.png');
}
.label.label--green {
  background-position: 0px -300% !important;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  color: white;
  border: 1px solid black;
}
.menuLabel.label.label--green {
  padding-left: 35px;
}
.menuLabel.label.label--green:hover {
  border: 1px solid orange;
  background: linear-gradient(rgba(20, 20, 20, 0.3), rgba(20, 20, 20, 0.3)), url('styles/overworld/relogic/prefix/generic.png');
}
.label.label--olive {
  background-position: 0px -400% !important;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  color: white;
  border: 1px solid black;
}
.menuLabel.label.label--olive {
  padding-left: 35px;
}
.menuLabel.label.label--olive:hover {
  border: 1px solid orange;
  background: linear-gradient(rgba(20, 20, 20, 0.3), rgba(20, 20, 20, 0.3)), url('styles/overworld/relogic/prefix/generic.png');
}
.label.label--lightGreen {
  background-position: 0px -500% !important;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  color: white;
  border: 1px solid black;
}
.menuLabel.label.label--lightGreen {
  padding-left: 35px;
}
.menuLabel.label.label--lightGreen:hover {
  border: 1px solid orange;
  background: linear-gradient(rgba(20, 20, 20, 0.3), rgba(20, 20, 20, 0.3)), url('styles/overworld/relogic/prefix/generic.png');
}
.label.label--blue {
  background-position: 0px -600% !important;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  color: white;
  border: 1px solid black;
}
.menuLabel.label.label--blue {
  padding-left: 35px;
}
.menuLabel.label.label--blue:hover {
  border: 1px solid orange;
  background: linear-gradient(rgba(20, 20, 20, 0.3), rgba(20, 20, 20, 0.3)), url('styles/overworld/relogic/prefix/generic.png');
}
.label.label--red {
  background-position: 0px -700% !important;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  color: white;
  border: 1px solid black;
}
.menuLabel.label.label--red {
  padding-left: 35px;
}
.menuLabel.label.label--red:hover {
  border: 1px solid orange;
  background: linear-gradient(rgba(20, 20, 20, 0.3), rgba(20, 20, 20, 0.3)), url('styles/overworld/relogic/prefix/generic.png');
}
.label.label--royalBlue {
  background-position: 0px -800% !important;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  color: white;
  border: 1px solid black;
}
.menuLabel.label.label--royalBlue {
  padding-left: 35px;
}
.menuLabel.label.label--royalBlue:hover {
  border: 1px solid orange;
  background: linear-gradient(rgba(20, 20, 20, 0.3), rgba(20, 20, 20, 0.3)), url('styles/overworld/relogic/prefix/generic.png');
}
.label.label--skyBlue {
  background-position: 0px -900% !important;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  color: white;
  border: 1px solid black;
}
.menuLabel.label.label--skyBlue {
  padding-left: 35px;
}
.menuLabel.label.label--skyBlue:hover {
  border: 1px solid orange;
  background: linear-gradient(rgba(20, 20, 20, 0.3), rgba(20, 20, 20, 0.3)), url('styles/overworld/relogic/prefix/generic.png');
}
.label.label--gray {
  background-position: 0px -1500% !important;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  color: white;
  border: 1px solid black;
}
.menuLabel.label.label--gray {
  padding-left: 35px;
}
.menuLabel.label.label--gray:hover {
  border: 1px solid orange;
  background: linear-gradient(rgba(20, 20, 20, 0.3), rgba(20, 20, 20, 0.3)), url('styles/overworld/relogic/prefix/generic.png');
}
.label.label--silver {
  background-position: 0px -1600% !important;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  color: white;
  border: 1px solid black;
}
.menuLabel.label.label--silver {
  padding-left: 35px;
}
.menuLabel.label.label--silver:hover {
  border: 1px solid orange;
  background: linear-gradient(rgba(20, 20, 20, 0.3), rgba(20, 20, 20, 0.3)), url('styles/overworld/relogic/prefix/generic.png');
}
.label.label--orange {
  background-position: 0px -1200% !important;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  color: white;
  border: 1px solid black;
}
.menuLabel.label.label--orange {
  padding-left: 35px;
}
.menuLabel.label.label--orange:hover {
  border: 1px solid orange;
  background: linear-gradient(rgba(20, 20, 20, 0.3), rgba(20, 20, 20, 0.3)), url('styles/overworld/relogic/prefix/generic.png');
}
.label.label--yellow {
  background-position: 0px -1300% !important;
  background-image: url('styles/overworld/relogic/prefix/generic.png');
  color: white;
  border: 1px solid black;
}
.menuLabel.label.label--yellow {
  padding-left: 35px;
}
.menuLabel.label.label--yellow:hover {
  border: 1px solid orange;
  background: linear-gradient(rgba(20, 20, 20, 0.3), rgba(20, 20, 20, 0.3)), url('styles/overworld/relogic/prefix/generic.png');
}
/* sorta fixes search box for convess*/
.input.js-filterInput {
  background-position: top right !important;
  background-origin: border-box !important;
  background-image: url('styles/overworld/relogic/content/background.jpg') !important;
  border-width: 1px;
  border-style: solid;
  border-top-color: #0d0402;
  border-right-color: rgba(255, 255, 255, 0.1);
  border-left-color: rgba(13, 4, 2, 0.5);
  border-bottom-color: rgba(255, 255, 255, 0.1);
}
/* fixes conversation recipient list */
.select2 .select2-selection ul > li.select2-selection__choice {
  background: url('styles/overworld/relogic/content/background.jpg');
  background-position: right;
}
.select2 .select2-selection ul .select2-search .select2-search__field {
  color: #eae3d1;
}
/* fixes approval queue highlight color */
.block-container.approvalQueue-item.js-approvalQueue-item.approvalQueue-item--approve {
  background: rgba(20, 20, 20, 0.5);
  border: solid 1px green;
}
.approvalQueue .block-container.approvalQueue-item--approve .message,
.approvalQueue .block-container.approvalQueue-item--approve .message-cell--user,
.approvalQueue .block-container.approvalQueue-item--approve .message-cell--extra {
  background: url('styles/overworld/relogic/content/background.jpg');
}
/* styles the notice system */
.notice.notice--primary {
  background: url('styles/overworld/relogic/content/background.jpg');
  background-size: 100% auto;
}
.u-bottomFixer > * {
  background: #62483b;
}
.p-footer-copyright {
  display: none;
}
/* adds background to new members add-on */
.newmembers-container {
  background: url('styles/overworld/relogic/content/background.jpg');
  background-size: 100% auto;
}
/* adds background to user agent add-on */
.useragent-intro-container {
  background: url('styles/overworld/relogic/content/background.jpg');
  padding-left: 15px;
  max-width: 325px;
  margin-top: 10px;
  margin-bottom: 10px;
  border: solid 1px black;
}
/* fixes sign in buttons */
.p-navgroup.p-account.p-navgroup--guest {
  padding-bottom: 2px;
}
/* using this when I have to add backgrounds through a xenforo template
   current affected templates: login                                   */
.AddTexturedBackground {
  background: url('styles/overworld/relogic/content/background.jpg');
  background-size: 100% auto;
  padding-bottom: 10px;
}
/* fixes arrow in member card preview */
.tooltip--member.tooltip--top .tooltip-arrow::after {
  border-top-color: #543f35;
}
/* forces instagram to behave */
#instagram-embed-0 {
  min-width: 200px !important;
}
/* fixes background for emote help section*/
.dataList-cell.dataList-cell--alt,
.dataList-cell.dataList-cell--action {
  background: inherit;
}
.smilieText {
  background: inherit;
  border-color: #141414;
}
.smilieText:hover {
  background: inherit;
}
/* fixes bb code help */
.bbCodeDemoBlock-item > dd {
  background: inherit;
}
.bbCodeInline {
  background: inherit;
}
.bbTable > table > tbody > tr > th {
  background: #364645;
}
.bbTable > table > tbody > tr > td {
  background: inherit;
}
.fr-view > table > tbody > tr > td {
  background: inherit;
}
/* fixes popup buttons */
.fr-popup .fr-buttons {
  background: #322823;
}
/* hides video button*/
#insertVideo-1 {
  display: none;
}
/* adds buton hover property */
.button:hover {
  color: white;
  box-shadow: rgba(10, 10, 10, 0.5) 2px 4px 3px;
  padding-bottom: 5px;
  -moz-transform: translate(0px, -2px);
}
/* fixes table insert contrast */
.fr-popup .fr-table-size .fr-select-table-size > span > span {
  border: 1px solid black;
}
.fr-popup {
  color: black;
}
.fr-popup .fr-table-size .fr-select-table-size > span.hover > span {
  background: rgba(196, 235, 208, 0.3);
  border: solid 1px #364645;
}
/* fixes multiquote stuff */
.message-gradient {
  background: inherit;
}
/* fixing the buttons that do not behave correctly*/
.button.button--cta,
a.button.button--cta {
  color: #edfdef;
}
.button.button--cta,
a.button.button--cta:hover {
  color: #ffffff;
}
.button--link.button--multiQuote.button.button--icon.button--icon--quote:hover {
  background: url('styles/overworld/relogic/content/button_background.jpg');
  background-repeat: repeat;
  background-position: top;
  background-size: auto 105%;
  box-shadow: rgba(10, 10, 10, 0.5) 2px 2px 3px;
  border-top: 1px solid #976b45 !important;
  border-right: 1px solid #562f21 !important;
  border-bottom: 1px solid #562f21 !important;
  border-left: 1px solid #976b45 !important;
  color: #ffffff;
}
.button.button--scroll,
a.button.button--scroll {
  background: url('styles/overworld/relogic/content/button_background.jpg');
  background-repeat: repeat;
  background-position: top;
  background-size: auto 105%;
  box-shadow: rgba(10, 10, 10, 0.5) 2px 2px 3px;
  border-top: 1px solid #976b45 !important;
  border-right: 1px solid #562f21 !important;
  border-bottom: 1px solid #562f21 !important;
  border-left: 1px solid #976b45 !important;
}
.button.button--scroll,
a.button.button--scroll:hover {
  background: url('styles/overworld/relogic/content/button_background.jpg');
  background-repeat: repeat;
  background-position: top;
  background-size: auto 105%;
  box-shadow: rgba(10, 10, 10, 0.5) 2px 2px 3px;
  border-top: 1px solid #976b45 !important;
  border-right: 1px solid #562f21 !important;
  border-bottom: 1px solid #562f21 !important;
  border-left: 1px solid #976b45 !important;
  color: #ffffff;
}
.fr-popup .fr-action-buttons button.fr-command:hover {
  background: url('styles/overworld/relogic/content/button_background.jpg');
  background-repeat: repeat;
  background-position: top;
  background-size: auto 105%;
  border-top: 1px solid #976b45 !important;
  border-right: 1px solid #562f21 !important;
  border-bottom: 1px solid #562f21 !important;
  border-left: 1px solid #976b45 !important;
  box-shadow: rgba(10, 10, 10, 0.5) 2px 4px 3px;
  padding-bottom: 5px;
  -moz-transform: translate(0px, -2px);
}
button.button--link.u-jsOnly.button.button--icon.button--icon--preview:hover {
  background: url('styles/overworld/relogic/content/button_background.jpg');
  background-repeat: repeat;
  background-position: top;
  background-size: auto 105%;
}
/* change on select page nav */
.pageNav-page.pageNav-page--current {
  background: #4e3b34;
  color: #d6ffe4;
  border: 1px solid #91c1a1;
}
.pageNav-page.pageNav-page--current:hover {
  background: #4e3b34;
  color: #d6ffe4;
  border: 1px solid #91c1a1;
}
/* Ribbon shennanigans */
.message-userTitle {
  background-position: 0px -36px !important;
  display: block;
  width: 134px;
  height: 24px;
  padding-top: 5px;
  margin: 0 -7px 0px;
  color: black;
}
.message-cell.message-cell--user {
  flex: 0 0 145px;
}
.userBanner.userBanner--staff.message-userBanner {
  display: none;
}
.userBanner.userTitle.titleBanner.userBanner--administrator.message-userBanner {
  color: black;
  background-image: url('/assets/ribbons/administrator.png');
  background-position: 0px -36px !important;
  display: block;
  width: 139px;
  height: 30px;
  padding-top: 5px;
  margin: 0 -7px 0px !important;
  background-repeat: no-repeat;
}
.userBanner.userTitle.titleBanner.userBanner--moderator.message-userBanner {
  color: black;
  background-image: url('/assets/ribbons/moderator.png');
  background-position: 0px -36px !important;
  display: block;
  width: 139px;
  height: 30px;
  padding-top: 5px;
  margin: 0 -7px 0px !important;
  background-repeat: no-repeat;
}
.userBanner.userTitle.titleBanner.userBanner--relogic.message-userBanner {
  color: black;
  background-image: url('/assets/ribbons/relogic.png');
  background-position: 0px -36px !important;
  display: block;
  width: 139px;
  height: 30px;
  padding-top: 5px;
  margin: 0 -7px 0px !important;
  background-repeat: no-repeat;
}
.message-userTitle {
  color: black;
  background-image: url('/assets/ribbons/empty.png');
  background-position: 0px -36px !important;
  display: block;
  width: 139px;
  height: 30px;
  padding-top: 5px;
  margin: 0 -7px 0px;
  background-repeat: no-repeat;
}
.userBanner.userBanner--staff {
  display: none;
}
.userBanner.userTitle.titleBanner.userBanner--administrator {
  background: url('/assets/ribbons/administrator.png');
  color: black;
}
.userBanner {
  border: none;
  border-radius: 2px;
  padding-left: 2px;
  padding-right: 2px;
  margin-bottom: 3px;
}
span.userTitle {
  color: black;
  padding-left: 3px;
  padding-right: 3px;
  padding-bottom: 1px;
  border-radius: 3px;
  background-image: url('/assets/ribbons/empty.png');
}
.userBanner.userTitle.titleBanner.userBanner--moderator {
  background: url('/assets/ribbons/moderator.png');
  color: black;
}
.userBanner.userTitle.titleBanner.userBanner--relogic {
  background: url('/assets/ribbons/relogic.png');
  color: black;
}
/*fixes mobile ribbons*/
@media only screen and (max-width: 650px) {
  .userBanner.userBanner--staff.message-userBanner {
    display: none !important;
  }
  .message-userTitle {
    background-position: 0px 0px !important;
    background-repeat: no-repeat !important;
    display: inline !important;
    color: black;
    padding: 2px !important;
    border-radius: 3px;
  }
  .userBanner.userTitle.titleBanner.userBanner--administrator.message-userBanner {
    color: black;
    background-image: url('/assets/ribbons/administrator.png');
    background-position: 0px 0px !important;
    display: inline !important;
    padding: 2px !important;
    background-repeat: no-repeat;
    margin-left: 2px !important;
  }
  .userBanner.userTitle.titleBanner.userBanner--moderator.message-userBanner {
    color: black;
    background-image: url('/assets/ribbons/moderator.png');
    background-position: 0px 0px !important;
    display: inline !important;
    padding: 2px !important;
    background-repeat: no-repeat;
    margin-left: 2px !important;
    margin-right: 1px !important;
  }
  .userBanner.userTitle.titleBanner.userBanner--relogic.message-userBanner {
    color: black;
    background-image: url('/assets/ribbons/relogic.png');
    background-position: 0px 0px !important;
    display: inline !important;
    padding: 2px !important;
    background-repeat: no-repeat;
    margin-left: 2px !important;
  }
}
/*fixes RTE add link background*/
.fr-popup {
  background: url("/styles/overworld/relogic/content/background.jpg");
  background-position: top right;
}
/*fixes RTE add image background*/
.fr-popup .fr-image-upload-layer {
  background: url("/styles/overworld/relogic/content/background.jpg");
  background-position: center;
}
/*fixes RTE table colors*/
.fr-view > table > thead > tr > td,
.fr-view > table > tbody > tr > td {
  border-color: white !important;
}
.bbTable > table > thead > tr > td,
.bbTable > table > tbody > tr > td {
  border-color: white !important;
}
/* Fixes calander date picker thing */
.pika-single {
  background: #5b4439;
}
/*Fixes attachment list*/
.attachment {
  background: #5e453a;
}
/*fixing cutoff issue in mobile devices for message cell user*/
@media only screen and (max-width: 650px) {
  .message:not(.message--forceColumns) .message-cell.message-cell--user {
    min-width: 345px;
  }
}
/* fixing profile post gray area thing */
.message-cell.message-cell--user,
.message-cell.message-cell--action {
  background: inherit !important;
}
/* forces display of signatures on mobile devices*/
@media (max-width: 480px) {
  .message-signature {
    display: block !important;
  }
}
/*.message-signature.expanded-signature 
{
    max-height: none;
}*/
.template-conversation_list .uix_contentWrapper .structItem-cell--main .structItem-minor,
.template-svConvEss_conversation_labeled_list .uix_contentWrapper .structItem-cell--main .structItem-minor {
  flex-wrap: wrap;
}
.template-conversation_list .uix_contentWrapper .structItem-cell--main .structItem-minor .structItem-parts.recipientsList,
.template-svConvEss_conversation_labeled_list .uix_contentWrapper .structItem-cell--main .structItem-minor .structItem-parts.recipientsList {
  order: 3;
  flex: 1 1 100%;
}
.uix_sidebarInner .recipient-deleted-toggler {
  margin-left: auto;
}