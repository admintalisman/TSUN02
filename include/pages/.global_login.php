<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'login_message' ),
'supertop' => array(  ),
'top' => array( 'login_header' ),
'grid' => array( 'snippet',
'password_label',
'password',
'remember_password',
'username' ),
'footer' => array( 'login_button',
'continue_login_button',
'guest_login' ),
'superbottom' => array(  ) ),
'formXtTags' => array( 'supertop' => array(  ),
'footer' => array( 'signin_button',
'continue_button',
'guestlink_block' ),
'superbottom' => array(  ) ),
'itemForms' => array( 'login_message' => 'above-grid',
'login_header' => 'top',
'snippet' => 'grid',
'password_label' => 'grid',
'password' => 'grid',
'remember_password' => 'grid',
'username' => 'grid',
'login_button' => 'footer',
'continue_login_button' => 'footer',
'guest_login' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'username' => array( 'username' ),
'password_label' => array( 'password_label' ),
'password' => array( 'password' ),
'login_message' => array( 'login_message' ),
'login_button' => array( 'login_button' ),
'guest_login' => array( 'guest_login' ),
'login_header' => array( 'login_header' ),
'remember_password' => array( 'remember_password' ),
'continue_login_button' => array( 'continue_login_button' ),
'snippet' => array( 'snippet' ) ),
'cellMaps' => array(  ) ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'login',
'type' => 'login',
'layoutId' => 'first',
'disabled' => 0,
'default' => 3,
'forms' => array( 'above-grid' => array( 'modelId' => 'login-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array(  ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'login_message' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'login-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'login_header' ) ),
'c2' => array( 'model' => 'c2',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'login-labels',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c',
'colspan' => 2 ) ) ),
array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c4' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c9' ),
array( 'cell' => 'c10' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'snippet' ),
'align' => 'left' ),
'c3' => array( 'model' => 'c3',
'items' => array( 'password_label' ) ),
'c4' => array( 'model' => 'c4',
'items' => array( 'password' ) ),
'c9' => array( 'model' => 'c9',
'items' => array(  ) ),
'c10' => array( 'model' => 'c10',
'items' => array( 'remember_password' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'username' ),
'align' => 'left' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'login-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'login_button',
'continue_login_button',
'guest_login' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'superbottom' => array( 'modelId' => 'login-superbottom',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'username' => array( 'type' => 'username' ),
'password_label' => array( 'type' => 'password_label' ),
'password' => array( 'type' => 'password' ),
'login_message' => array( 'type' => 'login_message' ),
'login_button' => array( 'type' => 'login_button' ),
'guest_login' => array( 'type' => 'guest_login' ),
'login_header' => array( 'type' => 'login_header' ),
'remember_password' => array( 'type' => 'remember_password' ),
'continue_login_button' => array( 'type' => 'continue_login_button' ),
'snippet' => array( 'eventId' => '_global__snippet',
'label' => array( 'text' => '_global__snippet',
'type' => 0 ),
'type' => 'snippet' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'pageCSS' => '/* Put  your custom CSS code here */

/*!
 * Bootstrap  v5.3.2 (https://getbootstrap.com/)
 * Copyright 2011-2023 The Bootstrap Authors
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
:root,[data-bs-theme=light] {
    --bs-blue: #007bff;
    --bs-indigo: #6610f2;
    --bs-purple: #7367f0;
    --bs-pink: #e83e8c;
    --bs-red: #ea5455;
    --bs-orange: #fd7e14;
    --bs-yellow: #ff9f43;
    --bs-green: #28c76f;
    --bs-teal: #20c997;
    --bs-cyan: #00cfe8;
    --bs-black: #4b465c;
    --bs-white: #fff;
    --bs-gray: rgba(75, 70, 92, 0.6);
    --bs-gray-dark: rgba(75, 70, 92, 0.8);
    --bs-gray-25: rgba(75, 70, 92, 0.015);
    --bs-gray-50: rgba(75, 70, 92, 0.03);
    --bs-primary: #7367f0;
    --bs-secondary: #a8aaae;
    --bs-success: #28c76f;
    --bs-info: #00cfe8;
    --bs-warning: #ff9f43;
    --bs-danger: #ea5455;
    --bs-light: #dfdfe3;
    --bs-dark: #4b4b4b;
    --bs-gray: rgba(75, 70, 92, 0.05);
    --bs-primary-rgb: 115, 103, 240;
    --bs-secondary-rgb: 168, 170, 174;
    --bs-success-rgb: 40, 199, 111;
    --bs-info-rgb: 0, 207, 232;
    --bs-warning-rgb: 255, 159, 67;
    --bs-danger-rgb: 234, 84, 85;
    --bs-light-rgb: 223, 223, 227;
    --bs-dark-rgb: 75, 75, 75;
    --bs-gray-rgb: 75, 70, 92;
    --bs-primary-text-emphasis: #2e2960;
    --bs-secondary-text-emphasis: #434446;
    --bs-success-text-emphasis: #10502c;
    --bs-info-text-emphasis: #00535d;
    --bs-warning-text-emphasis: #66401b;
    --bs-danger-text-emphasis: #5e2222;
    --bs-light-text-emphasis: rgba(75, 70, 92, 0.7);
    --bs-dark-text-emphasis: rgba(75, 70, 92, 0.7);
    --bs-primary-bg-subtle: #e3e1fc;
    --bs-secondary-bg-subtle: #eeeeef;
    --bs-success-bg-subtle: #d4f4e2;
    --bs-info-bg-subtle: #ccf5fa;
    --bs-warning-bg-subtle: #ffecd9;
    --bs-danger-bg-subtle: #fbdddd;
    --bs-light-bg-subtle: rgba(251, 250, 251, 0.525);
    --bs-dark-bg-subtle: rgba(75, 70, 92, 0.4);
    --bs-primary-border-subtle: #c7c2f9;
    --bs-secondary-border-subtle: #dcdddf;
    --bs-success-border-subtle: #a9e9c5;
    --bs-info-border-subtle: #99ecf6;
    --bs-warning-border-subtle: #ffd9b4;
    --bs-danger-border-subtle: #f7bbbb;
    --bs-light-border-subtle: rgba(75, 70, 92, 0.2);
    --bs-dark-border-subtle: rgba(75, 70, 92, 0.5);
    --bs-white-rgb: 255, 255, 255;
    --bs-black-rgb: 75, 70, 92;
    --bs-font-sans-serif: "Public Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
    --bs-font-monospace: "SFMono-Regular", Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
    --bs-root-font-size: 16px;
    --bs-body-font-family: var(--bs-font-sans-serif);
    --bs-body-font-size: 0.9375rem;
    --bs-body-font-weight: 400;
    --bs-body-line-height: 1.47;
    --bs-body-color: #6f6b7d;
    --bs-body-color-rgb: 111, 107, 125;
    --bs-body-bg: #f8f7fa;
    --bs-body-bg-rgb: 248, 247, 250;
    --bs-emphasis-color: #4b465c;
    --bs-emphasis-color-rgb: 75, 70, 92;
    --bs-secondary-color: rgba(111, 107, 125, 0.75);
    --bs-secondary-color-rgb: 111, 107, 125;
    --bs-secondary-bg: rgba(75, 70, 92, 0.2);
    --bs-secondary-bg-rgb: 75, 70, 92;
    --bs-tertiary-color: rgba(111, 107, 125, 0.5);
    --bs-tertiary-color-rgb: 111, 107, 125;
    --bs-tertiary-bg: rgba(75, 70, 92, 0.05);
    --bs-tertiary-bg-rgb: 75, 70, 92;
    --bs-heading-color: #5d596c;
    --bs-link-color: #7367f0;
    --bs-link-color-rgb: 115, 103, 240;
    --bs-link-decoration: none;
    --bs-link-hover-color: #685dd8;
    --bs-link-hover-color-rgb: 104, 93, 216;
    --bs-code-color: #e83e8c;
    --bs-highlight-color: #6f6b7d;
    --bs-highlight-bg: #ffecd9;
    --bs-border-width: 1px;
    --bs-border-style: solid;
    --bs-border-color: #dbdade;
    --bs-border-color-translucent: rgba(75, 70, 92, 0.175);
    --bs-border-radius: 0.375rem;
    --bs-border-radius-sm: 0.25rem;
    --bs-border-radius-lg: 0.5rem;
    --bs-border-radius-xl: 0.625rem;
    --bs-border-radius-xxl: 2rem;
    --bs-border-radius-2xl: var(--bs-border-radius-xxl);
    --bs-border-radius-pill: 50rem;
    --bs-box-shadow: 0 0.25rem 1rem rgba(165, 163, 174, 0.45);
    --bs-box-shadow-sm: 0 0.125rem 0.25rem rgba(165, 163, 174, 0.3);
    --bs-box-shadow-lg: 0 0.625rem 1.25rem rgba(165, 163, 174, 0.4);
    --bs-box-shadow-inset: inset 0 1px 2px rgba(75, 70, 92, 0.075);
    --bs-focus-ring-width: 0.15rem;
    --bs-focus-ring-opacity: 0.75;
    --bs-focus-ring-color: rgba(75, 70, 92, 0.75);
    --bs-form-valid-color: #28c76f;
    --bs-form-valid-border-color: #28c76f;
    --bs-form-invalid-color: #ea5455;
    --bs-form-invalid-border-color: #ea5455
}

*,*::before,*::after {
    box-sizing: border-box
}

:root {
    font-size: var(--bs-root-font-size)
}

@media(prefers-reduced-motion: no-preference) {
    :root {
        scroll-behavior: smooth
    }
}

body {
    margin: 0;
    font-family: var(--bs-body-font-family);
    font-size: var(--bs-body-font-size);
    font-weight: var(--bs-body-font-weight);
    line-height: var(--bs-body-line-height);
    color: var(--bs-body-color);
    text-align: var(--bs-body-text-align);
    background-color: var(--bs-body-bg);
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(75,70,92,0)
}

hr {
    margin: 1rem 0;
    color: #dbdade;
    border: 0;
    border-top: var(--bs-border-width) solid;
    opacity: 1
}

h6,.h6,h5,.h5,h4,.h4,h3,.h3,h2,.h2,h1,.h1 {
    margin-top: 0;
    margin-bottom: 1rem;
    font-weight: 500;
    line-height: 1.37;
    color: var(--bs-heading-color)
}

h1,.h1 {
    font-size: calc(1.3625rem + 1.35vw)
}

@media(min-width: 1200px) {
    h1,.h1 {
        font-size:2.375rem
    }
}

h2,.h2 {
    font-size: calc(1.325rem + 0.9vw)
}

@media(min-width: 1200px) {
    h2,.h2 {
        font-size:2rem
    }
}

h3,.h3 {
    font-size: calc(1.2875rem + 0.45vw)
}

@media(min-width: 1200px) {
    h3,.h3 {
        font-size:1.625rem
    }
}

h4,.h4 {
    font-size: calc(1.2625rem + 0.15vw)
}

@media(min-width: 1200px) {
    h4,.h4 {
        font-size:1.375rem
    }
}

h5,.h5 {
    font-size: 1.125rem
}

h6,.h6 {
    font-size: 0.9375rem
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}

abbr[title] {
    text-decoration: underline dotted;
    cursor: help;
    text-decoration-skip-ink: none
}

address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit
}

ol,ul {
    padding-left: 2rem
}

ol,ul,dl {
    margin-top: 0;
    margin-bottom: 1rem
}

ol ol,ul ul,ol ul,ul ol {
    margin-bottom: 0
}

dt {
    font-weight: 500
}

dd {
    margin-bottom: .5rem;
    margin-left: 0
}

blockquote {
    margin: 0 0 1rem
}

b,strong {
    font-weight: bolder
}

small,.small {
    font-size: 0.8125rem
}

mark,.mark {
    padding: .1875em;
    color: var(--bs-highlight-color);
    background-color: var(--bs-highlight-bg)
}

sub,sup {
    position: relative;
    font-size: 0.75em;
    line-height: 0;
    vertical-align: baseline
}

sub {
    bottom: -0.25em
}

sup {
    top: -0.5em
}

a {
    color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
    text-decoration: none
}

a:hover {
    --bs-link-color-rgb: var(--bs-link-hover-color-rgb)
}

a:not([href]):not([class]),a:not([href]):not([class]):hover {
    color: inherit;
    text-decoration: none
}

pre,code,kbd,samp {
    font-family: var(--bs-font-monospace);
    font-size: 1em
}

pre {
    display: block;
    margin-top: 0;
    margin-bottom: 1rem;
    overflow: auto;
    font-size: 0.8125rem
}

pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal
}

code {
    font-size: 0.8125rem;
    color: var(--bs-code-color);
    word-wrap: break-word
}

a>code {
    color: inherit
}

kbd {
    padding: .1875rem .375rem;
    font-size: 0.8125rem;
    color: var(--bs-body-bg);
    background-color: var(--bs-body-color);
    border-radius: .25rem
}

kbd kbd {
    padding: 0;
    font-size: 1em
}

figure {
    margin: 0 0 1rem
}

img,svg {
    vertical-align: middle
}

table {
    caption-side: bottom;
    border-collapse: collapse
}

caption {
    padding-top: .55rem;
    padding-bottom: .55rem;
    color: #a5a3ae;
    text-align: left
}

th {
    font-weight: 500;
    text-align: inherit;
    text-align: -webkit-match-parent
}

thead,tbody,tfoot,tr,td,th {
    border-color: inherit;
    border-style: solid;
    border-width: 0
}

label {
    display: inline-block
}

button {
    border-radius: 0
}

button:focus:not(:focus-visible) {
    outline: 0
}

input,button,select,optgroup,textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit
}

button,select {
    text-transform: none
}

[role=button] {
    cursor: pointer
}

select {
    word-wrap: normal
}

select:disabled {
    opacity: 1
}

[list]:not([type=date]):not([type=datetime-local]):not([type=month]):not([type=week]):not([type=time])::-webkit-calendar-picker-indicator {
    display: none !important
}

button,[type=button],[type=reset],[type=submit] {
    -webkit-appearance: button
}

button:not(:disabled),[type=button]:not(:disabled),[type=reset]:not(:disabled),[type=submit]:not(:disabled) {
    cursor: pointer
}

::-moz-focus-inner {
    padding: 0;
    border-style: none
}

textarea {
    resize: vertical
}

fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0
}

legend {
    float: left;
    width: 100%;
    padding: 0;
    margin-bottom: .5rem;
    font-size: calc(1.275rem + 0.3vw);
    line-height: inherit
}

@media(min-width: 1200px) {
    legend {
        font-size:1.5rem
    }
}

legend+* {
    clear: left
}

::-webkit-datetime-edit-fields-wrapper,::-webkit-datetime-edit-text,::-webkit-datetime-edit-minute,::-webkit-datetime-edit-hour-field,::-webkit-datetime-edit-day-field,::-webkit-datetime-edit-month-field,::-webkit-datetime-edit-year-field {
    padding: 0
}

::-webkit-inner-spin-button {
    height: auto
}

[type=search] {
    -webkit-appearance: textfield;
    outline-offset: -2px
}

::-webkit-search-decoration {
    -webkit-appearance: none
}

::-webkit-color-swatch-wrapper {
    padding: 0
}

::file-selector-button {
    font: inherit;
    -webkit-appearance: button
}

output {
    display: inline-block
}

iframe {
    border: 0
}

summary {
    display: list-item;
    cursor: pointer
}

progress {
    vertical-align: baseline
}

[hidden] {
    display: none !important
}

.lead {
    font-size: 1.125rem;
    font-weight: 300
}

.display-1 {
    font-size: calc(1.6rem + 4.2vw);
    font-weight: 500;
    line-height: 1.37
}

@media(min-width: 1200px) {
    .display-1 {
        font-size:4.75rem
    }
}

.display-2 {
    font-size: calc(1.5625rem + 3.75vw);
    font-weight: 500;
    line-height: 1.37
}

@media(min-width: 1200px) {
    .display-2 {
        font-size:4.375rem
    }
}

.display-3 {
    font-size: calc(1.5125rem + 3.15vw);
    font-weight: 500;
    line-height: 1.37
}

@media(min-width: 1200px) {
    .display-3 {
        font-size:3.875rem
    }
}

.display-4 {
    font-size: calc(1.4625rem + 2.55vw);
    font-weight: 500;
    line-height: 1.37
}

@media(min-width: 1200px) {
    .display-4 {
        font-size:3.375rem
    }
}

.display-5 {
    font-size: calc(1.425rem + 2.1vw);
    font-weight: 500;
    line-height: 1.37
}

@media(min-width: 1200px) {
    .display-5 {
        font-size:3rem
    }
}

.display-6 {
    font-size: calc(1.3875rem + 1.65vw);
    font-weight: 500;
    line-height: 1.37
}

@media(min-width: 1200px) {
    .display-6 {
        font-size:2.625rem
    }
}

.list-unstyled {
    padding-left: 0;
    list-style: none
}

.list-inline {
    padding-left: 0;
    list-style: none
}

.list-inline-item {
    display: inline-block
}

.list-inline-item:not(:last-child) {
    margin-right: .5rem
}

.initialism {
    font-size: 0.8125rem;
    text-transform: uppercase
}

.blockquote {
    margin-bottom: 1rem;
    font-size: 1.171875rem
}

.blockquote>:last-child {
    margin-bottom: 0
}

.blockquote-footer {
    margin-top: -1rem;
    margin-bottom: 1rem;
    font-size: 0.8125rem;
    color: rgba(75,70,92,.6)
}

.blockquote-footer::before {
    content: "— "
}

.img-fluid {
    max-width: 100%;
    height: auto
}

.img-thumbnail {
    padding: 0;
    background-color: rgba(0,0,0,0);
    border: 0px solid var(--bs-border-color);
    border-radius: 0px;
    max-width: 100%;
    height: auto
}

.figure {
    display: inline-block
}

.figure-img {
    margin-bottom: .5rem;
    line-height: 1
}

.figure-caption {
    font-size: 0.8125rem;
    color: #a5a3ae
}

.container,.container-fluid,.container-xxl,.container-xl,.container-lg,.container-md,.container-sm {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    width: 100%;
    padding-right: calc(var(--bs-gutter-x)*.5);
    padding-left: calc(var(--bs-gutter-x)*.5);
    margin-right: auto;
    margin-left: auto
}

@media(min-width: 576px) {
    .container-sm,.container {
        max-width:540px
    }
}

@media(min-width: 768px) {
    .container-md,.container-sm,.container {
        max-width:720px
    }
}

@media(min-width: 992px) {
    .container-lg,.container-md,.container-sm,.container {
        max-width:960px
    }
}

@media(min-width: 1200px) {
    .container-xl,.container-lg,.container-md,.container-sm,.container {
        max-width:1140px
    }
}

@media(min-width: 1400px) {
    .container-xxl,.container-xl,.container-lg,.container-md,.container-sm,.container {
        max-width:1440px
    }
}

:root {
    --bs-breakpoint-xs: 0;
    --bs-breakpoint-sm: 576px;
    --bs-breakpoint-md: 768px;
    --bs-breakpoint-lg: 992px;
    --bs-breakpoint-xl: 1200px;
    --bs-breakpoint-xxl: 1400px
}

.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(-1*var(--bs-gutter-y));
    margin-right: calc(-0.5*var(--bs-gutter-x));
    margin-left: calc(-0.5*var(--bs-gutter-x))
}

.row>* {
    flex-shrink: 0;
    width: 100%;
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x)*.5);
    padding-left: calc(var(--bs-gutter-x)*.5);
    margin-top: var(--bs-gutter-y)
}

.col {
    flex: 1 0 0%
}

.row-cols-auto>* {
    flex: 0 0 auto;
    width: auto
}

.row-cols-1>* {
    flex: 0 0 auto;
    width: 100%
}

.row-cols-2>* {
    flex: 0 0 auto;
    width: 50%
}

.row-cols-3>* {
    flex: 0 0 auto;
    width: 33.33333333%
}

.row-cols-4>* {
    flex: 0 0 auto;
    width: 25%
}

.row-cols-5>* {
    flex: 0 0 auto;
    width: 20%
}

.row-cols-6>* {
    flex: 0 0 auto;
    width: 16.66666667%
}

.col-auto {
    flex: 0 0 auto;
    width: auto
}

.col-1 {
    flex: 0 0 auto;
    width: 8.33333333%
}

.col-2 {
    flex: 0 0 auto;
    width: 16.66666667%
}

.col-3 {
    flex: 0 0 auto;
    width: 25%
}

.col-4 {
    flex: 0 0 auto;
    width: 33.33333333%
}

.col-5 {
    flex: 0 0 auto;
    width: 41.66666667%
}

.col-6 {
    flex: 0 0 auto;
    width: 50%
}

.col-7 {
    flex: 0 0 auto;
    width: 58.33333333%
}

.col-8 {
    flex: 0 0 auto;
    width: 66.66666667%
}

.col-9 {
    flex: 0 0 auto;
    width: 75%
}

.col-10 {
    flex: 0 0 auto;
    width: 83.33333333%
}

.col-11 {
    flex: 0 0 auto;
    width: 91.66666667%
}

.col-12 {
    flex: 0 0 auto;
    width: 100%
}

.offset-1 {
    margin-left: 8.33333333%
}

.offset-2 {
    margin-left: 16.66666667%
}

.offset-3 {
    margin-left: 25%
}

.offset-4 {
    margin-left: 33.33333333%
}

.offset-5 {
    margin-left: 41.66666667%
}

.offset-6 {
    margin-left: 50%
}

.offset-7 {
    margin-left: 58.33333333%
}

.offset-8 {
    margin-left: 66.66666667%
}

.offset-9 {
    margin-left: 75%
}

.offset-10 {
    margin-left: 83.33333333%
}

.offset-11 {
    margin-left: 91.66666667%
}

.g-0,.gx-0 {
    --bs-gutter-x: 0
}

.g-0,.gy-0 {
    --bs-gutter-y: 0
}

.g-1,.gx-1 {
    --bs-gutter-x: 0.25rem
}

.g-1,.gy-1 {
    --bs-gutter-y: 0.25rem
}

.g-2,.gx-2 {
    --bs-gutter-x: 0.5rem
}

.g-2,.gy-2 {
    --bs-gutter-y: 0.5rem
}

.g-3,.gx-3 {
    --bs-gutter-x: 1rem
}

.g-3,.gy-3 {
    --bs-gutter-y: 1rem
}

.g-4,.gx-4 {
    --bs-gutter-x: 1.5rem
}

.g-4,.gy-4 {
    --bs-gutter-y: 1.5rem
}

.g-5,.gx-5 {
    --bs-gutter-x: 3rem
}

.g-5,.gy-5 {
    --bs-gutter-y: 3rem
}

@media(min-width: 576px) {
    .col-sm {
        flex:1 0 0%
    }

    .row-cols-sm-auto>* {
        flex: 0 0 auto;
        width: auto
    }

    .row-cols-sm-1>* {
        flex: 0 0 auto;
        width: 100%
    }

    .row-cols-sm-2>* {
        flex: 0 0 auto;
        width: 50%
    }

    .row-cols-sm-3>* {
        flex: 0 0 auto;
        width: 33.33333333%
    }

    .row-cols-sm-4>* {
        flex: 0 0 auto;
        width: 25%
    }

    .row-cols-sm-5>* {
        flex: 0 0 auto;
        width: 20%
    }

    .row-cols-sm-6>* {
        flex: 0 0 auto;
        width: 16.66666667%
    }

    .col-sm-auto {
        flex: 0 0 auto;
        width: auto
    }

    .col-sm-1 {
        flex: 0 0 auto;
        width: 8.33333333%
    }

    .col-sm-2 {
        flex: 0 0 auto;
        width: 16.66666667%
    }

    .col-sm-3 {
        flex: 0 0 auto;
        width: 25%
    }

    .col-sm-4 {
        flex: 0 0 auto;
        width: 33.33333333%
    }

    .col-sm-5 {
        flex: 0 0 auto;
        width: 41.66666667%
    }

    .col-sm-6 {
        flex: 0 0 auto;
        width: 50%
    }

    .col-sm-7 {
        flex: 0 0 auto;
        width: 58.33333333%
    }

    .col-sm-8 {
        flex: 0 0 auto;
        width: 66.66666667%
    }

    .col-sm-9 {
        flex: 0 0 auto;
        width: 75%
    }

    .col-sm-10 {
        flex: 0 0 auto;
        width: 83.33333333%
    }

    .col-sm-11 {
        flex: 0 0 auto;
        width: 91.66666667%
    }

    .col-sm-12 {
        flex: 0 0 auto;
        width: 100%
    }

    .offset-sm-0 {
        margin-left: 0
    }

    .offset-sm-1 {
        margin-left: 8.33333333%
    }

    .offset-sm-2 {
        margin-left: 16.66666667%
    }

    .offset-sm-3 {
        margin-left: 25%
    }

    .offset-sm-4 {
        margin-left: 33.33333333%
    }

    .offset-sm-5 {
        margin-left: 41.66666667%
    }

    .offset-sm-6 {
        margin-left: 50%
    }

    .offset-sm-7 {
        margin-left: 58.33333333%
    }

    .offset-sm-8 {
        margin-left: 66.66666667%
    }

    .offset-sm-9 {
        margin-left: 75%
    }

    .offset-sm-10 {
        margin-left: 83.33333333%
    }

    .offset-sm-11 {
        margin-left: 91.66666667%
    }

    .g-sm-0,.gx-sm-0 {
        --bs-gutter-x: 0
    }

    .g-sm-0,.gy-sm-0 {
        --bs-gutter-y: 0
    }

    .g-sm-1,.gx-sm-1 {
        --bs-gutter-x: 0.25rem
    }

    .g-sm-1,.gy-sm-1 {
        --bs-gutter-y: 0.25rem
    }

    .g-sm-2,.gx-sm-2 {
        --bs-gutter-x: 0.5rem
    }

    .g-sm-2,.gy-sm-2 {
        --bs-gutter-y: 0.5rem
    }

    .g-sm-3,.gx-sm-3 {
        --bs-gutter-x: 1rem
    }

    .g-sm-3,.gy-sm-3 {
        --bs-gutter-y: 1rem
    }

    .g-sm-4,.gx-sm-4 {
        --bs-gutter-x: 1.5rem
    }

    .g-sm-4,.gy-sm-4 {
        --bs-gutter-y: 1.5rem
    }

    .g-sm-5,.gx-sm-5 {
        --bs-gutter-x: 3rem
    }

    .g-sm-5,.gy-sm-5 {
        --bs-gutter-y: 3rem
    }
}

@media(min-width: 768px) {
    .col-md {
        flex:1 0 0%
    }

    .row-cols-md-auto>* {
        flex: 0 0 auto;
        width: auto
    }

    .row-cols-md-1>* {
        flex: 0 0 auto;
        width: 100%
    }

    .row-cols-md-2>* {
        flex: 0 0 auto;
        width: 50%
    }

    .row-cols-md-3>* {
        flex: 0 0 auto;
        width: 33.33333333%
    }

    .row-cols-md-4>* {
        flex: 0 0 auto;
        width: 25%
    }

    .row-cols-md-5>* {
        flex: 0 0 auto;
        width: 20%
    }

    .row-cols-md-6>* {
        flex: 0 0 auto;
        width: 16.66666667%
    }

    .col-md-auto {
        flex: 0 0 auto;
        width: auto
    }

    .col-md-1 {
        flex: 0 0 auto;
        width: 8.33333333%
    }

    .col-md-2 {
        flex: 0 0 auto;
        width: 16.66666667%
    }

    .col-md-3 {
        flex: 0 0 auto;
        width: 25%
    }

    .col-md-4 {
        flex: 0 0 auto;
        width: 33.33333333%
    }

    .col-md-5 {
        flex: 0 0 auto;
        width: 41.66666667%
    }

    .col-md-6 {
        flex: 0 0 auto;
        width: 50%
    }

    .col-md-7 {
        flex: 0 0 auto;
        width: 58.33333333%
    }

    .col-md-8 {
        flex: 0 0 auto;
        width: 66.66666667%
    }

    .col-md-9 {
        flex: 0 0 auto;
        width: 75%
    }

    .col-md-10 {
        flex: 0 0 auto;
        width: 83.33333333%
    }

    .col-md-11 {
        flex: 0 0 auto;
        width: 91.66666667%
    }

    .col-md-12 {
        flex: 0 0 auto;
        width: 100%
    }

    .offset-md-0 {
        margin-left: 0
    }

    .offset-md-1 {
        margin-left: 8.33333333%
    }

    .offset-md-2 {
        margin-left: 16.66666667%
    }

    .offset-md-3 {
        margin-left: 25%
    }

    .offset-md-4 {
        margin-left: 33.33333333%
    }

    .offset-md-5 {
        margin-left: 41.66666667%
    }

    .offset-md-6 {
        margin-left: 50%
    }

    .offset-md-7 {
        margin-left: 58.33333333%
    }

    .offset-md-8 {
        margin-left: 66.66666667%
    }

    .offset-md-9 {
        margin-left: 75%
    }

    .offset-md-10 {
        margin-left: 83.33333333%
    }

    .offset-md-11 {
        margin-left: 91.66666667%
    }

    .g-md-0,.gx-md-0 {
        --bs-gutter-x: 0
    }

    .g-md-0,.gy-md-0 {
        --bs-gutter-y: 0
    }

    .g-md-1,.gx-md-1 {
        --bs-gutter-x: 0.25rem
    }

    .g-md-1,.gy-md-1 {
        --bs-gutter-y: 0.25rem
    }

    .g-md-2,.gx-md-2 {
        --bs-gutter-x: 0.5rem
    }

    .g-md-2,.gy-md-2 {
        --bs-gutter-y: 0.5rem
    }

    .g-md-3,.gx-md-3 {
        --bs-gutter-x: 1rem
    }

    .g-md-3,.gy-md-3 {
        --bs-gutter-y: 1rem
    }

    .g-md-4,.gx-md-4 {
        --bs-gutter-x: 1.5rem
    }

    .g-md-4,.gy-md-4 {
        --bs-gutter-y: 1.5rem
    }

    .g-md-5,.gx-md-5 {
        --bs-gutter-x: 3rem
    }

    .g-md-5,.gy-md-5 {
        --bs-gutter-y: 3rem
    }
}

@media(min-width: 992px) {
    .col-lg {
        flex:1 0 0%
    }

    .row-cols-lg-auto>* {
        flex: 0 0 auto;
        width: auto
    }

    .row-cols-lg-1>* {
        flex: 0 0 auto;
        width: 100%
    }

    .row-cols-lg-2>* {
        flex: 0 0 auto;
        width: 50%
    }

    .row-cols-lg-3>* {
        flex: 0 0 auto;
        width: 33.33333333%
    }

    .row-cols-lg-4>* {
        flex: 0 0 auto;
        width: 25%
    }

    .row-cols-lg-5>* {
        flex: 0 0 auto;
        width: 20%
    }

    .row-cols-lg-6>* {
        flex: 0 0 auto;
        width: 16.66666667%
    }

    .col-lg-auto {
        flex: 0 0 auto;
        width: auto
    }

    .col-lg-1 {
        flex: 0 0 auto;
        width: 8.33333333%
    }

    .col-lg-2 {
        flex: 0 0 auto;
        width: 16.66666667%
    }

    .col-lg-3 {
        flex: 0 0 auto;
        width: 25%
    }

    .col-lg-4 {
        flex: 0 0 auto;
        width: 33.33333333%
    }

    .col-lg-5 {
        flex: 0 0 auto;
        width: 41.66666667%
    }

    .col-lg-6 {
        flex: 0 0 auto;
        width: 50%
    }

    .col-lg-7 {
        flex: 0 0 auto;
        width: 58.33333333%
    }

    .col-lg-8 {
        flex: 0 0 auto;
        width: 66.66666667%
    }

    .col-lg-9 {
        flex: 0 0 auto;
        width: 75%
    }

    .col-lg-10 {
        flex: 0 0 auto;
        width: 83.33333333%
    }

    .col-lg-11 {
        flex: 0 0 auto;
        width: 91.66666667%
    }

    .col-lg-12 {
        flex: 0 0 auto;
        width: 100%
    }

    .offset-lg-0 {
        margin-left: 0
    }

    .offset-lg-1 {
        margin-left: 8.33333333%
    }

    .offset-lg-2 {
        margin-left: 16.66666667%
    }

    .offset-lg-3 {
        margin-left: 25%
    }

    .offset-lg-4 {
        margin-left: 33.33333333%
    }

    .offset-lg-5 {
        margin-left: 41.66666667%
    }

    .offset-lg-6 {
        margin-left: 50%
    }

    .offset-lg-7 {
        margin-left: 58.33333333%
    }

    .offset-lg-8 {
        margin-left: 66.66666667%
    }

    .offset-lg-9 {
        margin-left: 75%
    }

    .offset-lg-10 {
        margin-left: 83.33333333%
    }

    .offset-lg-11 {
        margin-left: 91.66666667%
    }

    .g-lg-0,.gx-lg-0 {
        --bs-gutter-x: 0
    }

    .g-lg-0,.gy-lg-0 {
        --bs-gutter-y: 0
    }

    .g-lg-1,.gx-lg-1 {
        --bs-gutter-x: 0.25rem
    }

    .g-lg-1,.gy-lg-1 {
        --bs-gutter-y: 0.25rem
    }

    .g-lg-2,.gx-lg-2 {
        --bs-gutter-x: 0.5rem
    }

    .g-lg-2,.gy-lg-2 {
        --bs-gutter-y: 0.5rem
    }

    .g-lg-3,.gx-lg-3 {
        --bs-gutter-x: 1rem
    }

    .g-lg-3,.gy-lg-3 {
        --bs-gutter-y: 1rem
    }

    .g-lg-4,.gx-lg-4 {
        --bs-gutter-x: 1.5rem
    }

    .g-lg-4,.gy-lg-4 {
        --bs-gutter-y: 1.5rem
    }

    .g-lg-5,.gx-lg-5 {
        --bs-gutter-x: 3rem
    }

    .g-lg-5,.gy-lg-5 {
        --bs-gutter-y: 3rem
    }
}

@media(min-width: 1200px) {
    .col-xl {
        flex:1 0 0%
    }

    .row-cols-xl-auto>* {
        flex: 0 0 auto;
        width: auto
    }

    .row-cols-xl-1>* {
        flex: 0 0 auto;
        width: 100%
    }

    .row-cols-xl-2>* {
        flex: 0 0 auto;
        width: 50%
    }

    .row-cols-xl-3>* {
        flex: 0 0 auto;
        width: 33.33333333%
    }

    .row-cols-xl-4>* {
        flex: 0 0 auto;
        width: 25%
    }

    .row-cols-xl-5>* {
        flex: 0 0 auto;
        width: 20%
    }

    .row-cols-xl-6>* {
        flex: 0 0 auto;
        width: 16.66666667%
    }

    .col-xl-auto {
        flex: 0 0 auto;
        width: auto
    }

    .col-xl-1 {
        flex: 0 0 auto;
        width: 8.33333333%
    }

    .col-xl-2 {
        flex: 0 0 auto;
        width: 16.66666667%
    }

    .col-xl-3 {
        flex: 0 0 auto;
        width: 25%
    }

    .col-xl-4 {
        flex: 0 0 auto;
        width: 33.33333333%
    }

    .col-xl-5 {
        flex: 0 0 auto;
        width: 41.66666667%
    }

    .col-xl-6 {
        flex: 0 0 auto;
        width: 50%
    }

    .col-xl-7 {
        flex: 0 0 auto;
        width: 58.33333333%
    }

    .col-xl-8 {
        flex: 0 0 auto;
        width: 66.66666667%
    }

    .col-xl-9 {
        flex: 0 0 auto;
        width: 75%
    }

    .col-xl-10 {
        flex: 0 0 auto;
        width: 83.33333333%
    }

    .col-xl-11 {
        flex: 0 0 auto;
        width: 91.66666667%
    }

    .col-xl-12 {
        flex: 0 0 auto;
        width: 100%
    }

    .offset-xl-0 {
        margin-left: 0
    }

    .offset-xl-1 {
        margin-left: 8.33333333%
    }

    .offset-xl-2 {
        margin-left: 16.66666667%
    }

    .offset-xl-3 {
        margin-left: 25%
    }

    .offset-xl-4 {
        margin-left: 33.33333333%
    }

    .offset-xl-5 {
        margin-left: 41.66666667%
    }

    .offset-xl-6 {
        margin-left: 50%
    }

    .offset-xl-7 {
        margin-left: 58.33333333%
    }

    .offset-xl-8 {
        margin-left: 66.66666667%
    }

    .offset-xl-9 {
        margin-left: 75%
    }

    .offset-xl-10 {
        margin-left: 83.33333333%
    }

    .offset-xl-11 {
        margin-left: 91.66666667%
    }

    .g-xl-0,.gx-xl-0 {
        --bs-gutter-x: 0
    }

    .g-xl-0,.gy-xl-0 {
        --bs-gutter-y: 0
    }

    .g-xl-1,.gx-xl-1 {
        --bs-gutter-x: 0.25rem
    }

    .g-xl-1,.gy-xl-1 {
        --bs-gutter-y: 0.25rem
    }

    .g-xl-2,.gx-xl-2 {
        --bs-gutter-x: 0.5rem
    }

    .g-xl-2,.gy-xl-2 {
        --bs-gutter-y: 0.5rem
    }

    .g-xl-3,.gx-xl-3 {
        --bs-gutter-x: 1rem
    }

    .g-xl-3,.gy-xl-3 {
        --bs-gutter-y: 1rem
    }

    .g-xl-4,.gx-xl-4 {
        --bs-gutter-x: 1.5rem
    }

    .g-xl-4,.gy-xl-4 {
        --bs-gutter-y: 1.5rem
    }

    .g-xl-5,.gx-xl-5 {
        --bs-gutter-x: 3rem
    }

    .g-xl-5,.gy-xl-5 {
        --bs-gutter-y: 3rem
    }
}

@media(min-width: 1400px) {
    .col-xxl {
        flex:1 0 0%
    }

    .row-cols-xxl-auto>* {
        flex: 0 0 auto;
        width: auto
    }

    .row-cols-xxl-1>* {
        flex: 0 0 auto;
        width: 100%
    }

    .row-cols-xxl-2>* {
        flex: 0 0 auto;
        width: 50%
    }

    .row-cols-xxl-3>* {
        flex: 0 0 auto;
        width: 33.33333333%
    }

    .row-cols-xxl-4>* {
        flex: 0 0 auto;
        width: 25%
    }

    .row-cols-xxl-5>* {
        flex: 0 0 auto;
        width: 20%
    }

    .row-cols-xxl-6>* {
        flex: 0 0 auto;
        width: 16.66666667%
    }

    .col-xxl-auto {
        flex: 0 0 auto;
        width: auto
    }

    .col-xxl-1 {
        flex: 0 0 auto;
        width: 8.33333333%
    }

    .col-xxl-2 {
        flex: 0 0 auto;
        width: 16.66666667%
    }

    .col-xxl-3 {
        flex: 0 0 auto;
        width: 25%
    }

    .col-xxl-4 {
        flex: 0 0 auto;
        width: 33.33333333%
    }

    .col-xxl-5 {
        flex: 0 0 auto;
        width: 41.66666667%
    }

    .col-xxl-6 {
        flex: 0 0 auto;
        width: 50%
    }

    .col-xxl-7 {
        flex: 0 0 auto;
        width: 58.33333333%
    }

    .col-xxl-8 {
        flex: 0 0 auto;
        width: 66.66666667%
    }

    .col-xxl-9 {
        flex: 0 0 auto;
        width: 75%
    }

    .col-xxl-10 {
        flex: 0 0 auto;
        width: 83.33333333%
    }

    .col-xxl-11 {
        flex: 0 0 auto;
        width: 91.66666667%
    }

    .col-xxl-12 {
        flex: 0 0 auto;
        width: 100%
    }

    .offset-xxl-0 {
        margin-left: 0
    }

    .offset-xxl-1 {
        margin-left: 8.33333333%
    }

    .offset-xxl-2 {
        margin-left: 16.66666667%
    }

    .offset-xxl-3 {
        margin-left: 25%
    }

    .offset-xxl-4 {
        margin-left: 33.33333333%
    }

    .offset-xxl-5 {
        margin-left: 41.66666667%
    }

    .offset-xxl-6 {
        margin-left: 50%
    }

    .offset-xxl-7 {
        margin-left: 58.33333333%
    }

    .offset-xxl-8 {
        margin-left: 66.66666667%
    }

    .offset-xxl-9 {
        margin-left: 75%
    }

    .offset-xxl-10 {
        margin-left: 83.33333333%
    }

    .offset-xxl-11 {
        margin-left: 91.66666667%
    }

    .g-xxl-0,.gx-xxl-0 {
        --bs-gutter-x: 0
    }

    .g-xxl-0,.gy-xxl-0 {
        --bs-gutter-y: 0
    }

    .g-xxl-1,.gx-xxl-1 {
        --bs-gutter-x: 0.25rem
    }

    .g-xxl-1,.gy-xxl-1 {
        --bs-gutter-y: 0.25rem
    }

    .g-xxl-2,.gx-xxl-2 {
        --bs-gutter-x: 0.5rem
    }

    .g-xxl-2,.gy-xxl-2 {
        --bs-gutter-y: 0.5rem
    }

    .g-xxl-3,.gx-xxl-3 {
        --bs-gutter-x: 1rem
    }

    .g-xxl-3,.gy-xxl-3 {
        --bs-gutter-y: 1rem
    }

    .g-xxl-4,.gx-xxl-4 {
        --bs-gutter-x: 1.5rem
    }

    .g-xxl-4,.gy-xxl-4 {
        --bs-gutter-y: 1.5rem
    }

    .g-xxl-5,.gx-xxl-5 {
        --bs-gutter-x: 3rem
    }

    .g-xxl-5,.gy-xxl-5 {
        --bs-gutter-y: 3rem
    }
}

.table {
    --bs-table-color-type: initial;
    --bs-table-bg-type: initial;
    --bs-table-color-state: initial;
    --bs-table-bg-state: initial;
    --bs-table-color: var(--bs-body-color);
    --bs-table-bg: transparent;
    --bs-table-border-color: var(--bs-border-color);
    --bs-table-accent-bg: transparent;
    --bs-table-striped-color: var(--bs-body-color);
    --bs-table-striped-bg: #fbfbfc;
    --bs-table-active-color: var(--bs-body-color);
    --bs-table-active-bg: rgba(115, 103, 240, 0.08);
    --bs-table-hover-color: var(--bs-body-color);
    --bs-table-hover-bg: rgba(75, 70, 92, 0.04);
    width: 100%;
    margin-bottom: 1rem;
    vertical-align: middle;
    border-color: var(--bs-table-border-color)
}

.table>:not(caption)>*>* {
    padding: .55rem 1.25rem;
    color: var(--bs-table-color-state, var(--bs-table-color-type, var(--bs-table-color)));
    background-color: var(--bs-table-bg);
    border-bottom-width: var(--bs-border-width);
    box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state, var(--bs-table-bg-type, var(--bs-table-accent-bg)))
}

.table>tbody {
    vertical-align: inherit
}

.table>thead {
    vertical-align: bottom
}

.table-group-divider {
    border-top: calc(var(--bs-border-width)*2) solid currentcolor
}

.caption-top {
    caption-side: top
}

.table-sm>:not(caption)>*>* {
    padding: .25rem 1.25rem
}

.table-bordered>:not(caption)>* {
    border-width: var(--bs-border-width) 0
}

.table-bordered>:not(caption)>*>* {
    border-width: 0 var(--bs-border-width)
}

.table-borderless>:not(caption)>*>* {
    border-bottom-width: 0
}

.table-borderless>:not(:first-child) {
    border-top-width: 0
}

.table-striped>tbody>tr:nth-of-type(odd)>* {
    --bs-table-color-type: var(--bs-table-striped-color);
    --bs-table-bg-type: var(--bs-table-striped-bg)
}

.table-striped-columns>:not(caption)>tr>:nth-child(even) {
    --bs-table-color-type: var(--bs-table-striped-color);
    --bs-table-bg-type: var(--bs-table-striped-bg)
}

.table-active {
    --bs-table-color-state: var(--bs-table-active-color);
    --bs-table-bg-state: var(--bs-table-active-bg)
}

.table-hover>tbody>tr:hover>* {
    --bs-table-color-state: var(--bs-table-hover-color);
    --bs-table-bg-state: var(--bs-table-hover-bg)
}

.table-primary {
    --bs-table-color: #4b465c;
    --bs-table-bg: #f4f3fe;
    --bs-table-border-color: #d2d0de;
    --bs-table-striped-bg: #f1f0fb;
    --bs-table-striped-color: #4b465c;
    --bs-table-active-bg: #e6e5f1;
    --bs-table-active-color: #4b465c;
    --bs-table-hover-bg: #edecf8;
    --bs-table-hover-color: #4b465c;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color)
}

.table-secondary {
    --bs-table-color: #4b465c;
    --bs-table-bg: #f8f8f9;
    --bs-table-border-color: #d5d4da;
    --bs-table-striped-bg: #f5f4f6;
    --bs-table-striped-color: #4b465c;
    --bs-table-active-bg: #eaeaec;
    --bs-table-active-color: #4b465c;
    --bs-table-hover-bg: #f1f1f3;
    --bs-table-hover-color: #4b465c;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color)
}

.table-success {
    --bs-table-color: #4b465c;
    --bs-table-bg: #eefbf3;
    --bs-table-border-color: #cdd7d5;
    --bs-table-striped-bg: #ebf7f0;
    --bs-table-striped-color: #4b465c;
    --bs-table-active-bg: #e1ede7;
    --bs-table-active-color: #4b465c;
    --bs-table-hover-bg: #e7f4ed;
    --bs-table-hover-color: #4b465c;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color)
}

.table-info {
    --bs-table-color: #4b465c;
    --bs-table-bg: #ebfbfd;
    --bs-table-border-color: #cbd7dd;
    --bs-table-striped-bg: #e8f7fa;
    --bs-table-striped-color: #4b465c;
    --bs-table-active-bg: #deedf0;
    --bs-table-active-color: #4b465c;
    --bs-table-hover-bg: #e5f4f7;
    --bs-table-hover-color: #4b465c;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color)
}

.table-warning {
    --bs-table-color: #4b465c;
    --bs-table-bg: #fff7f0;
    --bs-table-border-color: #dbd4d2;
    --bs-table-striped-bg: #fbf3ed;
    --bs-table-striped-color: #4b465c;
    --bs-table-active-bg: #f1e9e4;
    --bs-table-active-color: #4b465c;
    --bs-table-hover-bg: #f8f0ea;
    --bs-table-hover-color: #4b465c;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color)
}

.table-danger {
    --bs-table-color: #4b465c;
    --bs-table-bg: #fdf1f1;
    --bs-table-border-color: #d9cfd3;
    --bs-table-striped-bg: #f9eeee;
    --bs-table-striped-color: #4b465c;
    --bs-table-active-bg: #efe3e5;
    --bs-table-active-color: #4b465c;
    --bs-table-hover-bg: #f6eaeb;
    --bs-table-hover-color: #4b465c;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color)
}

.table-light {
    --bs-table-color: #4b465c;
    --bs-table-bg: #dfdfe3;
    --bs-table-border-color: #c1c0c8;
    --bs-table-striped-bg: #dcdce0;
    --bs-table-striped-color: #4b465c;
    --bs-table-active-bg: #d3d3d8;
    --bs-table-active-color: #4b465c;
    --bs-table-hover-bg: #d9d9de;
    --bs-table-hover-color: #4b465c;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color)
}

.table-dark {
    --bs-table-color: #fff;
    --bs-table-bg: #4b4b4b;
    --bs-table-border-color: #6f6f6f;
    --bs-table-striped-bg: #4f4f4f;
    --bs-table-striped-color: #fff;
    --bs-table-active-bg: #595959;
    --bs-table-active-color: #fff;
    --bs-table-hover-bg: #525252;
    --bs-table-hover-color: #fff;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color)
}

.table-responsive {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch
}

@media(max-width: 575.98px) {
    .table-responsive-sm {
        overflow-x:auto;
        -webkit-overflow-scrolling: touch
    }
}

@media(max-width: 767.98px) {
    .table-responsive-md {
        overflow-x:auto;
        -webkit-overflow-scrolling: touch
    }
}

@media(max-width: 991.98px) {
    .table-responsive-lg {
        overflow-x:auto;
        -webkit-overflow-scrolling: touch
    }
}

@media(max-width: 1199.98px) {
    .table-responsive-xl {
        overflow-x:auto;
        -webkit-overflow-scrolling: touch
    }
}

@media(max-width: 1399.98px) {
    .table-responsive-xxl {
        overflow-x:auto;
        -webkit-overflow-scrolling: touch
    }
}

.form-label {
    margin-bottom: .25rem;
    font-size: 0.8125rem;
    color: #5d596c
}

.col-form-label {
    padding-top: calc(0.422rem + var(--bs-border-width));
    padding-bottom: calc(0.422rem + var(--bs-border-width));
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5;
    color: #5d596c
}

.col-form-label-lg {
    padding-top: calc(0.594rem + var(--bs-border-width));
    padding-bottom: calc(0.594rem + var(--bs-border-width));
    font-size: 1.125rem
}

.col-form-label-sm {
    padding-top: calc(0.266rem + var(--bs-border-width));
    padding-bottom: calc(0.266rem + var(--bs-border-width));
    font-size: 0.8125rem
}

.form-text {
    margin-top: .25rem;
    font-size: 0.8125rem;
    color: #a5a3ae
}

.form-control {
    display: block;
    width: 100%;
    padding: .422rem .875rem;
    font-size: 0.9375rem;
    font-weight: 400;
    line-height: 1.5;
    color: #6f6b7d;
    appearance: none;
    background-color: #fff;
    background-clip: padding-box;
    border: var(--bs-border-width) solid #dbdade;
    border-radius: var(--bs-border-radius);
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out
}

@media(prefers-reduced-motion: reduce) {
    .form-control {
        transition: none
    }
}

.form-control[type=file] {
    overflow: hidden
}

.form-control[type=file]:not(:disabled):not([readonly]) {
    cursor: pointer
}

.form-control:focus {
    color: #6f6b7d;
    background-color: #fff;
    border-color: #7367f0;
    outline: 0;
    box-shadow: 0 .125rem .25rem rgba(165,163,174,.3)
}

.form-control::-webkit-date-and-time-value {
    min-width: 85px;
    height: 1.5em;
    margin: 0
}

.form-control::-webkit-datetime-edit {
    display: block;
    padding: 0
}

.form-control::placeholder {
    color: #b7b5be;
    opacity: 1
}

.form-control:disabled {
    background-color: rgba(75,70,92,.08);
    opacity: 1
}

.form-control::file-selector-button {
    padding: .422rem .875rem;
    margin: -0.422rem -0.875rem;
    margin-inline-end:.875rem;color: #6f6b7d;
    background-color: #fff;
    pointer-events: none;
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    border-inline-end-width:var(--bs-border-width);border-radius: 0;
    transition: all .2s ease-in-out
}

@media(prefers-reduced-motion: reduce) {
    .form-control::file-selector-button {
        transition: none
    }
}

.form-control:hover:not(:disabled):not([readonly])::file-selector-button {
    background-color: #f2f2f2
}

.form-control-plaintext {
    display: block;
    width: 100%;
    padding: .422rem 0;
    margin-bottom: 0;
    line-height: 1.5;
    color: var(--bs-body-color);
    background-color: rgba(0,0,0,0);
    border: solid rgba(0,0,0,0);
    border-width: var(--bs-border-width) 0
}

.form-control-plaintext:focus {
    outline: 0
}

.form-control-plaintext.form-control-sm,.form-control-plaintext.form-control-lg {
    padding-right: 0;
    padding-left: 0
}

.form-control-sm {
    min-height: calc(1.5em + 0.532rem + calc(var(--bs-border-width) * 2));
    padding: .266rem .625rem;
    font-size: 0.8125rem;
    border-radius: var(--bs-border-radius-sm)
}

.form-control-sm::file-selector-button {
    padding: .266rem .625rem;
    margin: -0.266rem -0.625rem;
    margin-inline-end:.625rem}

.form-control-lg {
    min-height: calc(1.5em + 1.188rem + calc(var(--bs-border-width) * 2));
    padding: .594rem 1rem;
    font-size: 1.125rem;
    border-radius: var(--bs-border-radius-lg)
}

.form-control-lg::file-selector-button {
    padding: .594rem 1rem;
    margin: -0.594rem -1rem;
    margin-inline-end:1rem}

textarea.form-control {
    min-height: calc(1.5em + 0.844rem + calc(var(--bs-border-width) * 2))
}

textarea.form-control-sm {
    min-height: calc(1.5em + 0.532rem + calc(var(--bs-border-width) * 2))
}

textarea.form-control-lg {
    min-height: calc(1.5em + 1.188rem + calc(var(--bs-border-width) * 2))
}

.form-control-color {
    width: 3rem;
    height: calc(1.5em + 0.844rem + calc(var(--bs-border-width) * 2));
    padding: .422rem
}

.form-control-color:not(:disabled):not([readonly]) {
    cursor: pointer
}

.form-control-color::-moz-color-swatch {
    border: 0 !important;
    border-radius: var(--bs-border-radius)
}

.form-control-color::-webkit-color-swatch {
    border: 0 !important;
    border-radius: var(--bs-border-radius)
}

.form-control-color.form-control-sm {
    height: calc(1.5em + 0.532rem + calc(var(--bs-border-width) * 2))
}

.form-control-color.form-control-lg {
    height: calc(1.5em + 1.188rem + calc(var(--bs-border-width) * 2))
}

.form-select {
    --bs-form-select-bg-img: url("data:image/svg+xml,%3Csvg width=\'20\' height=\'20\' viewBox=\'0 0 20 20\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M5 7.5L10 12.5L15 7.5\' stroke=\'%236f6b7d\' stroke-width=\'1.5\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 7.5L10 12.5L15 7.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.5\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E");
    display: block;
    width: 100%;
    padding: .422rem 2.45rem .422rem .875rem;
    font-size: 0.9375rem;
    font-weight: 400;
    line-height: 1.5;
    color: #6f6b7d;
    appearance: none;
    background-color: #fff;
    background-image: var(--bs-form-select-bg-img),var(--bs-form-select-bg-icon, none);
    background-repeat: no-repeat;
    background-position: right .875rem center;
    background-size: 22px 20px;
    border: var(--bs-border-width) solid #dbdade;
    border-radius: var(--bs-border-radius);
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out
}

@media(prefers-reduced-motion: reduce) {
    .form-select {
        transition: none
    }
}

.form-select:focus {
    border-color: #7367f0;
    outline: 0;
    box-shadow: 0 .125rem .25rem rgba(165,163,174,.3)
}

.form-select[multiple],.form-select[size]:not([size="1"]) {
    padding-right: .875rem;
    background-image: none
}

.form-select:disabled {
    color: #a5a3ae;
    background-color: rgba(75,70,92,.08)
}

.form-select:-moz-focusring {
    color: rgba(0,0,0,0);
    text-shadow: 0 0 0 #6f6b7d
}

.form-select-sm {
    padding-top: .266rem;
    padding-bottom: .266rem;
    padding-left: .625rem;
    font-size: 0.8125rem;
    border-radius: var(--bs-border-radius-sm)
}

.form-select-lg {
    padding-top: .594rem;
    padding-bottom: .594rem;
    padding-left: 1rem;
    font-size: 1.125rem;
    border-radius: var(--bs-border-radius-lg)
}

.form-check {
    display: block;
    min-height: 1.378125rem;
    padding-left: 1.7em;
    margin-bottom: .125rem
}

.form-check .form-check-input {
    float: left;
    margin-left: -1.7em
}

.form-check-reverse {
    padding-right: 1.7em;
    padding-left: 0;
    text-align: right
}

.form-check-reverse .form-check-input {
    float: right;
    margin-right: -1.7em;
    margin-left: 0
}

.form-check-input {
    --bs-form-check-bg: #fff;
    flex-shrink: 0;
    width: 1.2em;
    height: 1.2em;
    margin-top: .135em;
    vertical-align: top;
    appearance: none;
    background-color: var(--bs-form-check-bg);
    background-image: var(--bs-form-check-bg-image);
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
    border: 2px solid #dbdade;
    print-color-adjust: exact
}

.form-check-input[type=checkbox] {
    border-radius: .25em
}

.form-check-input[type=radio] {
    border-radius: 50%
}

.form-check-input:active {
    filter: brightness(90%)
}

.form-check-input:focus {
    border-color: #7367f0;
    outline: 0;
    box-shadow: 0 .125rem .25rem rgba(165,163,174,.3)
}

.form-check-input:checked {
    background-color: #7367f0;
    border-color: #7367f0
}

.form-check-input:checked[type=checkbox] {
    --bs-form-check-bg-image: url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'11\' height=\'13\' viewBox=\'0 0 15 14\' fill=\'none\'%3E%3Cpath d=\'M3.41667 7L6.33333 9.91667L12.1667 4.08333\' stroke=\'%23fff\' stroke-width=\'1.5\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E")
}

.form-check-input:checked[type=radio] {
    --bs-form-check-bg-image: url("data:image/svg+xml,%3Csvg width=\'18\' height=\'18\' viewBox=\'0 0 18 18\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Crect x=\'5\' y=\'5\' width=\'8\' height=\'8\' rx=\'4\' fill=\'%23fff\'/%3E%3C/svg%3E%0A")
}

.form-check-input[type=checkbox]:indeterminate {
    background-color: #7367f0;
    border-color: #7367f0;
    --bs-form-check-bg-image: url("data:image/svg+xml,%3Csvg width=\'18\' height=\'18\' viewBox=\'0 0 18 18\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M5.5 9H12.5\' stroke=\'%23fff\' stroke-width=\'1.5\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E%0A")
}

.form-check-input:disabled {
    pointer-events: none;
    filter: none;
    opacity: .5
}

.form-check-input[disabled]~.form-check-label,.form-check-input:disabled~.form-check-label {
    cursor: default;
    opacity: .5
}

.form-check-label {
    cursor: pointer
}

.form-switch {
    padding-left: 2.5em
}

.form-switch .form-check-input {
    --bs-form-switch-bg: url("data:image/svg+xml,%3Csvg width=\'18\' height=\'18\' viewBox=\'0 0 18 18\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Ccircle cx=\'9\' cy=\'9\' r=\'6\' fill=\'rgba%2875, 70, 92, 0.2%29\'/%3E%3C/svg%3E%0A");
    width: 2em;
    margin-left: -2.5em;
    background-image: var(--bs-form-switch-bg);
    background-position: left center;
    border-radius: 2em;
    transition: background-position .15s ease-in-out
}

@media(prefers-reduced-motion: reduce) {
    .form-switch .form-check-input {
        transition: none
    }
}

.form-switch .form-check-input:focus {
    --bs-form-switch-bg: url("data:image/svg+xml,%3Csvg width=\'18\' height=\'18\' viewBox=\'0 0 18 18\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Ccircle cx=\'9\' cy=\'9\' r=\'6\' fill=\'%237367f0\'/%3E%3C/svg%3E%0A")
}

.form-switch .form-check-input:checked {
    background-position: right center;
    --bs-form-switch-bg: url("data:image/svg+xml,%3Csvg width=\'18\' height=\'18\' viewBox=\'0 0 18 18\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Ccircle cx=\'9\' cy=\'9\' r=\'6\' fill=\'%23fff\'/%3E%3C/svg%3E%0A")
}

.form-switch.form-check-reverse {
    padding-right: 2.5em;
    padding-left: 0
}

.form-switch.form-check-reverse .form-check-input {
    margin-right: -2.5em;
    margin-left: 0
}

.form-check-inline {
    display: inline-block;
    margin-right: 1rem
}

.btn-check {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none
}

.btn-check[disabled]+.btn,.btn-check:disabled+.btn {
    pointer-events: none;
    filter: none;
    opacity: .65
}

.form-range {
    width: 100%;
    height: .85rem;
    padding: 0;
    appearance: none;
    background-color: rgba(0,0,0,0)
}

.form-range:focus {
    outline: 0
}

.form-range:focus::-webkit-slider-thumb {
    box-shadow: 0 0 0 3px rgba(75,70,92,.1),0 .31rem 1.25rem 0 rgba(75,70,92,.4)
}

.form-range:focus::-moz-range-thumb {
    box-shadow: 0 0 0 3px rgba(75,70,92,.1),0 .31rem 1.25rem 0 rgba(75,70,92,.4)
}

.form-range::-moz-focus-outer {
    border: 0
}

.form-range::-webkit-slider-thumb {
    width: .75rem;
    height: .75rem;
    margin-top: -0.3125rem;
    appearance: none;
    background-color: #fff;
    border: 0;
    border-radius: 1rem;
    transition: background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out
}

@media(prefers-reduced-motion: reduce) {
    .form-range::-webkit-slider-thumb {
        transition: none
    }
}

.form-range::-webkit-slider-thumb:active {
    background-color: #fff
}

.form-range::-webkit-slider-runnable-track {
    width: 100%;
    height: .125rem;
    color: rgba(0,0,0,0);
    cursor: pointer;
    background-color: rgba(75,70,92,.2);
    border-color: rgba(0,0,0,0);
    border-radius: 1rem
}

.form-range::-moz-range-thumb {
    width: .75rem;
    height: .75rem;
    appearance: none;
    background-color: #fff;
    border: 0;
    border-radius: 1rem;
    transition: background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out
}

@media(prefers-reduced-motion: reduce) {
    .form-range::-moz-range-thumb {
        transition: none
    }
}

.form-range::-moz-range-thumb:active {
    background-color: #fff
}

.form-range::-moz-range-track {
    width: 100%;
    height: .125rem;
    color: rgba(0,0,0,0);
    cursor: pointer;
    background-color: rgba(75,70,92,.2);
    border-color: rgba(0,0,0,0);
    border-radius: 1rem
}

.form-range:disabled {
    pointer-events: none
}

.form-range:disabled::-webkit-slider-thumb {
    background-color: #dbdade
}

.form-range:disabled::-moz-range-thumb {
    background-color: #dbdade
}

.form-floating {
    position: relative
}

.form-floating>.form-control,.form-floating>.form-control-plaintext,.form-floating>.form-select {
    height: calc(3.5rem + calc(var(--bs-border-width) * 2));
    min-height: calc(3.5rem + calc(var(--bs-border-width) * 2));
    line-height: 1.25
}

.form-floating>label {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
    height: 100%;
    padding: 1rem .875rem;
    overflow: hidden;
    text-align: start;
    text-overflow: ellipsis;
    white-space: nowrap;
    pointer-events: none;
    border: var(--bs-border-width) solid rgba(0,0,0,0);
    transform-origin: 0 0;
    transition: opacity .2s ease-in-out,transform .2s ease-in-out
}

@media(prefers-reduced-motion: reduce) {
    .form-floating>label {
        transition: none
    }
}

.form-floating>.form-control,.form-floating>.form-control-plaintext {
    padding: 1rem .875rem
}

.form-floating>.form-control::placeholder,.form-floating>.form-control-plaintext::placeholder {
    color: rgba(0,0,0,0)
}

.form-floating>.form-control:focus,.form-floating>.form-control:not(:placeholder-shown),.form-floating>.form-control-plaintext:focus,.form-floating>.form-control-plaintext:not(:placeholder-shown) {
    padding-top: 1.625rem;
    padding-bottom: .625rem
}

.form-floating>.form-control:-webkit-autofill,.form-floating>.form-control-plaintext:-webkit-autofill {
    padding-top: 1.625rem;
    padding-bottom: .625rem
}

.form-floating>.form-select {
    padding-top: 1.625rem;
    padding-bottom: .625rem
}

.form-floating>.form-control:focus~label,.form-floating>.form-control:not(:placeholder-shown)~label,.form-floating>.form-control-plaintext~label,.form-floating>.form-select~label {
    color: rgba(var(--bs-body-color-rgb), 0.75);
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem)
}

.form-floating>.form-control:focus~label::after,.form-floating>.form-control:not(:placeholder-shown)~label::after,.form-floating>.form-control-plaintext~label::after,.form-floating>.form-select~label::after {
    position: absolute;
    inset: 1rem .4375rem;
    z-index: -1;
    height: 1.5em;
    content: "";
    background-color: #fff;
    border-radius: var(--bs-border-radius)
}

.form-floating>.form-control:-webkit-autofill~label {
    color: rgba(var(--bs-body-color-rgb), 0.75);
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem)
}

.form-floating>.form-control-plaintext~label {
    border-width: var(--bs-border-width) 0
}

.form-floating>:disabled~label,.form-floating>.form-control:disabled~label {
    color: rgba(75,70,92,.6)
}

.form-floating>:disabled~label::after,.form-floating>.form-control:disabled~label::after {
    background-color: rgba(75,70,92,.08)
}

.input-group {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    width: 100%
}

.input-group>.form-control,.input-group>.form-select,.input-group>.form-floating {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    min-width: 0
}

.input-group>.form-control:focus,.input-group>.form-select:focus,.input-group>.form-floating:focus-within {
    z-index: 5
}

.input-group .btn {
    position: relative;
    z-index: 2
}

.input-group .btn:focus {
    z-index: 5
}

.input-group-text {
    display: flex;
    align-items: center;
    padding: .422rem .75rem;
    font-size: 0.9375rem;
    font-weight: 400;
    line-height: 1.5;
    color: #6f6b7d;
    text-align: center;
    white-space: nowrap;
    background-color: #fff;
    border: var(--bs-border-width) solid #dbdade;
    border-radius: var(--bs-border-radius)
}

.input-group-lg>.form-control,.input-group-lg>.form-select,.input-group-lg>.input-group-text,.input-group-lg>.btn {
    padding: .594rem 1rem;
    font-size: 1.125rem;
    border-radius: var(--bs-border-radius-lg)
}

.input-group-sm>.form-control,.input-group-sm>.form-select,.input-group-sm>.input-group-text,.input-group-sm>.btn {
    padding: .266rem .625rem;
    font-size: 0.8125rem;
    border-radius: var(--bs-border-radius-sm)
}

.input-group-lg>.form-select,.input-group-sm>.form-select {
    padding-right: 3.325rem
}

.input-group:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),.input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),.input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-control,.input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-select {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group.has-validation>:nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),.input-group.has-validation>.dropdown-toggle:nth-last-child(n+4),.input-group.has-validation>.form-floating:nth-last-child(n+3)>.form-control,.input-group.has-validation>.form-floating:nth-last-child(n+3)>.form-select {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
    margin-left: calc(var(--bs-border-width)*-1);
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.input-group>.form-floating:not(:first-child)>.form-control,.input-group>.form-floating:not(:first-child)>.form-select {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.btn {
    --bs-btn-padding-x: 1.25rem;
    --bs-btn-padding-y: 0.6rem;
    --bs-btn-font-family: ;
    --bs-btn-font-size: 0.9375rem;
    --bs-btn-font-weight: 500;
    --bs-btn-line-height: 1.125;
    --bs-btn-color: var(--bs-body-color);
    --bs-btn-bg: transparent;
    --bs-btn-border-width: var(--bs-border-width);
    --bs-btn-border-color: transparent;
    --bs-btn-border-radius: var(--bs-border-radius);
    --bs-btn-hover-border-color: transparent;
    --bs-btn-box-shadow: 0 0.125rem 0.25rem rgba(165, 163, 174, 0.3);
    --bs-btn-disabled-opacity: 0.65;
    --bs-btn-focus-box-shadow: 0 0 0 0.05rem rgba(var(--bs-btn-focus-shadow-rgb), .5);
    display: inline-block;
    padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
    font-family: var(--bs-btn-font-family);
    font-size: var(--bs-btn-font-size);
    font-weight: var(--bs-btn-font-weight);
    line-height: var(--bs-btn-line-height);
    color: var(--bs-btn-color);
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    user-select: none;
    border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
    border-radius: var(--bs-btn-border-radius);
    background-color: var(--bs-btn-bg);
    transition: all .2s ease-in-out
}

@media(prefers-reduced-motion: reduce) {
    .btn {
        transition: none
    }
}

.btn:hover {
    color: var(--bs-btn-hover-color);
    background-color: var(--bs-btn-hover-bg);
    border-color: var(--bs-btn-hover-border-color)
}

.btn-check+.btn:hover {
    color: var(--bs-btn-color);
    background-color: var(--bs-btn-bg);
    border-color: var(--bs-btn-border-color)
}

.btn:focus-visible {
    color: var(--bs-btn-hover-color);
    background-color: var(--bs-btn-hover-bg);
    border-color: var(--bs-btn-hover-border-color);
    outline: 0;
    box-shadow: var(--bs-btn-focus-box-shadow)
}

.btn-check:focus-visible+.btn {
    border-color: var(--bs-btn-hover-border-color);
    outline: 0;
    box-shadow: var(--bs-btn-focus-box-shadow)
}

.btn-check:checked+.btn,:not(.btn-check)+.btn:active,.btn:first-child:active,.btn.active,.btn.show {
    color: var(--bs-btn-active-color);
    background-color: var(--bs-btn-active-bg);
    border-color: var(--bs-btn-active-border-color)
}

.btn-check:checked+.btn:focus-visible,:not(.btn-check)+.btn:active:focus-visible,.btn:first-child:active:focus-visible,.btn.active:focus-visible,.btn.show:focus-visible {
    box-shadow: var(--bs-btn-focus-box-shadow)
}

.btn:disabled,.btn.disabled,fieldset:disabled .btn {
    color: var(--bs-btn-disabled-color);
    pointer-events: none;
    background-color: var(--bs-btn-disabled-bg);
    border-color: var(--bs-btn-disabled-border-color);
    opacity: var(--bs-btn-disabled-opacity)
}

.btn-link {
    --bs-btn-font-weight: 400;
    --bs-btn-color: var(--bs-link-color);
    --bs-btn-bg: transparent;
    --bs-btn-border-color: transparent;
    --bs-btn-hover-color: var(--bs-link-hover-color);
    --bs-btn-hover-border-color: transparent;
    --bs-btn-active-color: var(--bs-link-hover-color);
    --bs-btn-active-border-color: transparent;
    --bs-btn-disabled-color: rgba(75, 70, 92, 0.6);
    --bs-btn-disabled-border-color: transparent;
    --bs-btn-box-shadow: 0 0 0 #000;
    --bs-btn-focus-shadow-rgb: 136, 126, 242;
    text-decoration: none
}

.btn-link:focus-visible {
    color: var(--bs-btn-color)
}

.btn-link:hover {
    color: var(--bs-btn-hover-color)
}

.btn-lg,.btn-group-lg>.btn {
    --bs-btn-padding-y: 0.84rem;
    --bs-btn-padding-x: 1.625rem;
    --bs-btn-font-size: 1.0625rem;
    --bs-btn-border-radius: var(--bs-border-radius-lg)
}

.btn-sm,.btn-group-sm>.btn {
    --bs-btn-padding-y: 0.41rem;
    --bs-btn-padding-x: 0.875rem;
    --bs-btn-font-size: 0.8125rem;
    --bs-btn-border-radius: var(--bs-border-radius-sm)
}

.fade {
    transition: opacity .15s linear
}

@media(prefers-reduced-motion: reduce) {
    .fade {
        transition: none
    }
}

.fade:not(.show) {
    opacity: 0
}

.collapse:not(.show) {
    display: none
}

.collapsing {
    height: 0;
    overflow: hidden;
    transition: height .35s ease
}

@media(prefers-reduced-motion: reduce) {
    .collapsing {
        transition: none
    }
}

.collapsing.collapse-horizontal {
    width: 0;
    height: auto;
    transition: width .35s ease
}

@media(prefers-reduced-motion: reduce) {
    .collapsing.collapse-horizontal {
        transition: none
    }
}

.dropup,.dropend,.dropdown,.dropstart,.dropup-center,.dropdown-center {
    position: relative
}

.dropdown-toggle {
    white-space: nowrap
}

.dropdown-toggle::after {
    display: inline-block;
    margin-left: .5em;
    vertical-align: middle;
    content: "";
    margin-top: -0.28em;
    width: .42em;
    height: .42em;
    border: 1px solid;
    border-top: 0;
    border-left: 0;
    transform: rotate(45deg)
}

.dropdown-toggle:empty::after {
    margin-left: 0
}

.dropdown-menu {
    --bs-dropdown-zindex: 1000;
    --bs-dropdown-min-width: 10rem;
    --bs-dropdown-padding-x: 0;
    --bs-dropdown-padding-y: 0.5rem;
    --bs-dropdown-spacer: 0.25rem;
    --bs-dropdown-font-size: 0.9375rem;
    --bs-dropdown-color: var(--bs-body-color);
    --bs-dropdown-bg: #fff;
    --bs-dropdown-border-color: #dbdade;
    --bs-dropdown-border-radius: var(--bs-border-radius);
    --bs-dropdown-border-width: 0px;
    --bs-dropdown-inner-border-radius: 0px;
    --bs-dropdown-divider-bg: #dbdade;
    --bs-dropdown-divider-margin-y: 0.5rem;
    --bs-dropdown-box-shadow: 0 0.25rem 1rem rgba(165, 163, 174, 0.45);
    --bs-dropdown-link-color: #5d596c;
    --bs-dropdown-link-hover-color: #7367f0;
    --bs-dropdown-link-hover-bg: rgba(115, 103, 240, 0.08);
    --bs-dropdown-link-active-color: #fff;
    --bs-dropdown-link-active-bg: #7367f0;
    --bs-dropdown-link-disabled-color: #c9c8ce;
    --bs-dropdown-item-padding-x: 1rem;
    --bs-dropdown-item-padding-y: 0.42rem;
    --bs-dropdown-header-color: #a5a3ae;
    --bs-dropdown-header-padding-x: 1rem;
    --bs-dropdown-header-padding-y: 0.5rem;
    position: absolute;
    z-index: var(--bs-dropdown-zindex);
    display: none;
    min-width: var(--bs-dropdown-min-width);
    padding: var(--bs-dropdown-padding-y) var(--bs-dropdown-padding-x);
    margin: 0;
    font-size: var(--bs-dropdown-font-size);
    color: var(--bs-dropdown-color);
    text-align: left;
    list-style: none;
    background-color: var(--bs-dropdown-bg);
    background-clip: padding-box;
    border: var(--bs-dropdown-border-width) solid var(--bs-dropdown-border-color);
    border-radius: var(--bs-dropdown-border-radius)
}

.dropdown-menu[data-bs-popper] {
    top: 100%;
    left: 0;
    margin-top: var(--bs-dropdown-spacer)
}

.dropdown-menu-start {
    --bs-position: start
}

.dropdown-menu-start[data-bs-popper] {
    right: auto;
    left: 0
}

.dropdown-menu-end {
    --bs-position: end
}

.dropdown-menu-end[data-bs-popper] {
    right: 0;
    left: auto
}

@media(min-width: 576px) {
    .dropdown-menu-sm-start {
        --bs-position: start
    }

    .dropdown-menu-sm-start[data-bs-popper] {
        right: auto;
        left: 0
    }

    .dropdown-menu-sm-end {
        --bs-position: end
    }

    .dropdown-menu-sm-end[data-bs-popper] {
        right: 0;
        left: auto
    }
}

@media(min-width: 768px) {
    .dropdown-menu-md-start {
        --bs-position: start
    }

    .dropdown-menu-md-start[data-bs-popper] {
        right: auto;
        left: 0
    }

    .dropdown-menu-md-end {
        --bs-position: end
    }

    .dropdown-menu-md-end[data-bs-popper] {
        right: 0;
        left: auto
    }
}

@media(min-width: 992px) {
    .dropdown-menu-lg-start {
        --bs-position: start
    }

    .dropdown-menu-lg-start[data-bs-popper] {
        right: auto;
        left: 0
    }

    .dropdown-menu-lg-end {
        --bs-position: end
    }

    .dropdown-menu-lg-end[data-bs-popper] {
        right: 0;
        left: auto
    }
}

@media(min-width: 1200px) {
    .dropdown-menu-xl-start {
        --bs-position: start
    }

    .dropdown-menu-xl-start[data-bs-popper] {
        right: auto;
        left: 0
    }

    .dropdown-menu-xl-end {
        --bs-position: end
    }

    .dropdown-menu-xl-end[data-bs-popper] {
        right: 0;
        left: auto
    }
}

@media(min-width: 1400px) {
    .dropdown-menu-xxl-start {
        --bs-position: start
    }

    .dropdown-menu-xxl-start[data-bs-popper] {
        right: auto;
        left: 0
    }

    .dropdown-menu-xxl-end {
        --bs-position: end
    }

    .dropdown-menu-xxl-end[data-bs-popper] {
        right: 0;
        left: auto
    }
}

.dropup .dropdown-menu[data-bs-popper] {
    top: auto;
    bottom: 100%;
    margin-top: 0;
    margin-bottom: var(--bs-dropdown-spacer)
}

.dropup .dropdown-toggle::after {
    display: inline-block;
    margin-left: .5em;
    vertical-align: middle;
    content: "";
    margin-top: 0;
    width: .42em;
    height: .42em;
    border: 1px solid;
    border-bottom: 0;
    border-left: 0;
    transform: rotate(-45deg)
}

.dropup .dropdown-toggle:empty::after {
    margin-left: 0
}

.dropend .dropdown-menu[data-bs-popper] {
    top: 0;
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: var(--bs-dropdown-spacer)
}

.dropend .dropdown-toggle::after {
    display: inline-block;
    margin-left: .5em;
    vertical-align: middle;
    content: "";
    border-top: .42em solid rgba(0,0,0,0);
    border-right: 0;
    border-bottom: .42em solid rgba(0,0,0,0);
    border-left: .42em solid
}

.dropend .dropdown-toggle:empty::after {
    margin-left: 0
}

.dropend .dropdown-toggle::after {
    vertical-align: 0
}

.dropstart .dropdown-menu[data-bs-popper] {
    top: 0;
    right: 100%;
    left: auto;
    margin-top: 0;
    margin-right: var(--bs-dropdown-spacer)
}

.dropstart .dropdown-toggle::after {
    display: inline-block;
    margin-left: .5em;
    vertical-align: middle;
    content: ""
}

.dropstart .dropdown-toggle::after {
    display: none
}

.dropstart .dropdown-toggle::before {
    display: inline-block;
    margin-right: .5em;
    vertical-align: middle;
    content: "";
    border-top: .42em solid rgba(0,0,0,0);
    border-right: .42em solid;
    border-bottom: .42em solid rgba(0,0,0,0)
}

.dropstart .dropdown-toggle:empty::after {
    margin-left: 0
}

.dropstart .dropdown-toggle::before {
    vertical-align: 0
}

.dropdown-divider {
    height: 0;
    margin: var(--bs-dropdown-divider-margin-y) 0;
    overflow: hidden;
    border-top: 1px solid var(--bs-dropdown-divider-bg);
    opacity: 1
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
    clear: both;
    font-weight: 400;
    color: var(--bs-dropdown-link-color);
    text-align: inherit;
    white-space: nowrap;
    background-color: rgba(0,0,0,0);
    border: 0;
    border-radius: var(--bs-dropdown-item-border-radius, 0)
}

.dropdown-item:hover,.dropdown-item:focus {
    color: var(--bs-dropdown-link-hover-color);
    background-color: var(--bs-dropdown-link-hover-bg)
}

.dropdown-item.active,.dropdown-item:active {
    color: var(--bs-dropdown-link-active-color);
    text-decoration: none;
    background-color: var(--bs-dropdown-link-active-bg)
}

.dropdown-item.disabled,.dropdown-item:disabled {
    color: var(--bs-dropdown-link-disabled-color);
    pointer-events: none;
    background-color: rgba(0,0,0,0)
}

.dropdown-menu.show {
    display: block
}

.dropdown-header {
    display: block;
    padding: var(--bs-dropdown-header-padding-y) var(--bs-dropdown-header-padding-x);
    margin-bottom: 0;
    font-size: 0.75rem;
    color: var(--bs-dropdown-header-color);
    white-space: nowrap
}

.dropdown-item-text {
    display: block;
    padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
    color: var(--bs-dropdown-link-color)
}

.dropdown-menu-dark {
    --bs-dropdown-color: rgba(75, 70, 92, 0.3);
    --bs-dropdown-bg: rgba(75, 70, 92, 0.8);
    --bs-dropdown-border-color: #dbdade;
    --bs-dropdown-box-shadow: ;
    --bs-dropdown-link-color: rgba(75, 70, 92, 0.3);
    --bs-dropdown-link-hover-color: #fff;
    --bs-dropdown-divider-bg: #dbdade;
    --bs-dropdown-link-hover-bg: rgba(255, 255, 255, 0.15);
    --bs-dropdown-link-active-color: #fff;
    --bs-dropdown-link-active-bg: #7367f0;
    --bs-dropdown-link-disabled-color: rgba(75, 70, 92, 0.5);
    --bs-dropdown-header-color: rgba(75, 70, 92, 0.5)
}

.btn-group,.btn-group-vertical {
    position: relative;
    display: inline-flex;
    vertical-align: middle
}

.btn-group>.btn,.btn-group-vertical>.btn {
    position: relative;
    flex: 1 1 auto
}

.btn-group>.btn-check:checked+.btn,.btn-group>.btn-check:focus+.btn,.btn-group>.btn:hover,.btn-group>.btn:focus,.btn-group>.btn:active,.btn-group>.btn.active,.btn-group-vertical>.btn-check:checked+.btn,.btn-group-vertical>.btn-check:focus+.btn,.btn-group-vertical>.btn:hover,.btn-group-vertical>.btn:focus,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn.active {
    z-index: 1
}

.btn-toolbar {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start
}

.btn-toolbar .input-group {
    width: auto
}

.btn-group {
    border-radius: var(--bs-border-radius)
}

.btn-group>:not(.btn-check:first-child)+.btn,.btn-group>.btn-group:not(:first-child) {
    margin-left: calc(var(--bs-border-width)*-1)
}

.btn-group>.btn:not(:last-child):not(.dropdown-toggle),.btn-group>.btn.dropdown-toggle-split:first-child,.btn-group>.btn-group:not(:last-child)>.btn {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.btn-group>.btn:nth-child(n+3),.btn-group>:not(.btn-check)+.btn,.btn-group>.btn-group:not(:first-child)>.btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.dropdown-toggle-split {
    padding-right: .9375rem;
    padding-left: .9375rem
}

.dropdown-toggle-split::after,.dropup .dropdown-toggle-split::after,.dropend .dropdown-toggle-split::after {
    margin-left: 0
}

.dropstart .dropdown-toggle-split::before {
    margin-right: 0
}

.btn-sm+.dropdown-toggle-split,.btn-group-sm>.btn+.dropdown-toggle-split {
    padding-right: .65625rem;
    padding-left: .65625rem
}

.btn-lg+.dropdown-toggle-split,.btn-group-lg>.btn+.dropdown-toggle-split {
    padding-right: 1.21875rem;
    padding-left: 1.21875rem
}

.btn-group-vertical {
    flex-direction: column;
    align-items: flex-start;
    justify-content: center
}

.btn-group-vertical>.btn,.btn-group-vertical>.btn-group {
    width: 100%
}

.btn-group-vertical>.btn:not(:first-child),.btn-group-vertical>.btn-group:not(:first-child) {
    margin-top: calc(var(--bs-border-width)*-1)
}

.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle),.btn-group-vertical>.btn-group:not(:last-child)>.btn {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.btn-group-vertical>.btn~.btn,.btn-group-vertical>.btn-group:not(:first-child)>.btn {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.nav {
    --bs-nav-link-padding-x: 1.25rem;
    --bs-nav-link-padding-y: 0.543rem;
    --bs-nav-link-font-weight: ;
    --bs-nav-link-color: #5d596c;
    --bs-nav-link-hover-color: var(--bs-link-hover-color);
    --bs-nav-link-disabled-color: #a5a3ae;
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.nav-link {
    display: block;
    padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
    font-size: var(--bs-nav-link-font-size);
    font-weight: var(--bs-nav-link-font-weight);
    color: var(--bs-nav-link-color);
    background: none;
    border: 0;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out
}

@media(prefers-reduced-motion: reduce) {
    .nav-link {
        transition: none
    }
}

.nav-link:hover,.nav-link:focus {
    color: var(--bs-nav-link-hover-color)
}

.nav-link:focus-visible {
    outline: 0;
    box-shadow: 0 0 0 .15rem rgba(75,70,92,.75)
}

.nav-link.disabled,.nav-link:disabled {
    color: var(--bs-nav-link-disabled-color);
    pointer-events: none;
    cursor: default
}

.nav-tabs {
    --bs-nav-tabs-border-width: var(--bs-border-width);
    --bs-nav-tabs-border-color: transparent;
    --bs-nav-tabs-border-radius: var(--bs-border-radius);
    --bs-nav-tabs-link-hover-border-color: var(--bs-secondary-bg) var(--bs-secondary-bg) transparent;
    --bs-nav-tabs-link-active-color: #7367f0;
    --bs-nav-tabs-link-active-bg: #fff;
    --bs-nav-tabs-link-active-border-color: var(--bs-border-color) var(--bs-border-color) #fff;
    border-bottom: var(--bs-nav-tabs-border-width) solid var(--bs-nav-tabs-border-color)
}

.nav-tabs .nav-link {
    margin-bottom: calc(-1*var(--bs-nav-tabs-border-width));
    border: var(--bs-nav-tabs-border-width) solid rgba(0,0,0,0);
    border-top-left-radius: var(--bs-nav-tabs-border-radius);
    border-top-right-radius: var(--bs-nav-tabs-border-radius)
}

.nav-tabs .nav-link:hover,.nav-tabs .nav-link:focus {
    isolation: isolate;
    border-color: var(--bs-nav-tabs-link-hover-border-color)
}

.nav-tabs .nav-link.active,.nav-tabs .nav-item.show .nav-link {
    color: var(--bs-nav-tabs-link-active-color);
    background-color: var(--bs-nav-tabs-link-active-bg);
    border-color: var(--bs-nav-tabs-link-active-border-color)
}

.nav-tabs .dropdown-menu {
    margin-top: calc(-1*var(--bs-nav-tabs-border-width));
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.nav-pills {
    --bs-nav-pills-border-radius: var(--bs-border-radius);
    --bs-nav-pills-link-active-color: #fff;
    --bs-nav-pills-link-active-bg: #7367f0
}

.nav-pills .nav-link {
    border-radius: var(--bs-nav-pills-border-radius)
}

.nav-pills .nav-link.active,.nav-pills .show>.nav-link {
    color: var(--bs-nav-pills-link-active-color);
    background-color: var(--bs-nav-pills-link-active-bg)
}

.nav-underline {
    --bs-nav-underline-gap: 1rem;
    --bs-nav-underline-border-width: 0.125rem;
    --bs-nav-underline-link-active-color: var(--bs-emphasis-color);
    gap: var(--bs-nav-underline-gap)
}

.nav-underline .nav-link {
    padding-right: 0;
    padding-left: 0;
    border-bottom: var(--bs-nav-underline-border-width) solid rgba(0,0,0,0)
}

.nav-underline .nav-link:hover,.nav-underline .nav-link:focus {
    border-bottom-color: currentcolor
}

.nav-underline .nav-link.active,.nav-underline .show>.nav-link {
    font-weight: 700;
    color: var(--bs-nav-underline-link-active-color);
    border-bottom-color: currentcolor
}

.nav-fill>.nav-link,.nav-fill .nav-item {
    flex: 1 1 auto;
    text-align: center
}

.nav-justified>.nav-link,.nav-justified .nav-item {
    flex-basis: 0;
    flex-grow: 1;
    text-align: center
}

.nav-fill .nav-item .nav-link,.nav-justified .nav-item .nav-link {
    width: 100%
}

.tab-content>.tab-pane {
    display: none
}

.tab-content>.active {
    display: block
}

.navbar {
    --bs-navbar-padding-x: 0;
    --bs-navbar-padding-y: 0.5rem;
    --bs-navbar-color: rgba(75, 70, 92, 0.5);
    --bs-navbar-hover-color: #6f6b7d;
    --bs-navbar-disabled-color: rgba(75, 70, 92, 0.3);
    --bs-navbar-active-color: #6f6b7d;
    --bs-navbar-brand-padding-y: 0.4970625rem;
    --bs-navbar-brand-margin-end: 1rem;
    --bs-navbar-brand-font-size: 1rem;
    --bs-navbar-brand-color: #6f6b7d;
    --bs-navbar-brand-hover-color: #6f6b7d;
    --bs-navbar-nav-link-padding-x: 0.5rem;
    --bs-navbar-toggler-padding-y: 0.5rem;
    --bs-navbar-toggler-padding-x: 0.7rem;
    --bs-navbar-toggler-font-size: 0.625rem;
    --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3Csvg width=\'14px\' height=\'11px\' viewBox=\'0 0 14 11\' version=\'1.1\' xmlns=\'http://www.w3.org/2000/svg\' xmlns:xlink=\'http://www.w3.org/1999/xlink\'%3E%3Cdefs%3E%3Cpath d=\'M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z\' id=\'path-1\'%3E%3C/path%3E%3C/defs%3E%3Cg id=\'💎-UI-Elements\' stroke=\'none\' stroke-width=\'1\' fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg id=\'12%29-Navbar\' transform=\'translate%28-1174.000000, -1290.000000%29\'%3E%3Cg id=\'Group\' transform=\'translate%281174.000000, 1288.000000%29\'%3E%3Cg id=\'Icon-Color\' transform=\'translate%280.000000, 2.000000%29\'%3E%3Cuse fill=\'rgba%2875, 70, 92, 0.5%29\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3Cuse fill-opacity=\'0.1\' fill=\'rgba%2875, 70, 92, 0.5%29\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    --bs-navbar-toggler-border-color: rgba(75, 70, 92, 0.06);
    --bs-navbar-toggler-border-radius: var(--bs-border-radius);
    --bs-navbar-toggler-focus-width: 0.05rem;
    --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x)
}

.navbar>.container,.navbar>.container-fluid,.navbar>.container-sm,.navbar>.container-md,.navbar>.container-lg,.navbar>.container-xl,.navbar>.container-xxl {
    display: flex;
    flex-wrap: inherit;
    align-items: center;
    justify-content: space-between
}

.navbar-brand {
    padding-top: var(--bs-navbar-brand-padding-y);
    padding-bottom: var(--bs-navbar-brand-padding-y);
    margin-right: var(--bs-navbar-brand-margin-end);
    font-size: var(--bs-navbar-brand-font-size);
    color: var(--bs-navbar-brand-color);
    white-space: nowrap
}

.navbar-brand:hover,.navbar-brand:focus {
    color: var(--bs-navbar-brand-hover-color)
}

.navbar-nav {
    --bs-nav-link-padding-x: 0;
    --bs-nav-link-padding-y: 0.543rem;
    --bs-nav-link-font-weight: ;
    --bs-nav-link-color: var(--bs-navbar-color);
    --bs-nav-link-hover-color: var(--bs-navbar-hover-color);
    --bs-nav-link-disabled-color: var(--bs-navbar-disabled-color);
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.navbar-nav .nav-link.active,.navbar-nav .nav-link.show {
    color: var(--bs-navbar-active-color)
}

.navbar-nav .dropdown-menu {
    position: static
}

.navbar-text {
    padding-top: .543rem;
    padding-bottom: .543rem;
    color: var(--bs-navbar-color)
}

.navbar-text a,.navbar-text a:hover,.navbar-text a:focus {
    color: var(--bs-navbar-active-color)
}

.navbar-collapse {
    flex-basis: 100%;
    flex-grow: 1;
    align-items: center
}

.navbar-toggler {
    padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);
    font-size: var(--bs-navbar-toggler-font-size);
    line-height: 1;
    color: var(--bs-navbar-color);
    background-color: rgba(0,0,0,0);
    border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color);
    border-radius: var(--bs-navbar-toggler-border-radius);
    transition: var(--bs-navbar-toggler-transition)
}

@media(prefers-reduced-motion: reduce) {
    .navbar-toggler {
        transition: none
    }
}

.navbar-toggler:hover {
    text-decoration: none
}

.navbar-toggler:focus {
    text-decoration: none;
    outline: 0;
    box-shadow: 0 0 0 var(--bs-navbar-toggler-focus-width)
}

.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    background-image: var(--bs-navbar-toggler-icon-bg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100%
}

.navbar-nav-scroll {
    max-height: var(--bs-scroll-height, 75vh);
    overflow-y: auto
}

@media(min-width: 576px) {
    .navbar-expand-sm {
        flex-wrap:nowrap;
        justify-content: flex-start
    }

    .navbar-expand-sm .navbar-nav {
        flex-direction: row
    }

    .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x)
    }

    .navbar-expand-sm .navbar-nav-scroll {
        overflow: visible
    }

    .navbar-expand-sm .navbar-collapse {
        display: flex !important;
        flex-basis: auto
    }

    .navbar-expand-sm .navbar-toggler {
        display: none
    }

    .navbar-expand-sm .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: rgba(0,0,0,0) !important;
        border: 0 !important;
        transform: none !important;
        transition: none
    }

    .navbar-expand-sm .offcanvas .offcanvas-header {
        display: none
    }

    .navbar-expand-sm .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible
    }
}

@media(min-width: 768px) {
    .navbar-expand-md {
        flex-wrap:nowrap;
        justify-content: flex-start
    }

    .navbar-expand-md .navbar-nav {
        flex-direction: row
    }

    .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-md .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x)
    }

    .navbar-expand-md .navbar-nav-scroll {
        overflow: visible
    }

    .navbar-expand-md .navbar-collapse {
        display: flex !important;
        flex-basis: auto
    }

    .navbar-expand-md .navbar-toggler {
        display: none
    }

    .navbar-expand-md .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: rgba(0,0,0,0) !important;
        border: 0 !important;
        transform: none !important;
        transition: none
    }

    .navbar-expand-md .offcanvas .offcanvas-header {
        display: none
    }

    .navbar-expand-md .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible
    }
}

@media(min-width: 992px) {
    .navbar-expand-lg {
        flex-wrap:nowrap;
        justify-content: flex-start
    }

    .navbar-expand-lg .navbar-nav {
        flex-direction: row
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x)
    }

    .navbar-expand-lg .navbar-nav-scroll {
        overflow: visible
    }

    .navbar-expand-lg .navbar-collapse {
        display: flex !important;
        flex-basis: auto
    }

    .navbar-expand-lg .navbar-toggler {
        display: none
    }

    .navbar-expand-lg .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: rgba(0,0,0,0) !important;
        border: 0 !important;
        transform: none !important;
        transition: none
    }

    .navbar-expand-lg .offcanvas .offcanvas-header {
        display: none
    }

    .navbar-expand-lg .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible
    }
}

@media(min-width: 1200px) {
    .navbar-expand-xl {
        flex-wrap:nowrap;
        justify-content: flex-start
    }

    .navbar-expand-xl .navbar-nav {
        flex-direction: row
    }

    .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x)
    }

    .navbar-expand-xl .navbar-nav-scroll {
        overflow: visible
    }

    .navbar-expand-xl .navbar-collapse {
        display: flex !important;
        flex-basis: auto
    }

    .navbar-expand-xl .navbar-toggler {
        display: none
    }

    .navbar-expand-xl .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: rgba(0,0,0,0) !important;
        border: 0 !important;
        transform: none !important;
        transition: none
    }

    .navbar-expand-xl .offcanvas .offcanvas-header {
        display: none
    }

    .navbar-expand-xl .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible
    }
}

@media(min-width: 1400px) {
    .navbar-expand-xxl {
        flex-wrap:nowrap;
        justify-content: flex-start
    }

    .navbar-expand-xxl .navbar-nav {
        flex-direction: row
    }

    .navbar-expand-xxl .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-xxl .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x)
    }

    .navbar-expand-xxl .navbar-nav-scroll {
        overflow: visible
    }

    .navbar-expand-xxl .navbar-collapse {
        display: flex !important;
        flex-basis: auto
    }

    .navbar-expand-xxl .navbar-toggler {
        display: none
    }

    .navbar-expand-xxl .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: rgba(0,0,0,0) !important;
        border: 0 !important;
        transform: none !important;
        transition: none
    }

    .navbar-expand-xxl .offcanvas .offcanvas-header {
        display: none
    }

    .navbar-expand-xxl .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible
    }
}

.navbar-expand {
    flex-wrap: nowrap;
    justify-content: flex-start
}

.navbar-expand .navbar-nav {
    flex-direction: row
}

.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute
}

.navbar-expand .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x)
}

.navbar-expand .navbar-nav-scroll {
    overflow: visible
}

.navbar-expand .navbar-collapse {
    display: flex !important;
    flex-basis: auto
}

.navbar-expand .navbar-toggler {
    display: none
}

.navbar-expand .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: rgba(0,0,0,0) !important;
    border: 0 !important;
    transform: none !important;
    transition: none
}

.navbar-expand .offcanvas .offcanvas-header {
    display: none
}

.navbar-expand .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible
}

.navbar-dark,.navbar[data-bs-theme=dark] {
    --bs-navbar-color: rgba(255, 255, 255, 0.8);
    --bs-navbar-hover-color: #fff;
    --bs-navbar-disabled-color: rgba(255, 255, 255, 0.4);
    --bs-navbar-active-color: #fff;
    --bs-navbar-brand-color: #fff;
    --bs-navbar-brand-hover-color: #fff;
    --bs-navbar-toggler-border-color: rgba(255, 255, 255, 0.1);
    --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3Csvg width=\'14px\' height=\'11px\' viewBox=\'0 0 14 11\' version=\'1.1\' xmlns=\'http://www.w3.org/2000/svg\' xmlns:xlink=\'http://www.w3.org/1999/xlink\'%3E%3Cdefs%3E%3Cpath d=\'M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z\' id=\'path-1\'%3E%3C/path%3E%3C/defs%3E%3Cg id=\'💎-UI-Elements\' stroke=\'none\' stroke-width=\'1\' fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg id=\'12%29-Navbar\' transform=\'translate%28-1174.000000, -1290.000000%29\'%3E%3Cg id=\'Group\' transform=\'translate%281174.000000, 1288.000000%29\'%3E%3Cg id=\'Icon-Color\' transform=\'translate%280.000000, 2.000000%29\'%3E%3Cuse fill=\'rgba%28255, 255, 255, 0.8%29\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3Cuse fill-opacity=\'0.1\' fill=\'rgba%28255, 255, 255, 0.8%29\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E")
}

.card {
    --bs-card-spacer-y: 1.5rem;
    --bs-card-spacer-x: 1.5rem;
    --bs-card-title-spacer-y: 0.875rem;
    --bs-card-title-color: #5d596c;
    --bs-card-subtitle-color: ;
    --bs-card-border-width: 0;
    --bs-card-border-color: #dbdade;
    --bs-card-border-radius: var(--bs-border-radius);
    --bs-card-box-shadow: 0 0.25rem 1.125rem rgba(75, 70, 92, 0.1);
    --bs-card-inner-border-radius: 0.375rem;
    --bs-card-cap-padding-y: 1.5rem;
    --bs-card-cap-padding-x: 1.5rem;
    --bs-card-cap-bg: transparent;
    --bs-card-cap-color: ;
    --bs-card-height: ;
    --bs-card-color: ;
    --bs-card-bg: #fff;
    --bs-card-img-overlay-padding: 1.5rem;
    --bs-card-group-margin: 0.75rem;
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    height: var(--bs-card-height);
    color: var(--bs-body-color);
    word-wrap: break-word;
    background-color: var(--bs-card-bg);
    background-clip: border-box;
    border: var(--bs-card-border-width) solid var(--bs-card-border-color);
    border-radius: var(--bs-card-border-radius)
}

.card>hr {
    margin-right: 0;
    margin-left: 0
}

.card>.list-group {
    border-top: inherit;
    border-bottom: inherit
}

.card>.list-group:first-child {
    border-top-width: 0;
    border-top-left-radius: var(--bs-card-inner-border-radius);
    border-top-right-radius: var(--bs-card-inner-border-radius)
}

.card>.list-group:last-child {
    border-bottom-width: 0;
    border-bottom-right-radius: var(--bs-card-inner-border-radius);
    border-bottom-left-radius: var(--bs-card-inner-border-radius)
}

.card>.card-header+.list-group,.card>.list-group+.card-footer {
    border-top: 0
}

.card-body {
    flex: 1 1 auto;
    padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
    color: var(--bs-card-color)
}

.card-title {
    margin-bottom: var(--bs-card-title-spacer-y);
    color: var(--bs-card-title-color)
}

.card-subtitle {
    margin-top: calc(-0.5*var(--bs-card-title-spacer-y));
    margin-bottom: 0;
    color: var(--bs-card-subtitle-color)
}

.card-text:last-child {
    margin-bottom: 0
}

.card-link+.card-link {
    margin-left: var(--bs-card-spacer-x)
}

.card-header {
    padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
    margin-bottom: 0;
    color: var(--bs-card-cap-color);
    background-color: var(--bs-card-cap-bg);
    border-bottom: var(--bs-card-border-width) solid var(--bs-card-border-color)
}

.card-header:first-child {
    border-radius: var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius) 0 0
}

.card-footer {
    padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
    color: var(--bs-card-cap-color);
    background-color: var(--bs-card-cap-bg);
    border-top: var(--bs-card-border-width) solid var(--bs-card-border-color)
}

.card-footer:last-child {
    border-radius: 0 0 var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius)
}

.card-header-tabs {
    margin-right: calc(-0.5*var(--bs-card-cap-padding-x));
    margin-bottom: calc(-1*var(--bs-card-cap-padding-y));
    margin-left: calc(-0.5*var(--bs-card-cap-padding-x));
    border-bottom: 0
}

.card-header-tabs .nav-link.active {
    background-color: var(--bs-card-bg);
    border-bottom-color: var(--bs-card-bg)
}

.card-header-pills {
    margin-right: calc(-0.5*var(--bs-card-cap-padding-x));
    margin-left: calc(-0.5*var(--bs-card-cap-padding-x))
}

.card-img-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: var(--bs-card-img-overlay-padding);
    border-radius: var(--bs-card-inner-border-radius)
}

.card-img,.card-img-top,.card-img-bottom {
    width: 100%
}

.card-img,.card-img-top {
    border-top-left-radius: var(--bs-card-inner-border-radius);
    border-top-right-radius: var(--bs-card-inner-border-radius)
}

.card-img,.card-img-bottom {
    border-bottom-right-radius: var(--bs-card-inner-border-radius);
    border-bottom-left-radius: var(--bs-card-inner-border-radius)
}

.card-group>.card {
    margin-bottom: var(--bs-card-group-margin)
}

@media(min-width: 576px) {
    .card-group {
        display:flex;
        flex-flow: row wrap
    }

    .card-group>.card {
        flex: 1 0 0%;
        margin-bottom: 0
    }

    .card-group>.card+.card {
        margin-left: 0;
        border-left: 0
    }

    .card-group>.card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .card-group>.card:not(:last-child) .card-img-top,.card-group>.card:not(:last-child) .card-header {
        border-top-right-radius: 0
    }

    .card-group>.card:not(:last-child) .card-img-bottom,.card-group>.card:not(:last-child) .card-footer {
        border-bottom-right-radius: 0
    }

    .card-group>.card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .card-group>.card:not(:first-child) .card-img-top,.card-group>.card:not(:first-child) .card-header {
        border-top-left-radius: 0
    }

    .card-group>.card:not(:first-child) .card-img-bottom,.card-group>.card:not(:first-child) .card-footer {
        border-bottom-left-radius: 0
    }
}

.accordion {
    --bs-accordion-color: var(--bs-body-color);
    --bs-accordion-bg: #fff;
    --bs-accordion-transition: all 0.2s ease-in-out, border-radius 0.15s ease;
    --bs-accordion-border-color: #fff;
    --bs-accordion-border-width: var(--bs-border-width);
    --bs-accordion-border-radius: 0.375rem;
    --bs-accordion-inner-border-radius: calc(0.375rem - (var(--bs-border-width)));
    --bs-accordion-btn-padding-x: 1.125rem;
    --bs-accordion-btn-padding-y: 0.82rem;
    --bs-accordion-btn-color: #5d596c;
    --bs-accordion-btn-bg: var(--bs-accordion-bg);
    --bs-accordion-btn-icon: url("data:image/svg+xml,%3Csvg width=\'20\' height=\'21\' viewBox=\'0 0 20 21\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M7.5 5.5L12.5 10.5L7.5 15.5\' stroke=\'%235d596c\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M7.5 5.5L12.5 10.5L7.5 15.5\' stroke=\'white\' stroke-opacity=\'0.1\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E%0A");
    --bs-accordion-btn-icon-width: 1.125rem;
    --bs-accordion-btn-icon-transform: rotate(90deg);
    --bs-accordion-btn-icon-transition: transform 0.2s ease-in-out;
    --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3Csvg width=\'20\' height=\'21\' viewBox=\'0 0 20 21\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M7.5 5.5L12.5 10.5L7.5 15.5\' stroke=\'%235d596c\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M7.5 5.5L12.5 10.5L7.5 15.5\' stroke=\'white\' stroke-opacity=\'0.1\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E%0A");
    --bs-accordion-btn-focus-border-color: #7367f0;
    --bs-accordion-btn-focus-box-shadow: none;
    --bs-accordion-body-padding-x: 1.125rem;
    --bs-accordion-body-padding-y: 0.82rem;
    --bs-accordion-active-color: #5d596c;
    --bs-accordion-active-bg: #fff
}

.accordion-button {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
    padding: var(--bs-accordion-btn-padding-y) var(--bs-accordion-btn-padding-x);
    font-size: 0.9375rem;
    color: var(--bs-accordion-btn-color);
    text-align: left;
    background-color: var(--bs-accordion-btn-bg);
    border: 0;
    border-radius: 0;
    overflow-anchor: none;
    transition: var(--bs-accordion-transition)
}

@media(prefers-reduced-motion: reduce) {
    .accordion-button {
        transition: none
    }
}

.accordion-button:not(.collapsed) {
    color: var(--bs-accordion-active-color);
    background-color: var(--bs-accordion-active-bg);
    box-shadow: inset 0 calc(-1*var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color)
}

.accordion-button:not(.collapsed)::after {
    background-image: var(--bs-accordion-btn-active-icon);
    transform: var(--bs-accordion-btn-icon-transform)
}

.accordion-button::after {
    flex-shrink: 0;
    width: var(--bs-accordion-btn-icon-width);
    height: var(--bs-accordion-btn-icon-width);
    margin-left: auto;
    content: "";
    background-image: var(--bs-accordion-btn-icon);
    background-repeat: no-repeat;
    background-size: var(--bs-accordion-btn-icon-width);
    transition: var(--bs-accordion-btn-icon-transition)
}

@media(prefers-reduced-motion: reduce) {
    .accordion-button::after {
        transition: none
    }
}

.accordion-button:hover {
    z-index: 2
}

.accordion-button:focus {
    z-index: 3;
    border-color: var(--bs-accordion-btn-focus-border-color);
    outline: 0;
    box-shadow: var(--bs-accordion-btn-focus-box-shadow)
}

.accordion-header {
    margin-bottom: 0
}

.accordion-item {
    color: var(--bs-accordion-color);
    background-color: var(--bs-accordion-bg);
    border: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color)
}

.accordion-item:first-of-type {
    border-top-left-radius: var(--bs-accordion-border-radius);
    border-top-right-radius: var(--bs-accordion-border-radius)
}

.accordion-item:first-of-type .accordion-button {
    border-top-left-radius: var(--bs-accordion-inner-border-radius);
    border-top-right-radius: var(--bs-accordion-inner-border-radius)
}

.accordion-item:not(:first-of-type) {
    border-top: 0
}

.accordion-item:last-of-type {
    border-bottom-right-radius: var(--bs-accordion-border-radius);
    border-bottom-left-radius: var(--bs-accordion-border-radius)
}

.accordion-item:last-of-type .accordion-button.collapsed {
    border-bottom-right-radius: var(--bs-accordion-inner-border-radius);
    border-bottom-left-radius: var(--bs-accordion-inner-border-radius)
}

.accordion-item:last-of-type .accordion-collapse {
    border-bottom-right-radius: var(--bs-accordion-border-radius);
    border-bottom-left-radius: var(--bs-accordion-border-radius)
}

.accordion-body {
    padding: var(--bs-accordion-body-padding-y) var(--bs-accordion-body-padding-x)
}

.accordion-flush .accordion-collapse {
    border-width: 0
}

.accordion-flush .accordion-item {
    border-right: 0;
    border-left: 0;
    border-radius: 0
}

.accordion-flush .accordion-item:first-child {
    border-top: 0
}

.accordion-flush .accordion-item:last-child {
    border-bottom: 0
}

.accordion-flush .accordion-item .accordion-button,.accordion-flush .accordion-item .accordion-button.collapsed {
    border-radius: 0
}

.breadcrumb {
    --bs-breadcrumb-padding-x: 0;
    --bs-breadcrumb-padding-y: 0;
    --bs-breadcrumb-margin-bottom: 1rem;
    --bs-breadcrumb-bg: transparent;
    --bs-breadcrumb-border-radius: ;
    --bs-breadcrumb-divider-color: #4b465c;
    --bs-breadcrumb-item-padding-x: 0.875rem;
    --bs-breadcrumb-item-active-color: #4b465c;
    display: flex;
    flex-wrap: wrap;
    padding: var(--bs-breadcrumb-padding-y) var(--bs-breadcrumb-padding-x);
    margin-bottom: var(--bs-breadcrumb-margin-bottom);
    font-size: var(--bs-breadcrumb-font-size);
    list-style: none;
    background-color: var(--bs-breadcrumb-bg);
    border-radius: var(--bs-breadcrumb-border-radius)
}

.breadcrumb-item+.breadcrumb-item {
    padding-left: var(--bs-breadcrumb-item-padding-x)
}

.breadcrumb-item+.breadcrumb-item::before {
    float: left;
    padding-right: var(--bs-breadcrumb-item-padding-x);
    color: var(--bs-breadcrumb-divider-color);
    content: var(--bs-breadcrumb-divider, url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' class=\'icon icon-tabler icon-tabler-chevron-right\' width=\'16\' height=\'24\' viewBox=\'0 0 24 24\' stroke-width=\'1.75\' stroke=\'%234b465c\' fill=\'none\' stroke-linecap=\'round\' stroke-linejoin=\'round\'%3E%3Cpath stroke=\'none\' d=\'M0 0h24v24H0z\' fill=\'none\'%3E%3C/path%3E%3Cpolyline points=\'9 6 15 12 9 18\'%3E%3C/polyline%3E%3C/svg%3E")) /* rtl: var(--bs-breadcrumb-divider, url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' class=\'icon icon-tabler icon-tabler-chevron-left\' width=\'16\' height=\'24\' viewBox=\'0 0 24 24\' stroke-width=\'1.75\' stroke=\'%234b465c\' fill=\'none\' stroke-linecap=\'round\' stroke-linejoin=\'round\'%3E%3Cpath stroke=\'none\' d=\'M0 0h24v24H0z\' fill=\'none\'%3E%3C/path%3E%3Cpolyline points=\'15 6 9 12 15 18\'%3E%3C/polyline%3E%3C/svg%3E")) */
}

.breadcrumb-item.active {
    color: var(--bs-breadcrumb-item-active-color)
}

.pagination {
    --bs-pagination-padding-x: 0.35rem;
    --bs-pagination-padding-y: 0.745rem;
    --bs-pagination-font-size: 0.9375rem;
    --bs-pagination-color: #5d596c;
    --bs-pagination-bg: rgba(75, 70, 92, 0.08);
    --bs-pagination-border-width: 0px;
    --bs-pagination-border-color: rgba(75, 70, 92, 0.08);
    --bs-pagination-border-radius: var(--bs-border-radius);
    --bs-pagination-hover-color: #5d596c;
    --bs-pagination-hover-bg: rgba(75, 70, 92, 0.16);
    --bs-pagination-hover-border-color: rgba(75, 70, 92, 0.16);
    --bs-pagination-focus-color: #5d596c;
    --bs-pagination-focus-bg: rgba(75, 70, 92, 0.16);
    --bs-pagination-focus-box-shadow: none;
    --bs-pagination-active-color: #fff;
    --bs-pagination-active-bg: #7367f0;
    --bs-pagination-active-border-color: #7367f0;
    --bs-pagination-disabled-color: #a5a3ae;
    --bs-pagination-disabled-bg: rgba(75, 70, 92, 0.08);
    --bs-pagination-disabled-border-color: rgba(75, 70, 92, 0.08);
    display: flex;
    padding-left: 0;
    list-style: none
}

.page-link {
    position: relative;
    display: block;
    padding: var(--bs-pagination-padding-y) var(--bs-pagination-padding-x);
    font-size: var(--bs-pagination-font-size);
    color: var(--bs-pagination-color);
    background-color: var(--bs-pagination-bg);
    border: var(--bs-pagination-border-width) solid var(--bs-pagination-border-color);
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out
}

@media(prefers-reduced-motion: reduce) {
    .page-link {
        transition: none
    }
}

.page-link:hover {
    z-index: 2;
    color: var(--bs-pagination-hover-color);
    background-color: var(--bs-pagination-hover-bg);
    border-color: var(--bs-pagination-hover-border-color)
}

.page-link:focus {
    z-index: 3;
    color: var(--bs-pagination-focus-color);
    background-color: var(--bs-pagination-focus-bg);
    outline: 0;
    box-shadow: var(--bs-pagination-focus-box-shadow)
}

.page-link.active,.active>.page-link {
    z-index: 3;
    color: var(--bs-pagination-active-color);
    background-color: var(--bs-pagination-active-bg);
    border-color: var(--bs-pagination-active-border-color)
}

.page-link.disabled,.disabled>.page-link {
    color: var(--bs-pagination-disabled-color);
    pointer-events: none;
    background-color: var(--bs-pagination-disabled-bg);
    border-color: var(--bs-pagination-disabled-border-color)
}

.page-item:not(:first-child) .page-link {
    margin-left: .25rem
}

.page-item .page-link {
    border-radius: var(--bs-pagination-border-radius)
}

.pagination-lg {
    --bs-pagination-padding-x: 0.4rem;
    --bs-pagination-padding-y: 1rem;
    --bs-pagination-font-size: 1rem;
    --bs-pagination-border-radius: var(--bs-border-radius-lg)
}

.pagination-sm {
    --bs-pagination-padding-x: 0.15rem;
    --bs-pagination-padding-y: 0.5rem;
    --bs-pagination-font-size: 0.75rem;
    --bs-pagination-border-radius: var(--bs-border-radius-sm)
}

.badge {
    --bs-badge-padding-x: 1em;
    --bs-badge-padding-y: 0.49em;
    --bs-badge-font-size: 0.81em;
    --bs-badge-font-weight: 500;
    --bs-badge-color: #fff;
    --bs-badge-border-radius: 0.25rem;
    display: inline-block;
    padding: var(--bs-badge-padding-y) var(--bs-badge-padding-x);
    font-size: var(--bs-badge-font-size);
    font-weight: var(--bs-badge-font-weight);
    line-height: 1;
    color: var(--bs-badge-color);
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: var(--bs-badge-border-radius)
}

.badge:empty {
    display: none
}

.btn .badge {
    position: relative;
    top: -1px
}

.alert {
    --bs-alert-bg: transparent;
    --bs-alert-padding-x: 0.875rem;
    --bs-alert-padding-y: 0.687rem;
    --bs-alert-margin-bottom: 1rem;
    --bs-alert-color: inherit;
    --bs-alert-border-color: transparent;
    --bs-alert-border: var(--bs-border-width) solid var(--bs-alert-border-color);
    --bs-alert-border-radius: 0.375rem;
    --bs-alert-link-color: inherit;
    position: relative;
    padding: var(--bs-alert-padding-y) var(--bs-alert-padding-x);
    margin-bottom: var(--bs-alert-margin-bottom);
    color: var(--bs-alert-color);
    background-color: var(--bs-alert-bg);
    border: var(--bs-alert-border);
    border-radius: var(--bs-alert-border-radius)
}

.alert-heading {
    color: inherit
}

.alert-link {
    font-weight: 700;
    color: var(--bs-alert-link-color)
}

.alert-dismissible {
    padding-right: 2.625rem
}

.alert-dismissible .btn-close {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
    padding: .85875rem .875rem
}

.alert-primary {
    --bs-alert-color: var(--bs-primary-text-emphasis);
    --bs-alert-bg: var(--bs-primary-bg-subtle);
    --bs-alert-border-color: var(--bs-primary-border-subtle);
    --bs-alert-link-color: var(--bs-primary-text-emphasis)
}

.alert-secondary {
    --bs-alert-color: var(--bs-secondary-text-emphasis);
    --bs-alert-bg: var(--bs-secondary-bg-subtle);
    --bs-alert-border-color: var(--bs-secondary-border-subtle);
    --bs-alert-link-color: var(--bs-secondary-text-emphasis)
}

.alert-success {
    --bs-alert-color: var(--bs-success-text-emphasis);
    --bs-alert-bg: var(--bs-success-bg-subtle);
    --bs-alert-border-color: var(--bs-success-border-subtle);
    --bs-alert-link-color: var(--bs-success-text-emphasis)
}

.alert-info {
    --bs-alert-color: var(--bs-info-text-emphasis);
    --bs-alert-bg: var(--bs-info-bg-subtle);
    --bs-alert-border-color: var(--bs-info-border-subtle);
    --bs-alert-link-color: var(--bs-info-text-emphasis)
}

.alert-warning {
    --bs-alert-color: var(--bs-warning-text-emphasis);
    --bs-alert-bg: var(--bs-warning-bg-subtle);
    --bs-alert-border-color: var(--bs-warning-border-subtle);
    --bs-alert-link-color: var(--bs-warning-text-emphasis)
}

.alert-danger {
    --bs-alert-color: var(--bs-danger-text-emphasis);
    --bs-alert-bg: var(--bs-danger-bg-subtle);
    --bs-alert-border-color: var(--bs-danger-border-subtle);
    --bs-alert-link-color: var(--bs-danger-text-emphasis)
}

.alert-light {
    --bs-alert-color: var(--bs-light-text-emphasis);
    --bs-alert-bg: var(--bs-light-bg-subtle);
    --bs-alert-border-color: var(--bs-light-border-subtle);
    --bs-alert-link-color: var(--bs-light-text-emphasis)
}

.alert-dark {
    --bs-alert-color: var(--bs-dark-text-emphasis);
    --bs-alert-bg: var(--bs-dark-bg-subtle);
    --bs-alert-border-color: var(--bs-dark-border-subtle);
    --bs-alert-link-color: var(--bs-dark-text-emphasis)
}

.alert-gray {
    --bs-alert-color: var(--bs-gray-text-emphasis);
    --bs-alert-bg: var(--bs-gray-bg-subtle);
    --bs-alert-border-color: var(--bs-gray-border-subtle);
    --bs-alert-link-color: var(--bs-gray-text-emphasis)
}

@keyframes progress-bar-stripes {
    0% {
        background-position-x: .75rem
    }
}

.progress,.progress-stacked {
    --bs-progress-height: 0.75rem;
    --bs-progress-font-size: 0.75rem;
    --bs-progress-bg: #f1f0f2;
    --bs-progress-border-radius: 3.125rem;
    --bs-progress-box-shadow: var(--bs-box-shadow-inset);
    --bs-progress-bar-color: #fff;
    --bs-progress-bar-bg: #7367f0;
    --bs-progress-bar-transition: width 0.6s ease;
    display: flex;
    height: var(--bs-progress-height);
    overflow: hidden;
    font-size: var(--bs-progress-font-size);
    background-color: var(--bs-progress-bg);
    border-radius: var(--bs-progress-border-radius)
}

.progress-bar {
    display: flex;
    flex-direction: column;
    justify-content: center;
    overflow: hidden;
    color: var(--bs-progress-bar-color);
    text-align: center;
    white-space: nowrap;
    background-color: var(--bs-progress-bar-bg);
    transition: var(--bs-progress-bar-transition)
}

@media(prefers-reduced-motion: reduce) {
    .progress-bar {
        transition: none
    }
}

.progress-bar-striped {
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-size: var(--bs-progress-height) var(--bs-progress-height)
}

.progress-stacked>.progress {
    overflow: visible
}

.progress-stacked>.progress>.progress-bar {
    width: 100%
}

.progress-bar-animated {
    animation: 1s linear infinite progress-bar-stripes
}

@media(prefers-reduced-motion: reduce) {
    .progress-bar-animated {
        animation: none
    }
}

.list-group {
    --bs-list-group-color: #6f6b7d;
    --bs-list-group-bg: transparent;
    --bs-list-group-border-color: #dbdade;
    --bs-list-group-border-width: var(--bs-border-width);
    --bs-list-group-border-radius: var(--bs-border-radius);
    --bs-list-group-item-padding-x: 1.25rem;
    --bs-list-group-item-padding-y: 0.57rem;
    --bs-list-group-action-color: var(--bs-secondary-color);
    --bs-list-group-action-hover-color: #7367f0;
    --bs-list-group-action-hover-bg: #f4f3fe;
    --bs-list-group-action-active-color: #7367f0;
    --bs-list-group-action-active-bg: #f4f3fe;
    --bs-list-group-disabled-color: #a5a3ae;
    --bs-list-group-disabled-bg: transparent;
    --bs-list-group-active-color: #fff;
    --bs-list-group-active-bg: #7367f0;
    --bs-list-group-active-border-color: #7367f0;
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    border-radius: var(--bs-list-group-border-radius)
}

.list-group-numbered {
    list-style-type: none;
    counter-reset: section
}

.list-group-numbered>.list-group-item::before {
    content: counters(section, ".") ". ";
    counter-increment: section
}

.list-group-item-action {
    width: 100%;
    color: var(--bs-list-group-action-color);
    text-align: inherit
}

.list-group-item-action:hover,.list-group-item-action:focus {
    z-index: 1;
    color: var(--bs-list-group-action-hover-color);
    text-decoration: none;
    background-color: var(--bs-list-group-action-hover-bg)
}

.list-group-item-action:active {
    color: var(--bs-list-group-action-active-color);
    background-color: var(--bs-list-group-action-active-bg)
}

.list-group-item {
    position: relative;
    display: block;
    padding: var(--bs-list-group-item-padding-y) var(--bs-list-group-item-padding-x);
    color: var(--bs-list-group-color);
    background-color: var(--bs-list-group-bg);
    border: var(--bs-list-group-border-width) solid var(--bs-list-group-border-color)
}

.list-group-item:first-child {
    border-top-left-radius: inherit;
    border-top-right-radius: inherit
}

.list-group-item:last-child {
    border-bottom-right-radius: inherit;
    border-bottom-left-radius: inherit
}

.list-group-item.disabled,.list-group-item:disabled {
    color: var(--bs-list-group-disabled-color);
    pointer-events: none;
    background-color: var(--bs-list-group-disabled-bg)
}

.list-group-item.active {
    z-index: 2;
    color: var(--bs-list-group-active-color);
    background-color: var(--bs-list-group-active-bg);
    border-color: var(--bs-list-group-active-border-color)
}

.list-group-item+.list-group-item {
    border-top-width: 0
}

.list-group-item+.list-group-item.active {
    margin-top: calc(-1*var(--bs-list-group-border-width));
    border-top-width: var(--bs-list-group-border-width)
}

.list-group-horizontal {
    flex-direction: row
}

.list-group-horizontal>.list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0
}

.list-group-horizontal>.list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0
}

.list-group-horizontal>.list-group-item.active {
    margin-top: 0
}

.list-group-horizontal>.list-group-item+.list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0
}

.list-group-horizontal>.list-group-item+.list-group-item.active {
    margin-left: calc(-1*var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width)
}

@media(min-width: 576px) {
    .list-group-horizontal-sm {
        flex-direction:row
    }

    .list-group-horizontal-sm>.list-group-item:first-child:not(:last-child) {
        border-bottom-left-radius: var(--bs-list-group-border-radius);
        border-top-right-radius: 0
    }

    .list-group-horizontal-sm>.list-group-item:last-child:not(:first-child) {
        border-top-right-radius: var(--bs-list-group-border-radius);
        border-bottom-left-radius: 0
    }

    .list-group-horizontal-sm>.list-group-item.active {
        margin-top: 0
    }

    .list-group-horizontal-sm>.list-group-item+.list-group-item {
        border-top-width: var(--bs-list-group-border-width);
        border-left-width: 0
    }

    .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
        margin-left: calc(-1*var(--bs-list-group-border-width));
        border-left-width: var(--bs-list-group-border-width)
    }
}

@media(min-width: 768px) {
    .list-group-horizontal-md {
        flex-direction:row
    }

    .list-group-horizontal-md>.list-group-item:first-child:not(:last-child) {
        border-bottom-left-radius: var(--bs-list-group-border-radius);
        border-top-right-radius: 0
    }

    .list-group-horizontal-md>.list-group-item:last-child:not(:first-child) {
        border-top-right-radius: var(--bs-list-group-border-radius);
        border-bottom-left-radius: 0
    }

    .list-group-horizontal-md>.list-group-item.active {
        margin-top: 0
    }

    .list-group-horizontal-md>.list-group-item+.list-group-item {
        border-top-width: var(--bs-list-group-border-width);
        border-left-width: 0
    }

    .list-group-horizontal-md>.list-group-item+.list-group-item.active {
        margin-left: calc(-1*var(--bs-list-group-border-width));
        border-left-width: var(--bs-list-group-border-width)
    }
}

@media(min-width: 992px) {
    .list-group-horizontal-lg {
        flex-direction:row
    }

    .list-group-horizontal-lg>.list-group-item:first-child:not(:last-child) {
        border-bottom-left-radius: var(--bs-list-group-border-radius);
        border-top-right-radius: 0
    }

    .list-group-horizontal-lg>.list-group-item:last-child:not(:first-child) {
        border-top-right-radius: var(--bs-list-group-border-radius);
        border-bottom-left-radius: 0
    }

    .list-group-horizontal-lg>.list-group-item.active {
        margin-top: 0
    }

    .list-group-horizontal-lg>.list-group-item+.list-group-item {
        border-top-width: var(--bs-list-group-border-width);
        border-left-width: 0
    }

    .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
        margin-left: calc(-1*var(--bs-list-group-border-width));
        border-left-width: var(--bs-list-group-border-width)
    }
}

@media(min-width: 1200px) {
    .list-group-horizontal-xl {
        flex-direction:row
    }

    .list-group-horizontal-xl>.list-group-item:first-child:not(:last-child) {
        border-bottom-left-radius: var(--bs-list-group-border-radius);
        border-top-right-radius: 0
    }

    .list-group-horizontal-xl>.list-group-item:last-child:not(:first-child) {
        border-top-right-radius: var(--bs-list-group-border-radius);
        border-bottom-left-radius: 0
    }

    .list-group-horizontal-xl>.list-group-item.active {
        margin-top: 0
    }

    .list-group-horizontal-xl>.list-group-item+.list-group-item {
        border-top-width: var(--bs-list-group-border-width);
        border-left-width: 0
    }

    .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
        margin-left: calc(-1*var(--bs-list-group-border-width));
        border-left-width: var(--bs-list-group-border-width)
    }
}

@media(min-width: 1400px) {
    .list-group-horizontal-xxl {
        flex-direction:row
    }

    .list-group-horizontal-xxl>.list-group-item:first-child:not(:last-child) {
        border-bottom-left-radius: var(--bs-list-group-border-radius);
        border-top-right-radius: 0
    }

    .list-group-horizontal-xxl>.list-group-item:last-child:not(:first-child) {
        border-top-right-radius: var(--bs-list-group-border-radius);
        border-bottom-left-radius: 0
    }

    .list-group-horizontal-xxl>.list-group-item.active {
        margin-top: 0
    }

    .list-group-horizontal-xxl>.list-group-item+.list-group-item {
        border-top-width: var(--bs-list-group-border-width);
        border-left-width: 0
    }

    .list-group-horizontal-xxl>.list-group-item+.list-group-item.active {
        margin-left: calc(-1*var(--bs-list-group-border-width));
        border-left-width: var(--bs-list-group-border-width)
    }
}

.list-group-flush {
    border-radius: 0
}

.list-group-flush>.list-group-item {
    border-width: 0 0 var(--bs-list-group-border-width)
}

.list-group-flush>.list-group-item:last-child {
    border-bottom-width: 0
}

.list-group-item-primary {
    --bs-list-group-color: var(--bs-primary-text-emphasis);
    --bs-list-group-bg: var(--bs-primary-bg-subtle);
    --bs-list-group-border-color: var(--bs-primary-border-subtle);
    --bs-list-group-action-hover-color: var(--bs-emphasis-color);
    --bs-list-group-action-hover-bg: var(--bs-primary-border-subtle);
    --bs-list-group-action-active-color: var(--bs-emphasis-color);
    --bs-list-group-action-active-bg: var(--bs-primary-border-subtle);
    --bs-list-group-active-color: var(--bs-primary-bg-subtle);
    --bs-list-group-active-bg: var(--bs-primary-text-emphasis);
    --bs-list-group-active-border-color: var(--bs-primary-text-emphasis)
}

.list-group-item-secondary {
    --bs-list-group-color: var(--bs-secondary-text-emphasis);
    --bs-list-group-bg: var(--bs-secondary-bg-subtle);
    --bs-list-group-border-color: var(--bs-secondary-border-subtle);
    --bs-list-group-action-hover-color: var(--bs-emphasis-color);
    --bs-list-group-action-hover-bg: var(--bs-secondary-border-subtle);
    --bs-list-group-action-active-color: var(--bs-emphasis-color);
    --bs-list-group-action-active-bg: var(--bs-secondary-border-subtle);
    --bs-list-group-active-color: var(--bs-secondary-bg-subtle);
    --bs-list-group-active-bg: var(--bs-secondary-text-emphasis);
    --bs-list-group-active-border-color: var(--bs-secondary-text-emphasis)
}

.list-group-item-success {
    --bs-list-group-color: var(--bs-success-text-emphasis);
    --bs-list-group-bg: var(--bs-success-bg-subtle);
    --bs-list-group-border-color: var(--bs-success-border-subtle);
    --bs-list-group-action-hover-color: var(--bs-emphasis-color);
    --bs-list-group-action-hover-bg: var(--bs-success-border-subtle);
    --bs-list-group-action-active-color: var(--bs-emphasis-color);
    --bs-list-group-action-active-bg: var(--bs-success-border-subtle);
    --bs-list-group-active-color: var(--bs-success-bg-subtle);
    --bs-list-group-active-bg: var(--bs-success-text-emphasis);
    --bs-list-group-active-border-color: var(--bs-success-text-emphasis)
}

.list-group-item-info {
    --bs-list-group-color: var(--bs-info-text-emphasis);
    --bs-list-group-bg: var(--bs-info-bg-subtle);
    --bs-list-group-border-color: var(--bs-info-border-subtle);
    --bs-list-group-action-hover-color: var(--bs-emphasis-color);
    --bs-list-group-action-hover-bg: var(--bs-info-border-subtle);
    --bs-list-group-action-active-color: var(--bs-emphasis-color);
    --bs-list-group-action-active-bg: var(--bs-info-border-subtle);
    --bs-list-group-active-color: var(--bs-info-bg-subtle);
    --bs-list-group-active-bg: var(--bs-info-text-emphasis);
    --bs-list-group-active-border-color: var(--bs-info-text-emphasis)
}

.list-group-item-warning {
    --bs-list-group-color: var(--bs-warning-text-emphasis);
    --bs-list-group-bg: var(--bs-warning-bg-subtle);
    --bs-list-group-border-color: var(--bs-warning-border-subtle);
    --bs-list-group-action-hover-color: var(--bs-emphasis-color);
    --bs-list-group-action-hover-bg: var(--bs-warning-border-subtle);
    --bs-list-group-action-active-color: var(--bs-emphasis-color);
    --bs-list-group-action-active-bg: var(--bs-warning-border-subtle);
    --bs-list-group-active-color: var(--bs-warning-bg-subtle);
    --bs-list-group-active-bg: var(--bs-warning-text-emphasis);
    --bs-list-group-active-border-color: var(--bs-warning-text-emphasis)
}

.list-group-item-danger {
    --bs-list-group-color: var(--bs-danger-text-emphasis);
    --bs-list-group-bg: var(--bs-danger-bg-subtle);
    --bs-list-group-border-color: var(--bs-danger-border-subtle);
    --bs-list-group-action-hover-color: var(--bs-emphasis-color);
    --bs-list-group-action-hover-bg: var(--bs-danger-border-subtle);
    --bs-list-group-action-active-color: var(--bs-emphasis-color);
    --bs-list-group-action-active-bg: var(--bs-danger-border-subtle);
    --bs-list-group-active-color: var(--bs-danger-bg-subtle);
    --bs-list-group-active-bg: var(--bs-danger-text-emphasis);
    --bs-list-group-active-border-color: var(--bs-danger-text-emphasis)
}

.list-group-item-light {
    --bs-list-group-color: var(--bs-light-text-emphasis);
    --bs-list-group-bg: var(--bs-light-bg-subtle);
    --bs-list-group-border-color: var(--bs-light-border-subtle);
    --bs-list-group-action-hover-color: var(--bs-emphasis-color);
    --bs-list-group-action-hover-bg: var(--bs-light-border-subtle);
    --bs-list-group-action-active-color: var(--bs-emphasis-color);
    --bs-list-group-action-active-bg: var(--bs-light-border-subtle);
    --bs-list-group-active-color: var(--bs-light-bg-subtle);
    --bs-list-group-active-bg: var(--bs-light-text-emphasis);
    --bs-list-group-active-border-color: var(--bs-light-text-emphasis)
}

.list-group-item-dark {
    --bs-list-group-color: var(--bs-dark-text-emphasis);
    --bs-list-group-bg: var(--bs-dark-bg-subtle);
    --bs-list-group-border-color: var(--bs-dark-border-subtle);
    --bs-list-group-action-hover-color: var(--bs-emphasis-color);
    --bs-list-group-action-hover-bg: var(--bs-dark-border-subtle);
    --bs-list-group-action-active-color: var(--bs-emphasis-color);
    --bs-list-group-action-active-bg: var(--bs-dark-border-subtle);
    --bs-list-group-active-color: var(--bs-dark-bg-subtle);
    --bs-list-group-active-bg: var(--bs-dark-text-emphasis);
    --bs-list-group-active-border-color: var(--bs-dark-text-emphasis)
}

.list-group-item-gray {
    --bs-list-group-color: var(--bs-gray-text-emphasis);
    --bs-list-group-bg: var(--bs-gray-bg-subtle);
    --bs-list-group-border-color: var(--bs-gray-border-subtle);
    --bs-list-group-action-hover-color: var(--bs-emphasis-color);
    --bs-list-group-action-hover-bg: var(--bs-gray-border-subtle);
    --bs-list-group-action-active-color: var(--bs-emphasis-color);
    --bs-list-group-action-active-bg: var(--bs-gray-border-subtle);
    --bs-list-group-active-color: var(--bs-gray-bg-subtle);
    --bs-list-group-active-bg: var(--bs-gray-text-emphasis);
    --bs-list-group-active-border-color: var(--bs-gray-text-emphasis)
}

.btn-close {
    --bs-btn-close-color: #4b465c;
    --bs-btn-close-bg: url("data:image/svg+xml,%3Csvg width=\'19\' height=\'18\' viewBox=\'0 0 19 18\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'%234b465c\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'%234b465c\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E%0A");
    --bs-btn-close-opacity: 0.5;
    --bs-btn-close-hover-opacity: 0.75;
    --bs-btn-close-focus-shadow: none;
    --bs-btn-close-focus-opacity: 0.75;
    --bs-btn-close-disabled-opacity: 0.25;
    --bs-btn-close-white-filter: invert(1) grayscale(100%) brightness(200%);
    box-sizing: content-box;
    width: 1.125rem;
    height: 1.125rem;
    padding: .25em .25em;
    color: var(--bs-btn-close-color);
    background: rgba(0,0,0,0) var(--bs-btn-close-bg) center/1.125rem auto no-repeat;
    border: 0;
    border-radius: .375rem;
    opacity: var(--bs-btn-close-opacity)
}

.btn-close:hover {
    color: var(--bs-btn-close-color);
    text-decoration: none;
    opacity: var(--bs-btn-close-hover-opacity)
}

.btn-close:focus {
    outline: 0;
    box-shadow: var(--bs-btn-close-focus-shadow);
    opacity: var(--bs-btn-close-focus-opacity)
}

.btn-close:disabled,.btn-close.disabled {
    pointer-events: none;
    user-select: none;
    opacity: var(--bs-btn-close-disabled-opacity)
}

.btn-close-white {
    filter: var(--bs-btn-close-white-filter)
}

.toast {
    --bs-toast-zindex: 1095;
    --bs-toast-padding-x: 0.75rem;
    --bs-toast-padding-y: 0.406rem;
    --bs-toast-spacing: 1rem;
    --bs-toast-max-width: 350px;
    --bs-toast-font-size: 0.9375rem;
    --bs-toast-color: #6f6b7d;
    --bs-toast-bg: rgba(255, 255, 255, 0.85);
    --bs-toast-border-width: 0px;
    --bs-toast-border-color: var(--bs-border-color-translucent);
    --bs-toast-border-radius: var(--bs-border-radius);
    --bs-toast-box-shadow: var(--bs-box-shadow);
    --bs-toast-header-color: #5d596c;
    --bs-toast-header-bg: #fff;
    --bs-toast-header-border-color: rgba(219, 218, 222, 0.3);
    width: var(--bs-toast-max-width);
    max-width: 100%;
    font-size: var(--bs-toast-font-size);
    color: var(--bs-toast-color);
    pointer-events: auto;
    background-color: var(--bs-toast-bg);
    background-clip: padding-box;
    border: var(--bs-toast-border-width) solid var(--bs-toast-border-color);
    box-shadow: var(--bs-toast-box-shadow);
    border-radius: var(--bs-toast-border-radius)
}

.toast.showing {
    opacity: 0
}

.toast:not(.show) {
    display: none
}

.toast-container {
    --bs-toast-zindex: 1095;
    position: absolute;
    z-index: var(--bs-toast-zindex);
    width: max-content;
    max-width: 100%;
    pointer-events: none
}

.toast-container>:not(:last-child) {
    margin-bottom: var(--bs-toast-spacing)
}

.toast-header {
    display: flex;
    align-items: center;
    padding: var(--bs-toast-padding-y) var(--bs-toast-padding-x);
    color: var(--bs-toast-header-color);
    background-color: var(--bs-toast-header-bg);
    background-clip: padding-box;
    border-bottom: var(--bs-toast-border-width) solid var(--bs-toast-header-border-color);
    border-top-left-radius: calc(var(--bs-toast-border-radius) - var(--bs-toast-border-width));
    border-top-right-radius: calc(var(--bs-toast-border-radius) - var(--bs-toast-border-width))
}

.toast-header .btn-close {
    margin-right: calc(-0.5*var(--bs-toast-padding-x));
    margin-left: var(--bs-toast-padding-x)
}

.toast-body {
    padding: var(--bs-toast-padding-x);
    word-wrap: break-word
}

.modal {
    --bs-modal-zindex: 1090;
    --bs-modal-width: 35rem;
    --bs-modal-padding: 1.5rem;
    --bs-modal-margin: 1.5rem;
    --bs-modal-color: ;
    --bs-modal-bg: #fff;
    --bs-modal-border-color: var(--bs-border-color-translucent);
    --bs-modal-border-width: 0px;
    --bs-modal-border-radius: 0.375rem;
    --bs-modal-box-shadow: 0 0.31rem 1.25rem 0 rgba(75, 70, 92, 0.4);
    --bs-modal-inner-border-radius: calc(0.375rem - 0px);
    --bs-modal-header-padding-x: 0.25rem;
    --bs-modal-header-padding-y: 1.25rem;
    --bs-modal-header-padding: 1.25rem 1.5rem 0.25rem;
    --bs-modal-header-border-color: var(--bs-border-color);
    --bs-modal-header-border-width: 0px;
    --bs-modal-title-line-height: 1.47;
    --bs-modal-footer-gap: 1rem;
    --bs-modal-footer-bg: ;
    --bs-modal-footer-border-color: var(--bs-border-color);
    --bs-modal-footer-border-width: 0px;
    position: fixed;
    top: 0;
    left: 0;
    z-index: var(--bs-modal-zindex);
    display: none;
    width: 100%;
    height: 100%;
    overflow-x: hidden;
    overflow-y: auto;
    outline: 0
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: var(--bs-modal-margin);
    pointer-events: none
}

.modal.fade .modal-dialog {
    transition: transform .15s ease-out;
    transform: translateY(-100px) scale(0.8)
}

@media(prefers-reduced-motion: reduce) {
    .modal.fade .modal-dialog {
        transition: none
    }
}

.modal.show .modal-dialog {
    transform: translateY(0) scale(1)
}

.modal.modal-static .modal-dialog {
    transform: scale(1.02)
}

.modal-dialog-scrollable {
    height: calc(100% - var(--bs-modal-margin)*2)
}

.modal-dialog-scrollable .modal-content {
    max-height: 100%;
    overflow: hidden
}

.modal-dialog-scrollable .modal-body {
    overflow-y: auto
}

.modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - var(--bs-modal-margin)*2)
}

.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    color: var(--bs-modal-color);
    pointer-events: auto;
    background-color: var(--bs-modal-bg);
    background-clip: padding-box;
    border: var(--bs-modal-border-width) solid var(--bs-modal-border-color);
    border-radius: var(--bs-modal-border-radius);
    outline: 0
}

.modal-backdrop {
    --bs-backdrop-zindex: 1089;
    --bs-backdrop-bg: #4b465c;
    --bs-backdrop-opacity: 0.5;
    position: fixed;
    top: 0;
    left: 0;
    z-index: var(--bs-backdrop-zindex);
    width: 100vw;
    height: 100vh;
    background-color: var(--bs-backdrop-bg)
}

.modal-backdrop.fade {
    opacity: 0
}

.modal-backdrop.show {
    opacity: var(--bs-backdrop-opacity)
}

.modal-header {
    display: flex;
    flex-shrink: 0;
    align-items: center;
    justify-content: space-between;
    padding: var(--bs-modal-header-padding);
    border-bottom: var(--bs-modal-header-border-width) solid var(--bs-modal-header-border-color);
    border-top-left-radius: var(--bs-modal-inner-border-radius);
    border-top-right-radius: var(--bs-modal-inner-border-radius)
}

.modal-header .btn-close {
    padding: calc(var(--bs-modal-header-padding-y)*.5) calc(var(--bs-modal-header-padding-x)*.5);
    margin: calc(-0.5*var(--bs-modal-header-padding-y)) calc(-0.5*var(--bs-modal-header-padding-x)) calc(-0.5*var(--bs-modal-header-padding-y)) auto
}

.modal-title {
    margin-bottom: 0;
    line-height: var(--bs-modal-title-line-height)
}

.modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: var(--bs-modal-padding)
}

.modal-footer {
    display: flex;
    flex-shrink: 0;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-end;
    padding: calc(var(--bs-modal-padding) - var(--bs-modal-footer-gap)*.5);
    background-color: var(--bs-modal-footer-bg);
    border-top: var(--bs-modal-footer-border-width) solid var(--bs-modal-footer-border-color);
    border-bottom-right-radius: var(--bs-modal-inner-border-radius);
    border-bottom-left-radius: var(--bs-modal-inner-border-radius)
}

.modal-footer>* {
    margin: calc(var(--bs-modal-footer-gap)*.5)
}

@media(min-width: 576px) {
    .modal {
        --bs-modal-margin: 1.75rem;
        --bs-modal-box-shadow: 0 0.31rem 1.25rem 0 rgba(75, 70, 92, 0.4)
    }

    .modal-dialog {
        max-width: var(--bs-modal-width);
        margin-right: auto;
        margin-left: auto
    }

    .modal-sm {
        --bs-modal-width: 22.5rem
    }
}

@media(min-width: 992px) {
    .modal-lg,.modal-xl {
        --bs-modal-width: 50rem
    }
}

@media(min-width: 1200px) {
    .modal-xl {
        --bs-modal-width: 1140px
    }
}

.modal-fullscreen {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0
}

.modal-fullscreen .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0
}

.modal-fullscreen .modal-header,.modal-fullscreen .modal-footer {
    border-radius: 0
}

.modal-fullscreen .modal-body {
    overflow-y: auto
}

@media(max-width: 575.98px) {
    .modal-fullscreen-sm-down {
        width:100vw;
        max-width: none;
        height: 100%;
        margin: 0
    }

    .modal-fullscreen-sm-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0
    }

    .modal-fullscreen-sm-down .modal-header,.modal-fullscreen-sm-down .modal-footer {
        border-radius: 0
    }

    .modal-fullscreen-sm-down .modal-body {
        overflow-y: auto
    }
}

@media(max-width: 767.98px) {
    .modal-fullscreen-md-down {
        width:100vw;
        max-width: none;
        height: 100%;
        margin: 0
    }

    .modal-fullscreen-md-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0
    }

    .modal-fullscreen-md-down .modal-header,.modal-fullscreen-md-down .modal-footer {
        border-radius: 0
    }

    .modal-fullscreen-md-down .modal-body {
        overflow-y: auto
    }
}

@media(max-width: 991.98px) {
    .modal-fullscreen-lg-down {
        width:100vw;
        max-width: none;
        height: 100%;
        margin: 0
    }

    .modal-fullscreen-lg-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0
    }

    .modal-fullscreen-lg-down .modal-header,.modal-fullscreen-lg-down .modal-footer {
        border-radius: 0
    }

    .modal-fullscreen-lg-down .modal-body {
        overflow-y: auto
    }
}

@media(max-width: 1199.98px) {
    .modal-fullscreen-xl-down {
        width:100vw;
        max-width: none;
        height: 100%;
        margin: 0
    }

    .modal-fullscreen-xl-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0
    }

    .modal-fullscreen-xl-down .modal-header,.modal-fullscreen-xl-down .modal-footer {
        border-radius: 0
    }

    .modal-fullscreen-xl-down .modal-body {
        overflow-y: auto
    }
}

@media(max-width: 1399.98px) {
    .modal-fullscreen-xxl-down {
        width:100vw;
        max-width: none;
        height: 100%;
        margin: 0
    }

    .modal-fullscreen-xxl-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0
    }

    .modal-fullscreen-xxl-down .modal-header,.modal-fullscreen-xxl-down .modal-footer {
        border-radius: 0
    }

    .modal-fullscreen-xxl-down .modal-body {
        overflow-y: auto
    }
}

.tooltip {
    --bs-tooltip-zindex: 1099;
    --bs-tooltip-max-width: 200px;
    --bs-tooltip-padding-x: 0.75rem;
    --bs-tooltip-padding-y: 0.3125rem;
    --bs-tooltip-margin: ;
    --bs-tooltip-font-size: 0.9375rem;
    --bs-tooltip-color: #fff;
    --bs-tooltip-bg: #4b4b4b;
    --bs-tooltip-border-radius: var(--bs-border-radius);
    --bs-tooltip-opacity: 1;
    --bs-tooltip-arrow-width: 0.8rem;
    --bs-tooltip-arrow-height: 0.4rem;
    z-index: var(--bs-tooltip-zindex);
    display: block;
    margin: var(--bs-tooltip-margin);
    font-family: var(--bs-font-sans-serif);
    font-style: normal;
    font-weight: 400;
    line-height: 1.47;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    white-space: normal;
    word-spacing: normal;
    line-break: auto;
    font-size: var(--bs-tooltip-font-size);
    word-wrap: break-word;
    opacity: 0
}

.tooltip.show {
    opacity: var(--bs-tooltip-opacity)
}

.tooltip .tooltip-arrow {
    display: block;
    width: var(--bs-tooltip-arrow-width);
    height: var(--bs-tooltip-arrow-height)
}

.tooltip .tooltip-arrow::before {
    position: absolute;
    content: "";
    border-color: rgba(0,0,0,0);
    border-style: solid
}

.bs-tooltip-top .tooltip-arrow,.bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow {
    bottom: calc(-1*var(--bs-tooltip-arrow-height))
}

.bs-tooltip-top .tooltip-arrow::before,.bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before {
    top: -1px;
    border-width: var(--bs-tooltip-arrow-height) calc(var(--bs-tooltip-arrow-width)*.5) 0;
    border-top-color: var(--bs-tooltip-bg)
}

.bs-tooltip-end .tooltip-arrow,.bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow {
    left: calc(-1*var(--bs-tooltip-arrow-height));
    width: var(--bs-tooltip-arrow-height);
    height: var(--bs-tooltip-arrow-width)
}

.bs-tooltip-end .tooltip-arrow::before,.bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before {
    right: -1px;
    border-width: calc(var(--bs-tooltip-arrow-width)*.5) var(--bs-tooltip-arrow-height) calc(var(--bs-tooltip-arrow-width)*.5) 0;
    border-right-color: var(--bs-tooltip-bg)
}

.bs-tooltip-bottom .tooltip-arrow,.bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow {
    top: calc(-1*var(--bs-tooltip-arrow-height))
}

.bs-tooltip-bottom .tooltip-arrow::before,.bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before {
    bottom: -1px;
    border-width: 0 calc(var(--bs-tooltip-arrow-width)*.5) var(--bs-tooltip-arrow-height);
    border-bottom-color: var(--bs-tooltip-bg)
}

.bs-tooltip-start .tooltip-arrow,.bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow {
    right: calc(-1*var(--bs-tooltip-arrow-height));
    width: var(--bs-tooltip-arrow-height);
    height: var(--bs-tooltip-arrow-width)
}

.bs-tooltip-start .tooltip-arrow::before,.bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before {
    left: -1px;
    border-width: calc(var(--bs-tooltip-arrow-width)*.5) 0 calc(var(--bs-tooltip-arrow-width)*.5) var(--bs-tooltip-arrow-height);
    border-left-color: var(--bs-tooltip-bg)
}

.tooltip-inner {
    max-width: var(--bs-tooltip-max-width);
    padding: var(--bs-tooltip-padding-y) var(--bs-tooltip-padding-x);
    color: var(--bs-tooltip-color);
    text-align: center;
    background-color: var(--bs-tooltip-bg);
    border-radius: var(--bs-tooltip-border-radius)
}

.popover {
    --bs-popover-zindex: 1091;
    --bs-popover-max-width: 276px;
    --bs-popover-font-size: 0.9375rem;
    --bs-popover-bg: #fff;
    --bs-popover-border-width: 0px;
    --bs-popover-border-color: var(--bs-border-color-translucent);
    --bs-popover-border-radius: var(--bs-border-radius-lg);
    --bs-popover-inner-border-radius: calc(var(--bs-border-radius-lg) - 0px);
    --bs-popover-box-shadow: 0 0.25rem 1rem rgba(165, 163, 174, 0.45);
    --bs-popover-header-padding-x: 1.125rem;
    --bs-popover-header-padding-y: 1rem;
    --bs-popover-header-font-size: 0.9375rem;
    --bs-popover-header-color: #5d596c;
    --bs-popover-header-bg: #fff;
    --bs-popover-body-padding-x: 1.125rem;
    --bs-popover-body-padding-y: 1.125rem;
    --bs-popover-body-color: #6f6b7d;
    --bs-popover-arrow-width: 1rem;
    --bs-popover-arrow-height: 0.5rem;
    --bs-popover-arrow-border: var(--bs-popover-border-color);
    z-index: var(--bs-popover-zindex);
    display: block;
    max-width: var(--bs-popover-max-width);
    font-family: var(--bs-font-sans-serif);
    font-style: normal;
    font-weight: 400;
    line-height: 1.47;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    white-space: normal;
    word-spacing: normal;
    line-break: auto;
    font-size: var(--bs-popover-font-size);
    word-wrap: break-word;
    background-color: var(--bs-popover-bg);
    background-clip: padding-box;
    border: var(--bs-popover-border-width) solid var(--bs-popover-border-color);
    border-radius: var(--bs-popover-border-radius)
}

.popover .popover-arrow {
    display: block;
    width: var(--bs-popover-arrow-width);
    height: var(--bs-popover-arrow-height)
}

.popover .popover-arrow::before,.popover .popover-arrow::after {
    position: absolute;
    display: block;
    content: "";
    border-color: rgba(0,0,0,0);
    border-style: solid;
    border-width: 0
}

.bs-popover-top>.popover-arrow,.bs-popover-auto[data-popper-placement^=top]>.popover-arrow {
    bottom: calc(-1*(var(--bs-popover-arrow-height)) - var(--bs-popover-border-width))
}

.bs-popover-top>.popover-arrow::before,.bs-popover-auto[data-popper-placement^=top]>.popover-arrow::before,.bs-popover-top>.popover-arrow::after,.bs-popover-auto[data-popper-placement^=top]>.popover-arrow::after {
    border-width: var(--bs-popover-arrow-height) calc(var(--bs-popover-arrow-width)*.5) 0
}

.bs-popover-top>.popover-arrow::before,.bs-popover-auto[data-popper-placement^=top]>.popover-arrow::before {
    bottom: 0;
    border-top-color: var(--bs-popover-arrow-border)
}

.bs-popover-top>.popover-arrow::after,.bs-popover-auto[data-popper-placement^=top]>.popover-arrow::after {
    bottom: var(--bs-popover-border-width);
    border-top-color: var(--bs-popover-bg)
}

.bs-popover-end>.popover-arrow,.bs-popover-auto[data-popper-placement^=right]>.popover-arrow {
    left: calc(-1*(var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
    width: var(--bs-popover-arrow-height);
    height: var(--bs-popover-arrow-width)
}

.bs-popover-end>.popover-arrow::before,.bs-popover-auto[data-popper-placement^=right]>.popover-arrow::before,.bs-popover-end>.popover-arrow::after,.bs-popover-auto[data-popper-placement^=right]>.popover-arrow::after {
    border-width: calc(var(--bs-popover-arrow-width)*.5) var(--bs-popover-arrow-height) calc(var(--bs-popover-arrow-width)*.5) 0
}

.bs-popover-end>.popover-arrow::before,.bs-popover-auto[data-popper-placement^=right]>.popover-arrow::before {
    left: 0;
    border-right-color: var(--bs-popover-arrow-border)
}

.bs-popover-end>.popover-arrow::after,.bs-popover-auto[data-popper-placement^=right]>.popover-arrow::after {
    left: var(--bs-popover-border-width);
    border-right-color: var(--bs-popover-bg)
}

.bs-popover-bottom>.popover-arrow,.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow {
    top: calc(-1*(var(--bs-popover-arrow-height)) - var(--bs-popover-border-width))
}

.bs-popover-bottom>.popover-arrow::before,.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::before,.bs-popover-bottom>.popover-arrow::after,.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::after {
    border-width: 0 calc(var(--bs-popover-arrow-width)*.5) var(--bs-popover-arrow-height)
}

.bs-popover-bottom>.popover-arrow::before,.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::before {
    top: 0;
    border-bottom-color: var(--bs-popover-arrow-border)
}

.bs-popover-bottom>.popover-arrow::after,.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::after {
    top: var(--bs-popover-border-width);
    border-bottom-color: var(--bs-popover-bg)
}

.bs-popover-bottom .popover-header::before,.bs-popover-auto[data-popper-placement^=bottom] .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: var(--bs-popover-arrow-width);
    margin-left: calc(-0.5*var(--bs-popover-arrow-width));
    content: "";
    border-bottom: var(--bs-popover-border-width) solid var(--bs-popover-header-bg)
}

.bs-popover-start>.popover-arrow,.bs-popover-auto[data-popper-placement^=left]>.popover-arrow {
    right: calc(-1*(var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
    width: var(--bs-popover-arrow-height);
    height: var(--bs-popover-arrow-width)
}

.bs-popover-start>.popover-arrow::before,.bs-popover-auto[data-popper-placement^=left]>.popover-arrow::before,.bs-popover-start>.popover-arrow::after,.bs-popover-auto[data-popper-placement^=left]>.popover-arrow::after {
    border-width: calc(var(--bs-popover-arrow-width)*.5) 0 calc(var(--bs-popover-arrow-width)*.5) var(--bs-popover-arrow-height)
}

.bs-popover-start>.popover-arrow::before,.bs-popover-auto[data-popper-placement^=left]>.popover-arrow::before {
    right: 0;
    border-left-color: var(--bs-popover-arrow-border)
}

.bs-popover-start>.popover-arrow::after,.bs-popover-auto[data-popper-placement^=left]>.popover-arrow::after {
    right: var(--bs-popover-border-width);
    border-left-color: var(--bs-popover-bg)
}

.popover-header {
    padding: var(--bs-popover-header-padding-y) var(--bs-popover-header-padding-x);
    margin-bottom: 0;
    font-size: var(--bs-popover-header-font-size);
    color: var(--bs-popover-header-color);
    background-color: var(--bs-popover-header-bg);
    border-bottom: var(--bs-popover-border-width) solid var(--bs-popover-border-color);
    border-top-left-radius: var(--bs-popover-inner-border-radius);
    border-top-right-radius: var(--bs-popover-inner-border-radius)
}

.popover-header:empty {
    display: none
}

.popover-body {
    padding: var(--bs-popover-body-padding-y) var(--bs-popover-body-padding-x);
    color: var(--bs-popover-body-color)
}

.carousel {
    position: relative
}

.carousel.pointer-event {
    touch-action: pan-y
}

.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden
}

.carousel-inner::after {
    display: block;
    clear: both;
    content: ""
}

.carousel-item {
    position: relative;
    display: none;
    float: left;
    width: 100%;
    margin-right: -100%;
    backface-visibility: hidden;
    transition: transform .6s ease-in-out
}

@media(prefers-reduced-motion: reduce) {
    .carousel-item {
        transition: none
    }
}

.carousel-item.active,.carousel-item-next,.carousel-item-prev {
    display: block
}

.carousel-item-next:not(.carousel-item-start),.active.carousel-item-end {
    transform: translateX(100%)
}

.carousel-item-prev:not(.carousel-item-end),.active.carousel-item-start {
    transform: translateX(-100%)
}

.carousel-fade .carousel-item {
    opacity: 0;
    transition-property: opacity;
    transform: none
}

.carousel-fade .carousel-item.active,.carousel-fade .carousel-item-next.carousel-item-start,.carousel-fade .carousel-item-prev.carousel-item-end {
    z-index: 1;
    opacity: 1
}

.carousel-fade .active.carousel-item-start,.carousel-fade .active.carousel-item-end {
    z-index: 0;
    opacity: 0;
    transition: opacity 0s .6s
}

@media(prefers-reduced-motion: reduce) {
    .carousel-fade .active.carousel-item-start,.carousel-fade .active.carousel-item-end {
        transition: none
    }
}

.carousel-control-prev,.carousel-control-next {
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 15%;
    padding: 0;
    color: #fff;
    text-align: center;
    background: none;
    border: 0;
    opacity: .5;
    transition: opacity .15s ease
}

@media(prefers-reduced-motion: reduce) {
    .carousel-control-prev,.carousel-control-next {
        transition: none
    }
}

.carousel-control-prev:hover,.carousel-control-prev:focus,.carousel-control-next:hover,.carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: .9
}

.carousel-control-prev {
    left: 0
}

.carousel-control-next {
    right: 0
}

.carousel-control-prev-icon,.carousel-control-next-icon {
    display: inline-block;
    width: 2.5rem;
    height: 2.5rem;
    background-repeat: no-repeat;
    background-position: 50%;
    background-size: 100% 100%
}

.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml,%3Csvg width=\'18\' height=\'18\' viewBox=\'0 0 18 18\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M11.25 4.5L6.75 9L11.25 13.5\' stroke=\'%23fff\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M11.25 4.5L6.75 9L11.25 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E%0A")
}

.carousel-control-next-icon {
    background-image: url("data:image/svg+xml,%3Csvg width=\'19\' height=\'18\' viewBox=\'0 0 19 18\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M7.25 4.5L11.75 9L7.25 13.5\' stroke=\'%23fff\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M7.25 4.5L11.75 9L7.25 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E")
}

.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 2;
    display: flex;
    justify-content: center;
    padding: 0;
    margin-right: 15%;
    margin-bottom: 1rem;
    margin-left: 15%
}

.carousel-indicators [data-bs-target] {
    box-sizing: content-box;
    flex: 0 1 auto;
    width: 34px;
    height: 5px;
    padding: 0;
    margin-right: 5px;
    margin-left: 5px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border: 0;
    border-top: 0 solid rgba(0,0,0,0);
    border-bottom: 0 solid rgba(0,0,0,0);
    opacity: .4;
    transition: opacity .6s ease
}

@media(prefers-reduced-motion: reduce) {
    .carousel-indicators [data-bs-target] {
        transition: none
    }
}

.carousel-indicators .active {
    opacity: 1
}

.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 1.437rem;
    left: 15%;
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
    color: #fff;
    text-align: center
}

.carousel-dark .carousel-control-prev-icon,.carousel-dark .carousel-control-next-icon {
    filter: invert(1) grayscale(100)
}

.carousel-dark .carousel-indicators [data-bs-target] {
    background-color: #4b465c
}

.carousel-dark .carousel-caption {
    color: #4b465c
}

.spinner-grow,.spinner-border {
    display: inline-block;
    width: var(--bs-spinner-width);
    height: var(--bs-spinner-height);
    vertical-align: var(--bs-spinner-vertical-align);
    border-radius: 50%;
    animation: var(--bs-spinner-animation-speed) linear infinite var(--bs-spinner-animation-name)
}

@keyframes spinner-border {
    to {
        transform: rotate(360deg) /* rtl:ignore */
    }
}

.spinner-border {
    --bs-spinner-width: 2rem;
    --bs-spinner-height: 2rem;
    --bs-spinner-vertical-align: -0.125em;
    --bs-spinner-border-width: 0.25em;
    --bs-spinner-animation-speed: 0.75s;
    --bs-spinner-animation-name: spinner-border;
    border: var(--bs-spinner-border-width) solid currentcolor;
    border-right-color: rgba(0,0,0,0)
}

.spinner-border-sm {
    --bs-spinner-width: 1rem;
    --bs-spinner-height: 1rem;
    --bs-spinner-border-width: 0.2em
}

@keyframes spinner-grow {
    0% {
        transform: scale(0)
    }

    50% {
        opacity: 1;
        transform: none
    }
}

.spinner-grow {
    --bs-spinner-width: 2rem;
    --bs-spinner-height: 2rem;
    --bs-spinner-vertical-align: -0.125em;
    --bs-spinner-animation-speed: 0.75s;
    --bs-spinner-animation-name: spinner-grow;
    background-color: currentcolor;
    opacity: 0
}

.spinner-grow-sm {
    --bs-spinner-width: 1rem;
    --bs-spinner-height: 1rem
}

@media(prefers-reduced-motion: reduce) {
    .spinner-border,.spinner-grow {
        --bs-spinner-animation-speed: 1.5s
    }
}

.offcanvas,.offcanvas-xxl,.offcanvas-xl,.offcanvas-lg,.offcanvas-md,.offcanvas-sm {
    --bs-offcanvas-zindex: 1090;
    --bs-offcanvas-width: 400px;
    --bs-offcanvas-height: 30vh;
    --bs-offcanvas-padding-x: 1.5rem;
    --bs-offcanvas-padding-y: 1.5rem;
    --bs-offcanvas-color: var(--bs-body-color);
    --bs-offcanvas-bg: #fff;
    --bs-offcanvas-border-width: 0px;
    --bs-offcanvas-border-color: var(--bs-border-color-translucent);
    --bs-offcanvas-box-shadow: 0 0.31rem 1.25rem 0 rgba(75, 70, 92, 0.4);
    --bs-offcanvas-transition: transform 0.25s ease-in-out;
    --bs-offcanvas-title-line-height: 1.47
}

@media(max-width: 575.98px) {
    .offcanvas-sm {
        position:fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        transition: var(--bs-offcanvas-transition)
    }
}

@media(max-width: 575.98px)and (prefers-reduced-motion: reduce) {
    .offcanvas-sm {
        transition:none
    }
}

@media(max-width: 575.98px) {
    .offcanvas-sm.offcanvas-start {
        top:0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(-100%)
    }

    .offcanvas-sm.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(100%)
    }

    .offcanvas-sm.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(-100%)
    }

    .offcanvas-sm.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(100%)
    }

    .offcanvas-sm.showing,.offcanvas-sm.show:not(.hiding) {
        transform: none
    }

    .offcanvas-sm.showing,.offcanvas-sm.hiding,.offcanvas-sm.show {
        visibility: visible
    }
}

@media(min-width: 576px) {
    .offcanvas-sm {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: rgba(0,0,0,0) !important
    }

    .offcanvas-sm .offcanvas-header {
        display: none
    }

    .offcanvas-sm .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: rgba(0,0,0,0) !important
    }
}

@media(max-width: 767.98px) {
    .offcanvas-md {
        position:fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        transition: var(--bs-offcanvas-transition)
    }
}

@media(max-width: 767.98px)and (prefers-reduced-motion: reduce) {
    .offcanvas-md {
        transition:none
    }
}

@media(max-width: 767.98px) {
    .offcanvas-md.offcanvas-start {
        top:0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(-100%)
    }

    .offcanvas-md.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(100%)
    }

    .offcanvas-md.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(-100%)
    }

    .offcanvas-md.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(100%)
    }

    .offcanvas-md.showing,.offcanvas-md.show:not(.hiding) {
        transform: none
    }

    .offcanvas-md.showing,.offcanvas-md.hiding,.offcanvas-md.show {
        visibility: visible
    }
}

@media(min-width: 768px) {
    .offcanvas-md {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: rgba(0,0,0,0) !important
    }

    .offcanvas-md .offcanvas-header {
        display: none
    }

    .offcanvas-md .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: rgba(0,0,0,0) !important
    }
}

@media(max-width: 991.98px) {
    .offcanvas-lg {
        position:fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        transition: var(--bs-offcanvas-transition)
    }
}

@media(max-width: 991.98px)and (prefers-reduced-motion: reduce) {
    .offcanvas-lg {
        transition:none
    }
}

@media(max-width: 991.98px) {
    .offcanvas-lg.offcanvas-start {
        top:0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(-100%)
    }

    .offcanvas-lg.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(100%)
    }

    .offcanvas-lg.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(-100%)
    }

    .offcanvas-lg.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(100%)
    }

    .offcanvas-lg.showing,.offcanvas-lg.show:not(.hiding) {
        transform: none
    }

    .offcanvas-lg.showing,.offcanvas-lg.hiding,.offcanvas-lg.show {
        visibility: visible
    }
}

@media(min-width: 992px) {
    .offcanvas-lg {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: rgba(0,0,0,0) !important
    }

    .offcanvas-lg .offcanvas-header {
        display: none
    }

    .offcanvas-lg .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: rgba(0,0,0,0) !important
    }
}

@media(max-width: 1199.98px) {
    .offcanvas-xl {
        position:fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        transition: var(--bs-offcanvas-transition)
    }
}

@media(max-width: 1199.98px)and (prefers-reduced-motion: reduce) {
    .offcanvas-xl {
        transition:none
    }
}

@media(max-width: 1199.98px) {
    .offcanvas-xl.offcanvas-start {
        top:0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(-100%)
    }

    .offcanvas-xl.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(100%)
    }

    .offcanvas-xl.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(-100%)
    }

    .offcanvas-xl.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(100%)
    }

    .offcanvas-xl.showing,.offcanvas-xl.show:not(.hiding) {
        transform: none
    }

    .offcanvas-xl.showing,.offcanvas-xl.hiding,.offcanvas-xl.show {
        visibility: visible
    }
}

@media(min-width: 1200px) {
    .offcanvas-xl {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: rgba(0,0,0,0) !important
    }

    .offcanvas-xl .offcanvas-header {
        display: none
    }

    .offcanvas-xl .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: rgba(0,0,0,0) !important
    }
}

@media(max-width: 1399.98px) {
    .offcanvas-xxl {
        position:fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        transition: var(--bs-offcanvas-transition)
    }
}

@media(max-width: 1399.98px)and (prefers-reduced-motion: reduce) {
    .offcanvas-xxl {
        transition:none
    }
}

@media(max-width: 1399.98px) {
    .offcanvas-xxl.offcanvas-start {
        top:0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(-100%)
    }

    .offcanvas-xxl.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(100%)
    }

    .offcanvas-xxl.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(-100%)
    }

    .offcanvas-xxl.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(100%)
    }

    .offcanvas-xxl.showing,.offcanvas-xxl.show:not(.hiding) {
        transform: none
    }

    .offcanvas-xxl.showing,.offcanvas-xxl.hiding,.offcanvas-xxl.show {
        visibility: visible
    }
}

@media(min-width: 1400px) {
    .offcanvas-xxl {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: rgba(0,0,0,0) !important
    }

    .offcanvas-xxl .offcanvas-header {
        display: none
    }

    .offcanvas-xxl .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: rgba(0,0,0,0) !important
    }
}

.offcanvas {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: flex;
    flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    transition: var(--bs-offcanvas-transition)
}

@media(prefers-reduced-motion: reduce) {
    .offcanvas {
        transition: none
    }
}

.offcanvas.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(-100%)
}

.offcanvas.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(100%)
}

.offcanvas.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(-100%)
}

.offcanvas.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(100%)
}

.offcanvas.showing,.offcanvas.show:not(.hiding) {
    transform: none
}

.offcanvas.showing,.offcanvas.hiding,.offcanvas.show {
    visibility: visible
}

.offcanvas-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1089;
    width: 100vw;
    height: 100vh;
    background-color: #4b465c
}

.offcanvas-backdrop.fade {
    opacity: 0
}

.offcanvas-backdrop.show {
    opacity: .5
}

.offcanvas-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x)
}

.offcanvas-header .btn-close {
    padding: calc(var(--bs-offcanvas-padding-y)*.5) calc(var(--bs-offcanvas-padding-x)*.5);
    margin-top: calc(-0.5*var(--bs-offcanvas-padding-y));
    margin-right: calc(-0.5*var(--bs-offcanvas-padding-x));
    margin-bottom: calc(-0.5*var(--bs-offcanvas-padding-y))
}

.offcanvas-title {
    margin-bottom: 0;
    line-height: var(--bs-offcanvas-title-line-height)
}

.offcanvas-body {
    flex-grow: 1;
    padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
    overflow-y: auto
}

.placeholder {
    display: inline-block;
    min-height: 1em;
    vertical-align: middle;
    cursor: wait;
    background-color: currentcolor;
    opacity: .5
}

.placeholder.btn::before {
    display: inline-block;
    content: ""
}

.placeholder-xs {
    min-height: .6em
}

.placeholder-sm {
    min-height: .8em
}

.placeholder-lg {
    min-height: 1.2em
}

.placeholder-glow .placeholder {
    animation: placeholder-glow 2s ease-in-out infinite
}

@keyframes placeholder-glow {
    50% {
        opacity: .2
    }
}

.placeholder-wave {
    mask-image: linear-gradient(130deg, #4b465c 55%, rgba(0, 0, 0, 0.8) 75%, #4b465c 95%);
    mask-size: 200% 100%;
    animation: placeholder-wave 2s linear infinite
}

@keyframes placeholder-wave {
    100% {
        mask-position: -200% 0%
    }
}

.clearfix::after {
    display: block;
    clear: both;
    content: ""
}

.text-bg-primary {
    color: #fff !important;
    background-color: RGBA(var(--bs-primary-rgb), var(--bs-bg-opacity, 1)) !important
}

.text-bg-secondary {
    color: #fff !important;
    background-color: RGBA(var(--bs-secondary-rgb), var(--bs-bg-opacity, 1)) !important
}

.text-bg-success {
    color: #fff !important;
    background-color: RGBA(var(--bs-success-rgb), var(--bs-bg-opacity, 1)) !important
}

.text-bg-info {
    color: #fff !important;
    background-color: RGBA(var(--bs-info-rgb), var(--bs-bg-opacity, 1)) !important
}

.text-bg-warning {
    color: #fff !important;
    background-color: RGBA(var(--bs-warning-rgb), var(--bs-bg-opacity, 1)) !important
}

.text-bg-danger {
    color: #fff !important;
    background-color: RGBA(var(--bs-danger-rgb), var(--bs-bg-opacity, 1)) !important
}

.text-bg-light {
    color: #4b465c !important;
    background-color: RGBA(var(--bs-light-rgb), var(--bs-bg-opacity, 1)) !important
}

.text-bg-dark {
    color: #fff !important;
    background-color: RGBA(var(--bs-dark-rgb), var(--bs-bg-opacity, 1)) !important
}

.text-bg-gray {
    color: #fff !important;
    background-color: RGBA(var(--bs-gray-rgb), var(--bs-bg-opacity, 1)) !important
}

.link-primary {
    color: RGBA(var(--bs-primary-rgb), var(--bs-link-opacity, 1)) !important;
    text-decoration-color: RGBA(var(--bs-primary-rgb), var(--bs-link-underline-opacity, 1)) !important
}

.link-primary:hover,.link-primary:focus {
    color: RGBA(104, 93, 216, var(--bs-link-opacity, 1)) !important;
    text-decoration-color: RGBA(104, 93, 216, var(--bs-link-underline-opacity, 1)) !important
}

.link-secondary {
    color: RGBA(var(--bs-secondary-rgb), var(--bs-link-opacity, 1)) !important;
    text-decoration-color: RGBA(var(--bs-secondary-rgb), var(--bs-link-underline-opacity, 1)) !important
}

.link-secondary:hover,.link-secondary:focus {
    color: RGBA(151, 153, 157, var(--bs-link-opacity, 1)) !important;
    text-decoration-color: RGBA(151, 153, 157, var(--bs-link-underline-opacity, 1)) !important
}

.link-success {
    color: RGBA(var(--bs-success-rgb), var(--bs-link-opacity, 1)) !important;
    text-decoration-color: RGBA(var(--bs-success-rgb), var(--bs-link-underline-opacity, 1)) !important
}

.link-success:hover,.link-success:focus {
    color: RGBA(36, 179, 100, var(--bs-link-opacity, 1)) !important;
    text-decoration-color: RGBA(36, 179, 100, var(--bs-link-underline-opacity, 1)) !important
}

.link-info {
    color: RGBA(var(--bs-info-rgb), var(--bs-link-opacity, 1)) !important;
    text-decoration-color: RGBA(var(--bs-info-rgb), var(--bs-link-underline-opacity, 1)) !important
}

.link-info:hover,.link-info:focus {
    color: RGBA(0, 186, 209, var(--bs-link-opacity, 1)) !important;
    text-decoration-color: RGBA(0, 186, 209, var(--bs-link-underline-opacity, 1)) !important
}

.link-warning {
    color: RGBA(var(--bs-warning-rgb), var(--bs-link-opacity, 1)) !important;
    text-decoration-color: RGBA(var(--bs-warning-rgb), var(--bs-link-underline-opacity, 1)) !important
}

.link-warning:hover,.link-warning:focus {
    color: RGBA(230, 143, 60, var(--bs-link-opacity, 1)) !important;
    text-decoration-color: RGBA(230, 143, 60, var(--bs-link-underline-opacity, 1)) !important
}

.link-danger {
    color: RGBA(var(--bs-danger-rgb), var(--bs-link-opacity, 1)) !important;
    text-decoration-color: RGBA(var(--bs-danger-rgb), var(--bs-link-underline-opacity, 1)) !important
}

.link-danger:hover,.link-danger:focus {
    color: RGBA(211, 76, 77, var(--bs-link-opacity, 1)) !important;
    text-decoration-color: RGBA(211, 76, 77, var(--bs-link-underline-opacity, 1)) !important
}

.link-light {
    color: RGBA(var(--bs-light-rgb), var(--bs-link-opacity, 1)) !important;
    text-decoration-color: RGBA(var(--bs-light-rgb), var(--bs-link-underline-opacity, 1)) !important
}

.link-light:hover,.link-light:focus {
    color: RGBA(226, 226, 230, var(--bs-link-opacity, 1)) !important;
    text-decoration-color: RGBA(226, 226, 230, var(--bs-link-underline-opacity, 1)) !important
}

.link-dark {
    color: RGBA(var(--bs-dark-rgb), var(--bs-link-opacity, 1)) !important;
    text-decoration-color: RGBA(var(--bs-dark-rgb), var(--bs-link-underline-opacity, 1)) !important
}

.link-dark:hover,.link-dark:focus {
    color: RGBA(68, 68, 68, var(--bs-link-opacity, 1)) !important;
    text-decoration-color: RGBA(68, 68, 68, var(--bs-link-underline-opacity, 1)) !important
}

.link-gray {
    color: RGBA(var(--bs-gray-rgb), var(--bs-link-opacity, 1)) !important;
    text-decoration-color: RGBA(var(--bs-gray-rgb), var(--bs-link-underline-opacity, 1)) !important
}

.link-gray:hover,.link-gray:focus {
    color: RGBA(14, 13, 17, var(--bs-link-opacity, 1)) !important;
    text-decoration-color: RGBA(14, 13, 17, var(--bs-link-underline-opacity, 1)) !important
}

.link-body-emphasis {
    color: RGBA(var(--bs-emphasis-color-rgb), var(--bs-link-opacity, 1)) !important;
    text-decoration-color: RGBA(var(--bs-emphasis-color-rgb), var(--bs-link-underline-opacity, 1)) !important
}

.link-body-emphasis:hover,.link-body-emphasis:focus {
    color: RGBA(var(--bs-emphasis-color-rgb), var(--bs-link-opacity, 0.75)) !important;
    text-decoration-color: RGBA(var(--bs-emphasis-color-rgb), var(--bs-link-underline-opacity, 0.75)) !important
}

.focus-ring:focus {
    outline: 0;
    box-shadow: var(--bs-focus-ring-x, 0) var(--bs-focus-ring-y, 0) var(--bs-focus-ring-blur, 0) var(--bs-focus-ring-width) var(--bs-focus-ring-color)
}

.icon-link {
    display: inline-flex;
    gap: .375rem;
    align-items: center;
    text-decoration-color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 0.5));
    text-underline-offset: .25em;
    backface-visibility: hidden
}

.icon-link>.bi {
    flex-shrink: 0;
    width: 1em;
    height: 1em;
    fill: currentcolor;
    transition: .2s ease-in-out transform
}

@media(prefers-reduced-motion: reduce) {
    .icon-link>.bi {
        transition: none
    }
}

.icon-link-hover:hover>.bi,.icon-link-hover:focus-visible>.bi {
    transform: var(--bs-icon-link-transform, translate3d(0.25em, 0, 0))
}

.ratio {
    position: relative;
    width: 100%
}

.ratio::before {
    display: block;
    padding-top: var(--bs-aspect-ratio);
    content: ""
}

.ratio>* {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%
}

.ratio-1x1 {
    --bs-aspect-ratio: 100%
}

.ratio-4x3 {
    --bs-aspect-ratio: 75%
}

.ratio-16x9 {
    --bs-aspect-ratio: 56.25%
}

.ratio-21x9 {
    --bs-aspect-ratio: 42.8571428571%
}

.fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030
}

.fixed-bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1030
}

.sticky-top {
    position: sticky;
    top: 0;
    z-index: 1020
}

.sticky-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020
}

@media(min-width: 576px) {
    .sticky-sm-top {
        position:sticky;
        top: 0;
        z-index: 1020
    }

    .sticky-sm-bottom {
        position: sticky;
        bottom: 0;
        z-index: 1020
    }
}

@media(min-width: 768px) {
    .sticky-md-top {
        position:sticky;
        top: 0;
        z-index: 1020
    }

    .sticky-md-bottom {
        position: sticky;
        bottom: 0;
        z-index: 1020
    }
}

@media(min-width: 992px) {
    .sticky-lg-top {
        position:sticky;
        top: 0;
        z-index: 1020
    }

    .sticky-lg-bottom {
        position: sticky;
        bottom: 0;
        z-index: 1020
    }
}

@media(min-width: 1200px) {
    .sticky-xl-top {
        position:sticky;
        top: 0;
        z-index: 1020
    }

    .sticky-xl-bottom {
        position: sticky;
        bottom: 0;
        z-index: 1020
    }
}

@media(min-width: 1400px) {
    .sticky-xxl-top {
        position:sticky;
        top: 0;
        z-index: 1020
    }

    .sticky-xxl-bottom {
        position: sticky;
        bottom: 0;
        z-index: 1020
    }
}

.hstack {
    display: flex;
    flex-direction: row;
    align-items: center;
    align-self: stretch
}

.vstack {
    display: flex;
    flex: 1 1 auto;
    flex-direction: column;
    align-self: stretch
}

.visually-hidden,.visually-hidden-focusable:not(:focus):not(:focus-within) {
    width: 1px !important;
    height: 1px !important;
    padding: 0 !important;
    margin: -1px !important;
    overflow: hidden !important;
    clip: rect(0, 0, 0, 0) !important;
    white-space: nowrap !important;
    border: 0 !important
}

.visually-hidden:not(caption),.visually-hidden-focusable:not(:focus):not(:focus-within):not(caption) {
    position: absolute !important
}

.stretched-link::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    content: ""
}

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

.vr {
    display: inline-block;
    align-self: stretch;
    width: var(--bs-border-width);
    min-height: 1em;
    background-color: currentcolor;
    opacity: 1
}

:root {
    color-scheme: light
}

b,strong {
    font-weight: 700
}

[dir=rtl] caption {
    text-align: right
}

[dir=rtl] dd {
    margin-right: 0
}

a:not([href]) {
    color: inherit;
    text-decoration: none
}

a:not([href]):hover {
    color: inherit;
    text-decoration: none
}

input:-webkit-autofill,input:-webkit-autofill:hover,input:-webkit-autofill:focus,textarea:-webkit-autofill,textarea:-webkit-autofill:hover,textarea:-webkit-autofill:focus,select:-webkit-autofill,select:-webkit-autofill:hover,select:-webkit-autofill:focus,input:-internal-autofill-selected {
    background-clip: text !important;
    -webkit-background-clip: text !important
}

[dir=rtl] .list-inline,[dir=rtl] .list-unstyled {
    padding-right: 0
}

[dir=rtl] .list-inline-item:not(:last-child) {
    margin-right: 0;
    margin-left: .5rem
}

.row-bordered {
    overflow: hidden
}

.row-bordered>.col,.row-bordered>[class^=col-],.row-bordered>[class*=" col-"],.row-bordered>[class^="col "],.row-bordered>[class*=" col "],.row-bordered>[class$=" col"],.row-bordered>[class=col] {
    position: relative;
    padding-top: 1px
}

.row-bordered>.col::before,.row-bordered>[class^=col-]::before,.row-bordered>[class*=" col-"]::before,.row-bordered>[class^="col "]::before,.row-bordered>[class*=" col "]::before,.row-bordered>[class$=" col"]::before,.row-bordered>[class=col]::before {
    content: "";
    position: absolute;
    right: 0;
    bottom: -1px;
    left: 0;
    display: block;
    height: 0;
    border-top: 1px solid #dbdade
}

.row-bordered>.col::after,.row-bordered>[class^=col-]::after,.row-bordered>[class*=" col-"]::after,.row-bordered>[class^="col "]::after,.row-bordered>[class*=" col "]::after,.row-bordered>[class$=" col"]::after,.row-bordered>[class=col]::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: -1px;
    display: block;
    width: 0;
    border-left: 1px solid #dbdade
}

.row-bordered.row-border-light>.col::before,.row-bordered.row-border-light>.col::after,.row-bordered.row-border-light>[class^=col-]::before,.row-bordered.row-border-light>[class^=col-]::after,.row-bordered.row-border-light>[class*=" col-"]::before,.row-bordered.row-border-light>[class*=" col-"]::after,.row-bordered.row-border-light>[class^="col "]::before,.row-bordered.row-border-light>[class^="col "]::after,.row-bordered.row-border-light>[class*=" col "]::before,.row-bordered.row-border-light>[class*=" col "]::after,.row-bordered.row-border-light>[class$=" col"]::before,.row-bordered.row-border-light>[class$=" col"]::after,.row-bordered.row-border-light>[class=col]::before,.row-bordered.row-border-light>[class=col]::after {
    border-color: rgba(75,70,92,.05)
}

[dir=rtl] .row-bordered>.col::after,[dir=rtl] .row-bordered>[class^=col-]::after,[dir=rtl] .row-bordered>[class*=" col-"]::after,[dir=rtl] .row-bordered>[class^="col "]::after,[dir=rtl] .row-bordered>[class*=" col "]::after,[dir=rtl] .row-bordered>[class$=" col"]::after,[dir=rtl] .row-bordered>[class=col]::after {
    left: auto;
    right: -1px
}

.bg-label-secondary {
    background-color: #f2f2f3 !important;
    color: #a8aaae !important
}

.bg-label-success {
    background-color: #dff7e9 !important;
    color: #28c76f !important
}

.bg-label-info {
    background-color: #d9f8fc !important;
    color: #00cfe8 !important
}

.bg-label-warning {
    background-color: #fff1e3 !important;
    color: #ff9f43 !important
}

.bg-label-danger {
    background-color: #fce5e6 !important;
    color: #ea5455 !important
}

.bg-label-light {
    background-color: #fafafb !important;
    color: #dfdfe3 !important
}

.bg-label-dark {
    background-color: #e4e4e4 !important;
    color: #4b4b4b !important
}

.bg-label-gray {
    background-color: rgba(254,254,254,.8575) !important;
    color: rgba(75,70,92,.05) !important
}

.bg-label-hover-secondary {
    background-color: #f2f2f3 !important;
    color: #a8aaae !important
}

.bg-label-hover-secondary:hover {
    background-color: #a8aaae !important;
    color: #fff !important
}

.bg-label-hover-success {
    background-color: #dff7e9 !important;
    color: #28c76f !important
}

.bg-label-hover-success:hover {
    background-color: #28c76f !important;
    color: #fff !important
}

.bg-label-hover-info {
    background-color: #d9f8fc !important;
    color: #00cfe8 !important
}

.bg-label-hover-info:hover {
    background-color: #00cfe8 !important;
    color: #fff !important
}

.bg-label-hover-warning {
    background-color: #fff1e3 !important;
    color: #ff9f43 !important
}

.bg-label-hover-warning:hover {
    background-color: #ff9f43 !important;
    color: #fff !important
}

.bg-label-hover-danger {
    background-color: #fce5e6 !important;
    color: #ea5455 !important
}

.bg-label-hover-danger:hover {
    background-color: #ea5455 !important;
    color: #fff !important
}

.bg-label-hover-light {
    background-color: #fafafb !important;
    color: #dfdfe3 !important
}

.bg-label-hover-light:hover {
    background-color: #dfdfe3 !important;
    color: #fff !important
}

.bg-label-hover-dark {
    background-color: #e4e4e4 !important;
    color: #4b4b4b !important
}

.bg-label-hover-dark:hover {
    background-color: #4b4b4b !important;
    color: #fff !important
}

.bg-label-hover-gray {
    background-color: rgba(254,254,254,.8575) !important;
    color: rgba(75,70,92,.05) !important
}

.bg-label-hover-gray:hover {
    background-color: rgba(75,70,92,.05) !important;
    color: #fff !important
}

.bg-gradient-secondary {
    background-image: linear-gradient(45deg, #a8aaae, #d4d5d7) !important
}

.bg-gradient-success {
    background-image: linear-gradient(45deg, #28c76f, #94e3b7) !important
}

.bg-gradient-info {
    background-image: linear-gradient(45deg, #00cfe8, #80e7f4) !important
}

.bg-gradient-warning {
    background-image: linear-gradient(45deg, #ff9f43, #ffcfa1) !important
}

.bg-gradient-danger {
    background-image: linear-gradient(45deg, #ea5455, #f5aaaa) !important
}

.bg-gradient-light {
    background-image: linear-gradient(45deg, #dfdfe3, #efeff1) !important
}

.bg-gradient-dark {
    background-image: linear-gradient(45deg, #4b4b4b, #a5a5a5) !important
}

.bg-gradient-gray {
    background-image: linear-gradient(45deg, rgba(75, 70, 92, 0.05), #a5a3ae) !important
}

a.bg-dark:hover,a.bg-dark:focus {
    background-color: rgba(75,70,92,.9) !important
}

a.bg-light:hover,a.bg-light:focus {
    background-color: rgba(75,70,92,.2) !important
}

a.bg-lighter:hover,a.bg-lighter:focus {
    background-color: rgba(75,70,92,.05) !important
}

a.bg-lightest:hover,a.bg-lightest:focus {
    background-color: rgba(75,70,92,.03) !important
}

.text-muted[href]:hover,.text-muted[href]:focus {
    color: #93909d !important
}

.text-light {
    color: #b7b5be !important
}

.text-light[href]:hover,.text-light[href]:focus {
    color: #93909d !important
}

.text-lighter {
    color: #c9c8ce !important
}

.text-lighter[href]:hover,.text-lighter[href]:focus {
    color: #93909d !important
}

.text-lightest {
    color: #dbdade !important
}

.text-lightest[href]:hover,.text-lightest[href]:focus {
    color: #93909d !important
}

.invert-text-white {
    color: #fff !important
}

.invert-text-white[href]:hover:hover,.invert-text-white[href]:hover:focus {
    color: #fff !important
}

.invert-text-dark {
    color: #4b465c !important
}

.invert-text-dark[href]:hover:hover,.invert-text-dark[href]:hover:focus {
    color: #4b465c !important
}

.invert-bg-white {
    background-color: #fff !important
}

a.invert-bg-white:hover,a.invert-bg-white:focus {
    background-color: #fff !important
}

.invert-bg-dark {
    background-color: rgba(75,70,92,.9) !important
}

a.invert-bg-dark:hover,a.invert-bg-dark:focus {
    background-color: rgba(75,70,92,.9) !important
}

.invert-border-dark {
    border-color: #4b4b4b !important
}

.invert-border-white {
    border-color: #fff !important
}

.container-p-x {
    padding-right: 1rem !important;
    padding-left: 1rem !important
}

@media(min-width: 992px) {
    .container-p-x {
        padding-right:1.5rem !important;
        padding-left: 1.5rem !important
    }
}

.container-m-nx {
    margin-right: -1rem !important;
    margin-left: -1rem !important
}

@media(min-width: 992px) {
    .container-m-nx {
        margin-right:-1.5rem !important;
        margin-left: -1.5rem !important
    }
}

.container-p-y:not([class^=pt-]):not([class*=" pt-"]) {
    padding-top: 1.5rem !important
}

.container-p-y:not([class^=pb-]):not([class*=" pb-"]) {
    padding-bottom: 1.5rem !important
}

.container-m-ny:not([class^=mt-]):not([class*=" mt-"]) {
    margin-top: -1.5rem !important
}

.container-m-ny:not([class^=mb-]):not([class*=" mb-"]) {
    margin-bottom: -1.5rem !important
}

.cell-fit {
    width: .1%;
    white-space: nowrap
}

.table-secondary {
    --bs-table-bg: #f8f8f9;
    --bs-table-striped-bg: #f5f4f6;
    --bs-table-striped-color: #4b465c;
    --bs-table-active-bg: #eaeaec;
    --bs-table-active-color: #4b465c;
    --bs-table-hover-bg: #f1f1f3;
    --bs-table-hover-color: #4b465c;
    color: #4b465c;
    border-color: #d5d4da
}

.table-secondary .btn-icon {
    color: #4b465c
}

.table-success {
    --bs-table-bg: #eefbf3;
    --bs-table-striped-bg: #ebf7f0;
    --bs-table-striped-color: #4b465c;
    --bs-table-active-bg: #e1ede7;
    --bs-table-active-color: #4b465c;
    --bs-table-hover-bg: #e7f4ed;
    --bs-table-hover-color: #4b465c;
    color: #4b465c;
    border-color: #cdd7d5
}

.table-success .btn-icon {
    color: #4b465c
}

.table-info {
    --bs-table-bg: #ebfbfd;
    --bs-table-striped-bg: #e8f7fa;
    --bs-table-striped-color: #4b465c;
    --bs-table-active-bg: #deedf0;
    --bs-table-active-color: #4b465c;
    --bs-table-hover-bg: #e5f4f7;
    --bs-table-hover-color: #4b465c;
    color: #4b465c;
    border-color: #cbd7dd
}

.table-info .btn-icon {
    color: #4b465c
}

.table-warning {
    --bs-table-bg: #fff7f0;
    --bs-table-striped-bg: #fbf3ed;
    --bs-table-striped-color: #4b465c;
    --bs-table-active-bg: #f1e9e4;
    --bs-table-active-color: #4b465c;
    --bs-table-hover-bg: #f8f0ea;
    --bs-table-hover-color: #4b465c;
    color: #4b465c;
    border-color: #dbd4d2
}

.table-warning .btn-icon {
    color: #4b465c
}

.table-danger {
    --bs-table-bg: #fdf1f1;
    --bs-table-striped-bg: #f9eeee;
    --bs-table-striped-color: #4b465c;
    --bs-table-active-bg: #efe3e5;
    --bs-table-active-color: #4b465c;
    --bs-table-hover-bg: #f6eaeb;
    --bs-table-hover-color: #4b465c;
    color: #4b465c;
    border-color: #d9cfd3
}

.table-danger .btn-icon {
    color: #4b465c
}

.table-light {
    --bs-table-bg: #dfdfe3;
    --bs-table-striped-bg: #dcdce0;
    --bs-table-striped-color: #4b465c;
    --bs-table-active-bg: #d3d3d8;
    --bs-table-active-color: #4b465c;
    --bs-table-hover-bg: #d9d9de;
    --bs-table-hover-color: #4b465c;
    color: #4b465c;
    border-color: #c1c0c8
}

.table-light .btn-icon {
    color: #4b465c
}

.table-dark {
    --bs-table-bg: #4b4b4b;
    --bs-table-striped-bg: #4f4f4f;
    --bs-table-striped-color: #fff;
    --bs-table-active-bg: #595959;
    --bs-table-active-color: #fff;
    --bs-table-hover-bg: #525252;
    --bs-table-hover-color: #fff;
    color: #fff;
    border-color: #6f6f6f
}

.table-dark .btn-icon {
    color: #fff
}

.table:not(.table-borderless) {
    margin-bottom: 0
}

.table>:not(:first-child) {
    border-top: 0
}

.table .table-light th {
    border-bottom: 0
}

.table .dropdown-item {
    display: flex;
    gap: .25rem
}

.table tr>td .dropdown {
    position: static
}

@supports(-moz-appearance: none) {
    .table .dropdown-menu.show {
        display:inline-table
    }
}

.table th {
    text-transform: uppercase;
    font-size: .8125rem;
    letter-spacing: 1px;
    padding-top: .88rem;
    padding-bottom: .88rem
}

.table:not(.table-dark) thead:not(.table-dark) th {
    color: #5d596c
}

.table-border-bottom-0 tr:last-child td,.table-border-bottom-0 tr:last-child th {
    border-bottom-width: 0
}

.table.table-dark .btn i {
    color: #fff
}

.table.table-flush-spacing thead tr>td:first-child,.table.table-flush-spacing tbody tr>td:first-child {
    padding-left: 0
}

.table.table-flush-spacing thead tr>td:last-child,.table.table-flush-spacing tbody tr>td:last-child {
    padding-right: 0
}

.nav-align-top .table:not(.table-dark),.nav-align-top .table:not(.table-dark) thead:not(.table-dark) th,.nav-align-top .table:not(.table-dark) tfoot:not(.table-dark) th,.nav-align-top .table:not(.table-dark) td,.nav-align-right .table:not(.table-dark),.nav-align-right .table:not(.table-dark) thead:not(.table-dark) th,.nav-align-right .table:not(.table-dark) tfoot:not(.table-dark) th,.nav-align-right .table:not(.table-dark) td,.nav-align-bottom .table:not(.table-dark),.nav-align-bottom .table:not(.table-dark) thead:not(.table-dark) th,.nav-align-bottom .table:not(.table-dark) tfoot:not(.table-dark) th,.nav-align-bottom .table:not(.table-dark) td,.nav-align-left .table:not(.table-dark),.nav-align-left .table:not(.table-dark) thead:not(.table-dark) th,.nav-align-left .table:not(.table-dark) tfoot:not(.table-dark) th,.nav-align-left .table:not(.table-dark) td {
    border-color: rgba(75,70,92,.075)
}

.btn {
    cursor: pointer;
    display: inline-flex !important;
    align-items: center;
    justify-content: center;
    transition: all .135s ease-in-out;
    transform: scale(1.001)
}

.btn .ti {
    line-height: .9
}

.btn:not([class*=btn-label-]):not([class*=btn-outline-]) {
    box-shadow: 0 .125rem .25rem rgba(165,163,174,.3)
}

.btn:not([class*=btn-]) {
    box-shadow: none !important
}

.btn.disabled,.btn:disabled {
    cursor: default
}

.btn[class*=btn-]:active,.btn[class*=btn-].active {
    transform: scale(0.98);
    transition: all .135s ease-in-out
}

.btn .badge {
    transition: all .2s ease-in-out
}

@media(prefers-reduced-motion: reduce) {
    .btn .badge {
        transition: none
    }
}

label.btn {
    margin-bottom: 0
}

.btn-xl,.btn-group-xl>.btn {
    --bs-btn-padding-y: 0.875rem;
    --bs-btn-padding-x: 1.75rem;
    --bs-btn-font-size: 1.25rem;
    --bs-btn-border-radius: 0.5rem
}

.btn-sm,.btn-group-sm>.btn {
    line-height: 1
}

.btn-xs,.btn-group-xs>.btn {
    --bs-btn-padding-y: 0.175rem;
    --bs-btn-padding-x: 0.75rem;
    --bs-btn-font-size: 0.69rem;
    --bs-btn-border-radius: 0.25rem
}

.btn-secondary {
    color: #fff;
    background-color: #a8aaae;
    border-color: #a8aaae
}

.btn-secondary:hover {
    color: #fff !important;
    background-color: #97999d !important;
    border-color: #97999d !important
}

.btn-check:focus+.btn-secondary,.btn-secondary:focus,.btn-secondary.focus {
    color: #fff;
    background-color: #97999d;
    border-color: #97999d;
    box-shadow: none
}

.btn-check:checked+.btn-secondary,.btn-check:active+.btn-secondary,.btn-secondary:active,.btn-secondary.active,.btn-secondary.show.dropdown-toggle,.show>.btn-secondary.dropdown-toggle {
    color: #fff !important;
    background-color: #97999d !important;
    border-color: #97999d !important
}

.btn-secondary.disabled,.btn-secondary:disabled {
    color: #fff !important;
    background-color: #a8aaae !important;
    border-color: #a8aaae !important;
    box-shadow: none !important
}

.btn-group .btn-secondary,.input-group .btn-secondary {
    border-right: var(--bs-border-width) solid #97999d;
    border-left: var(--bs-border-width) solid #97999d
}

.btn-group-vertical .btn-secondary {
    border-top-color: #97999d;
    border-bottom-color: #97999d
}

.btn-label-secondary {
    color: #a8aaae;
    border-color: rgba(0,0,0,0);
    background: #f1f1f2
}

.btn-label-secondary.waves-effect .waves-ripple {
    background: radial-gradient(rgba(168, 170, 174, 0.2) 0, rgba(168, 170, 174, 0.3) 40%, rgba(168, 170, 174, 0.4) 50%, rgba(168, 170, 174, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-secondary:hover {
    border-color: rgba(0,0,0,0) !important;
    background: #eaebec !important;
    color: #a8aaae !important
}

.btn-label-secondary:focus,.btn-label-secondary.focus {
    color: #a8aaae;
    background: #eaebec;
    box-shadow: none !important
}

.btn-label-secondary:active,.btn-label-secondary.active,.btn-label-secondary.show.dropdown-toggle,.show>.btn-label-secondary.dropdown-toggle {
    color: #a8aaae !important;
    background-color: #eaebec !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-secondary:active:focus,.btn-label-secondary.active:focus,.btn-label-secondary.show.dropdown-toggle:focus,.show>.btn-label-secondary.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-secondary.disabled,.btn-label-secondary:disabled {
    color: #a8aaae !important;
    border-color: rgba(0,0,0,0) !important;
    background: #f2f2f3 !important;
    box-shadow: none
}

.btn-group .btn-label-secondary,.input-group .btn-label-secondary {
    border-right: var(--bs-border-width) solid #eaebec;
    border-left: var(--bs-border-width) solid #eaebec
}

.btn-group-vertical .btn-label-secondary {
    border-top-color: #eaebec;
    border-bottom-color: #eaebec
}

.btn-outline-secondary {
    color: #a8aaae;
    border-color: #a8aaae;
    background: rgba(0,0,0,0)
}

.btn-outline-secondary.waves-effect .waves-ripple {
    background: radial-gradient(rgba(168, 170, 174, 0.2) 0, rgba(168, 170, 174, 0.3) 40%, rgba(168, 170, 174, 0.4) 50%, rgba(168, 170, 174, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-secondary:hover {
    color: #a8aaae !important;
    background-color: #f8f8f9 !important;
    border-color: #a8aaae !important
}

.btn-check:focus+.btn-outline-secondary,.btn-outline-secondary:focus {
    color: #a8aaae;
    background-color: #f8f8f9;
    border-color: #a8aaae;
    box-shadow: none
}

.btn-check:checked+.btn-outline-secondary,.btn-check:active+.btn-outline-secondary,.btn-outline-secondary:active,.btn-outline-secondary.active,.btn-outline-secondary.dropdown-toggle.show {
    color: #a8aaae !important;
    background-color: #f1f1f2 !important;
    border-color: #a8aaae !important
}

.btn-check:checked+.btn-outline-secondary:focus,.btn-check:active+.btn-outline-secondary:focus,.btn-outline-secondary:active:focus,.btn-outline-secondary.active:focus,.btn-outline-secondary.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-secondary.disabled,.btn-outline-secondary:disabled {
    color: #a8aaae !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-secondary .badge {
    background: #a8aaae;
    border-color: #a8aaae;
    color: #fff
}

.btn-outline-secondary:hover .badge,.btn-outline-secondary:focus:hover .badge,.btn-outline-secondary:active .badge,.btn-outline-secondary.active .badge,.show>.btn-outline-secondary.dropdown-toggle .badge {
    background: #a8aaae;
    border-color: #a8aaae
}

.btn-success {
    color: #fff;
    background-color: #28c76f;
    border-color: #28c76f
}

.btn-success:hover {
    color: #fff !important;
    background-color: #24b364 !important;
    border-color: #24b364 !important
}

.btn-check:focus+.btn-success,.btn-success:focus,.btn-success.focus {
    color: #fff;
    background-color: #24b364;
    border-color: #24b364;
    box-shadow: none
}

.btn-check:checked+.btn-success,.btn-check:active+.btn-success,.btn-success:active,.btn-success.active,.btn-success.show.dropdown-toggle,.show>.btn-success.dropdown-toggle {
    color: #fff !important;
    background-color: #24b364 !important;
    border-color: #24b364 !important
}

.btn-success.disabled,.btn-success:disabled {
    color: #fff !important;
    background-color: #28c76f !important;
    border-color: #28c76f !important;
    box-shadow: none !important
}

.btn-group .btn-success,.input-group .btn-success {
    border-right: var(--bs-border-width) solid #24b364;
    border-left: var(--bs-border-width) solid #24b364
}

.btn-group-vertical .btn-success {
    border-top-color: #24b364;
    border-bottom-color: #24b364
}

.btn-label-success {
    color: #28c76f;
    border-color: rgba(0,0,0,0);
    background: #ddf6e8
}

.btn-label-success.waves-effect .waves-ripple {
    background: radial-gradient(rgba(40, 199, 111, 0.2) 0, rgba(40, 199, 111, 0.3) 40%, rgba(40, 199, 111, 0.4) 50%, rgba(40, 199, 111, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-success:hover {
    border-color: rgba(0,0,0,0) !important;
    background: #cbf2dc !important;
    color: #28c76f !important
}

.btn-label-success:focus,.btn-label-success.focus {
    color: #28c76f;
    background: #cbf2dc;
    box-shadow: none !important
}

.btn-label-success:active,.btn-label-success.active,.btn-label-success.show.dropdown-toggle,.show>.btn-label-success.dropdown-toggle {
    color: #28c76f !important;
    background-color: #cbf2dc !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-success:active:focus,.btn-label-success.active:focus,.btn-label-success.show.dropdown-toggle:focus,.show>.btn-label-success.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-success.disabled,.btn-label-success:disabled {
    color: #28c76f !important;
    border-color: rgba(0,0,0,0) !important;
    background: #dff7e9 !important;
    box-shadow: none
}

.btn-group .btn-label-success,.input-group .btn-label-success {
    border-right: var(--bs-border-width) solid #cbf2dc;
    border-left: var(--bs-border-width) solid #cbf2dc
}

.btn-group-vertical .btn-label-success {
    border-top-color: #cbf2dc;
    border-bottom-color: #cbf2dc
}

.btn-outline-success {
    color: #28c76f;
    border-color: #28c76f;
    background: rgba(0,0,0,0)
}

.btn-outline-success.waves-effect .waves-ripple {
    background: radial-gradient(rgba(40, 199, 111, 0.2) 0, rgba(40, 199, 111, 0.3) 40%, rgba(40, 199, 111, 0.4) 50%, rgba(40, 199, 111, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-success:hover {
    color: #28c76f !important;
    background-color: #eefbf3 !important;
    border-color: #28c76f !important
}

.btn-check:focus+.btn-outline-success,.btn-outline-success:focus {
    color: #28c76f;
    background-color: #eefbf3;
    border-color: #28c76f;
    box-shadow: none
}

.btn-check:checked+.btn-outline-success,.btn-check:active+.btn-outline-success,.btn-outline-success:active,.btn-outline-success.active,.btn-outline-success.dropdown-toggle.show {
    color: #28c76f !important;
    background-color: #ddf6e8 !important;
    border-color: #28c76f !important
}

.btn-check:checked+.btn-outline-success:focus,.btn-check:active+.btn-outline-success:focus,.btn-outline-success:active:focus,.btn-outline-success.active:focus,.btn-outline-success.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-success.disabled,.btn-outline-success:disabled {
    color: #28c76f !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-success .badge {
    background: #28c76f;
    border-color: #28c76f;
    color: #fff
}

.btn-outline-success:hover .badge,.btn-outline-success:focus:hover .badge,.btn-outline-success:active .badge,.btn-outline-success.active .badge,.show>.btn-outline-success.dropdown-toggle .badge {
    background: #28c76f;
    border-color: #28c76f
}

.btn-info {
    color: #fff;
    background-color: #00cfe8;
    border-color: #00cfe8
}

.btn-info:hover {
    color: #fff !important;
    background-color: #00bad1 !important;
    border-color: #00bad1 !important
}

.btn-check:focus+.btn-info,.btn-info:focus,.btn-info.focus {
    color: #fff;
    background-color: #00bad1;
    border-color: #00bad1;
    box-shadow: none
}

.btn-check:checked+.btn-info,.btn-check:active+.btn-info,.btn-info:active,.btn-info.active,.btn-info.show.dropdown-toggle,.show>.btn-info.dropdown-toggle {
    color: #fff !important;
    background-color: #00bad1 !important;
    border-color: #00bad1 !important
}

.btn-info.disabled,.btn-info:disabled {
    color: #fff !important;
    background-color: #00cfe8 !important;
    border-color: #00cfe8 !important;
    box-shadow: none !important
}

.btn-group .btn-info,.input-group .btn-info {
    border-right: var(--bs-border-width) solid #00bad1;
    border-left: var(--bs-border-width) solid #00bad1
}

.btn-group-vertical .btn-info {
    border-top-color: #00bad1;
    border-bottom-color: #00bad1
}

.btn-label-info {
    color: #00cfe8;
    border-color: rgba(0,0,0,0);
    background: #d6f7fb
}

.btn-label-info.waves-effect .waves-ripple {
    background: radial-gradient(rgba(0, 207, 232, 0.2) 0, rgba(0, 207, 232, 0.3) 40%, rgba(0, 207, 232, 0.4) 50%, rgba(0, 207, 232, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-info:hover {
    border-color: rgba(0,0,0,0) !important;
    background: #c2f3f9 !important;
    color: #00cfe8 !important
}

.btn-label-info:focus,.btn-label-info.focus {
    color: #00cfe8;
    background: #c2f3f9;
    box-shadow: none !important
}

.btn-label-info:active,.btn-label-info.active,.btn-label-info.show.dropdown-toggle,.show>.btn-label-info.dropdown-toggle {
    color: #00cfe8 !important;
    background-color: #c2f3f9 !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-info:active:focus,.btn-label-info.active:focus,.btn-label-info.show.dropdown-toggle:focus,.show>.btn-label-info.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-info.disabled,.btn-label-info:disabled {
    color: #00cfe8 !important;
    border-color: rgba(0,0,0,0) !important;
    background: #d9f8fc !important;
    box-shadow: none
}

.btn-group .btn-label-info,.input-group .btn-label-info {
    border-right: var(--bs-border-width) solid #c2f3f9;
    border-left: var(--bs-border-width) solid #c2f3f9
}

.btn-group-vertical .btn-label-info {
    border-top-color: #c2f3f9;
    border-bottom-color: #c2f3f9
}

.btn-outline-info {
    color: #00cfe8;
    border-color: #00cfe8;
    background: rgba(0,0,0,0)
}

.btn-outline-info.waves-effect .waves-ripple {
    background: radial-gradient(rgba(0, 207, 232, 0.2) 0, rgba(0, 207, 232, 0.3) 40%, rgba(0, 207, 232, 0.4) 50%, rgba(0, 207, 232, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-info:hover {
    color: #00cfe8 !important;
    background-color: #ebfbfd !important;
    border-color: #00cfe8 !important
}

.btn-check:focus+.btn-outline-info,.btn-outline-info:focus {
    color: #00cfe8;
    background-color: #ebfbfd;
    border-color: #00cfe8;
    box-shadow: none
}

.btn-check:checked+.btn-outline-info,.btn-check:active+.btn-outline-info,.btn-outline-info:active,.btn-outline-info.active,.btn-outline-info.dropdown-toggle.show {
    color: #00cfe8 !important;
    background-color: #d6f7fb !important;
    border-color: #00cfe8 !important
}

.btn-check:checked+.btn-outline-info:focus,.btn-check:active+.btn-outline-info:focus,.btn-outline-info:active:focus,.btn-outline-info.active:focus,.btn-outline-info.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-info.disabled,.btn-outline-info:disabled {
    color: #00cfe8 !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-info .badge {
    background: #00cfe8;
    border-color: #00cfe8;
    color: #fff
}

.btn-outline-info:hover .badge,.btn-outline-info:focus:hover .badge,.btn-outline-info:active .badge,.btn-outline-info.active .badge,.show>.btn-outline-info.dropdown-toggle .badge {
    background: #00cfe8;
    border-color: #00cfe8
}

.btn-warning {
    color: #fff;
    background-color: #ff9f43;
    border-color: #ff9f43
}

.btn-warning:hover {
    color: #fff !important;
    background-color: #e68f3c !important;
    border-color: #e68f3c !important
}

.btn-check:focus+.btn-warning,.btn-warning:focus,.btn-warning.focus {
    color: #fff;
    background-color: #e68f3c;
    border-color: #e68f3c;
    box-shadow: none
}

.btn-check:checked+.btn-warning,.btn-check:active+.btn-warning,.btn-warning:active,.btn-warning.active,.btn-warning.show.dropdown-toggle,.show>.btn-warning.dropdown-toggle {
    color: #fff !important;
    background-color: #e68f3c !important;
    border-color: #e68f3c !important
}

.btn-warning.disabled,.btn-warning:disabled {
    color: #fff !important;
    background-color: #ff9f43 !important;
    border-color: #ff9f43 !important;
    box-shadow: none !important
}

.btn-group .btn-warning,.input-group .btn-warning {
    border-right: var(--bs-border-width) solid #e68f3c;
    border-left: var(--bs-border-width) solid #e68f3c
}

.btn-group-vertical .btn-warning {
    border-top-color: #e68f3c;
    border-bottom-color: #e68f3c
}

.btn-label-warning {
    color: #ff9f43;
    border-color: rgba(0,0,0,0);
    background: #fff0e1
}

.btn-label-warning.waves-effect .waves-ripple {
    background: radial-gradient(rgba(255, 159, 67, 0.2) 0, rgba(255, 159, 67, 0.3) 40%, rgba(255, 159, 67, 0.4) 50%, rgba(255, 159, 67, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-warning:hover {
    border-color: rgba(0,0,0,0) !important;
    background: #ffe8d2 !important;
    color: #ff9f43 !important
}

.btn-label-warning:focus,.btn-label-warning.focus {
    color: #ff9f43;
    background: #ffe8d2;
    box-shadow: none !important
}

.btn-label-warning:active,.btn-label-warning.active,.btn-label-warning.show.dropdown-toggle,.show>.btn-label-warning.dropdown-toggle {
    color: #ff9f43 !important;
    background-color: #ffe8d2 !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-warning:active:focus,.btn-label-warning.active:focus,.btn-label-warning.show.dropdown-toggle:focus,.show>.btn-label-warning.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-warning.disabled,.btn-label-warning:disabled {
    color: #ff9f43 !important;
    border-color: rgba(0,0,0,0) !important;
    background: #fff1e3 !important;
    box-shadow: none
}

.btn-group .btn-label-warning,.input-group .btn-label-warning {
    border-right: var(--bs-border-width) solid #ffe8d2;
    border-left: var(--bs-border-width) solid #ffe8d2
}

.btn-group-vertical .btn-label-warning {
    border-top-color: #ffe8d2;
    border-bottom-color: #ffe8d2
}

.btn-outline-warning {
    color: #ff9f43;
    border-color: #ff9f43;
    background: rgba(0,0,0,0)
}

.btn-outline-warning.waves-effect .waves-ripple {
    background: radial-gradient(rgba(255, 159, 67, 0.2) 0, rgba(255, 159, 67, 0.3) 40%, rgba(255, 159, 67, 0.4) 50%, rgba(255, 159, 67, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-warning:hover {
    color: #ff9f43 !important;
    background-color: #fff7f0 !important;
    border-color: #ff9f43 !important
}

.btn-check:focus+.btn-outline-warning,.btn-outline-warning:focus {
    color: #ff9f43;
    background-color: #fff7f0;
    border-color: #ff9f43;
    box-shadow: none
}

.btn-check:checked+.btn-outline-warning,.btn-check:active+.btn-outline-warning,.btn-outline-warning:active,.btn-outline-warning.active,.btn-outline-warning.dropdown-toggle.show {
    color: #ff9f43 !important;
    background-color: #fff0e1 !important;
    border-color: #ff9f43 !important
}

.btn-check:checked+.btn-outline-warning:focus,.btn-check:active+.btn-outline-warning:focus,.btn-outline-warning:active:focus,.btn-outline-warning.active:focus,.btn-outline-warning.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-warning.disabled,.btn-outline-warning:disabled {
    color: #ff9f43 !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-warning .badge {
    background: #ff9f43;
    border-color: #ff9f43;
    color: #fff
}

.btn-outline-warning:hover .badge,.btn-outline-warning:focus:hover .badge,.btn-outline-warning:active .badge,.btn-outline-warning.active .badge,.show>.btn-outline-warning.dropdown-toggle .badge {
    background: #ff9f43;
    border-color: #ff9f43
}

.btn-danger {
    color: #fff;
    background-color: #ea5455;
    border-color: #ea5455
}

.btn-danger:hover {
    color: #fff !important;
    background-color: #d34c4d !important;
    border-color: #d34c4d !important
}

.btn-check:focus+.btn-danger,.btn-danger:focus,.btn-danger.focus {
    color: #fff;
    background-color: #d34c4d;
    border-color: #d34c4d;
    box-shadow: none
}

.btn-check:checked+.btn-danger,.btn-check:active+.btn-danger,.btn-danger:active,.btn-danger.active,.btn-danger.show.dropdown-toggle,.show>.btn-danger.dropdown-toggle {
    color: #fff !important;
    background-color: #d34c4d !important;
    border-color: #d34c4d !important
}

.btn-danger.disabled,.btn-danger:disabled {
    color: #fff !important;
    background-color: #ea5455 !important;
    border-color: #ea5455 !important;
    box-shadow: none !important
}

.btn-group .btn-danger,.input-group .btn-danger {
    border-right: var(--bs-border-width) solid #d34c4d;
    border-left: var(--bs-border-width) solid #d34c4d
}

.btn-group-vertical .btn-danger {
    border-top-color: #d34c4d;
    border-bottom-color: #d34c4d
}

.btn-label-danger {
    color: #ea5455;
    border-color: rgba(0,0,0,0);
    background: #fce4e4
}

.btn-label-danger.waves-effect .waves-ripple {
    background: radial-gradient(rgba(234, 84, 85, 0.2) 0, rgba(234, 84, 85, 0.3) 40%, rgba(234, 84, 85, 0.4) 50%, rgba(234, 84, 85, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-danger:hover {
    border-color: rgba(0,0,0,0) !important;
    background: #fad6d6 !important;
    color: #ea5455 !important
}

.btn-label-danger:focus,.btn-label-danger.focus {
    color: #ea5455;
    background: #fad6d6;
    box-shadow: none !important
}

.btn-label-danger:active,.btn-label-danger.active,.btn-label-danger.show.dropdown-toggle,.show>.btn-label-danger.dropdown-toggle {
    color: #ea5455 !important;
    background-color: #fad6d6 !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-danger:active:focus,.btn-label-danger.active:focus,.btn-label-danger.show.dropdown-toggle:focus,.show>.btn-label-danger.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-danger.disabled,.btn-label-danger:disabled {
    color: #ea5455 !important;
    border-color: rgba(0,0,0,0) !important;
    background: #fce5e6 !important;
    box-shadow: none
}

.btn-group .btn-label-danger,.input-group .btn-label-danger {
    border-right: var(--bs-border-width) solid #fad6d6;
    border-left: var(--bs-border-width) solid #fad6d6
}

.btn-group-vertical .btn-label-danger {
    border-top-color: #fad6d6;
    border-bottom-color: #fad6d6
}

.btn-outline-danger {
    color: #ea5455;
    border-color: #ea5455;
    background: rgba(0,0,0,0)
}

.btn-outline-danger.waves-effect .waves-ripple {
    background: radial-gradient(rgba(234, 84, 85, 0.2) 0, rgba(234, 84, 85, 0.3) 40%, rgba(234, 84, 85, 0.4) 50%, rgba(234, 84, 85, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-danger:hover {
    color: #ea5455 !important;
    background-color: #fdf1f1 !important;
    border-color: #ea5455 !important
}

.btn-check:focus+.btn-outline-danger,.btn-outline-danger:focus {
    color: #ea5455;
    background-color: #fdf1f1;
    border-color: #ea5455;
    box-shadow: none
}

.btn-check:checked+.btn-outline-danger,.btn-check:active+.btn-outline-danger,.btn-outline-danger:active,.btn-outline-danger.active,.btn-outline-danger.dropdown-toggle.show {
    color: #ea5455 !important;
    background-color: #fce4e4 !important;
    border-color: #ea5455 !important
}

.btn-check:checked+.btn-outline-danger:focus,.btn-check:active+.btn-outline-danger:focus,.btn-outline-danger:active:focus,.btn-outline-danger.active:focus,.btn-outline-danger.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-danger.disabled,.btn-outline-danger:disabled {
    color: #ea5455 !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-danger .badge {
    background: #ea5455;
    border-color: #ea5455;
    color: #fff
}

.btn-outline-danger:hover .badge,.btn-outline-danger:focus:hover .badge,.btn-outline-danger:active .badge,.btn-outline-danger.active .badge,.show>.btn-outline-danger.dropdown-toggle .badge {
    background: #ea5455;
    border-color: #ea5455
}

.btn-light {
    color: #4b465c;
    background-color: #dfdfe3;
    border-color: #dfdfe3
}

.btn-light:hover {
    color: #4b465c !important;
    background-color: #e7e7ea !important;
    border-color: #e2e2e6 !important
}

.btn-check:focus+.btn-light,.btn-light:focus,.btn-light.focus {
    color: #4b465c;
    background-color: #e7e7ea;
    border-color: #e2e2e6;
    box-shadow: none
}

.btn-check:checked+.btn-light,.btn-check:active+.btn-light,.btn-light:active,.btn-light.active,.btn-light.show.dropdown-toggle,.show>.btn-light.dropdown-toggle {
    color: #4b465c !important;
    background-color: #e5e5e9 !important;
    border-color: #e2e2e6 !important
}

.btn-light.disabled,.btn-light:disabled {
    color: #4b465c !important;
    background-color: #dfdfe3 !important;
    border-color: #dfdfe3 !important;
    box-shadow: none !important
}

.btn-group .btn-light,.input-group .btn-light {
    border-right: var(--bs-border-width) solid #e5e5e9;
    border-left: var(--bs-border-width) solid #e5e5e9
}

.btn-group-vertical .btn-light {
    border-top-color: #e5e5e9;
    border-bottom-color: #e5e5e9
}

.btn-label-light {
    color: #dfdfe3;
    border-color: rgba(0,0,0,0);
    background: #fafafb
}

.btn-label-light.waves-effect .waves-ripple {
    background: radial-gradient(rgba(223, 223, 227, 0.2) 0, rgba(223, 223, 227, 0.3) 40%, rgba(223, 223, 227, 0.4) 50%, rgba(223, 223, 227, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-light:hover {
    border-color: rgba(0,0,0,0) !important;
    background: #f7f7f8 !important;
    color: #dfdfe3 !important
}

.btn-label-light:focus,.btn-label-light.focus {
    color: #dfdfe3;
    background: #f7f7f8;
    box-shadow: none !important
}

.btn-label-light:active,.btn-label-light.active,.btn-label-light.show.dropdown-toggle,.show>.btn-label-light.dropdown-toggle {
    color: #dfdfe3 !important;
    background-color: #f7f7f8 !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-light:active:focus,.btn-label-light.active:focus,.btn-label-light.show.dropdown-toggle:focus,.show>.btn-label-light.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-light.disabled,.btn-label-light:disabled {
    color: #dfdfe3 !important;
    border-color: rgba(0,0,0,0) !important;
    background: #fafafb !important;
    box-shadow: none
}

.btn-group .btn-label-light,.input-group .btn-label-light {
    border-right: var(--bs-border-width) solid #f7f7f8;
    border-left: var(--bs-border-width) solid #f7f7f8
}

.btn-group-vertical .btn-label-light {
    border-top-color: #f7f7f8;
    border-bottom-color: #f7f7f8
}

.btn-outline-light {
    color: #dfdfe3;
    border-color: #dfdfe3;
    background: rgba(0,0,0,0)
}

.btn-outline-light.waves-effect .waves-ripple {
    background: radial-gradient(rgba(223, 223, 227, 0.2) 0, rgba(223, 223, 227, 0.3) 40%, rgba(223, 223, 227, 0.4) 50%, rgba(223, 223, 227, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-light:hover {
    color: #dfdfe3 !important;
    background-color: #fcfcfd !important;
    border-color: #dfdfe3 !important
}

.btn-check:focus+.btn-outline-light,.btn-outline-light:focus {
    color: #dfdfe3;
    background-color: #fcfcfd;
    border-color: #dfdfe3;
    box-shadow: none
}

.btn-check:checked+.btn-outline-light,.btn-check:active+.btn-outline-light,.btn-outline-light:active,.btn-outline-light.active,.btn-outline-light.dropdown-toggle.show {
    color: #dfdfe3 !important;
    background-color: #fafafb !important;
    border-color: #dfdfe3 !important
}

.btn-check:checked+.btn-outline-light:focus,.btn-check:active+.btn-outline-light:focus,.btn-outline-light:active:focus,.btn-outline-light.active:focus,.btn-outline-light.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-light.disabled,.btn-outline-light:disabled {
    color: #dfdfe3 !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-light .badge {
    background: #dfdfe3;
    border-color: #dfdfe3;
    color: #4b465c
}

.btn-outline-light:hover .badge,.btn-outline-light:focus:hover .badge,.btn-outline-light:active .badge,.btn-outline-light.active .badge,.show>.btn-outline-light.dropdown-toggle .badge {
    background: #dfdfe3;
    border-color: #dfdfe3
}

.btn-dark {
    color: #fff;
    background-color: #4b4b4b;
    border-color: #4b4b4b
}

.btn-dark:hover {
    color: #fff !important;
    background-color: #444 !important;
    border-color: #444 !important
}

.btn-check:focus+.btn-dark,.btn-dark:focus,.btn-dark.focus {
    color: #fff;
    background-color: #444;
    border-color: #444;
    box-shadow: none
}

.btn-check:checked+.btn-dark,.btn-check:active+.btn-dark,.btn-dark:active,.btn-dark.active,.btn-dark.show.dropdown-toggle,.show>.btn-dark.dropdown-toggle {
    color: #fff !important;
    background-color: #444 !important;
    border-color: #444 !important
}

.btn-dark.disabled,.btn-dark:disabled {
    color: #fff !important;
    background-color: #4b4b4b !important;
    border-color: #4b4b4b !important;
    box-shadow: none !important
}

.btn-group .btn-dark,.input-group .btn-dark {
    border-right: var(--bs-border-width) solid #444;
    border-left: var(--bs-border-width) solid #444
}

.btn-group-vertical .btn-dark {
    border-top-color: #444;
    border-bottom-color: #444
}

.btn-label-dark {
    color: #4b4b4b;
    border-color: rgba(0,0,0,0);
    background: #e2e2e2
}

.btn-label-dark.waves-effect .waves-ripple {
    background: radial-gradient(rgba(75, 75, 75, 0.2) 0, rgba(75, 75, 75, 0.3) 40%, rgba(75, 75, 75, 0.4) 50%, rgba(75, 75, 75, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-dark:hover {
    border-color: rgba(0,0,0,0) !important;
    background: #d4d4d4 !important;
    color: #4b4b4b !important
}

.btn-label-dark:focus,.btn-label-dark.focus {
    color: #4b4b4b;
    background: #d4d4d4;
    box-shadow: none !important
}

.btn-label-dark:active,.btn-label-dark.active,.btn-label-dark.show.dropdown-toggle,.show>.btn-label-dark.dropdown-toggle {
    color: #4b4b4b !important;
    background-color: #d4d4d4 !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-dark:active:focus,.btn-label-dark.active:focus,.btn-label-dark.show.dropdown-toggle:focus,.show>.btn-label-dark.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-dark.disabled,.btn-label-dark:disabled {
    color: #4b4b4b !important;
    border-color: rgba(0,0,0,0) !important;
    background: #e4e4e4 !important;
    box-shadow: none
}

.btn-group .btn-label-dark,.input-group .btn-label-dark {
    border-right: var(--bs-border-width) solid #d4d4d4;
    border-left: var(--bs-border-width) solid #d4d4d4
}

.btn-group-vertical .btn-label-dark {
    border-top-color: #d4d4d4;
    border-bottom-color: #d4d4d4
}

.btn-outline-dark {
    color: #4b4b4b;
    border-color: #4b4b4b;
    background: rgba(0,0,0,0)
}

.btn-outline-dark.waves-effect .waves-ripple {
    background: radial-gradient(rgba(75, 75, 75, 0.2) 0, rgba(75, 75, 75, 0.3) 40%, rgba(75, 75, 75, 0.4) 50%, rgba(75, 75, 75, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-dark:hover {
    color: #4b4b4b !important;
    background-color: #f1f1f1 !important;
    border-color: #4b4b4b !important
}

.btn-check:focus+.btn-outline-dark,.btn-outline-dark:focus {
    color: #4b4b4b;
    background-color: #f1f1f1;
    border-color: #4b4b4b;
    box-shadow: none
}

.btn-check:checked+.btn-outline-dark,.btn-check:active+.btn-outline-dark,.btn-outline-dark:active,.btn-outline-dark.active,.btn-outline-dark.dropdown-toggle.show {
    color: #4b4b4b !important;
    background-color: #e2e2e2 !important;
    border-color: #4b4b4b !important
}

.btn-check:checked+.btn-outline-dark:focus,.btn-check:active+.btn-outline-dark:focus,.btn-outline-dark:active:focus,.btn-outline-dark.active:focus,.btn-outline-dark.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-dark.disabled,.btn-outline-dark:disabled {
    color: #4b4b4b !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-dark .badge {
    background: #4b4b4b;
    border-color: #4b4b4b;
    color: #fff
}

.btn-outline-dark:hover .badge,.btn-outline-dark:focus:hover .badge,.btn-outline-dark:active .badge,.btn-outline-dark.active .badge,.show>.btn-outline-dark.dropdown-toggle .badge {
    background: #4b4b4b;
    border-color: #4b4b4b
}

.btn-gray {
    color: #fff;
    background-color: rgba(75,70,92,.05);
    border-color: rgba(75,70,92,.05)
}

.btn-gray:hover {
    color: #fff !important;
    background-color: rgba(14,13,17,.145) !important;
    border-color: rgba(14,13,17,.145) !important
}

.btn-check:focus+.btn-gray,.btn-gray:focus,.btn-gray.focus {
    color: #fff;
    background-color: rgba(14,13,17,.145);
    border-color: rgba(14,13,17,.145);
    box-shadow: none
}

.btn-check:checked+.btn-gray,.btn-check:active+.btn-gray,.btn-gray:active,.btn-gray.active,.btn-gray.show.dropdown-toggle,.show>.btn-gray.dropdown-toggle {
    color: #fff !important;
    background-color: rgba(14,13,17,.145) !important;
    border-color: rgba(14,13,17,.145) !important
}

.btn-gray.disabled,.btn-gray:disabled {
    color: #fff !important;
    background-color: rgba(75,70,92,.05) !important;
    border-color: rgba(75,70,92,.05) !important;
    box-shadow: none !important
}

.btn-group .btn-gray,.input-group .btn-gray {
    border-right: var(--bs-border-width) solid rgba(14,13,17,.145);
    border-left: var(--bs-border-width) solid rgba(14,13,17,.145)
}

.btn-group-vertical .btn-gray {
    border-top-color: rgba(14,13,17,.145);
    border-bottom-color: rgba(14,13,17,.145)
}

.btn-label-gray {
    color: rgba(75,70,92,.05);
    border-color: rgba(0,0,0,0);
    background: rgba(254,254,254,.848)
}

.btn-label-gray.waves-effect .waves-ripple {
    background: radial-gradient(rgba(75, 70, 92, 0.2) 0, rgba(75, 70, 92, 0.3) 40%, rgba(75, 70, 92, 0.4) 50%, rgba(75, 70, 92, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-gray:hover {
    border-color: rgba(0,0,0,0) !important;
    background: rgba(254,254,254,.772) !important;
    color: rgba(75,70,92,.05) !important
}

.btn-label-gray:focus,.btn-label-gray.focus {
    color: rgba(75,70,92,.05);
    background: rgba(254,254,254,.772);
    box-shadow: none !important
}

.btn-label-gray:active,.btn-label-gray.active,.btn-label-gray.show.dropdown-toggle,.show>.btn-label-gray.dropdown-toggle {
    color: rgba(75,70,92,.05) !important;
    background-color: rgba(254,254,254,.772) !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-gray:active:focus,.btn-label-gray.active:focus,.btn-label-gray.show.dropdown-toggle:focus,.show>.btn-label-gray.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-gray.disabled,.btn-label-gray:disabled {
    color: rgba(75,70,92,.05) !important;
    border-color: rgba(0,0,0,0) !important;
    background: rgba(254,254,254,.8575) !important;
    box-shadow: none
}

.btn-group .btn-label-gray,.input-group .btn-label-gray {
    border-right: var(--bs-border-width) solid rgba(254,254,254,.772);
    border-left: var(--bs-border-width) solid rgba(254,254,254,.772)
}

.btn-group-vertical .btn-label-gray {
    border-top-color: rgba(254,254,254,.772);
    border-bottom-color: rgba(254,254,254,.772)
}

.btn-outline-gray {
    color: rgba(75,70,92,.05);
    border-color: rgba(75,70,92,.05);
    background: rgba(0,0,0,0)
}

.btn-outline-gray.waves-effect .waves-ripple {
    background: radial-gradient(rgba(75, 70, 92, 0.2) 0, rgba(75, 70, 92, 0.3) 40%, rgba(75, 70, 92, 0.4) 50%, rgba(75, 70, 92, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-gray:hover {
    color: rgba(75,70,92,.05) !important;
    background-color: rgba(255,255,255,.924) !important;
    border-color: rgba(75,70,92,.05) !important
}

.btn-check:focus+.btn-outline-gray,.btn-outline-gray:focus {
    color: rgba(75,70,92,.05);
    background-color: rgba(255,255,255,.924);
    border-color: rgba(75,70,92,.05);
    box-shadow: none
}

.btn-check:checked+.btn-outline-gray,.btn-check:active+.btn-outline-gray,.btn-outline-gray:active,.btn-outline-gray.active,.btn-outline-gray.dropdown-toggle.show {
    color: rgba(75,70,92,.05) !important;
    background-color: rgba(254,254,254,.848) !important;
    border-color: rgba(75,70,92,.05) !important
}

.btn-check:checked+.btn-outline-gray:focus,.btn-check:active+.btn-outline-gray:focus,.btn-outline-gray:active:focus,.btn-outline-gray.active:focus,.btn-outline-gray.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-gray.disabled,.btn-outline-gray:disabled {
    color: rgba(75,70,92,.05) !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-gray .badge {
    background: rgba(75,70,92,.05);
    border-color: rgba(75,70,92,.05);
    color: #fff
}

.btn-outline-gray:hover .badge,.btn-outline-gray:focus:hover .badge,.btn-outline-gray:active .badge,.btn-outline-gray.active .badge,.show>.btn-outline-gray.dropdown-toggle .badge {
    background: rgba(75,70,92,.05);
    border-color: rgba(75,70,92,.05)
}

.btn-icon {
    --bs-btn-active-border-color: transparent;
    padding: 0;
    width: calc(2.2546875rem + calc(var(--bs-border-width) * 2));
    height: calc(2.2546875rem + calc(var(--bs-border-width) * 2));
    display: inline-flex;
    flex-shrink: 0;
    justify-content: center;
    align-items: center
}

.btn-icon.btn-xl,.btn-group-xl>.btn-icon.btn {
    width: calc(3.46875rem + calc(var(--bs-border-width) * 2));
    height: calc(3.46875rem + calc(var(--bs-border-width) * 2))
}

.btn-icon.btn-xl>span,.btn-group-xl>.btn-icon.btn>span {
    font-size: 1.25rem
}

.btn-icon.btn-lg,.btn-group-lg>.btn-icon.btn {
    width: calc(3.1409375rem + calc(var(--bs-border-width) * 2));
    height: calc(3.1409375rem + calc(var(--bs-border-width) * 2));
    font-size: 1.0625rem
}

.btn-icon.btn-sm,.btn-group-sm>.btn-icon.btn {
    width: calc(1.6325rem + calc(var(--bs-border-width) * 2));
    height: calc(1.6325rem + calc(var(--bs-border-width) * 2));
    font-size: .8125rem
}

.btn-icon.btn-xs,.btn-group-xs>.btn-icon.btn {
    width: calc(0.8675rem + calc(var(--bs-border-width) * 2));
    height: calc(0.8675rem + calc(var(--bs-border-width) * 2));
    font-size: .69rem
}

.btn.borderless:not(.active):not(:active):not(:hover):not(:focus),:not(.show)>.btn.borderless.dropdown-toggle:not(:hover):not(:focus) {
    border-color: rgba(0,0,0,0);
    box-shadow: none
}

.btn.btn-link {
    font-size: inherit
}

.btn-pinned {
    position: absolute;
    top: .75rem
}

html:not([dir=rtl]) .btn-pinned {
    right: .75rem
}

[dir=rtl] .btn-pinned {
    left: .75rem
}

button:focus,button:focus-visible {
    outline: none
}

.btn:not([class*=btn-]):active,.btn:not([class*=btn-]).active,.btn:not([class*=btn-]).show,.btn:not([class*=btn-]) {
    border: none
}

.dropdown-toggle-split,.btn-lg+.dropdown-toggle-split,.btn-group-lg>.btn+.dropdown-toggle-split,.input-group-lg .btn+.dropdown-toggle-split,.btn-xl+.dropdown-toggle-split,.btn-group-xl>.btn+.dropdown-toggle-split {
    padding-right: .7em;
    padding-left: .7em
}

.btn-sm+.dropdown-toggle-split,.btn-group-sm>.btn+.dropdown-toggle-split,.input-group-sm .btn+.dropdown-toggle-split {
    padding-right: .6em;
    padding-left: .6em
}

.btn-xs+.dropdown-toggle-split,.btn-group-xs>.btn+.dropdown-toggle-split {
    padding-right: .5em;
    padding-left: .5em
}

html:not([dir=rtl]) .btn-group>.btn-group:first-child>.btn:not([class*=btn-outline-]):first-child,html:not([dir=rtl]) .input-group>.btn:not([class*=btn-outline-]):first-child,html:not([dir=rtl]) :not(.btn-group):not(.input-group)>.btn-group>.btn:not([class*=btn-outline-]):first-child,html:not([dir=rtl]) .input-group>.btn-group:first-child>.btn:not([class*=btn-outline-]):first-child {
    border-left-color: rgba(0,0,0,0)
}

[dir=rtl] .btn-group>.btn-group:first-child>.btn:not([class*=btn-outline-]):first-child,[dir=rtl] .input-group>.btn:not([class*=btn-outline-]):first-child,[dir=rtl] :not(.btn-group):not(.input-group)>.btn-group>.btn:not([class*=btn-outline-]):first-child,[dir=rtl] .input-group>.btn-group:first-child>.btn:not([class*=btn-outline-]):first-child {
    border-right-color: rgba(0,0,0,0)
}

html:not([dir=rtl]) .btn-group>.btn-group:last-child>.btn:not([class*=btn-outline-]):last-of-type,html:not([dir=rtl]) .input-group>.btn:not([class*=btn-outline-]):last-of-type,html:not([dir=rtl]) :not(.btn-group):not(.input-group)>.btn-group>.btn:not([class*=btn-outline-]):last-of-type,html:not([dir=rtl]) .input-group>.btn-group:last-child>.btn:not([class*=btn-outline-]):last-of-type {
    border-right-color: rgba(0,0,0,0)
}

[dir=rtl] .btn-group>.btn-group:last-child>.btn:not([class*=btn-outline-]):last-of-type,[dir=rtl] .input-group>.btn:not([class*=btn-outline-]):last-of-type,[dir=rtl] :not(.btn-group):not(.input-group)>.btn-group>.btn:not([class*=btn-outline-]):last-of-type,[dir=rtl] .input-group>.btn-group:last-child>.btn:not([class*=btn-outline-]):last-of-type {
    border-left-color: rgba(0,0,0,0)
}

[dir=rtl] .btn-group .btn[class] {
    border-radius: .375rem
}

[dir=rtl] .btn-group .btn-xs[class],[dir=rtl] .btn-group-xs .btn[class] {
    border-radius: .125rem
}

[dir=rtl] .btn-group .btn-sm[class],[dir=rtl] .btn-group-sm .btn[class] {
    border-radius: .25rem
}

[dir=rtl] .btn-group .btn-lg[class],[dir=rtl] .btn-group-lg .btn[class] {
    border-radius: .5rem
}

[dir=rtl] .btn-group .btn-xl[class],[dir=rtl] .btn-group-xl .btn[class] {
    border-radius: .625rem
}

[dir=rtl] .btn-group>.btn:not(:first-child),[dir=rtl] .btn-group>.btn-group:not(:first-child) {
    margin-left: 0;
    margin-right: calc(var(--bs-border-width)*-1)
}

[dir=rtl] .btn-group>.btn:not(:last-child):not(.dropdown-toggle),[dir=rtl] .btn-group>.btn-group:not(:last-child)>.btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

[dir=rtl] .btn-group>.btn:nth-child(n+3),[dir=rtl] .btn-group>:not(.btn-check)+.btn,[dir=rtl] .btn-group>.btn-group:not(:first-child)>.btn {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

[dir=rtl] .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle),[dir=rtl] .btn-group-vertical>.btn-group:not(:last-child)>.btn {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

[dir=rtl] .btn-group-vertical>.btn~.btn,[dir=rtl] .btn-group-vertical>.btn-group:not(:first-child)>.btn {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.bg-secondary.bg-glow {
    box-shadow: 0px 2px 3px 0px rgba(168,170,174,.3)
}

.bg-success.bg-glow {
    box-shadow: 0px 2px 3px 0px rgba(40,199,111,.3)
}

.bg-info.bg-glow {
    box-shadow: 0px 2px 3px 0px rgba(0,207,232,.3)
}

.bg-warning.bg-glow {
    box-shadow: 0px 2px 3px 0px rgba(255,159,67,.3)
}

.bg-danger.bg-glow {
    box-shadow: 0px 2px 3px 0px rgba(234,84,85,.3)
}

.bg-dark.bg-glow {
    box-shadow: 0px 2px 3px 0px rgba(75,75,75,.3)
}

.bg-gray.bg-glow {
    box-shadow: 0px 2px 3px 0px rgba(75,70,92,.3)
}

.badge-center {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    padding: .35rem;
    height: 1.5rem;
    width: 1.5rem;
    font-size: 0.812rem
}

.badge-center i {
    font-size: .875rem
}

.badge.badge-dot {
    display: inline-block;
    margin: 0;
    padding: 0;
    width: .5rem;
    height: .5rem;
    border-radius: 50%;
    vertical-align: middle
}

.badge.badge-notifications {
    position: absolute;
    top: auto;
    display: inline-block;
    margin: 0;
    transform: translate(-50%, -45%)
}

[dir=rtl] .badge.badge-notifications {
    transform: translate(50%, -45%)
}

.badge.badge-notifications:not(.badge-dot) {
    padding: .063rem .112rem;
    font-size: .75rem;
    line-height: .875rem;
    border-radius: 50rem
}

[data-trigger=hover] {
    outline: 0
}

.dropdown-menu {
    box-shadow: 0 .25rem 1rem rgba(165,163,174,.45)
}

.mega-dropdown>.dropdown-menu {
    left: 0 !important;
    right: 0 !important
}

.dropdown-menu .badge[class^=float-],.dropdown-menu .badge[class*=" float-"] {
    position: relative;
    top: .071em
}

[dir=rtl] .dropdown-menu {
    text-align: right
}

.dropdown-item {
    line-height: 1.375;
    width: calc(100% - 1rem);
    margin: .25rem .5rem;
    border-radius: var(--bs-border-radius)
}

.dropdown-toggle.hide-arrow::before,.dropdown-toggle.hide-arrow::after,.dropdown-toggle-hide-arrow>.dropdown-toggle::before,.dropdown-toggle-hide-arrow>.dropdown-toggle::after {
    display: none
}

.dropdown-toggle::after {
    margin-top: -0.28em;
    width: .42em;
    height: .42em;
    border: 1px solid;
    border-top: 0;
    border-left: 0;
    transform: rotate(45deg)
}

.dropend .dropdown-toggle::after {
    margin-top: -.168em;
    width: .42em;
    height: .42em;
    border: 1px solid;
    border-top: 0;
    border-left: 0;
    transform: rotate(-45deg)
}

[dir=rtl] .dropend .dropdown-toggle::after {
    margin-left: 0 !important;
    margin-right: .5em !important;
    transform: rotate(135deg)
}

.dropstart .dropdown-toggle::before {
    margin-top: -.168em;
    width: .42em;
    height: .42em;
    border: 1px solid;
    border-top: 0;
    border-right: 0;
    transform: rotate(45deg)
}

[dir=rtl] .dropstart .dropdown-toggle::before {
    margin-right: 0 !important;
    margin-left: .5em !important;
    transform: rotate(225deg)
}

.dropup .dropdown-toggle::after {
    margin-top: 0;
    width: .42em;
    height: .42em;
    border: 1px solid;
    border-bottom: 0;
    border-left: 0;
    transform: rotate(-45deg)
}

.dropstart .dropdown-toggle::before,.dropend .dropdown-toggle::after {
    vertical-align: middle
}

[dir=rtl] .dropdown-toggle:not(.dropdown-toggle-split)::after {
    margin-left: 0;
    margin-right: .5em
}

[dir=rtl] .dropdown-menu-start {
    --bs-position: start
}

[dir=rtl] .dropdown-menu-start[data-bs-popper] {
    left: auto;
    right: 0
}

[dir=rtl] .dropdown-menu-end {
    --bs-position: end
}

[dir=rtl] .dropdown-menu-end[data-bs-popper] {
    left: 0;
    right: auto
}

@media(min-width: 576px) {
    [dir=rtl] .dropdown-menu-sm-start {
        --bs-position: start
    }

    [dir=rtl] .dropdown-menu-sm-start[data-bs-popper] {
        left: auto;
        right: 0
    }

    [dir=rtl] .dropdown-menu-sm-end {
        --bs-position: end
    }

    [dir=rtl] .dropdown-menu-sm-end[data-bs-popper] {
        left: 0;
        right: auto
    }
}

@media(min-width: 768px) {
    [dir=rtl] .dropdown-menu-md-start {
        --bs-position: start
    }

    [dir=rtl] .dropdown-menu-md-start[data-bs-popper] {
        left: auto;
        right: 0
    }

    [dir=rtl] .dropdown-menu-md-end {
        --bs-position: end
    }

    [dir=rtl] .dropdown-menu-md-end[data-bs-popper] {
        left: 0;
        right: auto
    }
}

@media(min-width: 992px) {
    [dir=rtl] .dropdown-menu-lg-start {
        --bs-position: start
    }

    [dir=rtl] .dropdown-menu-lg-start[data-bs-popper] {
        left: auto;
        right: 0
    }

    [dir=rtl] .dropdown-menu-lg-end {
        --bs-position: end
    }

    [dir=rtl] .dropdown-menu-lg-end[data-bs-popper] {
        left: 0;
        right: auto
    }
}

@media(min-width: 1200px) {
    [dir=rtl] .dropdown-menu-xl-start {
        --bs-position: start
    }

    [dir=rtl] .dropdown-menu-xl-start[data-bs-popper] {
        left: auto;
        right: 0
    }

    [dir=rtl] .dropdown-menu-xl-end {
        --bs-position: end
    }

    [dir=rtl] .dropdown-menu-xl-end[data-bs-popper] {
        left: 0;
        right: auto
    }
}

@media(min-width: 1400px) {
    [dir=rtl] .dropdown-menu-xxl-start {
        --bs-position: start
    }

    [dir=rtl] .dropdown-menu-xxl-start[data-bs-popper] {
        left: auto;
        right: 0
    }

    [dir=rtl] .dropdown-menu-xxl-end {
        --bs-position: end
    }

    [dir=rtl] .dropdown-menu-xxl-end[data-bs-popper] {
        left: 0;
        right: auto
    }
}

.nav .nav-item,.nav .nav-link,.tab-pane,.tab-pane .card-body {
    outline: none !important
}

.nav.nav-pills .nav-link {
    padding-top: .5rem;
    padding-bottom: .5rem
}

.nav-tabs {
    border-bottom: var(--bs-border-width) solid #dbdade;
    border-top-left-radius: .375rem;
    border-top-right-radius: .375rem;
    background-color: #fff
}

.nav~.tab-content {
    background: #fff
}

.nav-tabs-shadow {
    box-shadow: 0 .25rem 1.125rem rgba(75,70,92,.1)
}

.nav-tabs .nav-link {
    line-height: 1.375
}

.nav-tabs .nav-link,.nav-tabs .nav-link.active {
    border-width: 0
}

.nav-pills .nav-link.active {
    box-shadow: 0 .125rem .25rem rgba(165,163,174,.3)
}

.nav-tabs .nav-link,.nav-pills .nav-link {
    display: inline-flex;
    align-items: center;
    justify-content: center
}

.nav-tabs .nav-link:not(.active):hover,.nav-tabs .nav-link:not(.active):focus,.nav-pills .nav-link:not(.active):hover,.nav-pills .nav-link:not(.active):focus {
    color: #7367f0
}

.nav-tabs:not(.nav-fill):not(.nav-justified) .nav-link,.nav-pills:not(.nav-fill):not(.nav-justified) .nav-link {
    margin-right: .125rem;
    width: 100%
}

[dir=rtl] .nav-tabs:not(.nav-fill):not(.nav-justified) .nav-link,[dir=rtl] .nav-pills:not(.nav-fill):not(.nav-justified) .nav-link {
    margin-left: .125rem;
    margin-right: 0
}

.tab-content {
    padding: 1.5rem;
    border-radius: .375rem
}

.nav-scrollable {
    display: -webkit-inline-box;
    display: -moz-inline-box;
    width: 100%;
    overflow-y: auto;
    flex-wrap: nowrap
}

.nav-tabs.widget-nav-tabs {
    border: 0 !important;
    overflow-x: auto
}

.nav-tabs.widget-nav-tabs .nav-link {
    border: 1px dashed #dbdade
}

@media(min-width: 768px) {
    .nav-tabs.widget-nav-tabs .nav-link {
        height:94px !important;
        width: 110px !important;
        border-radius: .375rem
    }
}

@media(max-width: 767.98px) {
    .nav-tabs.widget-nav-tabs .nav-link {
        border:0 !important;
        padding: 0
    }
}

.nav-tabs.widget-nav-tabs .nav-link.active {
    border-color: #7367f0;
    box-shadow: none !important
}

.nav-tabs.widget-nav-tabs .nav-link.active .badge {
    background-color: rgba(115,103,240,.08) !important;
    color: #7367f0 !important
}

@media(max-width: 767.98px) {
    .nav-tabs.widget-nav-tabs .nav-link .tab-widget-title {
        display:none
    }
}

.nav-sm>.nav .nav-link,.nav-sm.nav .nav-link {
    padding: .376rem 1rem;
    font-size: .75rem;
    line-height: 1
}

.nav-lg>.nav .nav-link,.nav-lg.nav .nav-link {
    padding: .6rem 1.5rem;
    font-size: 1rem;
    line-height: 1.375
}

.nav-align-top,.nav-align-right,.nav-align-bottom,.nav-align-left {
    display: flex
}

.nav-align-top>.nav,.nav-align-top>div>.nav,.nav-align-right>.nav,.nav-align-right>div>.nav,.nav-align-bottom>.nav,.nav-align-bottom>div>.nav,.nav-align-left>.nav,.nav-align-left>div>.nav {
    z-index: 1;
    position: relative
}

.nav-align-top .row-bordered>[class^=col-]::before,.nav-align-top .row-bordered>[class^=col-]::after,.nav-align-top .row-bordered>[class*=" col-"]::before,.nav-align-top .row-bordered>[class*=" col-"]::after,.nav-align-top .row-bordered>[class^="col "]::before,.nav-align-top .row-bordered>[class^="col "]::after,.nav-align-top .row-bordered>[class*=" col "]::before,.nav-align-top .row-bordered>[class*=" col "]::after,.nav-align-top .row-bordered>[class$=" col"]::before,.nav-align-top .row-bordered>[class$=" col"]::after,.nav-align-top .row-bordered>[class=col]::before,.nav-align-top .row-bordered>[class=col]::after,.nav-align-right .row-bordered>[class^=col-]::before,.nav-align-right .row-bordered>[class^=col-]::after,.nav-align-right .row-bordered>[class*=" col-"]::before,.nav-align-right .row-bordered>[class*=" col-"]::after,.nav-align-right .row-bordered>[class^="col "]::before,.nav-align-right .row-bordered>[class^="col "]::after,.nav-align-right .row-bordered>[class*=" col "]::before,.nav-align-right .row-bordered>[class*=" col "]::after,.nav-align-right .row-bordered>[class$=" col"]::before,.nav-align-right .row-bordered>[class$=" col"]::after,.nav-align-right .row-bordered>[class=col]::before,.nav-align-right .row-bordered>[class=col]::after,.nav-align-bottom .row-bordered>[class^=col-]::before,.nav-align-bottom .row-bordered>[class^=col-]::after,.nav-align-bottom .row-bordered>[class*=" col-"]::before,.nav-align-bottom .row-bordered>[class*=" col-"]::after,.nav-align-bottom .row-bordered>[class^="col "]::before,.nav-align-bottom .row-bordered>[class^="col "]::after,.nav-align-bottom .row-bordered>[class*=" col "]::before,.nav-align-bottom .row-bordered>[class*=" col "]::after,.nav-align-bottom .row-bordered>[class$=" col"]::before,.nav-align-bottom .row-bordered>[class$=" col"]::after,.nav-align-bottom .row-bordered>[class=col]::before,.nav-align-bottom .row-bordered>[class=col]::after,.nav-align-left .row-bordered>[class^=col-]::before,.nav-align-left .row-bordered>[class^=col-]::after,.nav-align-left .row-bordered>[class*=" col-"]::before,.nav-align-left .row-bordered>[class*=" col-"]::after,.nav-align-left .row-bordered>[class^="col "]::before,.nav-align-left .row-bordered>[class^="col "]::after,.nav-align-left .row-bordered>[class*=" col "]::before,.nav-align-left .row-bordered>[class*=" col "]::after,.nav-align-left .row-bordered>[class$=" col"]::before,.nav-align-left .row-bordered>[class$=" col"]::after,.nav-align-left .row-bordered>[class=col]::before,.nav-align-left .row-bordered>[class=col]::after {
    border-color: rgba(75,70,92,.075)
}

.nav-align-right,.nav-align-left {
    align-items: stretch
}

.nav-align-right>.nav,.nav-align-right>div>.nav,.nav-align-left>.nav,.nav-align-left>div>.nav {
    flex-grow: 0;
    flex-direction: column
}

.nav-align-right>.nav .nav-link,.nav-align-right>div>.nav .nav-link,.nav-align-left>.nav .nav-link,.nav-align-left>div>.nav .nav-link {
    margin: 0 0 .125rem 0 !important
}

.nav-align-right>.tab-content,.nav-align-left>.tab-content {
    flex-grow: 1
}

.nav-align-top {
    flex-direction: column
}

html:not([dir=rtl]) .nav-align-right .nav-tabs {
    border: 0;
    border-left: var(--bs-border-width) solid #dbdade;
    border-bottom-right-radius: .375rem
}

.nav-align-right {
    flex-direction: row-reverse
}

.nav-align-right>.nav .nav-item,.nav-align-right>div>.nav .nav-item {
    margin-left: -1px;
    margin-bottom: 0
}

[dir=rtl] .nav-align-right>.nav .nav-item,[dir=rtl] .nav-align-right>div>.nav .nav-item {
    margin-left: 0;
    margin-right: -1px
}

.nav-align-right .nav-pills {
    margin-left: 1rem
}

.nav-align-right .nav-link {
    text-align: right;
    justify-content: end
}

.nav-align-right>.nav:not(.nav-pills) .nav-link,.nav-align-right>div>.nav:not(.nav-pills) .nav-link {
    border-radius: 0 .375rem .375rem 0
}

[dir=rtl] .nav-align-right>.nav:not(.nav-pills) .nav-link,[dir=rtl] .nav-align-right>div>.nav:not(.nav-pills) .nav-link {
    border-radius: .375rem 0 0 .375rem
}

.nav-align-bottom {
    flex-direction: column-reverse
}

.nav-align-bottom .nav-tabs {
    border: 0;
    border-top: var(--bs-border-width) solid #dbdade;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: .375rem;
    border-bottom-left-radius: .375rem
}

.nav-align-bottom .nav-pills {
    margin-top: 1rem
}

.nav-align-bottom>.nav:not(.nav-pills) .nav-item,.nav-align-bottom>div>.nav:not(.nav-pills) .nav-item {
    margin-bottom: 0;
    margin-top: -1px
}

.nav-align-bottom>.nav:not(.nav-pills) .nav-link,.nav-align-bottom>div>.nav:not(.nav-pills) .nav-link {
    border-radius: 0 0 .375rem .375rem
}

html:not([dir=rtl]) .nav-align-left .nav-tabs {
    border: 0;
    border-right: var(--bs-border-width) solid #dbdade;
    border-bottom-left-radius: .375rem
}

.nav-align-left.card {
    flex-direction: row !important
}

.nav-align-left>.nav .nav-item,.nav-align-left>div>.nav .nav-item {
    margin-right: -1px;
    margin-bottom: 0
}

[dir=rtl] .nav-align-left>.nav .nav-item,[dir=rtl] .nav-align-left>div>.nav .nav-item {
    margin-right: 0;
    margin-left: -1px
}

.nav-align-left .nav-link {
    text-align: left;
    justify-content: start
}

.nav-align-left>.nav:not(.nav-pills) .nav-link,.nav-align-left>div>.nav:not(.nav-pills) .nav-link {
    border-radius: .375rem 0 0 .375rem
}

[dir=rtl] .nav-align-left>.nav:not(.nav-pills) .nav-link,[dir=rtl] .nav-align-left>div>.nav:not(.nav-pills) .nav-link {
    border-radius: 0 .375rem .375rem 0
}

.card .nav.nav-tabs {
    margin-right: -1.5rem;
    margin-left: -1.5rem
}

.card .nav.nav-pills {
    margin-left: 0rem
}

.nav-align-top>.tab-content,.nav-align-right>.tab-content,.nav-align-bottom>.tab-content,.nav-align-left>.tab-content {
    flex-shrink: 1;
    background-clip: padding-box;
    background: #fff
}

.nav-align-top>.nav-pills~.tab-content,.nav-align-right>.nav-pills~.tab-content,.nav-align-bottom>.nav-pills~.tab-content,.nav-align-left>.nav-pills~.tab-content {
    box-shadow: 0 .25rem 1.125rem rgba(75,70,92,.1)
}

.nav-align-top :not(.nav-pills)~.tab-content {
    border-radius: 0 0 .375rem .375rem
}

.nav-align-right :not(.nav-pills)~.tab-content {
    border-radius: .375rem 0 0 .375rem
}

[dir=rtl] .nav-align-right :not(.nav-pills)~.tab-content {
    border-radius: 0 .375rem .375rem 0
}

.nav-align-bottom :not(.nav-pills)~.tab-content {
    border-radius: .375rem .375rem 0 0
}

.nav-align-left :not(.nav-pills)~.tab-content {
    border-radius: 0 .375rem .375rem 0
}

[dir=rtl] .nav-align-left :not(.nav-pills)~.tab-content {
    border-radius: .375rem 0 0 .375rem
}

[dir=rtl] .nav {
    padding-right: 0
}

[dir=rtl] .nav-align-left .nav-tabs {
    border: 0;
    border-left: var(--bs-border-width) solid #dbdade;
    border-bottom-right-radius: .375rem
}

[dir=rtl] .nav-align-left .nav-link {
    text-align: right
}

[dir=rtl] .nav-align-right .nav-tabs {
    border: 0;
    border-right: var(--bs-border-width) solid #dbdade;
    border-bottom-left-radius: .375rem
}

[dir=rtl] .nav-align-right .nav-link {
    text-align: left
}

[dir=rtl] .nav-align-right .nav-pills {
    margin-right: 1rem
}

[dir=rtl] .card .nav.nav-pills {
    margin-right: 0rem
}

.pagination-secondary .page-item.active .page-link,.pagination-secondary.pagination li.active>a:not(.page-link) {
    border-color: #a8aaae;
    background-color: #a8aaae;
    color: #fff
}

.pagination-secondary .page-item>.page-link.active {
    border-color: #a8aaae;
    background-color: #a8aaae;
    color: #fff
}

.pagination-secondary .page-item.first .page-link.active,.pagination-secondary .page-item.last .page-link.active,.pagination-secondary .page-item.next .page-link.active,.pagination-secondary .page-item.prev .page-link.active,.pagination-secondary .page-item.previous .page-link.active {
    border-color: #a8aaae;
    background-color: #a8aaae;
    color: #fff
}

.pagination-success .page-item.active .page-link,.pagination-success.pagination li.active>a:not(.page-link) {
    border-color: #28c76f;
    background-color: #28c76f;
    color: #fff
}

.pagination-success .page-item>.page-link.active {
    border-color: #28c76f;
    background-color: #28c76f;
    color: #fff
}

.pagination-success .page-item.first .page-link.active,.pagination-success .page-item.last .page-link.active,.pagination-success .page-item.next .page-link.active,.pagination-success .page-item.prev .page-link.active,.pagination-success .page-item.previous .page-link.active {
    border-color: #28c76f;
    background-color: #28c76f;
    color: #fff
}

.pagination-info .page-item.active .page-link,.pagination-info.pagination li.active>a:not(.page-link) {
    border-color: #00cfe8;
    background-color: #00cfe8;
    color: #fff
}

.pagination-info .page-item>.page-link.active {
    border-color: #00cfe8;
    background-color: #00cfe8;
    color: #fff
}

.pagination-info .page-item.first .page-link.active,.pagination-info .page-item.last .page-link.active,.pagination-info .page-item.next .page-link.active,.pagination-info .page-item.prev .page-link.active,.pagination-info .page-item.previous .page-link.active {
    border-color: #00cfe8;
    background-color: #00cfe8;
    color: #fff
}

.pagination-warning .page-item.active .page-link,.pagination-warning.pagination li.active>a:not(.page-link) {
    border-color: #ff9f43;
    background-color: #ff9f43;
    color: #fff
}

.pagination-warning .page-item>.page-link.active {
    border-color: #ff9f43;
    background-color: #ff9f43;
    color: #fff
}

.pagination-warning .page-item.first .page-link.active,.pagination-warning .page-item.last .page-link.active,.pagination-warning .page-item.next .page-link.active,.pagination-warning .page-item.prev .page-link.active,.pagination-warning .page-item.previous .page-link.active {
    border-color: #ff9f43;
    background-color: #ff9f43;
    color: #fff
}

.pagination-danger .page-item.active .page-link,.pagination-danger.pagination li.active>a:not(.page-link) {
    border-color: #ea5455;
    background-color: #ea5455;
    color: #fff
}

.pagination-danger .page-item>.page-link.active {
    border-color: #ea5455;
    background-color: #ea5455;
    color: #fff
}

.pagination-danger .page-item.first .page-link.active,.pagination-danger .page-item.last .page-link.active,.pagination-danger .page-item.next .page-link.active,.pagination-danger .page-item.prev .page-link.active,.pagination-danger .page-item.previous .page-link.active {
    border-color: #ea5455;
    background-color: #ea5455;
    color: #fff
}

.pagination-dark .page-item.active .page-link,.pagination-dark.pagination li.active>a:not(.page-link) {
    border-color: #4b4b4b;
    background-color: #4b4b4b;
    color: #fff
}

.pagination-dark .page-item>.page-link.active {
    border-color: #4b4b4b;
    background-color: #4b4b4b;
    color: #fff
}

.pagination-dark .page-item.first .page-link.active,.pagination-dark .page-item.last .page-link.active,.pagination-dark .page-item.next .page-link.active,.pagination-dark .page-item.prev .page-link.active,.pagination-dark .page-item.previous .page-link.active {
    border-color: #4b4b4b;
    background-color: #4b4b4b;
    color: #fff
}

.pagination-gray .page-item.active .page-link,.pagination-gray.pagination li.active>a:not(.page-link) {
    border-color: rgba(75,70,92,.05);
    background-color: rgba(75,70,92,.05);
    color: #fff
}

.pagination-gray .page-item>.page-link.active {
    border-color: rgba(75,70,92,.05);
    background-color: rgba(75,70,92,.05);
    color: #fff
}

.pagination-gray .page-item.first .page-link.active,.pagination-gray .page-item.last .page-link.active,.pagination-gray .page-item.next .page-link.active,.pagination-gray .page-item.prev .page-link.active,.pagination-gray .page-item.previous .page-link.active {
    border-color: rgba(75,70,92,.05);
    background-color: rgba(75,70,92,.05);
    color: #fff
}

.page-item.active .page-link,.page-item:active .page-link {
    transform: scale(0.98);
    box-shadow: 0 .125rem .25rem rgba(165,163,174,.3)
}

.page-item.first .page-link,.page-item.last .page-link,.page-item.next .page-link,.page-item.prev .page-link,.page-item.previous .page-link {
    padding-top: .6rem;
    padding-bottom: .645rem
}

.page-link,.page-link>a {
    border-radius: .375rem;
    line-height: 1;
    text-align: center;
    min-width: calc(2.4275rem + calc(0px * 2))
}

.page-link:focus,.page-link>a:focus {
    color: #5d596c
}

.page-link.btn-primary {
    box-shadow: none !important
}

.pagination.pagination-square .page-item a {
    border-radius: 0
}

.pagination.pagination-round .page-item a {
    border-radius: 50%
}

.pagination-lg .page-link,.pagination-lg>li>a:not(.page-link) {
    min-width: calc(3rem + calc(0px * 2))
}

.pagination-lg>.page-item.first .page-link,.pagination-lg>.page-item.last .page-link,.pagination-lg>.page-item.next .page-link,.pagination-lg>.page-item.prev .page-link,.pagination-lg>.page-item.previous .page-link {
    padding-top: .8rem;
    padding-bottom: .8325rem
}

.pagination-sm .page-link,.pagination-sm>li>a:not(.page-link) {
    min-width: calc(1.75rem + calc(0px * 2))
}

.pagination-sm>.page-item.first .page-link,.pagination-sm>.page-item.last .page-link,.pagination-sm>.page-item.next .page-link,.pagination-sm>.page-item.prev .page-link,.pagination-sm>.page-item.previous .page-link {
    padding-top: .362rem;
    padding-bottom: .452rem
}

[dir=rtl] .pagination {
    padding-right: 0
}

[dir=rtl] .page-item+.page-item .page-link,[dir=rtl] .pagination li+li>a:not(.page-link) {
    margin-left: 0;
    margin-right: .25rem
}

[dir=rtl] .page-item.first .page-link svg,[dir=rtl] .page-item.last .page-link svg,[dir=rtl] .page-item.next .page-link svg,[dir=rtl] .page-item.prev .page-link svg,[dir=rtl] .page-item.previous .page-link svg {
    transform: rotate(180deg)
}

.alert-secondary {
    background-color: #f1f1f2;
    border-color: #f1f1f2;
    color: #a8aaae
}

.alert-secondary .btn-close {
    background-image: url("data:image/svg+xml,%3Csvg width=\'19\' height=\'18\' viewBox=\'0 0 19 18\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'%23a8aaae\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'%23a8aaae\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E%0A")
}

.alert-secondary .alert-link {
    color: #a8aaae
}

.alert-secondary hr {
    background-color: #a8aaae !important
}

.alert-success {
    background-color: #ddf6e8;
    border-color: #ddf6e8;
    color: #28c76f
}

.alert-success .btn-close {
    background-image: url("data:image/svg+xml,%3Csvg width=\'19\' height=\'18\' viewBox=\'0 0 19 18\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'%2328c76f\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'%2328c76f\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E%0A")
}

.alert-success .alert-link {
    color: #28c76f
}

.alert-success hr {
    background-color: #28c76f !important
}

.alert-info {
    background-color: #d6f7fb;
    border-color: #d6f7fb;
    color: #00cfe8
}

.alert-info .btn-close {
    background-image: url("data:image/svg+xml,%3Csvg width=\'19\' height=\'18\' viewBox=\'0 0 19 18\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'%2300cfe8\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'%2300cfe8\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E%0A")
}

.alert-info .alert-link {
    color: #00cfe8
}

.alert-info hr {
    background-color: #00cfe8 !important
}

.alert-warning {
    background-color: #fff0e1;
    border-color: #fff0e1;
    color: #ff9f43
}

.alert-warning .btn-close {
    background-image: url("data:image/svg+xml,%3Csvg width=\'19\' height=\'18\' viewBox=\'0 0 19 18\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'%23ff9f43\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'%23ff9f43\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E%0A")
}

.alert-warning .alert-link {
    color: #ff9f43
}

.alert-warning hr {
    background-color: #ff9f43 !important
}

.alert-danger {
    background-color: #fce4e4;
    border-color: #fce4e4;
    color: #ea5455
}

.alert-danger .btn-close {
    background-image: url("data:image/svg+xml,%3Csvg width=\'19\' height=\'18\' viewBox=\'0 0 19 18\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'%23ea5455\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'%23ea5455\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E%0A")
}

.alert-danger .alert-link {
    color: #ea5455
}

.alert-danger hr {
    background-color: #ea5455 !important
}

.alert-dark {
    background-color: #e2e2e2;
    border-color: #e2e2e2;
    color: #4b4b4b
}

.alert-dark .btn-close {
    background-image: url("data:image/svg+xml,%3Csvg width=\'19\' height=\'18\' viewBox=\'0 0 19 18\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'%234b4b4b\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'%234b4b4b\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E%0A")
}

.alert-dark .alert-link {
    color: #4b4b4b
}

.alert-dark hr {
    background-color: #4b4b4b !important
}

.alert-gray {
    background-color: rgba(254,254,254,.848);
    border-color: rgba(254,254,254,.848);
    color: rgba(75,70,92,.05)
}

.alert-gray .btn-close {
    background-image: url("data:image/svg+xml,%3Csvg width=\'19\' height=\'18\' viewBox=\'0 0 19 18\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'rgba(75, 70, 92, 0.05)\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'rgba(75, 70, 92, 0.05)\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E%0A")
}

.alert-gray .alert-link {
    color: rgba(75,70,92,.05)
}

.alert-gray hr {
    background-color: rgba(75,70,92,.05) !important
}

.alert {
    font-weight: 500
}

.alert .alert-icon {
    background-color: #fff;
    padding: .25rem;
    border-radius: .375rem;
    line-height: 1
}

.alert .alert-icon-lg {
    padding: .375rem
}

[dir=rtl] .alert-dismissible {
    padding-left: 2.625rem;
    padding-right: .875rem
}

[dir=rtl] .alert-dismissible .btn-close {
    right: auto;
    left: 0
}

.tooltip-secondary .tooltip-inner,.tooltip-secondary>.tooltip .tooltip-inner,.ngb-tooltip-secondary+ngb-tooltip-window .tooltip-inner {
    background: #a8aaae;
    color: #fff
}

.tooltip-secondary.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before,.tooltip-secondary>.tooltip.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before,.ngb-tooltip-secondary+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before {
    border-top-color: #a8aaae
}

.tooltip-secondary.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,.tooltip-secondary>.tooltip.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,.ngb-tooltip-secondary+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before {
    border-left-color: #a8aaae
}

[dir=rtl] .tooltip-secondary.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,[dir=rtl] .tooltip-secondary>.tooltip.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,[dir=rtl] .ngb-tooltip-secondary+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before {
    border-right-color: #a8aaae
}

.tooltip-secondary.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before,.tooltip-secondary>.tooltip.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before,.ngb-tooltip-secondary+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before {
    border-bottom-color: #a8aaae
}

.tooltip-secondary.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,.tooltip-secondary>.tooltip.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,.ngb-tooltip-secondary+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before {
    border-right-color: #a8aaae
}

[dir=rtl] .tooltip-secondary.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,[dir=rtl] .tooltip-secondary>.tooltip.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,[dir=rtl] .ngb-tooltip-secondary+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before {
    border-left-color: #a8aaae
}

.tooltip-success .tooltip-inner,.tooltip-success>.tooltip .tooltip-inner,.ngb-tooltip-success+ngb-tooltip-window .tooltip-inner {
    background: #28c76f;
    color: #fff
}

.tooltip-success.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before,.tooltip-success>.tooltip.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before,.ngb-tooltip-success+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before {
    border-top-color: #28c76f
}

.tooltip-success.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,.tooltip-success>.tooltip.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,.ngb-tooltip-success+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before {
    border-left-color: #28c76f
}

[dir=rtl] .tooltip-success.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,[dir=rtl] .tooltip-success>.tooltip.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,[dir=rtl] .ngb-tooltip-success+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before {
    border-right-color: #28c76f
}

.tooltip-success.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before,.tooltip-success>.tooltip.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before,.ngb-tooltip-success+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before {
    border-bottom-color: #28c76f
}

.tooltip-success.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,.tooltip-success>.tooltip.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,.ngb-tooltip-success+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before {
    border-right-color: #28c76f
}

[dir=rtl] .tooltip-success.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,[dir=rtl] .tooltip-success>.tooltip.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,[dir=rtl] .ngb-tooltip-success+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before {
    border-left-color: #28c76f
}

.tooltip-info .tooltip-inner,.tooltip-info>.tooltip .tooltip-inner,.ngb-tooltip-info+ngb-tooltip-window .tooltip-inner {
    background: #00cfe8;
    color: #fff
}

.tooltip-info.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before,.tooltip-info>.tooltip.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before,.ngb-tooltip-info+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before {
    border-top-color: #00cfe8
}

.tooltip-info.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,.tooltip-info>.tooltip.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,.ngb-tooltip-info+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before {
    border-left-color: #00cfe8
}

[dir=rtl] .tooltip-info.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,[dir=rtl] .tooltip-info>.tooltip.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,[dir=rtl] .ngb-tooltip-info+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before {
    border-right-color: #00cfe8
}

.tooltip-info.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before,.tooltip-info>.tooltip.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before,.ngb-tooltip-info+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before {
    border-bottom-color: #00cfe8
}

.tooltip-info.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,.tooltip-info>.tooltip.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,.ngb-tooltip-info+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before {
    border-right-color: #00cfe8
}

[dir=rtl] .tooltip-info.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,[dir=rtl] .tooltip-info>.tooltip.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,[dir=rtl] .ngb-tooltip-info+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before {
    border-left-color: #00cfe8
}

.tooltip-warning .tooltip-inner,.tooltip-warning>.tooltip .tooltip-inner,.ngb-tooltip-warning+ngb-tooltip-window .tooltip-inner {
    background: #ff9f43;
    color: #fff
}

.tooltip-warning.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before,.tooltip-warning>.tooltip.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before,.ngb-tooltip-warning+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before {
    border-top-color: #ff9f43
}

.tooltip-warning.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,.tooltip-warning>.tooltip.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,.ngb-tooltip-warning+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before {
    border-left-color: #ff9f43
}

[dir=rtl] .tooltip-warning.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,[dir=rtl] .tooltip-warning>.tooltip.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,[dir=rtl] .ngb-tooltip-warning+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before {
    border-right-color: #ff9f43
}

.tooltip-warning.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before,.tooltip-warning>.tooltip.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before,.ngb-tooltip-warning+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before {
    border-bottom-color: #ff9f43
}

.tooltip-warning.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,.tooltip-warning>.tooltip.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,.ngb-tooltip-warning+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before {
    border-right-color: #ff9f43
}

[dir=rtl] .tooltip-warning.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,[dir=rtl] .tooltip-warning>.tooltip.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,[dir=rtl] .ngb-tooltip-warning+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before {
    border-left-color: #ff9f43
}

.tooltip-danger .tooltip-inner,.tooltip-danger>.tooltip .tooltip-inner,.ngb-tooltip-danger+ngb-tooltip-window .tooltip-inner {
    background: #ea5455;
    color: #fff
}

.tooltip-danger.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before,.tooltip-danger>.tooltip.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before,.ngb-tooltip-danger+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before {
    border-top-color: #ea5455
}

.tooltip-danger.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,.tooltip-danger>.tooltip.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,.ngb-tooltip-danger+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before {
    border-left-color: #ea5455
}

[dir=rtl] .tooltip-danger.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,[dir=rtl] .tooltip-danger>.tooltip.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,[dir=rtl] .ngb-tooltip-danger+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before {
    border-right-color: #ea5455
}

.tooltip-danger.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before,.tooltip-danger>.tooltip.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before,.ngb-tooltip-danger+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before {
    border-bottom-color: #ea5455
}

.tooltip-danger.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,.tooltip-danger>.tooltip.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,.ngb-tooltip-danger+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before {
    border-right-color: #ea5455
}

[dir=rtl] .tooltip-danger.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,[dir=rtl] .tooltip-danger>.tooltip.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,[dir=rtl] .ngb-tooltip-danger+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before {
    border-left-color: #ea5455
}

.tooltip-dark .tooltip-inner,.tooltip-dark>.tooltip .tooltip-inner,.ngb-tooltip-dark+ngb-tooltip-window .tooltip-inner {
    background: #4b4b4b;
    color: #fff
}

.tooltip-dark.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before,.tooltip-dark>.tooltip.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before,.ngb-tooltip-dark+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before {
    border-top-color: #4b4b4b
}

.tooltip-dark.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,.tooltip-dark>.tooltip.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,.ngb-tooltip-dark+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before {
    border-left-color: #4b4b4b
}

[dir=rtl] .tooltip-dark.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,[dir=rtl] .tooltip-dark>.tooltip.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,[dir=rtl] .ngb-tooltip-dark+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before {
    border-right-color: #4b4b4b
}

.tooltip-dark.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before,.tooltip-dark>.tooltip.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before,.ngb-tooltip-dark+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before {
    border-bottom-color: #4b4b4b
}

.tooltip-dark.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,.tooltip-dark>.tooltip.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,.ngb-tooltip-dark+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before {
    border-right-color: #4b4b4b
}

[dir=rtl] .tooltip-dark.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,[dir=rtl] .tooltip-dark>.tooltip.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,[dir=rtl] .ngb-tooltip-dark+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before {
    border-left-color: #4b4b4b
}

.tooltip-gray .tooltip-inner,.tooltip-gray>.tooltip .tooltip-inner,.ngb-tooltip-gray+ngb-tooltip-window .tooltip-inner {
    background: #f6f6f7;
    color: #4b465c
}

.tooltip-gray.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before,.tooltip-gray>.tooltip.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before,.ngb-tooltip-gray+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before {
    border-top-color: #f6f6f7
}

.tooltip-gray.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,.tooltip-gray>.tooltip.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,.ngb-tooltip-gray+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before {
    border-left-color: #f6f6f7
}

[dir=rtl] .tooltip-gray.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,[dir=rtl] .tooltip-gray>.tooltip.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before,[dir=rtl] .ngb-tooltip-gray+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before {
    border-right-color: #f6f6f7
}

.tooltip-gray.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before,.tooltip-gray>.tooltip.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before,.ngb-tooltip-gray+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before {
    border-bottom-color: #f6f6f7
}

.tooltip-gray.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,.tooltip-gray>.tooltip.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,.ngb-tooltip-gray+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before {
    border-right-color: #f6f6f7
}

[dir=rtl] .tooltip-gray.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,[dir=rtl] .tooltip-gray>.tooltip.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before,[dir=rtl] .ngb-tooltip-gray+ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before {
    border-left-color: #f6f6f7
}

.modal-open .tooltip {
    z-index: 1092
}

.tooltip-inner {
    box-shadow: none
}

.tooltip {
    line-height: 1.375
}

[dir=rtl] .tooltip {
    text-align: right
}

[dir=rtl].bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow {
    right: 0;
    left: inherit
}

[dir=rtl].bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before {
    left: -1px;
    border-width: .4rem 0 .4rem .4rem
}

[dir=rtl].bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow {
    left: 0;
    right: inherit
}

[dir=rtl].bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before {
    right: -1px;
    border-width: .4rem .4rem .4rem 0
}

.popover-secondary,.popover-secondary>.popover,.ngb-popover-secondary+ngb-popover-window {
    border-color: rgba(0,0,0,0);
    background: #a8aaae
}

.popover-secondary .popover-header,.popover-secondary>.popover .popover-header,.ngb-popover-secondary+ngb-popover-window .popover-header {
    border-color: #a8aaae;
    background: rgba(0,0,0,0);
    color: #fff
}

.popover-secondary .popover-body,.popover-secondary>.popover .popover-body,.ngb-popover-secondary+ngb-popover-window .popover-body {
    background: rgba(0,0,0,0);
    color: rgba(255,255,255,.8)
}

.popover-secondary>.popover-arrow::before,.popover-secondary>.popover>.popover-arrow::before,.ngb-popover-secondary+ngb-popover-window>.popover-arrow::before {
    border-color: rgba(0,0,0,0)
}

.popover-secondary.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after,.popover-secondary>.popover.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after,.ngb-popover-secondary+ngb-popover-window.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after {
    border-top-color: #a8aaae !important
}

.popover-secondary.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,.popover-secondary>.popover.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,.ngb-popover-secondary+ngb-popover-window.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after {
    border-right-color: #a8aaae !important
}

[dir=rtl] .popover-secondary.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,[dir=rtl] .popover-secondary>.popover.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,[dir=rtl] .ngb-popover-secondary+ngb-popover-window.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after {
    border-left-color: #a8aaae !important
}

.popover-secondary.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after,.popover-secondary>.popover.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after,.ngb-popover-secondary+ngb-popover-window.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after {
    border-bottom-color: #a8aaae !important
}

.popover-secondary.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,.popover-secondary>.popover.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,.ngb-popover-secondary+ngb-popover-window.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after {
    border-left-color: #a8aaae !important
}

[dir=rtl] .popover-secondary.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,[dir=rtl] .popover-secondary>.popover.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,[dir=rtl] .ngb-popover-secondary+ngb-popover-window.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after {
    border-right-color: #a8aaae !important
}

.popover-secondary.bs-popover-auto[data-popper-placement=bottom] .popover-header::before,.popover-secondary>.popover.bs-popover-auto[data-popper-placement=bottom] .popover-header::before,.ngb-popover-secondary+ngb-popover-window.bs-popover-auto[data-popper-placement=bottom] .popover-header::before {
    border-bottom: 1px solid rgba(0,0,0,0) !important
}

.popover-success,.popover-success>.popover,.ngb-popover-success+ngb-popover-window {
    border-color: rgba(0,0,0,0);
    background: #28c76f
}

.popover-success .popover-header,.popover-success>.popover .popover-header,.ngb-popover-success+ngb-popover-window .popover-header {
    border-color: #28c76f;
    background: rgba(0,0,0,0);
    color: #fff
}

.popover-success .popover-body,.popover-success>.popover .popover-body,.ngb-popover-success+ngb-popover-window .popover-body {
    background: rgba(0,0,0,0);
    color: rgba(255,255,255,.8)
}

.popover-success>.popover-arrow::before,.popover-success>.popover>.popover-arrow::before,.ngb-popover-success+ngb-popover-window>.popover-arrow::before {
    border-color: rgba(0,0,0,0)
}

.popover-success.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after,.popover-success>.popover.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after,.ngb-popover-success+ngb-popover-window.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after {
    border-top-color: #28c76f !important
}

.popover-success.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,.popover-success>.popover.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,.ngb-popover-success+ngb-popover-window.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after {
    border-right-color: #28c76f !important
}

[dir=rtl] .popover-success.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,[dir=rtl] .popover-success>.popover.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,[dir=rtl] .ngb-popover-success+ngb-popover-window.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after {
    border-left-color: #28c76f !important
}

.popover-success.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after,.popover-success>.popover.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after,.ngb-popover-success+ngb-popover-window.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after {
    border-bottom-color: #28c76f !important
}

.popover-success.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,.popover-success>.popover.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,.ngb-popover-success+ngb-popover-window.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after {
    border-left-color: #28c76f !important
}

[dir=rtl] .popover-success.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,[dir=rtl] .popover-success>.popover.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,[dir=rtl] .ngb-popover-success+ngb-popover-window.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after {
    border-right-color: #28c76f !important
}

.popover-success.bs-popover-auto[data-popper-placement=bottom] .popover-header::before,.popover-success>.popover.bs-popover-auto[data-popper-placement=bottom] .popover-header::before,.ngb-popover-success+ngb-popover-window.bs-popover-auto[data-popper-placement=bottom] .popover-header::before {
    border-bottom: 1px solid rgba(0,0,0,0) !important
}

.popover-info,.popover-info>.popover,.ngb-popover-info+ngb-popover-window {
    border-color: rgba(0,0,0,0);
    background: #00cfe8
}

.popover-info .popover-header,.popover-info>.popover .popover-header,.ngb-popover-info+ngb-popover-window .popover-header {
    border-color: #00cfe8;
    background: rgba(0,0,0,0);
    color: #fff
}

.popover-info .popover-body,.popover-info>.popover .popover-body,.ngb-popover-info+ngb-popover-window .popover-body {
    background: rgba(0,0,0,0);
    color: rgba(255,255,255,.8)
}

.popover-info>.popover-arrow::before,.popover-info>.popover>.popover-arrow::before,.ngb-popover-info+ngb-popover-window>.popover-arrow::before {
    border-color: rgba(0,0,0,0)
}

.popover-info.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after,.popover-info>.popover.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after,.ngb-popover-info+ngb-popover-window.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after {
    border-top-color: #00cfe8 !important
}

.popover-info.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,.popover-info>.popover.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,.ngb-popover-info+ngb-popover-window.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after {
    border-right-color: #00cfe8 !important
}

[dir=rtl] .popover-info.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,[dir=rtl] .popover-info>.popover.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,[dir=rtl] .ngb-popover-info+ngb-popover-window.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after {
    border-left-color: #00cfe8 !important
}

.popover-info.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after,.popover-info>.popover.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after,.ngb-popover-info+ngb-popover-window.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after {
    border-bottom-color: #00cfe8 !important
}

.popover-info.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,.popover-info>.popover.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,.ngb-popover-info+ngb-popover-window.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after {
    border-left-color: #00cfe8 !important
}

[dir=rtl] .popover-info.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,[dir=rtl] .popover-info>.popover.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,[dir=rtl] .ngb-popover-info+ngb-popover-window.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after {
    border-right-color: #00cfe8 !important
}

.popover-info.bs-popover-auto[data-popper-placement=bottom] .popover-header::before,.popover-info>.popover.bs-popover-auto[data-popper-placement=bottom] .popover-header::before,.ngb-popover-info+ngb-popover-window.bs-popover-auto[data-popper-placement=bottom] .popover-header::before {
    border-bottom: 1px solid rgba(0,0,0,0) !important
}

.popover-warning,.popover-warning>.popover,.ngb-popover-warning+ngb-popover-window {
    border-color: rgba(0,0,0,0);
    background: #ff9f43
}

.popover-warning .popover-header,.popover-warning>.popover .popover-header,.ngb-popover-warning+ngb-popover-window .popover-header {
    border-color: #ff9f43;
    background: rgba(0,0,0,0);
    color: #fff
}

.popover-warning .popover-body,.popover-warning>.popover .popover-body,.ngb-popover-warning+ngb-popover-window .popover-body {
    background: rgba(0,0,0,0);
    color: rgba(255,255,255,.8)
}

.popover-warning>.popover-arrow::before,.popover-warning>.popover>.popover-arrow::before,.ngb-popover-warning+ngb-popover-window>.popover-arrow::before {
    border-color: rgba(0,0,0,0)
}

.popover-warning.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after,.popover-warning>.popover.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after,.ngb-popover-warning+ngb-popover-window.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after {
    border-top-color: #ff9f43 !important
}

.popover-warning.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,.popover-warning>.popover.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,.ngb-popover-warning+ngb-popover-window.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after {
    border-right-color: #ff9f43 !important
}

[dir=rtl] .popover-warning.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,[dir=rtl] .popover-warning>.popover.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,[dir=rtl] .ngb-popover-warning+ngb-popover-window.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after {
    border-left-color: #ff9f43 !important
}

.popover-warning.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after,.popover-warning>.popover.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after,.ngb-popover-warning+ngb-popover-window.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after {
    border-bottom-color: #ff9f43 !important
}

.popover-warning.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,.popover-warning>.popover.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,.ngb-popover-warning+ngb-popover-window.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after {
    border-left-color: #ff9f43 !important
}

[dir=rtl] .popover-warning.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,[dir=rtl] .popover-warning>.popover.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,[dir=rtl] .ngb-popover-warning+ngb-popover-window.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after {
    border-right-color: #ff9f43 !important
}

.popover-warning.bs-popover-auto[data-popper-placement=bottom] .popover-header::before,.popover-warning>.popover.bs-popover-auto[data-popper-placement=bottom] .popover-header::before,.ngb-popover-warning+ngb-popover-window.bs-popover-auto[data-popper-placement=bottom] .popover-header::before {
    border-bottom: 1px solid rgba(0,0,0,0) !important
}

.popover-danger,.popover-danger>.popover,.ngb-popover-danger+ngb-popover-window {
    border-color: rgba(0,0,0,0);
    background: #ea5455
}

.popover-danger .popover-header,.popover-danger>.popover .popover-header,.ngb-popover-danger+ngb-popover-window .popover-header {
    border-color: #ea5455;
    background: rgba(0,0,0,0);
    color: #fff
}

.popover-danger .popover-body,.popover-danger>.popover .popover-body,.ngb-popover-danger+ngb-popover-window .popover-body {
    background: rgba(0,0,0,0);
    color: rgba(255,255,255,.8)
}

.popover-danger>.popover-arrow::before,.popover-danger>.popover>.popover-arrow::before,.ngb-popover-danger+ngb-popover-window>.popover-arrow::before {
    border-color: rgba(0,0,0,0)
}

.popover-danger.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after,.popover-danger>.popover.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after,.ngb-popover-danger+ngb-popover-window.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after {
    border-top-color: #ea5455 !important
}

.popover-danger.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,.popover-danger>.popover.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,.ngb-popover-danger+ngb-popover-window.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after {
    border-right-color: #ea5455 !important
}

[dir=rtl] .popover-danger.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,[dir=rtl] .popover-danger>.popover.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,[dir=rtl] .ngb-popover-danger+ngb-popover-window.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after {
    border-left-color: #ea5455 !important
}

.popover-danger.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after,.popover-danger>.popover.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after,.ngb-popover-danger+ngb-popover-window.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after {
    border-bottom-color: #ea5455 !important
}

.popover-danger.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,.popover-danger>.popover.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,.ngb-popover-danger+ngb-popover-window.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after {
    border-left-color: #ea5455 !important
}

[dir=rtl] .popover-danger.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,[dir=rtl] .popover-danger>.popover.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,[dir=rtl] .ngb-popover-danger+ngb-popover-window.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after {
    border-right-color: #ea5455 !important
}

.popover-danger.bs-popover-auto[data-popper-placement=bottom] .popover-header::before,.popover-danger>.popover.bs-popover-auto[data-popper-placement=bottom] .popover-header::before,.ngb-popover-danger+ngb-popover-window.bs-popover-auto[data-popper-placement=bottom] .popover-header::before {
    border-bottom: 1px solid rgba(0,0,0,0) !important
}

.popover-dark,.popover-dark>.popover,.ngb-popover-dark+ngb-popover-window {
    border-color: rgba(0,0,0,0);
    background: #4b4b4b
}

.popover-dark .popover-header,.popover-dark>.popover .popover-header,.ngb-popover-dark+ngb-popover-window .popover-header {
    border-color: #4b4b4b;
    background: rgba(0,0,0,0);
    color: #fff
}

.popover-dark .popover-body,.popover-dark>.popover .popover-body,.ngb-popover-dark+ngb-popover-window .popover-body {
    background: rgba(0,0,0,0);
    color: rgba(255,255,255,.8)
}

.popover-dark>.popover-arrow::before,.popover-dark>.popover>.popover-arrow::before,.ngb-popover-dark+ngb-popover-window>.popover-arrow::before {
    border-color: rgba(0,0,0,0)
}

.popover-dark.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after,.popover-dark>.popover.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after,.ngb-popover-dark+ngb-popover-window.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after {
    border-top-color: #4b4b4b !important
}

.popover-dark.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,.popover-dark>.popover.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,.ngb-popover-dark+ngb-popover-window.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after {
    border-right-color: #4b4b4b !important
}

[dir=rtl] .popover-dark.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,[dir=rtl] .popover-dark>.popover.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,[dir=rtl] .ngb-popover-dark+ngb-popover-window.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after {
    border-left-color: #4b4b4b !important
}

.popover-dark.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after,.popover-dark>.popover.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after,.ngb-popover-dark+ngb-popover-window.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after {
    border-bottom-color: #4b4b4b !important
}

.popover-dark.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,.popover-dark>.popover.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,.ngb-popover-dark+ngb-popover-window.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after {
    border-left-color: #4b4b4b !important
}

[dir=rtl] .popover-dark.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,[dir=rtl] .popover-dark>.popover.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,[dir=rtl] .ngb-popover-dark+ngb-popover-window.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after {
    border-right-color: #4b4b4b !important
}

.popover-dark.bs-popover-auto[data-popper-placement=bottom] .popover-header::before,.popover-dark>.popover.bs-popover-auto[data-popper-placement=bottom] .popover-header::before,.ngb-popover-dark+ngb-popover-window.bs-popover-auto[data-popper-placement=bottom] .popover-header::before {
    border-bottom: 1px solid rgba(0,0,0,0) !important
}

.popover-gray,.popover-gray>.popover,.ngb-popover-gray+ngb-popover-window {
    border-color: rgba(0,0,0,0);
    background: #f6f6f7
}

.popover-gray .popover-header,.popover-gray>.popover .popover-header,.ngb-popover-gray+ngb-popover-window .popover-header {
    border-color: #f6f6f7;
    background: rgba(0,0,0,0);
    color: #4b465c
}

.popover-gray .popover-body,.popover-gray>.popover .popover-body,.ngb-popover-gray+ngb-popover-window .popover-body {
    background: rgba(0,0,0,0);
    color: rgba(75,70,92,.8)
}

.popover-gray>.popover-arrow::before,.popover-gray>.popover>.popover-arrow::before,.ngb-popover-gray+ngb-popover-window>.popover-arrow::before {
    border-color: rgba(0,0,0,0)
}

.popover-gray.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after,.popover-gray>.popover.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after,.ngb-popover-gray+ngb-popover-window.bs-popover-auto[data-popper-placement=top]>.popover-arrow::after {
    border-top-color: #f6f6f7 !important
}

.popover-gray.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,.popover-gray>.popover.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,.ngb-popover-gray+ngb-popover-window.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after {
    border-right-color: #f6f6f7 !important
}

[dir=rtl] .popover-gray.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,[dir=rtl] .popover-gray>.popover.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after,[dir=rtl] .ngb-popover-gray+ngb-popover-window.bs-popover-auto[data-popper-placement=right]>.popover-arrow::after {
    border-left-color: #f6f6f7 !important
}

.popover-gray.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after,.popover-gray>.popover.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after,.ngb-popover-gray+ngb-popover-window.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after {
    border-bottom-color: #f6f6f7 !important
}

.popover-gray.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,.popover-gray>.popover.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,.ngb-popover-gray+ngb-popover-window.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after {
    border-left-color: #f6f6f7 !important
}

[dir=rtl] .popover-gray.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,[dir=rtl] .popover-gray>.popover.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after,[dir=rtl] .ngb-popover-gray+ngb-popover-window.bs-popover-auto[data-popper-placement=left]>.popover-arrow::after {
    border-right-color: #f6f6f7 !important
}

.popover-gray.bs-popover-auto[data-popper-placement=bottom] .popover-header::before,.popover-gray>.popover.bs-popover-auto[data-popper-placement=bottom] .popover-header::before,.ngb-popover-gray+ngb-popover-window.bs-popover-auto[data-popper-placement=bottom] .popover-header::before {
    border-bottom: 1px solid rgba(0,0,0,0) !important
}

.modal-open .popover {
    z-index: 1091
}

.popover {
    box-shadow: 0 .25rem 1rem rgba(165,163,174,.45)
}

.popover .popover-header {
    padding-bottom: 0;
    font-size: 1.125rem
}

.popover .popover-body {
    padding-top: 1rem
}

.popover .popover-arrow {
    z-index: 1
}

.popover.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow::after {
    top: 2px
}

.popover.bs-popover-auto[data-popper-placement=bottom]>.popover-arrow:before {
    top: 1px
}

[dir=rtl] .popover {
    text-align: right
}

.form-label,.col-form-label {
    text-transform: inherit;
    letter-spacing: inherit
}

.form-label-lg {
    font-size: 1.125rem
}

.form-label-sm {
    font-size: 0.8125rem
}

.form-control::placeholder,.form-control:focus::placeholder {
    transition: all .2s ease
}

.form-control:hover:not([disabled]):not([focus]) {
    border-color: #c9c8ce
}

html:not([dir=rtl]) .form-control:not([readonly]):focus::placeholder {
    transform: translateX(4px)
}

[dir=rtl] .form-control:not([readonly]):focus::placeholder {
    transform: translateX(-4px)
}

.form-select {
    background-clip: padding-box
}

.form-select:hover:not([disabled]):not([focus]) {
    border-color: #c9c8ce
}

.form-select-sm {
    background-size: 19px 17px
}

.form-select-lg {
    background-size: 24px 22px
}

[dir=rtl] .form-select {
    background-position: left .875rem center;
    padding-right: .875rem;
    padding-left: 2.45rem
}

[dir=rtl] .form-select[multiple],[dir=rtl] .form-select[size]:not([size="1"]) {
    padding-left: .875rem;
    background-image: none
}

.form-check .form-check-input:disabled:not(:checked) {
    background-color: #dbdade
}

.form-check .form-check-input:checked,.form-check .form-check-input[type=checkbox]:indeterminate {
    box-shadow: 0 .125rem .25rem rgba(165,163,174,.3)
}

.form-check-input {
    cursor: pointer
}

[dir=rtl] .form-check {
    padding-left: 0;
    padding-right: 1.7em
}

[dir=rtl] .form-check .form-check-input {
    float: right;
    margin-left: 0;
    margin-right: -1.7em
}

[dir=rtl] .form-switch {
    padding-left: 0;
    padding-right: 2.5em
}

[dir=rtl] .form-switch .form-check-input {
    margin-left: 0;
    margin-right: -2.5em;
    background-position: right center
}

[dir=rtl] .form-switch .form-check-input:checked {
    background-position: left center
}

[dir=rtl] .form-check-inline {
    margin-right: 0;
    margin-left: 1rem
}

.form-check-secondary .form-check-input:focus {
    border-color: #a8aaae
}

.form-check-secondary .form-check-input:checked,.form-check-secondary .form-check-input[type=checkbox]:indeterminate {
    background-color: #a8aaae;
    border-color: #a8aaae
}

.form-check-secondary.custom-option.checked {
    border: 1px solid #a8aaae
}

.form-check-success .form-check-input:focus {
    border-color: #28c76f
}

.form-check-success .form-check-input:checked,.form-check-success .form-check-input[type=checkbox]:indeterminate {
    background-color: #28c76f;
    border-color: #28c76f
}

.form-check-success.custom-option.checked {
    border: 1px solid #28c76f
}

.form-check-info .form-check-input:focus {
    border-color: #00cfe8
}

.form-check-info .form-check-input:checked,.form-check-info .form-check-input[type=checkbox]:indeterminate {
    background-color: #00cfe8;
    border-color: #00cfe8
}

.form-check-info.custom-option.checked {
    border: 1px solid #00cfe8
}

.form-check-warning .form-check-input:focus {
    border-color: #ff9f43
}

.form-check-warning .form-check-input:checked,.form-check-warning .form-check-input[type=checkbox]:indeterminate {
    background-color: #ff9f43;
    border-color: #ff9f43
}

.form-check-warning.custom-option.checked {
    border: 1px solid #ff9f43
}

.form-check-danger .form-check-input:focus {
    border-color: #ea5455
}

.form-check-danger .form-check-input:checked,.form-check-danger .form-check-input[type=checkbox]:indeterminate {
    background-color: #ea5455;
    border-color: #ea5455
}

.form-check-danger.custom-option.checked {
    border: 1px solid #ea5455
}

.form-check-light .form-check-input:focus {
    border-color: #dfdfe3
}

.form-check-light .form-check-input:checked,.form-check-light .form-check-input[type=checkbox]:indeterminate {
    background-color: #dfdfe3;
    border-color: #dfdfe3
}

.form-check-light.custom-option.checked {
    border: 1px solid #dfdfe3
}

.form-check-dark .form-check-input:focus {
    border-color: #4b4b4b
}

.form-check-dark .form-check-input:checked,.form-check-dark .form-check-input[type=checkbox]:indeterminate {
    background-color: #4b4b4b;
    border-color: #4b4b4b
}

.form-check-dark.custom-option.checked {
    border: 1px solid #4b4b4b
}

.form-check-gray .form-check-input:focus {
    border-color: rgba(75,70,92,.05)
}

.form-check-gray .form-check-input:checked,.form-check-gray .form-check-input[type=checkbox]:indeterminate {
    background-color: rgba(75,70,92,.05);
    border-color: rgba(75,70,92,.05)
}

.form-check-gray.custom-option.checked {
    border: 1px solid rgba(75,70,92,.05)
}

.form-range::-webkit-slider-thumb {
    box-shadow: 0 0 0 1px rgba(75,70,92,.1),0 .31rem 1.25rem 0 rgba(75,70,92,.4);
    transition: transform .2s;
    transform-origin: center
}

.form-range::-webkit-slider-thumb:focus {
    box-shadow: 0 0 0 3px rgba(75,70,92,.1),0 .31rem 1.25rem 0 rgba(75,70,92,.4)
}

.form-range::-webkit-slider-thumb:active {
    transform: scale(1.4, 1.4)
}

.form-range::-moz-range-thumb {
    box-shadow: 0 0 0 1px rgba(75,70,92,.1),0 .31rem 1.25rem 0 rgba(75,70,92,.4);
    transition: transform .2s;
    transform-origin: center
}

.form-range::-moz-range-thumb:focus {
    box-shadow: 0 0 0 3px rgba(75,70,92,.1),0 .31rem 1.25rem 0 rgba(75,70,92,.4)
}

.form-range::-moz-range-thumb:active {
    transform: scale(1.4, 1.4)
}

.form-range:disabled::-webkit-slider-runnable-track {
    background-color: rgba(75,70,92,.03)
}

.form-range:disabled::-moz-range-track {
    background-color: rgba(75,70,92,.03)
}

.input-group {
    border-radius: var(--bs-border-radius)
}

.input-group.rounded-pill .input-group-text,.input-group.rounded-pill .form-control {
    border-radius: 50rem
}

.input-group:hover .input-group-text,.input-group:hover .form-control {
    border-color: #c9c8ce
}

.input-group:focus-within {
    box-shadow: 0 .125rem .25rem rgba(165,163,174,.3)
}

.input-group:focus-within .form-control,.input-group:focus-within .input-group-text {
    box-shadow: none
}

.input-group.disabled .input-group-text {
    background-color: rgba(75,70,92,.08)
}

.input-group.has-validation>.input-group-text:first-child {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group.has-validation>.form-control:first-child {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group.has-validation>.form-control:not(:first-child):not(:last-child) {
    border-radius: 0
}

.input-group-text {
    background-clip: padding-box
}

.input-group-text i {
    font-size: 1.25rem
}

.input-group-lg>.input-group-text i {
    font-size: calc(1.2625rem + 0.15vw)
}

@media(min-width: 1200px) {
    .input-group-lg>.input-group-text i {
        font-size:1.375rem
    }
}

.input-group-sm>.input-group-text i {
    font-size: 1.125rem
}

.input-group-lg>.input-group-text {
    padding-left: 1.125rem;
    padding-right: 1.125rem
}

html:not([dir=rtl]) .input-group-merge .input-group-text:first-child {
    border-right: 0
}

html:not([dir=rtl]) .input-group-merge .input-group-text:last-child {
    border-left: 0
}

html:not([dir=rtl]) .input-group-merge.disabled>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
    margin-left: 0 !important
}

html:not([dir=rtl]) .input-group-merge .form-control:not(:first-child) {
    border-left: 0
}

html:not([dir=rtl]) .input-group-merge .form-control:not(:last-child) {
    border-right: 0
}

html:not([dir=rtl]) .input-group-merge .form-control:not(textarea):not(:first-child) {
    padding-left: 0
}

html:not([dir=rtl]) .input-group-merge .form-control:not(textarea):not(:last-child) {
    padding-right: 0
}

.input-group-text {
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out
}

@media(prefers-reduced-motion: reduce) {
    .input-group-text {
        transition: none
    }
}

[dir=rtl] .input-group.rounded-pill .input-group-text {
    border-top-right-radius: 50rem !important;
    border-bottom-right-radius: 50rem !important
}

[dir=rtl] .input-group.rounded-pill .form-control {
    border-top-left-radius: 50rem !important;
    border-bottom-left-radius: 50rem !important
}

[dir=rtl] .input-group:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),[dir=rtl] .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    border-top-right-radius: var(--bs-border-radius);
    border-bottom-right-radius: var(--bs-border-radius)
}

[dir=rtl] .input-group.input-group-lg:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),[dir=rtl] .input-group.input-group-lg:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3) {
    border-top-right-radius: var(--bs-border-radius-lg);
    border-bottom-right-radius: var(--bs-border-radius-lg)
}

[dir=rtl] .input-group.input-group-sm:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),[dir=rtl] .input-group.input-group-sm:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3) {
    border-top-right-radius: var(--bs-border-radius-sm);
    border-bottom-right-radius: var(--bs-border-radius-sm)
}

[dir=rtl] .input-group.has-validation>:nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu),[dir=rtl] .input-group.has-validation>.dropdown-toggle:nth-last-child(n+4) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    border-top-right-radius: var(--bs-border-radius);
    border-bottom-right-radius: var(--bs-border-radius)
}

[dir=rtl] .input-group.input-group-lg>:nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu),[dir=rtl] .input-group.input-group-lg>.dropdown-toggle:nth-last-child(n+4) {
    border-top-right-radius: var(--bs-border-radius-lg);
    border-bottom-right-radius: var(--bs-border-radius-lg)
}

[dir=rtl] .input-group.input-group-sm>:nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu),[dir=rtl] .input-group.input-group-sm>.dropdown-toggle:nth-last-child(n+4) {
    border-top-right-radius: var(--bs-border-radius-sm);
    border-bottom-right-radius: var(--bs-border-radius-sm)
}

[dir=rtl] .input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
    margin-right: calc(var(--bs-border-width)*-1);
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    margin-left: 0px;
    border-top-left-radius: var(--bs-border-radius);
    border-bottom-left-radius: var(--bs-border-radius)
}

[dir=rtl] .input-group.input-group-lg>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
    border-top-left-radius: var(--bs-border-radius-lg);
    border-bottom-left-radius: var(--bs-border-radius-lg)
}

[dir=rtl] .input-group.input-group-sm>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
    border-top-left-radius: var(--bs-border-radius-sm);
    border-bottom-left-radius: var(--bs-border-radius-sm)
}

[dir=rtl] .input-group>:not(:first-child):not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),[dir=rtl] .input-group>.dropdown-toggle:nth-last-child(n+3):not(:first-child) {
    border-radius: 0 !important
}

[dir=rtl] .input-group.has-validation>.input-group-text:first-child {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    border-top-right-radius: var(--bs-border-radius);
    border-bottom-right-radius: var(--bs-border-radius)
}

[dir=rtl] .input-group.has-validation>.form-control:first-child {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    border-top-right-radius: var(--bs-border-radius);
    border-bottom-right-radius: var(--bs-border-radius)
}

[dir=rtl] .input-group-merge .input-group-text:first-child {
    border-left: 0
}

[dir=rtl] .input-group-merge .input-group-text:last-child {
    border-right: 0
}

[dir=rtl] .input-group-merge .form-control:not(:first-child) {
    padding-right: 0;
    border-right: 0
}

[dir=rtl] .input-group-merge .form-control:not(:last-child) {
    padding-left: 0;
    border-left: 0
}

.fv-plugins-bootstrap5-row-invalid .input-group.has-validation .input-group-text,.fv-plugins-bootstrap5-row-invalid .input-group.has-validation:focus-within .input-group-text {
    border-color: #ea5455 !important
}

.form-floating>.form-control:focus::placeholder,.form-floating>.form-control:not(:placeholder-shown)::placeholder {
    color: #b7b5be
}

[dir=rtl] .form-floating>label {
    right: 0;
    transform-origin: 100% 0
}

[dir=rtl] .form-floating>.form-control:focus~label,[dir=rtl] .form-floating>.form-control:not(:placeholder-shown)~label,[dir=rtl] .form-floating>.form-select~label {
    transform: scale(0.85) translateY(-0.5rem) translateX(-0.15rem)
}

[dir=rtl] .form-floating>.form-control:-webkit-autofill~label {
    transform: scale(0.85) translateY(-0.5rem) translateX(-0.15rem)
}

.valid-feedback {
    display: none;
    width: 100%;
    margin-top: .25rem;
    font-size: 0.8125rem;
    color: var(--bs-form-valid-color)
}

.valid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: .3125rem .75rem;
    margin-top: .1rem;
    font-size: 0.9375rem;
    color: #fff;
    background-color: var(--bs-success);
    border-radius: var(--bs-border-radius)
}

.was-validated :valid~.valid-feedback,.was-validated :valid~.valid-tooltip,.is-valid~.valid-feedback,.is-valid~.valid-tooltip {
    display: block
}

.was-validated .form-control:valid,.form-control.is-valid {
    border-color: var(--bs-form-valid-color) !important
}

.dark-style .was-validated .form-control:valid,.dark-style .form-control.is-valid {
    border-color: var(--bs-form-valid-color) !important
}

.was-validated .form-control:valid:focus,.form-control.is-valid:focus {
    border-color: var(--bs-form-valid-color) !important;
    box-shadow: 0 0 .25rem .05rem rgba(var(--bs-success-rgb), 0.1)
}

.was-validated .form-select:valid,.form-select.is-valid {
    border-color: var(--bs-form-valid-color) !important;
    background-image: url("data:image/svg+xml,%3Csvg width=\'20\' height=\'20\' viewBox=\'0 0 20 20\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M5 7.5L10 12.5L15 7.5\' stroke=\'%236f6b7d\' stroke-width=\'1.5\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 7.5L10 12.5L15 7.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.5\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E"),url("data:image/svg+xml,%3csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 8 8\'%3e%3cpath fill=\'%2328c76f\' d=\'M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z\'/%3e%3c/svg%3e")
}

html:not([dir=rtl]) .was-validated .form-select:valid,html:not([dir=rtl]) .form-select.is-valid {
    background-position: right .875rem center,center right 2.45rem
}

[dir=rtl] .was-validated .form-select:valid,[dir=rtl] .form-select.is-valid {
    background-position: left .875rem center,center left 2.45rem
}

.was-validated .form-select:valid:focus,.form-select.is-valid:focus {
    border-color: var(--bs-form-valid-color);
    box-shadow: 0 0 .25rem .05rem rgba(var(--bs-success-rgb), 0.1)
}

.was-validated .form-check-input:valid,.form-check-input.is-valid {
    border-color: var(--bs-form-valid-color)
}

.was-validated .form-check-input:valid:checked,.form-check-input.is-valid:checked {
    background-color: var(--bs-form-valid-color);
    border-color: var(--bs-form-valid-color)
}

.was-validated .form-check-input:valid:focus,.form-check-input.is-valid:focus {
    box-shadow: 0 0 .25rem .05rem rgba(var(--bs-success-rgb), 0.1);
    border-color: var(--bs-form-valid-color)
}

.was-validated .form-check-input:valid~.form-check-label,.form-check-input.is-valid~.form-check-label {
    color: var(--bs-form-valid-color)
}

html:not([dir=rtl]) .form-check-inline .form-check-input~.valid-feedback {
    margin-left: .5em
}

[dir=rtl] .form-check-inline .form-check-input~.valid-feedback {
    margin-right: .5em
}

.was-validated .input-group .form-control:valid~.input-group-text,.input-group .form-control.is-valid~.input-group-text {
    border-color: var(--bs-form-valid-color) !important
}

.was-validated .input-group .form-control:valid:focus,.input-group .form-control.is-valid:focus {
    border-color: var(--bs-form-valid-color) !important;
    box-shadow: none
}

.was-validated .input-group .form-control:valid:focus~.input-group-text,.input-group .form-control.is-valid:focus~.input-group-text {
    border-color: var(--bs-form-valid-color)
}

.was-validated .input-group .form-control:valid,.input-group .form-control.is-valid,.was-validated .input-group .form-select:valid,.input-group .form-select.is-valid {
    z-index: 3
}

.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: .25rem;
    font-size: 0.8125rem;
    color: var(--bs-form-invalid-color)
}

.invalid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: .3125rem .75rem;
    margin-top: .1rem;
    font-size: 0.9375rem;
    color: #fff;
    background-color: var(--bs-danger);
    border-radius: var(--bs-border-radius)
}

.was-validated :invalid~.invalid-feedback,.was-validated :invalid~.invalid-tooltip,.is-invalid~.invalid-feedback,.is-invalid~.invalid-tooltip {
    display: block
}

.was-validated .form-control:invalid,.form-control.is-invalid {
    border-color: var(--bs-form-invalid-color) !important
}

.dark-style .was-validated .form-control:invalid,.dark-style .form-control.is-invalid {
    border-color: var(--bs-form-invalid-color) !important
}

.was-validated .form-control:invalid:focus,.form-control.is-invalid:focus {
    border-color: var(--bs-form-invalid-color) !important;
    box-shadow: 0 0 .25rem .05rem rgba(var(--bs-danger-rgb), 0.1)
}

.was-validated .form-select:invalid,.form-select.is-invalid {
    border-color: var(--bs-form-invalid-color) !important;
    background-image: url("data:image/svg+xml,%3Csvg width=\'20\' height=\'20\' viewBox=\'0 0 20 20\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M5 7.5L10 12.5L15 7.5\' stroke=\'%236f6b7d\' stroke-width=\'1.5\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 7.5L10 12.5L15 7.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.5\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E"),url("data:image/svg+xml,%3csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 12 12\' width=\'12\' height=\'12\' fill=\'none\' stroke=\'%23ea5455\'%3e%3ccircle cx=\'6\' cy=\'6\' r=\'4.5\'/%3e%3cpath stroke-linejoin=\'round\' d=\'M5.8 3.6h.4L6 6.5z\'/%3e%3ccircle cx=\'6\' cy=\'8.2\' r=\'.6\' fill=\'%23ea5455\' stroke=\'none\'/%3e%3c/svg%3e")
}

html:not([dir=rtl]) .was-validated .form-select:invalid,html:not([dir=rtl]) .form-select.is-invalid {
    background-position: right .875rem center,center right 2.45rem
}

[dir=rtl] .was-validated .form-select:invalid,[dir=rtl] .form-select.is-invalid {
    background-position: left .875rem center,center left 2.45rem
}

.was-validated .form-select:invalid:focus,.form-select.is-invalid:focus {
    border-color: var(--bs-form-invalid-color);
    box-shadow: 0 0 .25rem .05rem rgba(var(--bs-danger-rgb), 0.1)
}

.was-validated .form-check-input:invalid,.form-check-input.is-invalid {
    border-color: var(--bs-form-invalid-color)
}

.was-validated .form-check-input:invalid:checked,.form-check-input.is-invalid:checked {
    background-color: var(--bs-form-invalid-color);
    border-color: var(--bs-form-invalid-color)
}

.was-validated .form-check-input:invalid:focus,.form-check-input.is-invalid:focus {
    box-shadow: 0 0 .25rem .05rem rgba(var(--bs-danger-rgb), 0.1);
    border-color: var(--bs-form-invalid-color)
}

.was-validated .form-check-input:invalid~.form-check-label,.form-check-input.is-invalid~.form-check-label {
    color: var(--bs-form-invalid-color)
}

html:not([dir=rtl]) .form-check-inline .form-check-input~.invalid-feedback {
    margin-left: .5em
}

[dir=rtl] .form-check-inline .form-check-input~.invalid-feedback {
    margin-right: .5em
}

.was-validated .input-group .form-control:invalid~.input-group-text,.input-group .form-control.is-invalid~.input-group-text {
    border-color: var(--bs-form-invalid-color) !important
}

.was-validated .input-group .form-control:invalid:focus,.input-group .form-control.is-invalid:focus {
    border-color: var(--bs-form-invalid-color) !important;
    box-shadow: none
}

.was-validated .input-group .form-control:invalid:focus~.input-group-text,.input-group .form-control.is-invalid:focus~.input-group-text {
    border-color: var(--bs-form-invalid-color)
}

.was-validated .input-group .form-control:invalid,.input-group .form-control.is-invalid,.was-validated .input-group .form-select:invalid,.input-group .form-select.is-invalid {
    z-index: 3
}

form .error:not(li):not(input) {
    color: #ea5455;
    font-size: 85%;
    margin-top: .25rem
}

form .invalid,form .is-invalid .invalid:before,form .is-invalid::before {
    border-color: #ea5455 !important
}

form .form-label.invalid,form .form-label.is-invalid {
    border-color: #ea5455;
    box-shadow: 0 0 0 2px rgba(234,84,85,.4) !important
}

form select.invalid~.select2 .select2-selection {
    border-color: #ea5455
}

form select.is-invalid~.select2 .select2-selection {
    border-color: #ea5455 !important
}

form select.selectpicker.is-invalid~.btn {
    border-color: #ea5455 !important
}

@media(hover: none) {
    .fv-plugins-bootstrap5-row-invalid .form-control.flatpickr-mobile {
        border-color:#ea5455
    }
}

.fv-plugins-bootstrap5 .invalid-feedback,.fv-plugins-bootstrap5 .invalid-tooltip {
    display: block
}

.fv-plugins-bootstrap5-row-invalid .tagify.tagify--empty {
    border-color: #ea5455 !important
}

.modal .btn-close {
    background-color: #fff;
    border-radius: .375rem;
    background-image: url("data:image/svg+xml,%3Csvg width=\'19\' height=\'18\' viewBox=\'0 0 19 18\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'%23a5a3ae\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'%23a5a3ae\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E%0A");
    opacity: 1;
    padding: .44rem;
    box-shadow: 0 .125rem .25rem rgba(165,163,174,.3);
    transition: all .23s ease .1s
}

html:not([dir=rtl]) .modal .btn-close {
    transform: translate(23px, -25px)
}

[dir=rtl] .modal .btn-close {
    transform: translate(-31px, -25px)
}

.modal .btn-close:hover,.modal .btn-close:focus,.modal .btn-close:active {
    opacity: 1;
    outline: none
}

html:not([dir=rtl]) .modal .btn-close:hover,html:not([dir=rtl]) .modal .btn-close:focus,html:not([dir=rtl]) .modal .btn-close:active {
    transform: translate(20px, -20px)
}

[dir=rtl] .modal .btn-close:hover,[dir=rtl] .modal .btn-close:focus,[dir=rtl] .modal .btn-close:active {
    transform: translate(-26px, -20px)
}

.modal .modal-header {
    position: relative
}

.modal .modal-header .btn-close {
    position: absolute;
    top: 1.56rem
}

html:not([dir=rtl]) .modal .modal-header .btn-close {
    right: 1rem
}

[dir=rtl] .modal .modal-header .btn-close {
    left: 1.3rem
}

.modal-footer {
    padding: .25rem 1.5rem 1.25rem
}

.modal-content {
    box-shadow: 0 .31rem 1.25rem 0 rgba(75,70,92,.4)
}

.modal-dialog-scrollable .btn-close,.modal-fullscreen .btn-close,.modal-top .btn-close {
    box-shadow: none
}

html:not([dir=rtl]) .modal-dialog-scrollable .btn-close,html:not([dir=rtl]) .modal-fullscreen .btn-close,html:not([dir=rtl]) .modal-top .btn-close {
    transform: translate(0, 0) !important
}

[dir=rtl] .modal-dialog-scrollable .btn-close,[dir=rtl] .modal-fullscreen .btn-close,[dir=rtl] .modal-top .btn-close {
    transform: translate(0, 0) !important
}

html:not([dir=rtl]) .modal-dialog-scrollable .btn-close:hover,html:not([dir=rtl]) .modal-fullscreen .btn-close:hover,html:not([dir=rtl]) .modal-top .btn-close:hover {
    transform: translate(0, 0) !important
}

[dir=rtl] .modal-dialog-scrollable .btn-close:hover,[dir=rtl] .modal-fullscreen .btn-close:hover,[dir=rtl] .modal-top .btn-close:hover {
    transform: translate(0, 0) !important
}

.modal-onboarding .close-label {
    font-size: .8rem;
    position: absolute;
    top: .85rem;
    opacity: .5
}

.modal-onboarding .close-label:hover {
    opacity: .75
}

[dir=rtl] .modal-onboarding .modal-header .btn-close {
    margin-left: 0;
    margin-right: auto
}

.modal-onboarding .onboarding-media {
    margin-bottom: 1rem
}

.modal-onboarding .onboarding-media img {
    margin: 0 auto
}

.modal-onboarding .onboarding-content {
    margin: 2rem
}

.modal-onboarding form {
    margin-top: 2rem;
    text-align: left
}

.modal-onboarding .carousel-indicators {
    bottom: -10px
}

.modal-onboarding .carousel-control-prev,.modal-onboarding .carousel-control-next {
    top: auto;
    bottom: .75rem;
    opacity: 1
}

[dir=rtl] .modal-onboarding .carousel-control-prev,[dir=rtl] .modal-onboarding .carousel-control-next {
    flex-direction: row-reverse
}

.modal-onboarding .carousel-control-prev {
    left: 1rem
}

.modal-onboarding .onboarding-horizontal {
    display: flex;
    justify-content: space-between;
    align-items: center
}

.modal-onboarding .onboarding-horizontal .onboarding-media {
    margin: 2rem;
    margin-top: 0
}

.modal-onboarding .onboarding-horizontal .carousel-control-prev {
    left: 0
}

.modal-onboarding.animated .onboarding-media {
    transform: translateY(10px) scale(0.8);
    transition: all .5s cubic-bezier(0.25, 1.1, 0.5, 1.35);
    transition-delay: .3s;
    opacity: 0
}

.modal-onboarding.animated .onboarding-content {
    transform: translateY(40px);
    transition-delay: .1s;
    transition: all .4s ease;
    opacity: 0
}

.modal-onboarding.animated .onboarding-title {
    opacity: 0;
    transition-delay: .5s;
    transition: all .5s cubic-bezier(0.25, 1.1, 0.5, 1.35);
    transform: translateY(40px)
}

.modal-onboarding.animated .onboarding-info {
    opacity: 0;
    transition-delay: .6s;
    transition: all .5s cubic-bezier(0.25, 1.1, 0.5, 1.35);
    transform: translateY(40px)
}

.modal-onboarding.animated form {
    opacity: 0;
    transition-delay: .7s;
    transition: all .5s ease;
    transform: translateY(40px)
}

.modal-onboarding.animated.show .onboarding-media {
    transform: translateY(0) scale(1);
    opacity: 1
}

.modal-onboarding.animated.show .onboarding-content {
    transform: translateY(0);
    opacity: 1
}

.modal-onboarding.animated.show .onboarding-title {
    transform: translateY(0);
    opacity: 1
}

.modal-onboarding.animated.show .onboarding-info {
    opacity: 1;
    transform: translateY(0px)
}

.modal-onboarding.animated.show form {
    opacity: 1;
    transform: translateY(0px)
}

.modal-top .modal-dialog {
    margin-top: 0
}

.modal-top .modal-content {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.modal-transparent .modal-dialog {
    display: flex;
    margin: 0 auto;
    min-height: 100vh
}

.modal-transparent .modal-content {
    margin: auto;
    width: 100%;
    border: 0;
    background: rgba(0,0,0,0);
    box-shadow: none
}

.modal-transparent .btn-close {
    position: absolute;
    top: 0;
    right: .25rem;
    opacity: 1;
    padding: .25em .25em;
    background-image: url("data:image/svg+xml,%3Csvg width=\'19\' height=\'18\' viewBox=\'0 0 19 18\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'%23fff\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'%23fff\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E%0A");
    background-color: rgba(0,0,0,0) !important
}

[dir=rtl] .modal-transparent .btn-close {
    right: auto;
    left: .25rem
}

.modal-simple .modal-content {
    padding: 3rem
}

.modal-simple .btn-close {
    position: absolute;
    top: -2rem
}

[dir=rtl] .modal-simple .btn-close {
    left: -2rem
}

html:not([dir=rtl]) .modal-simple .btn-close {
    right: -2rem
}

@media(max-width: 767.98px) {
    .modal-simple .btn-close {
        top:0
    }

    [dir=rtl] .modal-simple .btn-close {
        left: 0
    }

    html:not([dir=rtl]) .modal-simple .btn-close {
        right: 0
    }
}

.modal-refer-and-earn .modal-refer-and-earn-step {
    width: 100px;
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: var(--bs-border-radius)
}

.modal-refer-and-earn .modal-refer-and-earn-step i {
    font-size: 2.5rem
}

.modal-top.fade .modal-dialog,.modal-top .modal.fade .modal-dialog {
    transform: translateY(-100%)
}

.modal-top.show .modal-dialog,.modal-top .modal.show .modal-dialog {
    transform: translateY(0)
}

.modal-transparent.fade .modal-dialog,.modal-transparent .modal.fade .modal-dialog {
    transform: scale(0.5, 0.5)
}

.modal-transparent.show .modal-dialog,.modal-transparent .modal.show .modal-dialog {
    transform: scale(1, 1)
}

@media(max-width: 991.98px) {
    .modal-onboarding .onboarding-horizontal {
        flex-direction:column
    }
}

@media(max-width: 767.98px) {
    .modal .modal-dialog:not(.modal-fullscreen) {
        padding:0 .75rem;
        padding-left: .75rem !important
    }

    .modal .carousel-control-prev,.modal .carousel-control-next {
        display: none
    }
}

@media(min-width: 576px) {
    .modal-content {
        box-shadow:0 .31rem 1.25rem 0 rgba(75,70,92,.4)
    }

    .modal-sm .modal-dialog {
        max-width: 22.5rem
    }
}

@media(min-width: 1200px) {
    .modal-xl .modal-dialog {
        max-width:1140px
    }
}

.progress-bar {
    font-weight: 500;
    line-height: 1
}

html:not([dir=rtl]) .progress-bar-striped {
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.1) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.1) 75%, transparent 75%, transparent)
}

html:not([dir=rtl]) .progress .progress-bar:last-child {
    border-top-right-radius: 3.125rem;
    border-bottom-right-radius: 3.125rem
}

html:not([dir=rtl]) .progress .progress-bar:first-child {
    border-top-left-radius: 3.125rem;
    border-bottom-left-radius: 3.125rem
}

[dir=rtl] .progress-bar-animated {
    animation-direction: reverse
}

[dir=rtl] .progress .progress-bar:last-child {
    border-top-left-radius: 3.125rem;
    border-bottom-left-radius: 3.125rem
}

[dir=rtl] .progress .progress-bar:first-child {
    border-top-right-radius: 3.125rem;
    border-bottom-right-radius: 3.125rem
}

.breadcrumb-item,.breadcrumb-item a {
    color: #7367f0
}

.breadcrumb-item.active a:hover,.breadcrumb-item.active a:focus {
    color: #7367f0
}

.breadcrumb-item.active a:not(:hover,:focus) {
    color: #4b465c
}

.breadcrumb-item+.breadcrumb-item::before {
    width: 26px;
    height: 10px
}

.breadcrumb-style1 .breadcrumb-item+.breadcrumb-item::before {
    content: "/";
    color: #4b465c;
    width: 1.43rem;
    font-weight: 500;
    margin-left: .2rem
}

.breadcrumb-style2 .breadcrumb-item+.breadcrumb-item::before {
    content: url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' class=\'icon icon-tabler icon-tabler-check\' width=\'16\' height=\'24\' viewBox=\'0 0 24 24\' stroke-width=\'1.75\' stroke=\'%234b465c\' fill=\'none\' stroke-linecap=\'round\' stroke-linejoin=\'round\'%3E%3Cpath stroke=\'none\' d=\'M0 0h24v24H0z\' fill=\'none\'%3E%3C/path%3E%3Cpath d=\'M5 12l5 5l10 -10\'%3E%3C/path%3E%3C/svg%3E");
    line-height: 1.375rem;
    width: 26px;
    height: 10px
}

[dir=rtl] .breadcrumb-item+.breadcrumb-item {
    padding-right: .875rem;
    padding-left: 0
}

[dir=rtl] .breadcrumb-item+.breadcrumb-item::before {
    padding-right: 0;
    padding-left: .875rem;
    float: right
}

[dir=rtl] .breadcrumb-style1 .breadcrumb-item+.breadcrumb-item::before {
    content: "\\"
}

[dir=rtl] .breadcrumb-style2 .breadcrumb-item+.breadcrumb-item::before {
    content: url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' class=\'icon icon-tabler icon-tabler-check\' width=\'16\' height=\'24\' viewBox=\'0 0 24 24\' stroke-width=\'1.75\' stroke=\'%234b465c\' fill=\'none\' stroke-linecap=\'round\' stroke-linejoin=\'round\'%3E%3Cpath stroke=\'none\' d=\'M0 0h24v24H0z\' fill=\'none\'%3E%3C/path%3E%3Cpath d=\'M5 12l5 5l10 -10\'%3E%3C/path%3E%3C/svg%3E")
}

.list-group-item-secondary {
    border-color: #a8aaae;
    background-color: #f1f1f2;
    border-color: #a8aaae;
    color: #a8aaae !important
}

a.list-group-item-secondary,button.list-group-item-secondary {
    color: #a8aaae
}

a.list-group-item-secondary:hover,a.list-group-item-secondary:focus,button.list-group-item-secondary:hover,button.list-group-item-secondary:focus {
    border-color: #a8aaae;
    background-color: #f1f1f2;
    color: #a8aaae
}

a.list-group-item-secondary.active,button.list-group-item-secondary.active {
    border-color: #a8aaae !important;
    background-color: #a8aaae !important;
    color: #fff !important
}

.list-group.list-group-timeline .list-group-timeline-secondary:before {
    border-color: #a8aaae;
    background-color: #a8aaae
}

.list-group-item-success {
    border-color: #28c76f;
    background-color: #ddf6e8;
    border-color: #28c76f;
    color: #28c76f !important
}

a.list-group-item-success,button.list-group-item-success {
    color: #28c76f
}

a.list-group-item-success:hover,a.list-group-item-success:focus,button.list-group-item-success:hover,button.list-group-item-success:focus {
    border-color: #28c76f;
    background-color: #ddf6e8;
    color: #28c76f
}

a.list-group-item-success.active,button.list-group-item-success.active {
    border-color: #28c76f !important;
    background-color: #28c76f !important;
    color: #fff !important
}

.list-group.list-group-timeline .list-group-timeline-success:before {
    border-color: #28c76f;
    background-color: #28c76f
}

.list-group-item-info {
    border-color: #00cfe8;
    background-color: #d6f7fb;
    border-color: #00cfe8;
    color: #00cfe8 !important
}

a.list-group-item-info,button.list-group-item-info {
    color: #00cfe8
}

a.list-group-item-info:hover,a.list-group-item-info:focus,button.list-group-item-info:hover,button.list-group-item-info:focus {
    border-color: #00cfe8;
    background-color: #d6f7fb;
    color: #00cfe8
}

a.list-group-item-info.active,button.list-group-item-info.active {
    border-color: #00cfe8 !important;
    background-color: #00cfe8 !important;
    color: #fff !important
}

.list-group.list-group-timeline .list-group-timeline-info:before {
    border-color: #00cfe8;
    background-color: #00cfe8
}

.list-group-item-warning {
    border-color: #ff9f43;
    background-color: #fff0e1;
    border-color: #ff9f43;
    color: #ff9f43 !important
}

a.list-group-item-warning,button.list-group-item-warning {
    color: #ff9f43
}

a.list-group-item-warning:hover,a.list-group-item-warning:focus,button.list-group-item-warning:hover,button.list-group-item-warning:focus {
    border-color: #ff9f43;
    background-color: #fff0e1;
    color: #ff9f43
}

a.list-group-item-warning.active,button.list-group-item-warning.active {
    border-color: #ff9f43 !important;
    background-color: #ff9f43 !important;
    color: #fff !important
}

.list-group.list-group-timeline .list-group-timeline-warning:before {
    border-color: #ff9f43;
    background-color: #ff9f43
}

.list-group-item-danger {
    border-color: #ea5455;
    background-color: #fce4e4;
    border-color: #ea5455;
    color: #ea5455 !important
}

a.list-group-item-danger,button.list-group-item-danger {
    color: #ea5455
}

a.list-group-item-danger:hover,a.list-group-item-danger:focus,button.list-group-item-danger:hover,button.list-group-item-danger:focus {
    border-color: #ea5455;
    background-color: #fce4e4;
    color: #ea5455
}

a.list-group-item-danger.active,button.list-group-item-danger.active {
    border-color: #ea5455 !important;
    background-color: #ea5455 !important;
    color: #fff !important
}

.list-group.list-group-timeline .list-group-timeline-danger:before {
    border-color: #ea5455;
    background-color: #ea5455
}

.list-group-item-dark {
    border-color: #4b4b4b;
    background-color: #e2e2e2;
    border-color: #4b4b4b;
    color: #4b4b4b !important
}

a.list-group-item-dark,button.list-group-item-dark {
    color: #4b4b4b
}

a.list-group-item-dark:hover,a.list-group-item-dark:focus,button.list-group-item-dark:hover,button.list-group-item-dark:focus {
    border-color: #4b4b4b;
    background-color: #e2e2e2;
    color: #4b4b4b
}

a.list-group-item-dark.active,button.list-group-item-dark.active {
    border-color: #4b4b4b !important;
    background-color: #4b4b4b !important;
    color: #fff !important
}

.list-group.list-group-timeline .list-group-timeline-dark:before {
    border-color: #4b4b4b;
    background-color: #4b4b4b
}

.list-group-item-gray {
    border-color: rgba(75,70,92,.05);
    background-color: rgba(254,254,254,.848);
    border-color: rgba(75,70,92,.05);
    color: rgba(75,70,92,.05) !important
}

a.list-group-item-gray,button.list-group-item-gray {
    color: rgba(75,70,92,.05)
}

a.list-group-item-gray:hover,a.list-group-item-gray:focus,button.list-group-item-gray:hover,button.list-group-item-gray:focus {
    border-color: rgba(75,70,92,.05);
    background-color: rgba(254,254,254,.848);
    color: rgba(75,70,92,.05)
}

a.list-group-item-gray.active,button.list-group-item-gray.active {
    border-color: rgba(75,70,92,.05) !important;
    background-color: rgba(75,70,92,.05) !important;
    color: #fff !important
}

.list-group.list-group-timeline .list-group-timeline-gray:before {
    border-color: rgba(75,70,92,.05);
    background-color: rgba(75,70,92,.05)
}

.list-group.list-group-timeline {
    position: relative
}

.list-group.list-group-timeline:before {
    background-color: #dbdade;
    position: absolute;
    content: "";
    width: 1px;
    height: 100%;
    top: 0;
    bottom: 0;
    left: .2rem
}

.list-group.list-group-timeline .list-group-item {
    border: none;
    padding-left: 1.25rem
}

.list-group.list-group-timeline .list-group-item:before {
    position: absolute;
    display: block;
    content: "";
    width: 7px;
    height: 7px;
    left: 0;
    top: 50%;
    margin-top: -3.5px;
    border-radius: 100%
}

.list-group .list-group-item-action.active h1,.list-group .list-group-item-action.active .h1,.list-group .list-group-item-action.active h2,.list-group .list-group-item-action.active .h2,.list-group .list-group-item-action.active h3,.list-group .list-group-item-action.active .h3,.list-group .list-group-item-action.active h4,.list-group .list-group-item-action.active .h4,.list-group .list-group-item-action.active h5,.list-group .list-group-item-action.active .h5,.list-group .list-group-item-action.active h6,.list-group .list-group-item-action.active .h6 {
    color: #fff
}

[dir=rtl] .list-group {
    padding-right: 0
}

[dir=rtl] .list-group.list-group-timeline:before {
    left: auto;
    right: .2rem
}

[dir=rtl] .list-group.list-group-timeline .list-group-item {
    padding-right: 1.25rem
}

[dir=rtl] .list-group.list-group-timeline .list-group-item:before {
    left: auto;
    right: 0
}

[dir=rtl] .list-group.list-group-horizontal .list-group-item:first-child {
    border-radius: .25rem;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

[dir=rtl] .list-group.list-group-horizontal .list-group-item:last-child {
    border-radius: .25rem;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    border-left-width: 1px
}

@media(min-width: 576px) {
    [dir=rtl] .list-group.list-group-horizontal-sm .list-group-item:first-child {
        border-radius:.25rem;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    [dir=rtl] .list-group.list-group-horizontal-sm .list-group-item:last-child {
        border-radius: .25rem;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-left-width: 1px
    }
}

@media(min-width: 768px) {
    [dir=rtl] .list-group.list-group-horizontal-md .list-group-item:first-child {
        border-radius:.25rem;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    [dir=rtl] .list-group.list-group-horizontal-md .list-group-item:last-child {
        border-radius: .25rem;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-left-width: 1px
    }
}

@media(min-width: 992px) {
    [dir=rtl] .list-group.list-group-horizontal-lg .list-group-item:first-child {
        border-radius:.25rem;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    [dir=rtl] .list-group.list-group-horizontal-lg .list-group-item:last-child {
        border-radius: .25rem;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-left-width: 1px
    }
}

@media(min-width: 1200px) {
    [dir=rtl] .list-group.list-group-horizontal-xl .list-group-item:first-child {
        border-radius:.25rem;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    [dir=rtl] .list-group.list-group-horizontal-xl .list-group-item:last-child {
        border-radius: .25rem;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-left-width: 1px
    }
}

@media(min-width: 1400px) {
    [dir=rtl] .list-group.list-group-horizontal-xxl .list-group-item:first-child {
        border-radius:.25rem;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    [dir=rtl] .list-group.list-group-horizontal-xxl .list-group-item:last-child {
        border-radius: .25rem;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-left-width: 1px
    }
}

.navbar {
    z-index: 2
}

.navbar .dropdown:focus,.navbar .dropdown-toggle:focus {
    outline: 0
}

.navbar .navbar-toggler:focus {
    box-shadow: none
}

.navbar .list-group-item:hover,.navbar .list-group-item:focus {
    background-color: rgba(75,70,92,.04);
    color: inherit
}

.fixed-top {
    z-index: 1030
}

.navbar.navbar-light {
    color: rgba(75,70,92,.5)
}

.navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(75,70,92,.3) !important
}

.navbar.navbar-dark {
    color: rgba(255,255,255,.8)
}

.navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255,255,255,.4) !important
}

.navbar-collapse,.navbar-brand,.navbar-text {
    flex-shrink: 1
}

.navbar-dark hr {
    border-color: rgba(255,255,255,.1)
}

.navbar-light hr {
    border-color: rgba(75,70,92,.05)
}

[dir=rtl] .navbar-nav {
    padding-right: 0
}

[dir=rtl] .navbar-brand {
    margin-right: 0
}

.mega-dropdown .dropdown-toggle {
    outline: 0;
    box-shadow: none
}

.mega-dropdown .dropdown-menu {
    width: 100%
}

.card.card-border-shadow-secondary::after {
    border-bottom-color: #dcdddf
}

.card.card-border-shadow-secondary:hover::after {
    border-bottom-color: #a8aaae
}

.card.card-hover-border-secondary:hover,.card .card-hover-border-secondary:hover {
    border-color: #dedfe0
}

.card.card-border-shadow-success::after {
    border-bottom-color: #a9e9c5
}

.card.card-border-shadow-success:hover::after {
    border-bottom-color: #28c76f
}

.card.card-hover-border-success:hover,.card .card-hover-border-success:hover {
    border-color: #adeac8
}

.card.card-border-shadow-info::after {
    border-bottom-color: #99ecf6
}

.card.card-border-shadow-info:hover::after {
    border-bottom-color: #00cfe8
}

.card.card-hover-border-info:hover,.card .card-hover-border-info:hover {
    border-color: #9eedf6
}

.card.card-border-shadow-warning::after {
    border-bottom-color: #ffd9b4
}

.card.card-border-shadow-warning:hover::after {
    border-bottom-color: #ff9f43
}

.card.card-hover-border-warning:hover,.card .card-hover-border-warning:hover {
    border-color: #ffdbb8
}

.card.card-border-shadow-danger::after {
    border-bottom-color: #f7bbbb
}

.card.card-border-shadow-danger:hover::after {
    border-bottom-color: #ea5455
}

.card.card-hover-border-danger:hover,.card .card-hover-border-danger:hover {
    border-color: #f7bebe
}

.card.card-border-shadow-light::after {
    border-bottom-color: #f2f2f4
}

.card.card-border-shadow-light:hover::after {
    border-bottom-color: #dfdfe3
}

.card.card-hover-border-light:hover,.card .card-hover-border-light:hover {
    border-color: #f3f3f4
}

.card.card-border-shadow-dark::after {
    border-bottom-color: #b7b7b7
}

.card.card-border-shadow-dark:hover::after {
    border-bottom-color: #4b4b4b
}

.card.card-hover-border-dark:hover,.card .card-hover-border-dark:hover {
    border-color: #bbb
}

.card.card-border-shadow-gray::after {
    border-bottom-color: rgba(252,252,252,.62)
}

.card.card-border-shadow-gray:hover::after {
    border-bottom-color: rgba(75,70,92,.05)
}

.card.card-hover-border-gray:hover,.card .card-hover-border-gray:hover {
    border-color: rgba(252,252,252,.639)
}

.card {
    background-clip: padding-box;
    box-shadow: 0 .25rem 1.125rem rgba(75,70,92,.1)
}

.card .card-link {
    display: inline-block
}

.card .card-header+.card-body,.card .card-header+.card-content>.card-body:first-of-type,.card .card-body+.card-footer {
    padding-top: 0
}

.card[class*=card-border-shadow-] {
    position: relative;
    border-bottom: none;
    transition: all .2s ease-in-out;
    z-index: 1
}

.card[class*=card-border-shadow-]::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-bottom-width: 2px;
    border-bottom-style: solid;
    border-radius: var(--bs-border-radius);
    transition: all .2s ease-in-out;
    z-index: -1
}

.card[class*=card-border-shadow-]:hover {
    box-shadow: 0 .25rem 1rem rgba(165,163,174,.45)
}

.card[class*=card-border-shadow-]:hover::after {
    border-bottom-width: 3px
}

.card[class*=card-hover-border-] {
    border-width: 1px
}

.card-action.card-fullscreen {
    display: block;
    z-index: 9999;
    position: fixed;
    width: 100% !important;
    height: 100% !important;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    overflow: auto;
    border: none;
    border-radius: 0
}

.card-action .card-alert {
    position: absolute;
    width: 100%;
    z-index: 999
}

.card-action .card-alert .alert {
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px
}

.card-action .card-header.collapsed {
    border-bottom: 0
}

.card-action .card-header {
    display: flex;
    line-height: 1.54
}

.card-action .card-header .card-action-title {
    flex-grow: 1;
    margin-right: .5rem
}

.card-action .card-header .card-action-element {
    flex-shrink: 0;
    background-color: inherit;
    top: 1rem;
    right: 1.5rem;
    color: #6f6b7d
}

.card-action .card-header .card-action-element a {
    color: #6f6b7d
}

.card-action .card-header .card-action-element a .collapse-icon::after {
    margin-top: -0.15rem
}

.card-action .blockUI .sk-fold {
    margin: 0 auto
}

.card-action .blockUI h5,.card-action .blockUI .h5 {
    color: #6f6b7d;
    margin: 1rem 0 0 0
}

.card-header,.card-footer {
    border-color: rgba(75,70,92,.075)
}

.card .row-bordered>[class*=" col "] .card .row-bordered>[class$=" col"],.card .row-bordered>[class*=" col "]::before,.card .row-bordered>[class*=" col "]::after,.card .row-bordered>[class^="col "] .card .row-bordered>[class$=" col"],.card .row-bordered>[class^="col "]::before,.card .row-bordered>[class^="col "]::after,.card .row-bordered>[class*=" col-"] .card .row-bordered>[class$=" col"],.card .row-bordered>[class*=" col-"]::before,.card .row-bordered>[class*=" col-"]::after,.card .row-bordered>[class^=col-] .card .row-bordered>[class$=" col"],.card .row-bordered>[class^=col-]::before,.card .row-bordered>[class^=col-]::after,.card .row-bordered>[class=col] .card .row-bordered>[class$=" col"],.card .row-bordered>[class=col]::before,.card .row-bordered>[class=col]::after {
    border-color: rgba(75,70,92,.075)
}

.card-header.header-elements,.card-title.header-elements {
    display: flex;
    width: 100%;
    align-items: center;
    flex-wrap: wrap
}

.card-header.card-header-elements {
    padding-top: .75rem;
    padding-bottom: .75rem
}

.card-header .card-header-elements {
    padding-top: .25rem;
    padding-bottom: .25rem
}

.card-header-elements,.card-title-elements {
    display: flex;
    flex-wrap: wrap;
    align-items: center
}

.card-header-elements+.card-header-elements,.card-header-elements>*+*,.card-header-elements+.card-title-elements,.card-title-elements>*+*,.card-title-elements+.card-header-elements,.card-title-elements+.card-title-elements {
    margin-left: .25rem
}

[dir=rtl] .card-header-elements+.card-header-elements,[dir=rtl] .card-header-elements>*+*,[dir=rtl] .card-header-elements+.card-title-elements,[dir=rtl] .card-title-elements>*+*,[dir=rtl] .card-title-elements+.card-header-elements,[dir=rtl] .card-title-elements+.card-title-elements {
    margin-left: 0;
    margin-right: .25rem
}

.card-title:not(h1):not(.h1):not(h2):not(.h2):not(h3):not(.h3):not(h4):not(.h4):not(h5):not(.h5):not(h6):not(.h6) {
    color: #6f6b7d
}

.card-img-left {
    border-top-left-radius: .375rem;
    border-bottom-left-radius: .375rem;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

@media(max-width: 767.98px) {
    .card-img-left {
        border-top-left-radius:.375rem;
        border-top-right-radius: .375rem;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }
}

.card-img-right {
    border-top-right-radius: .375rem;
    border-bottom-right-radius: .375rem;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

@media(max-width: 767.98px) {
    .card-img-right {
        border-bottom-right-radius:.375rem;
        border-bottom-left-radius: .375rem;
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }
}

.card>.list-group .list-group-item {
    padding-left: 1.5rem;
    padding-right: 1.5rem
}

html:not([dir=rtl]) .card .card-separator {
    border-right: 1px solid #dbdade
}

[dir=rtl] .card .card-separator {
    border-left: 1px solid #dbdade
}

@media(max-width: 991.98px) {
    .card .card-widget-separator-wrapper .card-widget-separator .card-widget-2.border-end {
        border-right:none !important;
        border-left: none !important
    }
}

@media(max-width: 575.98px) {
    .card .card-widget-separator-wrapper .card-widget-separator .card-widget-1.border-end,.card .card-widget-separator-wrapper .card-widget-separator .card-widget-2.border-end,.card .card-widget-separator-wrapper .card-widget-separator .card-widget-3.border-end {
        border-right:none !important;
        border-left: none !important;
        border-bottom: 1px solid #dbdade
    }
}

@media(max-width: 767.98px) {
    .card .card-separator {
        border-bottom:1px solid #dbdade;
        padding-bottom: 1.5rem
    }

    html:not([dir=rtl]) .card .card-separator {
        border-right-width: 0 !important
    }

    [dir=rtl] .card .card-separator {
        border-left-width: 0 !important
    }
}

[dir=rtl] .card-link+.card-link {
    margin-right: 1.5rem;
    margin-left: 0
}

[dir=rtl] .card-action .card-header .card-action-title {
    margin-left: .5rem;
    margin-right: 0
}

[dir=rtl] .card-action .card-header .card-action-element,[dir=rtl] .card-action .card-header .card-action-element-toggle {
    left: 1.5rem;
    right: auto
}

@media(min-width: 576px) {
    [dir=rtl] .card-group>.card {
        border:0 solid #dbdade;
        border-radius: var(--bs-border-radius)
    }

    [dir=rtl] .card-group>.card .card-img-top,[dir=rtl] .card-group>.card .card-header:first-child {
        border-top-left-radius: .375rem;
        border-top-right-radius: .375rem
    }

    [dir=rtl] .card-group>.card .card-img-bottom,[dir=rtl] .card-group>.card .card-footer:last-child {
        border-bottom-right-radius: .375rem;
        border-bottom-left-radius: .375rem
    }

    [dir=rtl] .card-group>.card+.card {
        border-right: 0
    }

    [dir=rtl] .card-group>.card:not(:first-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    [dir=rtl] .card-group>.card:not(:first-child) .card-img-top,[dir=rtl] .card-group>.card:not(:first-child) .card-header {
        border-top-right-radius: 0
    }

    [dir=rtl] .card-group>.card:not(:first-child) .card-img-bottom,[dir=rtl] .card-group>.card:not(:first-child) .card-footer {
        border-bottom-right-radius: 0
    }

    [dir=rtl] .card-group>.card:not(:last-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    [dir=rtl] .card-group>.card:not(:last-child) .card-img-top,[dir=rtl] .card-group>.card:not(:last-child) .card-header {
        border-top-left-radius: 0
    }

    [dir=rtl] .card-group>.card:not(:last-child) .card-img-bottom,[dir=rtl] .card-group>.card:not(:last-child) .card-footer {
        border-bottom-left-radius: 0
    }
}

.accordion-arrow-left .accordion-button.collapsed:focus {
    box-shadow: none
}

.accordion-arrow-left .accordion-item {
    border: 0
}

.accordion-arrow-left .accordion-button {
    padding: var(--bs-accordion-btn-padding-y) 0
}

.accordion-arrow-left .accordion-button::after {
    content: "";
    display: none
}

.accordion-arrow-left .accordion-button:not(.collapsed) {
    color: var(--bs-accordion-active-color);
    background-color: var(--bs-accordion-active-bg);
    box-shadow: none
}

.accordion-arrow-left .accordion-button:not(.collapsed)::before {
    background-image: var(--bs-accordion-btn-active-icon);
    transform: var(--bs-accordion-btn-icon-transform)
}

.accordion-arrow-left .accordion-button:not(.collapsed)::after {
    background-image: none;
    transform: none
}

.accordion-arrow-left .accordion-button::before {
    flex-shrink: 0;
    width: var(--bs-accordion-btn-icon-width);
    height: var(--bs-accordion-btn-icon-width);
    margin-left: 0;
    margin-top: .75rem;
    margin-right: .9rem;
    content: "";
    background-image: var(--bs-accordion-btn-icon);
    background-repeat: no-repeat;
    background-size: var(--bs-accordion-btn-icon-width);
    transition: var(--bs-accordion-btn-icon-transition)
}

@media(prefers-reduced-motion: reduce) {
    .accordion-arrow-left .accordion-button::before {
        transition: none
    }
}

.accordion.accordion-without-arrow .accordion-button::after {
    background-image: none !important
}

.accordion-button {
    font-weight: inherit;
    align-items: unset;
    border-top-left-radius: .375rem;
    border-top-right-radius: .375rem
}

.accordion-button.collapsed {
    border-radius: .375rem
}

.accordion.accordion-bordered .card {
    box-shadow: none
}

.accordion:not(.accordion-bordered)>.card:not(:last-of-type) {
    border-radius: .375rem !important;
    margin-bottom: .5rem
}

.accordion:not(.accordion-bordered)>.card.accordion-item {
    box-shadow: 0 .125rem .25rem rgba(165,163,174,.3)
}

.accordion:not(.accordion-bordered)>.card.accordion-item.active {
    box-shadow: 0 .25rem 1.125rem rgba(75,70,92,.1)
}

.accordion-header+.accordion-collapse .accordion-body {
    padding-top: 0
}

.accordion.accordion-bordered .accordion-item {
    border-color: #dbdade !important
}

.accordion.accordion-bordered .accordion-item:not(:first-of-type) {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.accordion.accordion-bordered .accordion-item:not(:last-of-type) {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

[dir=rtl] .accordion-arrow-left .accordion-button::before {
    margin-left: 1.1rem;
    margin-right: 0;
    transform: rotate(180deg)
}

[dir=rtl] .accordion-arrow-left .accordion-button:not(.collapsed)::before {
    transform: rotate(90deg)
}

[dir=rtl] .accordion-button {
    text-align: right
}

[dir=rtl] .accordion-button::after {
    margin-left: 0;
    margin-right: auto;
    transform: rotate(180deg)
}

[dir=rtl] .accordion-button:not(.collapsed)::after {
    transform: rotate(90deg)
}

.close:focus {
    outline: 0
}

[dir=rtl] .close {
    float: left
}

.toast.bs-toast {
    z-index: 1095
}

.toast-header {
    border-bottom: 1px solid rgba(219,218,222,.3)
}

.toast-header .btn-close {
    background-image: url("data:image/svg+xml,%3Csvg width=\'19\' height=\'18\' viewBox=\'0 0 19 18\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'%23a5a3ae\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'%23a5a3ae\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E%0A");
    padding-top: 0;
    padding-bottom: 0;
    margin-left: .875rem;
    background-size: .875rem
}

.toast-body {
    font-size: .8125rem;
    padding-top: .684rem;
    padding-bottom: .684rem
}

.toast-container {
    --bs-toast-zindex: 9
}

[dir=rtl] .toast-header .btn-close {
    margin-left: -0.375rem;
    margin-right: .875rem
}

.toast-ex {
    position: fixed;
    top: 4.1rem;
    right: .5rem
}

[dir=rtl] .toast-ex {
    left: .5rem;
    right: auto
}

.toast-placement-ex {
    position: fixed
}

.carousel .carousel-item.active h1,.carousel .carousel-item.active .h1,.carousel .carousel-item.active h2,.carousel .carousel-item.active .h2,.carousel .carousel-item.active h3,.carousel .carousel-item.active .h3,.carousel .carousel-item.active h4,.carousel .carousel-item.active .h4,.carousel .carousel-item.active h5,.carousel .carousel-item.active .h5,.carousel .carousel-item.active h6,.carousel .carousel-item.active .h6,.carousel .carousel-item.carousel-item-start h1,.carousel .carousel-item.carousel-item-start .h1,.carousel .carousel-item.carousel-item-start h2,.carousel .carousel-item.carousel-item-start .h2,.carousel .carousel-item.carousel-item-start h3,.carousel .carousel-item.carousel-item-start .h3,.carousel .carousel-item.carousel-item-start h4,.carousel .carousel-item.carousel-item-start .h4,.carousel .carousel-item.carousel-item-start h5,.carousel .carousel-item.carousel-item-start .h5,.carousel .carousel-item.carousel-item-start h6,.carousel .carousel-item.carousel-item-start .h6 {
    color: #fff
}

.carousel.carousel-dark .carousel-item h1,.carousel.carousel-dark .carousel-item .h1,.carousel.carousel-dark .carousel-item h2,.carousel.carousel-dark .carousel-item .h2,.carousel.carousel-dark .carousel-item h3,.carousel.carousel-dark .carousel-item .h3,.carousel.carousel-dark .carousel-item h4,.carousel.carousel-dark .carousel-item .h4,.carousel.carousel-dark .carousel-item h5,.carousel.carousel-dark .carousel-item .h5,.carousel.carousel-dark .carousel-item h6,.carousel.carousel-dark .carousel-item .h6,.carousel.carousel-dark .carousel-item.active h1,.carousel.carousel-dark .carousel-item.active .h1,.carousel.carousel-dark .carousel-item.active h2,.carousel.carousel-dark .carousel-item.active .h2,.carousel.carousel-dark .carousel-item.active h3,.carousel.carousel-dark .carousel-item.active .h3,.carousel.carousel-dark .carousel-item.active h4,.carousel.carousel-dark .carousel-item.active .h4,.carousel.carousel-dark .carousel-item.active h5,.carousel.carousel-dark .carousel-item.active .h5,.carousel.carousel-dark .carousel-item.active h6,.carousel.carousel-dark .carousel-item.active .h6,.carousel.carousel-dark .carousel-item.carousel-item-start h1,.carousel.carousel-dark .carousel-item.carousel-item-start .h1,.carousel.carousel-dark .carousel-item.carousel-item-start h2,.carousel.carousel-dark .carousel-item.carousel-item-start .h2,.carousel.carousel-dark .carousel-item.carousel-item-start h3,.carousel.carousel-dark .carousel-item.carousel-item-start .h3,.carousel.carousel-dark .carousel-item.carousel-item-start h4,.carousel.carousel-dark .carousel-item.carousel-item-start .h4,.carousel.carousel-dark .carousel-item.carousel-item-start h5,.carousel.carousel-dark .carousel-item.carousel-item-start .h5,.carousel.carousel-dark .carousel-item.carousel-item-start h6,.carousel.carousel-dark .carousel-item.carousel-item-start .h6 {
    color: #4b465c
}

.carousel-indicators {
    margin-bottom: 1.06rem
}

.carousel-indicators [data-bs-target] {
    border-radius: .375rem
}

.spinner-border-lg {
    width: 3rem;
    height: 3rem;
    border-width: .3em
}

.spinner-grow-lg {
    width: 3rem;
    height: 3rem;
    border-width: .3em
}

.btn .spinner-border,.btn .spinner-grow {
    position: relative;
    top: -0.0625rem;
    height: 1em;
    width: 1em
}

.btn .spinner-border {
    border-width: .15em
}

@-webkit-keyframes spinner-border-rtl {
    to {
        transform: rotate(-360deg)
    }
}

@-moz-keyframes spinner-border-rtl {
    to {
        transform: rotate(-360deg)
    }
}

@keyframes spinner-border-rtl {
    to {
        transform: rotate(-360deg)
    }
}

[dir=rtl] .spinner-border {
    animation-name: spinner-border-rtl
}

.offcanvas {
    box-shadow: 0 .31rem 1.25rem 0 rgba(75,70,92,.4)
}

.offcanvas .offcanvas-header .btn-close {
    background-color: #e2e1e5;
    padding: .44rem;
    margin-right: 0;
    background-image: url("data:image/svg+xml,%3Csvg width=\'19\' height=\'18\' viewBox=\'0 0 19 18\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'%235d596c\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M14 4.5L5 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'%235d596c\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3Cpath d=\'M5 4.5L14 13.5\' stroke=\'white\' stroke-opacity=\'0.2\' stroke-width=\'1.75\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E%0A")
}

[dir=rtl] .offcanvas-start {
    right: 0;
    transform: translateX(100%)
}

[dir=rtl] .offcanvas-end {
    right: auto;
    left: 0;
    transform: translateX(-100%)
}

.align-baseline {
    vertical-align: baseline !important
}

.align-top {
    vertical-align: top !important
}

.align-middle {
    vertical-align: middle !important
}

.align-bottom {
    vertical-align: bottom !important
}

.align-text-bottom {
    vertical-align: text-bottom !important
}

.align-text-top {
    vertical-align: text-top !important
}

.object-fit-contain {
    object-fit: contain !important
}

.object-fit-cover {
    object-fit: cover !important
}

.object-fit-fill {
    object-fit: fill !important
}

.object-fit-scale {
    object-fit: scale-down !important
}

.object-fit-none {
    object-fit: none !important
}

.opacity-0 {
    opacity: 0 !important
}

.opacity-25 {
    opacity: .25 !important
}

.opacity-50 {
    opacity: .5 !important
}

.opacity-75 {
    opacity: .75 !important
}

.opacity-100 {
    opacity: 1 !important
}

.overflow-auto {
    overflow: auto !important
}

.overflow-hidden {
    overflow: hidden !important
}

.overflow-visible {
    overflow: visible !important
}

.overflow-scroll {
    overflow: scroll !important
}

.d-inline {
    display: inline !important
}

.d-inline-block {
    display: inline-block !important
}

.d-block {
    display: block !important
}

.d-grid {
    display: grid !important
}

.d-table {
    display: table !important
}

.d-table-row {
    display: table-row !important
}

.d-table-cell {
    display: table-cell !important
}

.d-flex {
    display: flex !important
}

.d-inline-flex {
    display: inline-flex !important
}

.d-none {
    display: none !important
}

.shadow {
    box-shadow: 0 .25rem 1rem rgba(165,163,174,.45) !important
}

.shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(165,163,174,.3) !important
}

.shadow-lg {
    box-shadow: 0 .625rem 1.25rem rgba(165,163,174,.4) !important
}

.shadow-none {
    box-shadow: none !important
}

.position-static {
    position: static !important
}

.position-relative {
    position: relative !important
}

.position-absolute {
    position: absolute !important
}

.position-fixed {
    position: fixed !important
}

.position-sticky {
    position: sticky !important
}

.top-0 {
    top: 0 !important
}

.top-50 {
    top: 50% !important
}

.top-100 {
    top: 100% !important
}

.bottom-0 {
    bottom: 0 !important
}

.bottom-50 {
    bottom: 50% !important
}

.bottom-100 {
    bottom: 100% !important
}

.border {
    border: 1px solid #dbdade !important
}

.border-0 {
    border: 0 !important
}

.border-solid {
    border-style: solid !important
}

.border-dashed {
    border-style: dashed !important
}

.border-none {
    border-style: none !important
}

.border-top {
    border-top: 1px solid #dbdade !important
}

.border-top-0 {
    border-top: 0 !important
}

.border-bottom {
    border-bottom: 1px solid #dbdade !important
}

.border-bottom-0 {
    border-bottom: 0 !important
}

.border-primary {
    border-color: #7367f0 !important
}

.border-secondary {
    border-color: #a8aaae !important
}

.border-success {
    border-color: #28c76f !important
}

.border-info {
    border-color: #00cfe8 !important
}

.border-warning {
    border-color: #ff9f43 !important
}

.border-danger {
    border-color: #ea5455 !important
}

.border-light {
    border-color: rgba(75,70,92,.05) !important
}

.border-dark {
    border-color: #4b4b4b !important
}

.border-gray {
    border-color: rgba(75,70,92,.05) !important
}

.border-white {
    border-color: #fff !important
}

.border-transparent {
    border-color: rgba(0,0,0,0) !important
}

.border-label-primary {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-primary-rgb), var(--bs-border-opacity)) !important
}

.border-label-secondary {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-secondary-rgb), var(--bs-border-opacity)) !important
}

.border-label-success {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important
}

.border-label-info {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-info-rgb), var(--bs-border-opacity)) !important
}

.border-label-warning {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-warning-rgb), var(--bs-border-opacity)) !important
}

.border-label-danger {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-danger-rgb), var(--bs-border-opacity)) !important
}

.border-label-light {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-light-rgb), var(--bs-border-opacity)) !important
}

.border-label-dark {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-dark-rgb), var(--bs-border-opacity)) !important
}

.border-label-gray {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-gray-rgb), var(--bs-border-opacity)) !important
}

.border-label-black {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-black-rgb), var(--bs-border-opacity)) !important
}

.border-label-white {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-white-rgb), var(--bs-border-opacity)) !important
}

.border-1 {
    border-width: 1px !important
}

.border-2 {
    border-width: 2px !important
}

.border-3 {
    border-width: 3px !important
}

.border-4 {
    border-width: 4px !important
}

.border-5 {
    border-width: 5px !important
}

.border-opacity-10 {
    --bs-border-opacity: 0.1
}

.border-opacity-25 {
    --bs-border-opacity: 0.25
}

.border-opacity-50 {
    --bs-border-opacity: 0.5
}

.border-opacity-75 {
    --bs-border-opacity: 0.75
}

.border-opacity-100 {
    --bs-border-opacity: 1
}

.border-top-dashed {
    border-top-style: dashed !important
}

.border-bottom-dashed {
    border-bottom-style: dashed !important
}

.w-px-14 {
    width: 14px !important
}

.w-px-18 {
    width: 18px !important
}

.w-px-20 {
    width: 20px !important
}

.w-px-30 {
    width: 30px !important
}

.w-px-40 {
    width: 40px !important
}

.w-px-50 {
    width: 50px !important
}

.w-px-75 {
    width: 75px !important
}

.w-px-100 {
    width: 100px !important
}

.w-px-150 {
    width: 150px !important
}

.w-px-200 {
    width: 200px !important
}

.w-px-250 {
    width: 250px !important
}

.w-px-300 {
    width: 300px !important
}

.w-px-350 {
    width: 350px !important
}

.w-px-400 {
    width: 400px !important
}

.w-px-500 {
    width: 500px !important
}

.w-px-600 {
    width: 600px !important
}

.w-px-700 {
    width: 700px !important
}

.w-px-800 {
    width: 800px !important
}

.w-auto {
    width: auto !important
}

.w-20 {
    width: 20% !important
}

.w-25 {
    width: 25% !important
}

.w-50 {
    width: 50% !important
}

.w-60 {
    width: 60% !important
}

.w-75 {
    width: 75% !important
}

.w-100 {
    width: 100% !important
}

.mw-100 {
    max-width: 100% !important
}

.vw-100 {
    width: 100vw !important
}

.min-vw-100 {
    min-width: 100vw !important
}

.h-px-14 {
    height: 14px !important
}

.h-px-18 {
    height: 18px !important
}

.h-px-20 {
    height: 20px !important
}

.h-px-30 {
    height: 30px !important
}

.h-px-40 {
    height: 40px !important
}

.h-px-50 {
    height: 50px !important
}

.h-px-75 {
    height: 75px !important
}

.h-px-100 {
    height: 100px !important
}

.h-px-150 {
    height: 150px !important
}

.h-px-200 {
    height: 200px !important
}

.h-px-250 {
    height: 250px !important
}

.h-px-300 {
    height: 300px !important
}

.h-px-350 {
    height: 350px !important
}

.h-px-400 {
    height: 400px !important
}

.h-px-500 {
    height: 500px !important
}

.h-px-600 {
    height: 600px !important
}

.h-px-700 {
    height: 700px !important
}

.h-px-800 {
    height: 800px !important
}

.h-auto {
    height: auto !important
}

.h-25 {
    height: 25% !important
}

.h-50 {
    height: 50% !important
}

.h-75 {
    height: 75% !important
}

.h-100 {
    height: 100% !important
}

.mh-100 {
    max-height: 100% !important
}

.vh-100 {
    height: 100vh !important
}

.min-vh-100 {
    min-height: 100vh !important
}

.flex-fill {
    flex: 1 1 auto !important
}

.flex-row {
    flex-direction: row !important
}

.flex-column {
    flex-direction: column !important
}

.flex-row-reverse {
    flex-direction: row-reverse !important
}

.flex-column-reverse {
    flex-direction: column-reverse !important
}

.flex-grow-0 {
    flex-grow: 0 !important
}

.flex-grow-1 {
    flex-grow: 1 !important
}

.flex-shrink-0 {
    flex-shrink: 0 !important
}

.flex-shrink-1 {
    flex-shrink: 1 !important
}

.flex-wrap {
    flex-wrap: wrap !important
}

.flex-nowrap {
    flex-wrap: nowrap !important
}

.flex-wrap-reverse {
    flex-wrap: wrap-reverse !important
}

.justify-content-start {
    justify-content: flex-start !important
}

.justify-content-end {
    justify-content: flex-end !important
}

.justify-content-center {
    justify-content: center !important
}

.justify-content-between {
    justify-content: space-between !important
}

.justify-content-around {
    justify-content: space-around !important
}

.justify-content-evenly {
    justify-content: space-evenly !important
}

.align-items-start {
    align-items: flex-start !important
}

.align-items-end {
    align-items: flex-end !important
}

.align-items-center {
    align-items: center !important
}

.align-items-baseline {
    align-items: baseline !important
}

.align-items-stretch {
    align-items: stretch !important
}

.align-content-start {
    align-content: flex-start !important
}

.align-content-end {
    align-content: flex-end !important
}

.align-content-center {
    align-content: center !important
}

.align-content-between {
    align-content: space-between !important
}

.align-content-around {
    align-content: space-around !important
}

.align-content-stretch {
    align-content: stretch !important
}

.align-self-auto {
    align-self: auto !important
}

.align-self-start {
    align-self: flex-start !important
}

.align-self-end {
    align-self: flex-end !important
}

.align-self-center {
    align-self: center !important
}

.align-self-baseline {
    align-self: baseline !important
}

.align-self-stretch {
    align-self: stretch !important
}

.order-first {
    order: -1 !important
}

.order-0 {
    order: 0 !important
}

.order-1 {
    order: 1 !important
}

.order-2 {
    order: 2 !important
}

.order-3 {
    order: 3 !important
}

.order-4 {
    order: 4 !important
}

.order-5 {
    order: 5 !important
}

.order-last {
    order: 6 !important
}

.m-0 {
    margin: 0 !important
}

.m-1 {
    margin: .25rem !important
}

.m-2 {
    margin: .5rem !important
}

.m-3 {
    margin: 1rem !important
}

.m-4 {
    margin: 1.5rem !important
}

.m-5 {
    margin: 3rem !important
}

.m-auto {
    margin: auto !important
}

.mx-0 {
    margin-right: 0 !important;
    margin-left: 0 !important
}

.mx-1 {
    margin-right: .25rem !important;
    margin-left: .25rem !important
}

.mx-2 {
    margin-right: .5rem !important;
    margin-left: .5rem !important
}

.mx-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important
}

.mx-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important
}

.mx-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important
}

.mx-auto {
    margin-right: auto !important;
    margin-left: auto !important
}

.my-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important
}

.my-1 {
    margin-top: .25rem !important;
    margin-bottom: .25rem !important
}

.my-2 {
    margin-top: .5rem !important;
    margin-bottom: .5rem !important
}

.my-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important
}

.my-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important
}

.my-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important
}

.my-auto {
    margin-top: auto !important;
    margin-bottom: auto !important
}

.mt-0 {
    margin-top: 0 !important
}

.mt-1 {
    margin-top: .25rem !important
}

.mt-2 {
    margin-top: .5rem !important
}

.mt-3 {
    margin-top: 1rem !important
}

.mt-4 {
    margin-top: 1.5rem !important
}

.mt-5 {
    margin-top: 3rem !important
}

.mt-auto {
    margin-top: auto !important
}

.mb-0 {
    margin-bottom: 0 !important
}

.mb-1 {
    margin-bottom: .25rem !important
}

.mb-2 {
    margin-bottom: .5rem !important
}

.mb-3 {
    margin-bottom: 1rem !important
}

.mb-4 {
    margin-bottom: 1.5rem !important
}

.mb-5 {
    margin-bottom: 3rem !important
}

.mb-auto {
    margin-bottom: auto !important
}

.m-n1 {
    margin: -0.25rem !important
}

.m-n2 {
    margin: -0.5rem !important
}

.m-n3 {
    margin: -1rem !important
}

.m-n4 {
    margin: -1.5rem !important
}

.m-n5 {
    margin: -3rem !important
}

.mx-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important
}

.mx-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important
}

.mx-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important
}

.mx-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important
}

.mx-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important
}

.my-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important
}

.my-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important
}

.my-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important
}

.my-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important
}

.my-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important
}

.mt-n1 {
    margin-top: -0.25rem !important
}

.mt-n2 {
    margin-top: -0.5rem !important
}

.mt-n3 {
    margin-top: -1rem !important
}

.mt-n4 {
    margin-top: -1.5rem !important
}

.mt-n5 {
    margin-top: -3rem !important
}

.mb-n1 {
    margin-bottom: -0.25rem !important
}

.mb-n2 {
    margin-bottom: -0.5rem !important
}

.mb-n3 {
    margin-bottom: -1rem !important
}

.mb-n4 {
    margin-bottom: -1.5rem !important
}

.mb-n5 {
    margin-bottom: -3rem !important
}

.p-0 {
    padding: 0 !important
}

.p-1 {
    padding: .25rem !important
}

.p-2 {
    padding: .5rem !important
}

.p-3 {
    padding: 1rem !important
}

.p-4 {
    padding: 1.5rem !important
}

.p-5 {
    padding: 3rem !important
}

.px-0 {
    padding-right: 0 !important;
    padding-left: 0 !important
}

.px-1 {
    padding-right: .25rem !important;
    padding-left: .25rem !important
}

.px-2 {
    padding-right: .5rem !important;
    padding-left: .5rem !important
}

.px-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important
}

.px-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important
}

.px-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important
}

.py-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important
}

.py-1 {
    padding-top: .25rem !important;
    padding-bottom: .25rem !important
}

.py-2 {
    padding-top: .5rem !important;
    padding-bottom: .5rem !important
}

.py-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important
}

.py-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important
}

.py-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important
}

.pt-0 {
    padding-top: 0 !important
}

.pt-1 {
    padding-top: .25rem !important
}

.pt-2 {
    padding-top: .5rem !important
}

.pt-3 {
    padding-top: 1rem !important
}

.pt-4 {
    padding-top: 1.5rem !important
}

.pt-5 {
    padding-top: 3rem !important
}

.pb-0 {
    padding-bottom: 0 !important
}

.pb-1 {
    padding-bottom: .25rem !important
}

.pb-2 {
    padding-bottom: .5rem !important
}

.pb-3 {
    padding-bottom: 1rem !important
}

.pb-4 {
    padding-bottom: 1.5rem !important
}

.pb-5 {
    padding-bottom: 3rem !important
}

.gap-0 {
    gap: 0 !important
}

.gap-1 {
    gap: .25rem !important
}

.gap-2 {
    gap: .5rem !important
}

.gap-3 {
    gap: 1rem !important
}

.gap-4 {
    gap: 1.5rem !important
}

.gap-5 {
    gap: 3rem !important
}

.row-gap-0 {
    row-gap: 0 !important
}

.row-gap-1 {
    row-gap: .25rem !important
}

.row-gap-2 {
    row-gap: .5rem !important
}

.row-gap-3 {
    row-gap: 1rem !important
}

.row-gap-4 {
    row-gap: 1.5rem !important
}

.row-gap-5 {
    row-gap: 3rem !important
}

.column-gap-0 {
    column-gap: 0 !important
}

.column-gap-1 {
    column-gap: .25rem !important
}

.column-gap-2 {
    column-gap: .5rem !important
}

.column-gap-3 {
    column-gap: 1rem !important
}

.column-gap-4 {
    column-gap: 1.5rem !important
}

.column-gap-5 {
    column-gap: 3rem !important
}

.font-monospace {
    font-family: var(--bs-font-monospace) !important
}

.fs-1 {
    font-size: calc(1.3625rem + 1.35vw) !important
}

.fs-2 {
    font-size: calc(1.325rem + 0.9vw) !important
}

.fs-3 {
    font-size: calc(1.2875rem + 0.45vw) !important
}

.fs-4 {
    font-size: calc(1.2625rem + 0.15vw) !important
}

.fs-5 {
    font-size: 1.125rem !important
}

.fs-6 {
    font-size: 0.9375rem !important
}

.fs-tiny {
    font-size: 70% !important
}

.fs-big {
    font-size: 112% !important
}

.fs-large {
    font-size: 150% !important
}

.fs-xlarge {
    font-size: 170% !important
}

.fst-italic {
    font-style: italic !important
}

.fst-normal {
    font-style: normal !important
}

.fw-lighter {
    font-weight: lighter !important
}

.fw-light {
    font-weight: 300 !important
}

.fw-normal {
    font-weight: 400 !important
}

.fw-medium {
    font-weight: 500 !important
}

.fw-semibold {
    font-weight: 600 !important
}

.fw-bold {
    font-weight: 700 !important
}

.fw-bolder {
    font-weight: bolder !important
}

.lh-1 {
    line-height: 1 !important
}

.lh-inherit {
    line-height: inherit !important
}

.lh-sm {
    line-height: 1 !important
}

.lh-base {
    line-height: 1.47 !important
}

.lh-lg {
    line-height: 1.375 !important
}

.text-decoration-none {
    text-decoration: none !important
}

.text-decoration-underline {
    text-decoration: underline !important
}

.text-decoration-line-through {
    text-decoration: line-through !important
}

.text-none {
    text-transform: none !important
}

.text-lowercase {
    text-transform: lowercase !important
}

.text-uppercase {
    text-transform: uppercase !important
}

.text-capitalize {
    text-transform: capitalize !important
}

.text-wrap {
    white-space: normal !important
}

.text-nowrap {
    white-space: nowrap !important
}

.text-break {
    word-wrap: break-word !important;
    word-break: break-word !important
}

.text-primary {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important
}

.text-secondary {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important
}

.text-success {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-success-rgb), var(--bs-text-opacity)) !important
}

.text-info {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-info-rgb), var(--bs-text-opacity)) !important
}

.text-warning {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important
}

.text-danger {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-danger-rgb), var(--bs-text-opacity)) !important
}

.text-light {
    --bs-text-opacity: 1;
    color: #b7b5be !important
}

.text-dark {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important
}

.text-gray {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-gray-rgb), var(--bs-text-opacity)) !important
}

.text-black {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-black-rgb), var(--bs-text-opacity)) !important
}

.text-white {
    --bs-text-opacity: 1;
    color: #fff !important
}

.text-body {
    --bs-text-opacity: 1;
    color: #6f6b7d !important
}

.text-muted {
    --bs-text-opacity: 1;
    color: #a5a3ae !important
}

.text-black-50 {
    --bs-text-opacity: 1;
    color: rgba(75,70,92,.5) !important
}

.text-white-50 {
    --bs-text-opacity: 1;
    color: rgba(255,255,255,.5) !important
}

.text-heading {
    --bs-text-opacity: 1;
    color: #5d596c !important
}

.text-reset {
    --bs-text-opacity: 1;
    color: inherit !important
}

.text-opacity-25 {
    --bs-text-opacity: 0.25
}

.text-opacity-50 {
    --bs-text-opacity: 0.5
}

.text-opacity-75 {
    --bs-text-opacity: 0.75
}

.text-opacity-100 {
    --bs-text-opacity: 1
}

.link-opacity-10 {
    --bs-link-opacity: 0.1
}

.link-opacity-10-hover:hover {
    --bs-link-opacity: 0.1
}

.link-opacity-25 {
    --bs-link-opacity: 0.25
}

.link-opacity-25-hover:hover {
    --bs-link-opacity: 0.25
}

.link-opacity-50 {
    --bs-link-opacity: 0.5
}

.link-opacity-50-hover:hover {
    --bs-link-opacity: 0.5
}

.link-opacity-75 {
    --bs-link-opacity: 0.75
}

.link-opacity-75-hover:hover {
    --bs-link-opacity: 0.75
}

.link-opacity-100 {
    --bs-link-opacity: 1
}

.link-opacity-100-hover:hover {
    --bs-link-opacity: 1
}

.link-offset-1 {
    text-underline-offset: .125em !important
}

.link-offset-1-hover:hover {
    text-underline-offset: .125em !important
}

.link-offset-2 {
    text-underline-offset: .25em !important
}

.link-offset-2-hover:hover {
    text-underline-offset: .25em !important
}

.link-offset-3 {
    text-underline-offset: .375em !important
}

.link-offset-3-hover:hover {
    text-underline-offset: .375em !important
}

.link-underline-primary {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-primary-rgb), var(--bs-link-underline-opacity)) !important
}

.link-underline-secondary {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-secondary-rgb), var(--bs-link-underline-opacity)) !important
}

.link-underline-success {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-success-rgb), var(--bs-link-underline-opacity)) !important
}

.link-underline-info {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-info-rgb), var(--bs-link-underline-opacity)) !important
}

.link-underline-warning {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-warning-rgb), var(--bs-link-underline-opacity)) !important
}

.link-underline-danger {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-danger-rgb), var(--bs-link-underline-opacity)) !important
}

.link-underline-light {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-light-rgb), var(--bs-link-underline-opacity)) !important
}

.link-underline-dark {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-dark-rgb), var(--bs-link-underline-opacity)) !important
}

.link-underline-gray {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-gray-rgb), var(--bs-link-underline-opacity)) !important
}

.link-underline {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-link-color-rgb), var(--bs-link-underline-opacity, 1)) !important
}

.link-underline-opacity-0 {
    --bs-link-underline-opacity: 0
}

.link-underline-opacity-0-hover:hover {
    --bs-link-underline-opacity: 0
}

.link-underline-opacity-10 {
    --bs-link-underline-opacity: 0.1
}

.link-underline-opacity-10-hover:hover {
    --bs-link-underline-opacity: 0.1
}

.link-underline-opacity-25 {
    --bs-link-underline-opacity: 0.25
}

.link-underline-opacity-25-hover:hover {
    --bs-link-underline-opacity: 0.25
}

.link-underline-opacity-50 {
    --bs-link-underline-opacity: 0.5
}

.link-underline-opacity-50-hover:hover {
    --bs-link-underline-opacity: 0.5
}

.link-underline-opacity-75 {
    --bs-link-underline-opacity: 0.75
}

.link-underline-opacity-75-hover:hover {
    --bs-link-underline-opacity: 0.75
}

.link-underline-opacity-100 {
    --bs-link-underline-opacity: 1
}

.link-underline-opacity-100-hover:hover {
    --bs-link-underline-opacity: 1
}

.bg-primary {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important
}

.bg-secondary {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important
}

.bg-success {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important
}

.bg-info {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-info-rgb), var(--bs-bg-opacity)) !important
}

.bg-warning {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-warning-rgb), var(--bs-bg-opacity)) !important
}

.bg-danger {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-danger-rgb), var(--bs-bg-opacity)) !important
}

.bg-light {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important
}

.bg-dark {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important
}

.bg-gray {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-gray-rgb), var(--bs-bg-opacity)) !important
}

.bg-black {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-black-rgb), var(--bs-bg-opacity)) !important
}

.bg-white {
    --bs-bg-opacity: 1;
    background-color: #fff !important
}

.bg-body {
    --bs-bg-opacity: 1;
    background-color: #f8f7fa !important
}

.bg-transparent {
    --bs-bg-opacity: 1;
    background-color: rgba(0,0,0,0) !important
}

.bg-lighter {
    --bs-bg-opacity: 1;
    background-color: rgba(75,70,92,.03) !important
}

.bg-lightest {
    --bs-bg-opacity: 1;
    background-color: rgba(75,70,92,.015) !important
}

.bg-opacity-10 {
    --bs-bg-opacity: 0.1
}

.bg-opacity-25 {
    --bs-bg-opacity: 0.25
}

.bg-opacity-50 {
    --bs-bg-opacity: 0.5
}

.bg-opacity-75 {
    --bs-bg-opacity: 0.75
}

.bg-opacity-100 {
    --bs-bg-opacity: 1
}

.bg-primary-subtle {
    background-color: var(--bs-primary-bg-subtle) !important
}

.bg-secondary-subtle {
    background-color: var(--bs-secondary-bg-subtle) !important
}

.bg-success-subtle {
    background-color: var(--bs-success-bg-subtle) !important
}

.bg-info-subtle {
    background-color: var(--bs-info-bg-subtle) !important
}

.bg-warning-subtle {
    background-color: var(--bs-warning-bg-subtle) !important
}

.bg-danger-subtle {
    background-color: var(--bs-danger-bg-subtle) !important
}

.bg-light-subtle {
    background-color: var(--bs-light-bg-subtle) !important
}

.bg-dark-subtle {
    background-color: var(--bs-dark-bg-subtle) !important
}

.bg-gradient {
    background-image: var(--bs-gradient) !important
}

.user-select-all {
    user-select: all !important
}

.user-select-auto {
    user-select: auto !important
}

.user-select-none {
    user-select: none !important
}

.pe-none {
    pointer-events: none !important
}

.pe-auto {
    pointer-events: auto !important
}

.rounded {
    border-radius: .375rem !important
}

.rounded-0 {
    border-radius: 0 !important
}

.rounded-1 {
    border-radius: .25rem !important
}

.rounded-2 {
    border-radius: .375rem !important
}

.rounded-3 {
    border-radius: .5rem !important
}

.rounded-circle {
    border-radius: 50% !important
}

.rounded-pill {
    border-radius: 50rem !important
}

.rounded-top {
    border-top-left-radius: .375rem !important;
    border-top-right-radius: .375rem !important
}

.rounded-bottom {
    border-bottom-right-radius: .375rem !important;
    border-bottom-left-radius: .375rem !important
}

.visible {
    visibility: visible !important
}

.invisible {
    visibility: hidden !important
}

.z-n1 {
    z-index: -1 !important
}

.z-0 {
    z-index: 0 !important
}

.z-1 {
    z-index: 1 !important
}

.z-2 {
    z-index: 2 !important
}

.z-3 {
    z-index: 3 !important
}

.z-4 {
    z-index: 4 !important
}

.z-5 {
    z-index: 5 !important
}

.cursor-pointer {
    cursor: pointer !important
}

.cursor-move {
    cursor: move !important
}

.cursor-grab {
    cursor: grab !important
}

@media(min-width: 576px) {
    .object-fit-sm-contain {
        object-fit:contain !important
    }

    .object-fit-sm-cover {
        object-fit: cover !important
    }

    .object-fit-sm-fill {
        object-fit: fill !important
    }

    .object-fit-sm-scale {
        object-fit: scale-down !important
    }

    .object-fit-sm-none {
        object-fit: none !important
    }

    .d-sm-inline {
        display: inline !important
    }

    .d-sm-inline-block {
        display: inline-block !important
    }

    .d-sm-block {
        display: block !important
    }

    .d-sm-grid {
        display: grid !important
    }

    .d-sm-table {
        display: table !important
    }

    .d-sm-table-row {
        display: table-row !important
    }

    .d-sm-table-cell {
        display: table-cell !important
    }

    .d-sm-flex {
        display: flex !important
    }

    .d-sm-inline-flex {
        display: inline-flex !important
    }

    .d-sm-none {
        display: none !important
    }

    .border-sm-solid {
        border-style: solid !important
    }

    .border-sm-dashed {
        border-style: dashed !important
    }

    .border-sm-none {
        border-style: none !important
    }

    .flex-sm-fill {
        flex: 1 1 auto !important
    }

    .flex-sm-row {
        flex-direction: row !important
    }

    .flex-sm-column {
        flex-direction: column !important
    }

    .flex-sm-row-reverse {
        flex-direction: row-reverse !important
    }

    .flex-sm-column-reverse {
        flex-direction: column-reverse !important
    }

    .flex-sm-grow-0 {
        flex-grow: 0 !important
    }

    .flex-sm-grow-1 {
        flex-grow: 1 !important
    }

    .flex-sm-shrink-0 {
        flex-shrink: 0 !important
    }

    .flex-sm-shrink-1 {
        flex-shrink: 1 !important
    }

    .flex-sm-wrap {
        flex-wrap: wrap !important
    }

    .flex-sm-nowrap {
        flex-wrap: nowrap !important
    }

    .flex-sm-wrap-reverse {
        flex-wrap: wrap-reverse !important
    }

    .justify-content-sm-start {
        justify-content: flex-start !important
    }

    .justify-content-sm-end {
        justify-content: flex-end !important
    }

    .justify-content-sm-center {
        justify-content: center !important
    }

    .justify-content-sm-between {
        justify-content: space-between !important
    }

    .justify-content-sm-around {
        justify-content: space-around !important
    }

    .justify-content-sm-evenly {
        justify-content: space-evenly !important
    }

    .align-items-sm-start {
        align-items: flex-start !important
    }

    .align-items-sm-end {
        align-items: flex-end !important
    }

    .align-items-sm-center {
        align-items: center !important
    }

    .align-items-sm-baseline {
        align-items: baseline !important
    }

    .align-items-sm-stretch {
        align-items: stretch !important
    }

    .align-content-sm-start {
        align-content: flex-start !important
    }

    .align-content-sm-end {
        align-content: flex-end !important
    }

    .align-content-sm-center {
        align-content: center !important
    }

    .align-content-sm-between {
        align-content: space-between !important
    }

    .align-content-sm-around {
        align-content: space-around !important
    }

    .align-content-sm-stretch {
        align-content: stretch !important
    }

    .align-self-sm-auto {
        align-self: auto !important
    }

    .align-self-sm-start {
        align-self: flex-start !important
    }

    .align-self-sm-end {
        align-self: flex-end !important
    }

    .align-self-sm-center {
        align-self: center !important
    }

    .align-self-sm-baseline {
        align-self: baseline !important
    }

    .align-self-sm-stretch {
        align-self: stretch !important
    }

    .order-sm-first {
        order: -1 !important
    }

    .order-sm-0 {
        order: 0 !important
    }

    .order-sm-1 {
        order: 1 !important
    }

    .order-sm-2 {
        order: 2 !important
    }

    .order-sm-3 {
        order: 3 !important
    }

    .order-sm-4 {
        order: 4 !important
    }

    .order-sm-5 {
        order: 5 !important
    }

    .order-sm-last {
        order: 6 !important
    }

    .m-sm-0 {
        margin: 0 !important
    }

    .m-sm-1 {
        margin: .25rem !important
    }

    .m-sm-2 {
        margin: .5rem !important
    }

    .m-sm-3 {
        margin: 1rem !important
    }

    .m-sm-4 {
        margin: 1.5rem !important
    }

    .m-sm-5 {
        margin: 3rem !important
    }

    .m-sm-auto {
        margin: auto !important
    }

    .mx-sm-0 {
        margin-right: 0 !important;
        margin-left: 0 !important
    }

    .mx-sm-1 {
        margin-right: .25rem !important;
        margin-left: .25rem !important
    }

    .mx-sm-2 {
        margin-right: .5rem !important;
        margin-left: .5rem !important
    }

    .mx-sm-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important
    }

    .mx-sm-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important
    }

    .mx-sm-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important
    }

    .mx-sm-auto {
        margin-right: auto !important;
        margin-left: auto !important
    }

    .my-sm-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important
    }

    .my-sm-1 {
        margin-top: .25rem !important;
        margin-bottom: .25rem !important
    }

    .my-sm-2 {
        margin-top: .5rem !important;
        margin-bottom: .5rem !important
    }

    .my-sm-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important
    }

    .my-sm-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important
    }

    .my-sm-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important
    }

    .my-sm-auto {
        margin-top: auto !important;
        margin-bottom: auto !important
    }

    .mt-sm-0 {
        margin-top: 0 !important
    }

    .mt-sm-1 {
        margin-top: .25rem !important
    }

    .mt-sm-2 {
        margin-top: .5rem !important
    }

    .mt-sm-3 {
        margin-top: 1rem !important
    }

    .mt-sm-4 {
        margin-top: 1.5rem !important
    }

    .mt-sm-5 {
        margin-top: 3rem !important
    }

    .mt-sm-auto {
        margin-top: auto !important
    }

    .mb-sm-0 {
        margin-bottom: 0 !important
    }

    .mb-sm-1 {
        margin-bottom: .25rem !important
    }

    .mb-sm-2 {
        margin-bottom: .5rem !important
    }

    .mb-sm-3 {
        margin-bottom: 1rem !important
    }

    .mb-sm-4 {
        margin-bottom: 1.5rem !important
    }

    .mb-sm-5 {
        margin-bottom: 3rem !important
    }

    .mb-sm-auto {
        margin-bottom: auto !important
    }

    .m-sm-n1 {
        margin: -0.25rem !important
    }

    .m-sm-n2 {
        margin: -0.5rem !important
    }

    .m-sm-n3 {
        margin: -1rem !important
    }

    .m-sm-n4 {
        margin: -1.5rem !important
    }

    .m-sm-n5 {
        margin: -3rem !important
    }

    .mx-sm-n1 {
        margin-right: -0.25rem !important;
        margin-left: -0.25rem !important
    }

    .mx-sm-n2 {
        margin-right: -0.5rem !important;
        margin-left: -0.5rem !important
    }

    .mx-sm-n3 {
        margin-right: -1rem !important;
        margin-left: -1rem !important
    }

    .mx-sm-n4 {
        margin-right: -1.5rem !important;
        margin-left: -1.5rem !important
    }

    .mx-sm-n5 {
        margin-right: -3rem !important;
        margin-left: -3rem !important
    }

    .my-sm-n1 {
        margin-top: -0.25rem !important;
        margin-bottom: -0.25rem !important
    }

    .my-sm-n2 {
        margin-top: -0.5rem !important;
        margin-bottom: -0.5rem !important
    }

    .my-sm-n3 {
        margin-top: -1rem !important;
        margin-bottom: -1rem !important
    }

    .my-sm-n4 {
        margin-top: -1.5rem !important;
        margin-bottom: -1.5rem !important
    }

    .my-sm-n5 {
        margin-top: -3rem !important;
        margin-bottom: -3rem !important
    }

    .mt-sm-n1 {
        margin-top: -0.25rem !important
    }

    .mt-sm-n2 {
        margin-top: -0.5rem !important
    }

    .mt-sm-n3 {
        margin-top: -1rem !important
    }

    .mt-sm-n4 {
        margin-top: -1.5rem !important
    }

    .mt-sm-n5 {
        margin-top: -3rem !important
    }

    .mb-sm-n1 {
        margin-bottom: -0.25rem !important
    }

    .mb-sm-n2 {
        margin-bottom: -0.5rem !important
    }

    .mb-sm-n3 {
        margin-bottom: -1rem !important
    }

    .mb-sm-n4 {
        margin-bottom: -1.5rem !important
    }

    .mb-sm-n5 {
        margin-bottom: -3rem !important
    }

    .p-sm-0 {
        padding: 0 !important
    }

    .p-sm-1 {
        padding: .25rem !important
    }

    .p-sm-2 {
        padding: .5rem !important
    }

    .p-sm-3 {
        padding: 1rem !important
    }

    .p-sm-4 {
        padding: 1.5rem !important
    }

    .p-sm-5 {
        padding: 3rem !important
    }

    .px-sm-0 {
        padding-right: 0 !important;
        padding-left: 0 !important
    }

    .px-sm-1 {
        padding-right: .25rem !important;
        padding-left: .25rem !important
    }

    .px-sm-2 {
        padding-right: .5rem !important;
        padding-left: .5rem !important
    }

    .px-sm-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important
    }

    .px-sm-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important
    }

    .px-sm-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important
    }

    .py-sm-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important
    }

    .py-sm-1 {
        padding-top: .25rem !important;
        padding-bottom: .25rem !important
    }

    .py-sm-2 {
        padding-top: .5rem !important;
        padding-bottom: .5rem !important
    }

    .py-sm-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important
    }

    .py-sm-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important
    }

    .py-sm-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important
    }

    .pt-sm-0 {
        padding-top: 0 !important
    }

    .pt-sm-1 {
        padding-top: .25rem !important
    }

    .pt-sm-2 {
        padding-top: .5rem !important
    }

    .pt-sm-3 {
        padding-top: 1rem !important
    }

    .pt-sm-4 {
        padding-top: 1.5rem !important
    }

    .pt-sm-5 {
        padding-top: 3rem !important
    }

    .pb-sm-0 {
        padding-bottom: 0 !important
    }

    .pb-sm-1 {
        padding-bottom: .25rem !important
    }

    .pb-sm-2 {
        padding-bottom: .5rem !important
    }

    .pb-sm-3 {
        padding-bottom: 1rem !important
    }

    .pb-sm-4 {
        padding-bottom: 1.5rem !important
    }

    .pb-sm-5 {
        padding-bottom: 3rem !important
    }

    .gap-sm-0 {
        gap: 0 !important
    }

    .gap-sm-1 {
        gap: .25rem !important
    }

    .gap-sm-2 {
        gap: .5rem !important
    }

    .gap-sm-3 {
        gap: 1rem !important
    }

    .gap-sm-4 {
        gap: 1.5rem !important
    }

    .gap-sm-5 {
        gap: 3rem !important
    }

    .row-gap-sm-0 {
        row-gap: 0 !important
    }

    .row-gap-sm-1 {
        row-gap: .25rem !important
    }

    .row-gap-sm-2 {
        row-gap: .5rem !important
    }

    .row-gap-sm-3 {
        row-gap: 1rem !important
    }

    .row-gap-sm-4 {
        row-gap: 1.5rem !important
    }

    .row-gap-sm-5 {
        row-gap: 3rem !important
    }

    .column-gap-sm-0 {
        column-gap: 0 !important
    }

    .column-gap-sm-1 {
        column-gap: .25rem !important
    }

    .column-gap-sm-2 {
        column-gap: .5rem !important
    }

    .column-gap-sm-3 {
        column-gap: 1rem !important
    }

    .column-gap-sm-4 {
        column-gap: 1.5rem !important
    }

    .column-gap-sm-5 {
        column-gap: 3rem !important
    }
}

@media(min-width: 768px) {
    .object-fit-md-contain {
        object-fit:contain !important
    }

    .object-fit-md-cover {
        object-fit: cover !important
    }

    .object-fit-md-fill {
        object-fit: fill !important
    }

    .object-fit-md-scale {
        object-fit: scale-down !important
    }

    .object-fit-md-none {
        object-fit: none !important
    }

    .d-md-inline {
        display: inline !important
    }

    .d-md-inline-block {
        display: inline-block !important
    }

    .d-md-block {
        display: block !important
    }

    .d-md-grid {
        display: grid !important
    }

    .d-md-table {
        display: table !important
    }

    .d-md-table-row {
        display: table-row !important
    }

    .d-md-table-cell {
        display: table-cell !important
    }

    .d-md-flex {
        display: flex !important
    }

    .d-md-inline-flex {
        display: inline-flex !important
    }

    .d-md-none {
        display: none !important
    }

    .border-md-solid {
        border-style: solid !important
    }

    .border-md-dashed {
        border-style: dashed !important
    }

    .border-md-none {
        border-style: none !important
    }

    .flex-md-fill {
        flex: 1 1 auto !important
    }

    .flex-md-row {
        flex-direction: row !important
    }

    .flex-md-column {
        flex-direction: column !important
    }

    .flex-md-row-reverse {
        flex-direction: row-reverse !important
    }

    .flex-md-column-reverse {
        flex-direction: column-reverse !important
    }

    .flex-md-grow-0 {
        flex-grow: 0 !important
    }

    .flex-md-grow-1 {
        flex-grow: 1 !important
    }

    .flex-md-shrink-0 {
        flex-shrink: 0 !important
    }

    .flex-md-shrink-1 {
        flex-shrink: 1 !important
    }

    .flex-md-wrap {
        flex-wrap: wrap !important
    }

    .flex-md-nowrap {
        flex-wrap: nowrap !important
    }

    .flex-md-wrap-reverse {
        flex-wrap: wrap-reverse !important
    }

    .justify-content-md-start {
        justify-content: flex-start !important
    }

    .justify-content-md-end {
        justify-content: flex-end !important
    }

    .justify-content-md-center {
        justify-content: center !important
    }

    .justify-content-md-between {
        justify-content: space-between !important
    }

    .justify-content-md-around {
        justify-content: space-around !important
    }

    .justify-content-md-evenly {
        justify-content: space-evenly !important
    }

    .align-items-md-start {
        align-items: flex-start !important
    }

    .align-items-md-end {
        align-items: flex-end !important
    }

    .align-items-md-center {
        align-items: center !important
    }

    .align-items-md-baseline {
        align-items: baseline !important
    }

    .align-items-md-stretch {
        align-items: stretch !important
    }

    .align-content-md-start {
        align-content: flex-start !important
    }

    .align-content-md-end {
        align-content: flex-end !important
    }

    .align-content-md-center {
        align-content: center !important
    }

    .align-content-md-between {
        align-content: space-between !important
    }

    .align-content-md-around {
        align-content: space-around !important
    }

    .align-content-md-stretch {
        align-content: stretch !important
    }

    .align-self-md-auto {
        align-self: auto !important
    }

    .align-self-md-start {
        align-self: flex-start !important
    }

    .align-self-md-end {
        align-self: flex-end !important
    }

    .align-self-md-center {
        align-self: center !important
    }

    .align-self-md-baseline {
        align-self: baseline !important
    }

    .align-self-md-stretch {
        align-self: stretch !important
    }

    .order-md-first {
        order: -1 !important
    }

    .order-md-0 {
        order: 0 !important
    }

    .order-md-1 {
        order: 1 !important
    }

    .order-md-2 {
        order: 2 !important
    }

    .order-md-3 {
        order: 3 !important
    }

    .order-md-4 {
        order: 4 !important
    }

    .order-md-5 {
        order: 5 !important
    }

    .order-md-last {
        order: 6 !important
    }

    .m-md-0 {
        margin: 0 !important
    }

    .m-md-1 {
        margin: .25rem !important
    }

    .m-md-2 {
        margin: .5rem !important
    }

    .m-md-3 {
        margin: 1rem !important
    }

    .m-md-4 {
        margin: 1.5rem !important
    }

    .m-md-5 {
        margin: 3rem !important
    }

    .m-md-auto {
        margin: auto !important
    }

    .mx-md-0 {
        margin-right: 0 !important;
        margin-left: 0 !important
    }

    .mx-md-1 {
        margin-right: .25rem !important;
        margin-left: .25rem !important
    }

    .mx-md-2 {
        margin-right: .5rem !important;
        margin-left: .5rem !important
    }

    .mx-md-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important
    }

    .mx-md-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important
    }

    .mx-md-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important
    }

    .mx-md-auto {
        margin-right: auto !important;
        margin-left: auto !important
    }

    .my-md-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important
    }

    .my-md-1 {
        margin-top: .25rem !important;
        margin-bottom: .25rem !important
    }

    .my-md-2 {
        margin-top: .5rem !important;
        margin-bottom: .5rem !important
    }

    .my-md-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important
    }

    .my-md-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important
    }

    .my-md-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important
    }

    .my-md-auto {
        margin-top: auto !important;
        margin-bottom: auto !important
    }

    .mt-md-0 {
        margin-top: 0 !important
    }

    .mt-md-1 {
        margin-top: .25rem !important
    }

    .mt-md-2 {
        margin-top: .5rem !important
    }

    .mt-md-3 {
        margin-top: 1rem !important
    }

    .mt-md-4 {
        margin-top: 1.5rem !important
    }

    .mt-md-5 {
        margin-top: 3rem !important
    }

    .mt-md-auto {
        margin-top: auto !important
    }

    .mb-md-0 {
        margin-bottom: 0 !important
    }

    .mb-md-1 {
        margin-bottom: .25rem !important
    }

    .mb-md-2 {
        margin-bottom: .5rem !important
    }

    .mb-md-3 {
        margin-bottom: 1rem !important
    }

    .mb-md-4 {
        margin-bottom: 1.5rem !important
    }

    .mb-md-5 {
        margin-bottom: 3rem !important
    }

    .mb-md-auto {
        margin-bottom: auto !important
    }

    .m-md-n1 {
        margin: -0.25rem !important
    }

    .m-md-n2 {
        margin: -0.5rem !important
    }

    .m-md-n3 {
        margin: -1rem !important
    }

    .m-md-n4 {
        margin: -1.5rem !important
    }

    .m-md-n5 {
        margin: -3rem !important
    }

    .mx-md-n1 {
        margin-right: -0.25rem !important;
        margin-left: -0.25rem !important
    }

    .mx-md-n2 {
        margin-right: -0.5rem !important;
        margin-left: -0.5rem !important
    }

    .mx-md-n3 {
        margin-right: -1rem !important;
        margin-left: -1rem !important
    }

    .mx-md-n4 {
        margin-right: -1.5rem !important;
        margin-left: -1.5rem !important
    }

    .mx-md-n5 {
        margin-right: -3rem !important;
        margin-left: -3rem !important
    }

    .my-md-n1 {
        margin-top: -0.25rem !important;
        margin-bottom: -0.25rem !important
    }

    .my-md-n2 {
        margin-top: -0.5rem !important;
        margin-bottom: -0.5rem !important
    }

    .my-md-n3 {
        margin-top: -1rem !important;
        margin-bottom: -1rem !important
    }

    .my-md-n4 {
        margin-top: -1.5rem !important;
        margin-bottom: -1.5rem !important
    }

    .my-md-n5 {
        margin-top: -3rem !important;
        margin-bottom: -3rem !important
    }

    .mt-md-n1 {
        margin-top: -0.25rem !important
    }

    .mt-md-n2 {
        margin-top: -0.5rem !important
    }

    .mt-md-n3 {
        margin-top: -1rem !important
    }

    .mt-md-n4 {
        margin-top: -1.5rem !important
    }

    .mt-md-n5 {
        margin-top: -3rem !important
    }

    .mb-md-n1 {
        margin-bottom: -0.25rem !important
    }

    .mb-md-n2 {
        margin-bottom: -0.5rem !important
    }

    .mb-md-n3 {
        margin-bottom: -1rem !important
    }

    .mb-md-n4 {
        margin-bottom: -1.5rem !important
    }

    .mb-md-n5 {
        margin-bottom: -3rem !important
    }

    .p-md-0 {
        padding: 0 !important
    }

    .p-md-1 {
        padding: .25rem !important
    }

    .p-md-2 {
        padding: .5rem !important
    }

    .p-md-3 {
        padding: 1rem !important
    }

    .p-md-4 {
        padding: 1.5rem !important
    }

    .p-md-5 {
        padding: 3rem !important
    }

    .px-md-0 {
        padding-right: 0 !important;
        padding-left: 0 !important
    }

    .px-md-1 {
        padding-right: .25rem !important;
        padding-left: .25rem !important
    }

    .px-md-2 {
        padding-right: .5rem !important;
        padding-left: .5rem !important
    }

    .px-md-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important
    }

    .px-md-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important
    }

    .px-md-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important
    }

    .py-md-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important
    }

    .py-md-1 {
        padding-top: .25rem !important;
        padding-bottom: .25rem !important
    }

    .py-md-2 {
        padding-top: .5rem !important;
        padding-bottom: .5rem !important
    }

    .py-md-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important
    }

    .py-md-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important
    }

    .py-md-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important
    }

    .pt-md-0 {
        padding-top: 0 !important
    }

    .pt-md-1 {
        padding-top: .25rem !important
    }

    .pt-md-2 {
        padding-top: .5rem !important
    }

    .pt-md-3 {
        padding-top: 1rem !important
    }

    .pt-md-4 {
        padding-top: 1.5rem !important
    }

    .pt-md-5 {
        padding-top: 3rem !important
    }

    .pb-md-0 {
        padding-bottom: 0 !important
    }

    .pb-md-1 {
        padding-bottom: .25rem !important
    }

    .pb-md-2 {
        padding-bottom: .5rem !important
    }

    .pb-md-3 {
        padding-bottom: 1rem !important
    }

    .pb-md-4 {
        padding-bottom: 1.5rem !important
    }

    .pb-md-5 {
        padding-bottom: 3rem !important
    }

    .gap-md-0 {
        gap: 0 !important
    }

    .gap-md-1 {
        gap: .25rem !important
    }

    .gap-md-2 {
        gap: .5rem !important
    }

    .gap-md-3 {
        gap: 1rem !important
    }

    .gap-md-4 {
        gap: 1.5rem !important
    }

    .gap-md-5 {
        gap: 3rem !important
    }

    .row-gap-md-0 {
        row-gap: 0 !important
    }

    .row-gap-md-1 {
        row-gap: .25rem !important
    }

    .row-gap-md-2 {
        row-gap: .5rem !important
    }

    .row-gap-md-3 {
        row-gap: 1rem !important
    }

    .row-gap-md-4 {
        row-gap: 1.5rem !important
    }

    .row-gap-md-5 {
        row-gap: 3rem !important
    }

    .column-gap-md-0 {
        column-gap: 0 !important
    }

    .column-gap-md-1 {
        column-gap: .25rem !important
    }

    .column-gap-md-2 {
        column-gap: .5rem !important
    }

    .column-gap-md-3 {
        column-gap: 1rem !important
    }

    .column-gap-md-4 {
        column-gap: 1.5rem !important
    }

    .column-gap-md-5 {
        column-gap: 3rem !important
    }
}

@media(min-width: 992px) {
    .object-fit-lg-contain {
        object-fit:contain !important
    }

    .object-fit-lg-cover {
        object-fit: cover !important
    }

    .object-fit-lg-fill {
        object-fit: fill !important
    }

    .object-fit-lg-scale {
        object-fit: scale-down !important
    }

    .object-fit-lg-none {
        object-fit: none !important
    }

    .d-lg-inline {
        display: inline !important
    }

    .d-lg-inline-block {
        display: inline-block !important
    }

    .d-lg-block {
        display: block !important
    }

    .d-lg-grid {
        display: grid !important
    }

    .d-lg-table {
        display: table !important
    }

    .d-lg-table-row {
        display: table-row !important
    }

    .d-lg-table-cell {
        display: table-cell !important
    }

    .d-lg-flex {
        display: flex !important
    }

    .d-lg-inline-flex {
        display: inline-flex !important
    }

    .d-lg-none {
        display: none !important
    }

    .border-lg-solid {
        border-style: solid !important
    }

    .border-lg-dashed {
        border-style: dashed !important
    }

    .border-lg-none {
        border-style: none !important
    }

    .flex-lg-fill {
        flex: 1 1 auto !important
    }

    .flex-lg-row {
        flex-direction: row !important
    }

    .flex-lg-column {
        flex-direction: column !important
    }

    .flex-lg-row-reverse {
        flex-direction: row-reverse !important
    }

    .flex-lg-column-reverse {
        flex-direction: column-reverse !important
    }

    .flex-lg-grow-0 {
        flex-grow: 0 !important
    }

    .flex-lg-grow-1 {
        flex-grow: 1 !important
    }

    .flex-lg-shrink-0 {
        flex-shrink: 0 !important
    }

    .flex-lg-shrink-1 {
        flex-shrink: 1 !important
    }

    .flex-lg-wrap {
        flex-wrap: wrap !important
    }

    .flex-lg-nowrap {
        flex-wrap: nowrap !important
    }

    .flex-lg-wrap-reverse {
        flex-wrap: wrap-reverse !important
    }

    .justify-content-lg-start {
        justify-content: flex-start !important
    }

    .justify-content-lg-end {
        justify-content: flex-end !important
    }

    .justify-content-lg-center {
        justify-content: center !important
    }

    .justify-content-lg-between {
        justify-content: space-between !important
    }

    .justify-content-lg-around {
        justify-content: space-around !important
    }

    .justify-content-lg-evenly {
        justify-content: space-evenly !important
    }

    .align-items-lg-start {
        align-items: flex-start !important
    }

    .align-items-lg-end {
        align-items: flex-end !important
    }

    .align-items-lg-center {
        align-items: center !important
    }

    .align-items-lg-baseline {
        align-items: baseline !important
    }

    .align-items-lg-stretch {
        align-items: stretch !important
    }

    .align-content-lg-start {
        align-content: flex-start !important
    }

    .align-content-lg-end {
        align-content: flex-end !important
    }

    .align-content-lg-center {
        align-content: center !important
    }

    .align-content-lg-between {
        align-content: space-between !important
    }

    .align-content-lg-around {
        align-content: space-around !important
    }

    .align-content-lg-stretch {
        align-content: stretch !important
    }

    .align-self-lg-auto {
        align-self: auto !important
    }

    .align-self-lg-start {
        align-self: flex-start !important
    }

    .align-self-lg-end {
        align-self: flex-end !important
    }

    .align-self-lg-center {
        align-self: center !important
    }

    .align-self-lg-baseline {
        align-self: baseline !important
    }

    .align-self-lg-stretch {
        align-self: stretch !important
    }

    .order-lg-first {
        order: -1 !important
    }

    .order-lg-0 {
        order: 0 !important
    }

    .order-lg-1 {
        order: 1 !important
    }

    .order-lg-2 {
        order: 2 !important
    }

    .order-lg-3 {
        order: 3 !important
    }

    .order-lg-4 {
        order: 4 !important
    }

    .order-lg-5 {
        order: 5 !important
    }

    .order-lg-last {
        order: 6 !important
    }

    .m-lg-0 {
        margin: 0 !important
    }

    .m-lg-1 {
        margin: .25rem !important
    }

    .m-lg-2 {
        margin: .5rem !important
    }

    .m-lg-3 {
        margin: 1rem !important
    }

    .m-lg-4 {
        margin: 1.5rem !important
    }

    .m-lg-5 {
        margin: 3rem !important
    }

    .m-lg-auto {
        margin: auto !important
    }

    .mx-lg-0 {
        margin-right: 0 !important;
        margin-left: 0 !important
    }

    .mx-lg-1 {
        margin-right: .25rem !important;
        margin-left: .25rem !important
    }

    .mx-lg-2 {
        margin-right: .5rem !important;
        margin-left: .5rem !important
    }

    .mx-lg-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important
    }

    .mx-lg-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important
    }

    .mx-lg-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important
    }

    .mx-lg-auto {
        margin-right: auto !important;
        margin-left: auto !important
    }

    .my-lg-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important
    }

    .my-lg-1 {
        margin-top: .25rem !important;
        margin-bottom: .25rem !important
    }

    .my-lg-2 {
        margin-top: .5rem !important;
        margin-bottom: .5rem !important
    }

    .my-lg-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important
    }

    .my-lg-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important
    }

    .my-lg-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important
    }

    .my-lg-auto {
        margin-top: auto !important;
        margin-bottom: auto !important
    }

    .mt-lg-0 {
        margin-top: 0 !important
    }

    .mt-lg-1 {
        margin-top: .25rem !important
    }

    .mt-lg-2 {
        margin-top: .5rem !important
    }

    .mt-lg-3 {
        margin-top: 1rem !important
    }

    .mt-lg-4 {
        margin-top: 1.5rem !important
    }

    .mt-lg-5 {
        margin-top: 3rem !important
    }

    .mt-lg-auto {
        margin-top: auto !important
    }

    .mb-lg-0 {
        margin-bottom: 0 !important
    }

    .mb-lg-1 {
        margin-bottom: .25rem !important
    }

    .mb-lg-2 {
        margin-bottom: .5rem !important
    }

    .mb-lg-3 {
        margin-bottom: 1rem !important
    }

    .mb-lg-4 {
        margin-bottom: 1.5rem !important
    }

    .mb-lg-5 {
        margin-bottom: 3rem !important
    }

    .mb-lg-auto {
        margin-bottom: auto !important
    }

    .m-lg-n1 {
        margin: -0.25rem !important
    }

    .m-lg-n2 {
        margin: -0.5rem !important
    }

    .m-lg-n3 {
        margin: -1rem !important
    }

    .m-lg-n4 {
        margin: -1.5rem !important
    }

    .m-lg-n5 {
        margin: -3rem !important
    }

    .mx-lg-n1 {
        margin-right: -0.25rem !important;
        margin-left: -0.25rem !important
    }

    .mx-lg-n2 {
        margin-right: -0.5rem !important;
        margin-left: -0.5rem !important
    }

    .mx-lg-n3 {
        margin-right: -1rem !important;
        margin-left: -1rem !important
    }

    .mx-lg-n4 {
        margin-right: -1.5rem !important;
        margin-left: -1.5rem !important
    }

    .mx-lg-n5 {
        margin-right: -3rem !important;
        margin-left: -3rem !important
    }

    .my-lg-n1 {
        margin-top: -0.25rem !important;
        margin-bottom: -0.25rem !important
    }

    .my-lg-n2 {
        margin-top: -0.5rem !important;
        margin-bottom: -0.5rem !important
    }

    .my-lg-n3 {
        margin-top: -1rem !important;
        margin-bottom: -1rem !important
    }

    .my-lg-n4 {
        margin-top: -1.5rem !important;
        margin-bottom: -1.5rem !important
    }

    .my-lg-n5 {
        margin-top: -3rem !important;
        margin-bottom: -3rem !important
    }

    .mt-lg-n1 {
        margin-top: -0.25rem !important
    }

    .mt-lg-n2 {
        margin-top: -0.5rem !important
    }

    .mt-lg-n3 {
        margin-top: -1rem !important
    }

    .mt-lg-n4 {
        margin-top: -1.5rem !important
    }

    .mt-lg-n5 {
        margin-top: -3rem !important
    }

    .mb-lg-n1 {
        margin-bottom: -0.25rem !important
    }

    .mb-lg-n2 {
        margin-bottom: -0.5rem !important
    }

    .mb-lg-n3 {
        margin-bottom: -1rem !important
    }

    .mb-lg-n4 {
        margin-bottom: -1.5rem !important
    }

    .mb-lg-n5 {
        margin-bottom: -3rem !important
    }

    .p-lg-0 {
        padding: 0 !important
    }

    .p-lg-1 {
        padding: .25rem !important
    }

    .p-lg-2 {
        padding: .5rem !important
    }

    .p-lg-3 {
        padding: 1rem !important
    }

    .p-lg-4 {
        padding: 1.5rem !important
    }

    .p-lg-5 {
        padding: 3rem !important
    }

    .px-lg-0 {
        padding-right: 0 !important;
        padding-left: 0 !important
    }

    .px-lg-1 {
        padding-right: .25rem !important;
        padding-left: .25rem !important
    }

    .px-lg-2 {
        padding-right: .5rem !important;
        padding-left: .5rem !important
    }

    .px-lg-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important
    }

    .px-lg-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important
    }

    .px-lg-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important
    }

    .py-lg-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important
    }

    .py-lg-1 {
        padding-top: .25rem !important;
        padding-bottom: .25rem !important
    }

    .py-lg-2 {
        padding-top: .5rem !important;
        padding-bottom: .5rem !important
    }

    .py-lg-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important
    }

    .py-lg-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important
    }

    .py-lg-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important
    }

    .pt-lg-0 {
        padding-top: 0 !important
    }

    .pt-lg-1 {
        padding-top: .25rem !important
    }

    .pt-lg-2 {
        padding-top: .5rem !important
    }

    .pt-lg-3 {
        padding-top: 1rem !important
    }

    .pt-lg-4 {
        padding-top: 1.5rem !important
    }

    .pt-lg-5 {
        padding-top: 3rem !important
    }

    .pb-lg-0 {
        padding-bottom: 0 !important
    }

    .pb-lg-1 {
        padding-bottom: .25rem !important
    }

    .pb-lg-2 {
        padding-bottom: .5rem !important
    }

    .pb-lg-3 {
        padding-bottom: 1rem !important
    }

    .pb-lg-4 {
        padding-bottom: 1.5rem !important
    }

    .pb-lg-5 {
        padding-bottom: 3rem !important
    }

    .gap-lg-0 {
        gap: 0 !important
    }

    .gap-lg-1 {
        gap: .25rem !important
    }

    .gap-lg-2 {
        gap: .5rem !important
    }

    .gap-lg-3 {
        gap: 1rem !important
    }

    .gap-lg-4 {
        gap: 1.5rem !important
    }

    .gap-lg-5 {
        gap: 3rem !important
    }

    .row-gap-lg-0 {
        row-gap: 0 !important
    }

    .row-gap-lg-1 {
        row-gap: .25rem !important
    }

    .row-gap-lg-2 {
        row-gap: .5rem !important
    }

    .row-gap-lg-3 {
        row-gap: 1rem !important
    }

    .row-gap-lg-4 {
        row-gap: 1.5rem !important
    }

    .row-gap-lg-5 {
        row-gap: 3rem !important
    }

    .column-gap-lg-0 {
        column-gap: 0 !important
    }

    .column-gap-lg-1 {
        column-gap: .25rem !important
    }

    .column-gap-lg-2 {
        column-gap: .5rem !important
    }

    .column-gap-lg-3 {
        column-gap: 1rem !important
    }

    .column-gap-lg-4 {
        column-gap: 1.5rem !important
    }

    .column-gap-lg-5 {
        column-gap: 3rem !important
    }
}

@media(min-width: 1200px) {
    .object-fit-xl-contain {
        object-fit:contain !important
    }

    .object-fit-xl-cover {
        object-fit: cover !important
    }

    .object-fit-xl-fill {
        object-fit: fill !important
    }

    .object-fit-xl-scale {
        object-fit: scale-down !important
    }

    .object-fit-xl-none {
        object-fit: none !important
    }

    .d-xl-inline {
        display: inline !important
    }

    .d-xl-inline-block {
        display: inline-block !important
    }

    .d-xl-block {
        display: block !important
    }

    .d-xl-grid {
        display: grid !important
    }

    .d-xl-table {
        display: table !important
    }

    .d-xl-table-row {
        display: table-row !important
    }

    .d-xl-table-cell {
        display: table-cell !important
    }

    .d-xl-flex {
        display: flex !important
    }

    .d-xl-inline-flex {
        display: inline-flex !important
    }

    .d-xl-none {
        display: none !important
    }

    .border-xl-solid {
        border-style: solid !important
    }

    .border-xl-dashed {
        border-style: dashed !important
    }

    .border-xl-none {
        border-style: none !important
    }

    .flex-xl-fill {
        flex: 1 1 auto !important
    }

    .flex-xl-row {
        flex-direction: row !important
    }

    .flex-xl-column {
        flex-direction: column !important
    }

    .flex-xl-row-reverse {
        flex-direction: row-reverse !important
    }

    .flex-xl-column-reverse {
        flex-direction: column-reverse !important
    }

    .flex-xl-grow-0 {
        flex-grow: 0 !important
    }

    .flex-xl-grow-1 {
        flex-grow: 1 !important
    }

    .flex-xl-shrink-0 {
        flex-shrink: 0 !important
    }

    .flex-xl-shrink-1 {
        flex-shrink: 1 !important
    }

    .flex-xl-wrap {
        flex-wrap: wrap !important
    }

    .flex-xl-nowrap {
        flex-wrap: nowrap !important
    }

    .flex-xl-wrap-reverse {
        flex-wrap: wrap-reverse !important
    }

    .justify-content-xl-start {
        justify-content: flex-start !important
    }

    .justify-content-xl-end {
        justify-content: flex-end !important
    }

    .justify-content-xl-center {
        justify-content: center !important
    }

    .justify-content-xl-between {
        justify-content: space-between !important
    }

    .justify-content-xl-around {
        justify-content: space-around !important
    }

    .justify-content-xl-evenly {
        justify-content: space-evenly !important
    }

    .align-items-xl-start {
        align-items: flex-start !important
    }

    .align-items-xl-end {
        align-items: flex-end !important
    }

    .align-items-xl-center {
        align-items: center !important
    }

    .align-items-xl-baseline {
        align-items: baseline !important
    }

    .align-items-xl-stretch {
        align-items: stretch !important
    }

    .align-content-xl-start {
        align-content: flex-start !important
    }

    .align-content-xl-end {
        align-content: flex-end !important
    }

    .align-content-xl-center {
        align-content: center !important
    }

    .align-content-xl-between {
        align-content: space-between !important
    }

    .align-content-xl-around {
        align-content: space-around !important
    }

    .align-content-xl-stretch {
        align-content: stretch !important
    }

    .align-self-xl-auto {
        align-self: auto !important
    }

    .align-self-xl-start {
        align-self: flex-start !important
    }

    .align-self-xl-end {
        align-self: flex-end !important
    }

    .align-self-xl-center {
        align-self: center !important
    }

    .align-self-xl-baseline {
        align-self: baseline !important
    }

    .align-self-xl-stretch {
        align-self: stretch !important
    }

    .order-xl-first {
        order: -1 !important
    }

    .order-xl-0 {
        order: 0 !important
    }

    .order-xl-1 {
        order: 1 !important
    }

    .order-xl-2 {
        order: 2 !important
    }

    .order-xl-3 {
        order: 3 !important
    }

    .order-xl-4 {
        order: 4 !important
    }

    .order-xl-5 {
        order: 5 !important
    }

    .order-xl-last {
        order: 6 !important
    }

    .m-xl-0 {
        margin: 0 !important
    }

    .m-xl-1 {
        margin: .25rem !important
    }

    .m-xl-2 {
        margin: .5rem !important
    }

    .m-xl-3 {
        margin: 1rem !important
    }

    .m-xl-4 {
        margin: 1.5rem !important
    }

    .m-xl-5 {
        margin: 3rem !important
    }

    .m-xl-auto {
        margin: auto !important
    }

    .mx-xl-0 {
        margin-right: 0 !important;
        margin-left: 0 !important
    }

    .mx-xl-1 {
        margin-right: .25rem !important;
        margin-left: .25rem !important
    }

    .mx-xl-2 {
        margin-right: .5rem !important;
        margin-left: .5rem !important
    }

    .mx-xl-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important
    }

    .mx-xl-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important
    }

    .mx-xl-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important
    }

    .mx-xl-auto {
        margin-right: auto !important;
        margin-left: auto !important
    }

    .my-xl-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important
    }

    .my-xl-1 {
        margin-top: .25rem !important;
        margin-bottom: .25rem !important
    }

    .my-xl-2 {
        margin-top: .5rem !important;
        margin-bottom: .5rem !important
    }

    .my-xl-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important
    }

    .my-xl-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important
    }

    .my-xl-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important
    }

    .my-xl-auto {
        margin-top: auto !important;
        margin-bottom: auto !important
    }

    .mt-xl-0 {
        margin-top: 0 !important
    }

    .mt-xl-1 {
        margin-top: .25rem !important
    }

    .mt-xl-2 {
        margin-top: .5rem !important
    }

    .mt-xl-3 {
        margin-top: 1rem !important
    }

    .mt-xl-4 {
        margin-top: 1.5rem !important
    }

    .mt-xl-5 {
        margin-top: 3rem !important
    }

    .mt-xl-auto {
        margin-top: auto !important
    }

    .mb-xl-0 {
        margin-bottom: 0 !important
    }

    .mb-xl-1 {
        margin-bottom: .25rem !important
    }

    .mb-xl-2 {
        margin-bottom: .5rem !important
    }

    .mb-xl-3 {
        margin-bottom: 1rem !important
    }

    .mb-xl-4 {
        margin-bottom: 1.5rem !important
    }

    .mb-xl-5 {
        margin-bottom: 3rem !important
    }

    .mb-xl-auto {
        margin-bottom: auto !important
    }

    .m-xl-n1 {
        margin: -0.25rem !important
    }

    .m-xl-n2 {
        margin: -0.5rem !important
    }

    .m-xl-n3 {
        margin: -1rem !important
    }

    .m-xl-n4 {
        margin: -1.5rem !important
    }

    .m-xl-n5 {
        margin: -3rem !important
    }

    .mx-xl-n1 {
        margin-right: -0.25rem !important;
        margin-left: -0.25rem !important
    }

    .mx-xl-n2 {
        margin-right: -0.5rem !important;
        margin-left: -0.5rem !important
    }

    .mx-xl-n3 {
        margin-right: -1rem !important;
        margin-left: -1rem !important
    }

    .mx-xl-n4 {
        margin-right: -1.5rem !important;
        margin-left: -1.5rem !important
    }

    .mx-xl-n5 {
        margin-right: -3rem !important;
        margin-left: -3rem !important
    }

    .my-xl-n1 {
        margin-top: -0.25rem !important;
        margin-bottom: -0.25rem !important
    }

    .my-xl-n2 {
        margin-top: -0.5rem !important;
        margin-bottom: -0.5rem !important
    }

    .my-xl-n3 {
        margin-top: -1rem !important;
        margin-bottom: -1rem !important
    }

    .my-xl-n4 {
        margin-top: -1.5rem !important;
        margin-bottom: -1.5rem !important
    }

    .my-xl-n5 {
        margin-top: -3rem !important;
        margin-bottom: -3rem !important
    }

    .mt-xl-n1 {
        margin-top: -0.25rem !important
    }

    .mt-xl-n2 {
        margin-top: -0.5rem !important
    }

    .mt-xl-n3 {
        margin-top: -1rem !important
    }

    .mt-xl-n4 {
        margin-top: -1.5rem !important
    }

    .mt-xl-n5 {
        margin-top: -3rem !important
    }

    .mb-xl-n1 {
        margin-bottom: -0.25rem !important
    }

    .mb-xl-n2 {
        margin-bottom: -0.5rem !important
    }

    .mb-xl-n3 {
        margin-bottom: -1rem !important
    }

    .mb-xl-n4 {
        margin-bottom: -1.5rem !important
    }

    .mb-xl-n5 {
        margin-bottom: -3rem !important
    }

    .p-xl-0 {
        padding: 0 !important
    }

    .p-xl-1 {
        padding: .25rem !important
    }

    .p-xl-2 {
        padding: .5rem !important
    }

    .p-xl-3 {
        padding: 1rem !important
    }

    .p-xl-4 {
        padding: 1.5rem !important
    }

    .p-xl-5 {
        padding: 3rem !important
    }

    .px-xl-0 {
        padding-right: 0 !important;
        padding-left: 0 !important
    }

    .px-xl-1 {
        padding-right: .25rem !important;
        padding-left: .25rem !important
    }

    .px-xl-2 {
        padding-right: .5rem !important;
        padding-left: .5rem !important
    }

    .px-xl-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important
    }

    .px-xl-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important
    }

    .px-xl-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important
    }

    .py-xl-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important
    }

    .py-xl-1 {
        padding-top: .25rem !important;
        padding-bottom: .25rem !important
    }

    .py-xl-2 {
        padding-top: .5rem !important;
        padding-bottom: .5rem !important
    }

    .py-xl-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important
    }

    .py-xl-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important
    }

    .py-xl-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important
    }

    .pt-xl-0 {
        padding-top: 0 !important
    }

    .pt-xl-1 {
        padding-top: .25rem !important
    }

    .pt-xl-2 {
        padding-top: .5rem !important
    }

    .pt-xl-3 {
        padding-top: 1rem !important
    }

    .pt-xl-4 {
        padding-top: 1.5rem !important
    }

    .pt-xl-5 {
        padding-top: 3rem !important
    }

    .pb-xl-0 {
        padding-bottom: 0 !important
    }

    .pb-xl-1 {
        padding-bottom: .25rem !important
    }

    .pb-xl-2 {
        padding-bottom: .5rem !important
    }

    .pb-xl-3 {
        padding-bottom: 1rem !important
    }

    .pb-xl-4 {
        padding-bottom: 1.5rem !important
    }

    .pb-xl-5 {
        padding-bottom: 3rem !important
    }

    .gap-xl-0 {
        gap: 0 !important
    }

    .gap-xl-1 {
        gap: .25rem !important
    }

    .gap-xl-2 {
        gap: .5rem !important
    }

    .gap-xl-3 {
        gap: 1rem !important
    }

    .gap-xl-4 {
        gap: 1.5rem !important
    }

    .gap-xl-5 {
        gap: 3rem !important
    }

    .row-gap-xl-0 {
        row-gap: 0 !important
    }

    .row-gap-xl-1 {
        row-gap: .25rem !important
    }

    .row-gap-xl-2 {
        row-gap: .5rem !important
    }

    .row-gap-xl-3 {
        row-gap: 1rem !important
    }

    .row-gap-xl-4 {
        row-gap: 1.5rem !important
    }

    .row-gap-xl-5 {
        row-gap: 3rem !important
    }

    .column-gap-xl-0 {
        column-gap: 0 !important
    }

    .column-gap-xl-1 {
        column-gap: .25rem !important
    }

    .column-gap-xl-2 {
        column-gap: .5rem !important
    }

    .column-gap-xl-3 {
        column-gap: 1rem !important
    }

    .column-gap-xl-4 {
        column-gap: 1.5rem !important
    }

    .column-gap-xl-5 {
        column-gap: 3rem !important
    }
}

@media(min-width: 1400px) {
    .object-fit-xxl-contain {
        object-fit:contain !important
    }

    .object-fit-xxl-cover {
        object-fit: cover !important
    }

    .object-fit-xxl-fill {
        object-fit: fill !important
    }

    .object-fit-xxl-scale {
        object-fit: scale-down !important
    }

    .object-fit-xxl-none {
        object-fit: none !important
    }

    .d-xxl-inline {
        display: inline !important
    }

    .d-xxl-inline-block {
        display: inline-block !important
    }

    .d-xxl-block {
        display: block !important
    }

    .d-xxl-grid {
        display: grid !important
    }

    .d-xxl-table {
        display: table !important
    }

    .d-xxl-table-row {
        display: table-row !important
    }

    .d-xxl-table-cell {
        display: table-cell !important
    }

    .d-xxl-flex {
        display: flex !important
    }

    .d-xxl-inline-flex {
        display: inline-flex !important
    }

    .d-xxl-none {
        display: none !important
    }

    .border-xxl-solid {
        border-style: solid !important
    }

    .border-xxl-dashed {
        border-style: dashed !important
    }

    .border-xxl-none {
        border-style: none !important
    }

    .flex-xxl-fill {
        flex: 1 1 auto !important
    }

    .flex-xxl-row {
        flex-direction: row !important
    }

    .flex-xxl-column {
        flex-direction: column !important
    }

    .flex-xxl-row-reverse {
        flex-direction: row-reverse !important
    }

    .flex-xxl-column-reverse {
        flex-direction: column-reverse !important
    }

    .flex-xxl-grow-0 {
        flex-grow: 0 !important
    }

    .flex-xxl-grow-1 {
        flex-grow: 1 !important
    }

    .flex-xxl-shrink-0 {
        flex-shrink: 0 !important
    }

    .flex-xxl-shrink-1 {
        flex-shrink: 1 !important
    }

    .flex-xxl-wrap {
        flex-wrap: wrap !important
    }

    .flex-xxl-nowrap {
        flex-wrap: nowrap !important
    }

    .flex-xxl-wrap-reverse {
        flex-wrap: wrap-reverse !important
    }

    .justify-content-xxl-start {
        justify-content: flex-start !important
    }

    .justify-content-xxl-end {
        justify-content: flex-end !important
    }

    .justify-content-xxl-center {
        justify-content: center !important
    }

    .justify-content-xxl-between {
        justify-content: space-between !important
    }

    .justify-content-xxl-around {
        justify-content: space-around !important
    }

    .justify-content-xxl-evenly {
        justify-content: space-evenly !important
    }

    .align-items-xxl-start {
        align-items: flex-start !important
    }

    .align-items-xxl-end {
        align-items: flex-end !important
    }

    .align-items-xxl-center {
        align-items: center !important
    }

    .align-items-xxl-baseline {
        align-items: baseline !important
    }

    .align-items-xxl-stretch {
        align-items: stretch !important
    }

    .align-content-xxl-start {
        align-content: flex-start !important
    }

    .align-content-xxl-end {
        align-content: flex-end !important
    }

    .align-content-xxl-center {
        align-content: center !important
    }

    .align-content-xxl-between {
        align-content: space-between !important
    }

    .align-content-xxl-around {
        align-content: space-around !important
    }

    .align-content-xxl-stretch {
        align-content: stretch !important
    }

    .align-self-xxl-auto {
        align-self: auto !important
    }

    .align-self-xxl-start {
        align-self: flex-start !important
    }

    .align-self-xxl-end {
        align-self: flex-end !important
    }

    .align-self-xxl-center {
        align-self: center !important
    }

    .align-self-xxl-baseline {
        align-self: baseline !important
    }

    .align-self-xxl-stretch {
        align-self: stretch !important
    }

    .order-xxl-first {
        order: -1 !important
    }

    .order-xxl-0 {
        order: 0 !important
    }

    .order-xxl-1 {
        order: 1 !important
    }

    .order-xxl-2 {
        order: 2 !important
    }

    .order-xxl-3 {
        order: 3 !important
    }

    .order-xxl-4 {
        order: 4 !important
    }

    .order-xxl-5 {
        order: 5 !important
    }

    .order-xxl-last {
        order: 6 !important
    }

    .m-xxl-0 {
        margin: 0 !important
    }

    .m-xxl-1 {
        margin: .25rem !important
    }

    .m-xxl-2 {
        margin: .5rem !important
    }

    .m-xxl-3 {
        margin: 1rem !important
    }

    .m-xxl-4 {
        margin: 1.5rem !important
    }

    .m-xxl-5 {
        margin: 3rem !important
    }

    .m-xxl-auto {
        margin: auto !important
    }

    .mx-xxl-0 {
        margin-right: 0 !important;
        margin-left: 0 !important
    }

    .mx-xxl-1 {
        margin-right: .25rem !important;
        margin-left: .25rem !important
    }

    .mx-xxl-2 {
        margin-right: .5rem !important;
        margin-left: .5rem !important
    }

    .mx-xxl-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important
    }

    .mx-xxl-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important
    }

    .mx-xxl-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important
    }

    .mx-xxl-auto {
        margin-right: auto !important;
        margin-left: auto !important
    }

    .my-xxl-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important
    }

    .my-xxl-1 {
        margin-top: .25rem !important;
        margin-bottom: .25rem !important
    }

    .my-xxl-2 {
        margin-top: .5rem !important;
        margin-bottom: .5rem !important
    }

    .my-xxl-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important
    }

    .my-xxl-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important
    }

    .my-xxl-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important
    }

    .my-xxl-auto {
        margin-top: auto !important;
        margin-bottom: auto !important
    }

    .mt-xxl-0 {
        margin-top: 0 !important
    }

    .mt-xxl-1 {
        margin-top: .25rem !important
    }

    .mt-xxl-2 {
        margin-top: .5rem !important
    }

    .mt-xxl-3 {
        margin-top: 1rem !important
    }

    .mt-xxl-4 {
        margin-top: 1.5rem !important
    }

    .mt-xxl-5 {
        margin-top: 3rem !important
    }

    .mt-xxl-auto {
        margin-top: auto !important
    }

    .mb-xxl-0 {
        margin-bottom: 0 !important
    }

    .mb-xxl-1 {
        margin-bottom: .25rem !important
    }

    .mb-xxl-2 {
        margin-bottom: .5rem !important
    }

    .mb-xxl-3 {
        margin-bottom: 1rem !important
    }

    .mb-xxl-4 {
        margin-bottom: 1.5rem !important
    }

    .mb-xxl-5 {
        margin-bottom: 3rem !important
    }

    .mb-xxl-auto {
        margin-bottom: auto !important
    }

    .m-xxl-n1 {
        margin: -0.25rem !important
    }

    .m-xxl-n2 {
        margin: -0.5rem !important
    }

    .m-xxl-n3 {
        margin: -1rem !important
    }

    .m-xxl-n4 {
        margin: -1.5rem !important
    }

    .m-xxl-n5 {
        margin: -3rem !important
    }

    .mx-xxl-n1 {
        margin-right: -0.25rem !important;
        margin-left: -0.25rem !important
    }

    .mx-xxl-n2 {
        margin-right: -0.5rem !important;
        margin-left: -0.5rem !important
    }

    .mx-xxl-n3 {
        margin-right: -1rem !important;
        margin-left: -1rem !important
    }

    .mx-xxl-n4 {
        margin-right: -1.5rem !important;
        margin-left: -1.5rem !important
    }

    .mx-xxl-n5 {
        margin-right: -3rem !important;
        margin-left: -3rem !important
    }

    .my-xxl-n1 {
        margin-top: -0.25rem !important;
        margin-bottom: -0.25rem !important
    }

    .my-xxl-n2 {
        margin-top: -0.5rem !important;
        margin-bottom: -0.5rem !important
    }

    .my-xxl-n3 {
        margin-top: -1rem !important;
        margin-bottom: -1rem !important
    }

    .my-xxl-n4 {
        margin-top: -1.5rem !important;
        margin-bottom: -1.5rem !important
    }

    .my-xxl-n5 {
        margin-top: -3rem !important;
        margin-bottom: -3rem !important
    }

    .mt-xxl-n1 {
        margin-top: -0.25rem !important
    }

    .mt-xxl-n2 {
        margin-top: -0.5rem !important
    }

    .mt-xxl-n3 {
        margin-top: -1rem !important
    }

    .mt-xxl-n4 {
        margin-top: -1.5rem !important
    }

    .mt-xxl-n5 {
        margin-top: -3rem !important
    }

    .mb-xxl-n1 {
        margin-bottom: -0.25rem !important
    }

    .mb-xxl-n2 {
        margin-bottom: -0.5rem !important
    }

    .mb-xxl-n3 {
        margin-bottom: -1rem !important
    }

    .mb-xxl-n4 {
        margin-bottom: -1.5rem !important
    }

    .mb-xxl-n5 {
        margin-bottom: -3rem !important
    }

    .p-xxl-0 {
        padding: 0 !important
    }

    .p-xxl-1 {
        padding: .25rem !important
    }

    .p-xxl-2 {
        padding: .5rem !important
    }

    .p-xxl-3 {
        padding: 1rem !important
    }

    .p-xxl-4 {
        padding: 1.5rem !important
    }

    .p-xxl-5 {
        padding: 3rem !important
    }

    .px-xxl-0 {
        padding-right: 0 !important;
        padding-left: 0 !important
    }

    .px-xxl-1 {
        padding-right: .25rem !important;
        padding-left: .25rem !important
    }

    .px-xxl-2 {
        padding-right: .5rem !important;
        padding-left: .5rem !important
    }

    .px-xxl-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important
    }

    .px-xxl-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important
    }

    .px-xxl-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important
    }

    .py-xxl-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important
    }

    .py-xxl-1 {
        padding-top: .25rem !important;
        padding-bottom: .25rem !important
    }

    .py-xxl-2 {
        padding-top: .5rem !important;
        padding-bottom: .5rem !important
    }

    .py-xxl-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important
    }

    .py-xxl-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important
    }

    .py-xxl-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important
    }

    .pt-xxl-0 {
        padding-top: 0 !important
    }

    .pt-xxl-1 {
        padding-top: .25rem !important
    }

    .pt-xxl-2 {
        padding-top: .5rem !important
    }

    .pt-xxl-3 {
        padding-top: 1rem !important
    }

    .pt-xxl-4 {
        padding-top: 1.5rem !important
    }

    .pt-xxl-5 {
        padding-top: 3rem !important
    }

    .pb-xxl-0 {
        padding-bottom: 0 !important
    }

    .pb-xxl-1 {
        padding-bottom: .25rem !important
    }

    .pb-xxl-2 {
        padding-bottom: .5rem !important
    }

    .pb-xxl-3 {
        padding-bottom: 1rem !important
    }

    .pb-xxl-4 {
        padding-bottom: 1.5rem !important
    }

    .pb-xxl-5 {
        padding-bottom: 3rem !important
    }

    .gap-xxl-0 {
        gap: 0 !important
    }

    .gap-xxl-1 {
        gap: .25rem !important
    }

    .gap-xxl-2 {
        gap: .5rem !important
    }

    .gap-xxl-3 {
        gap: 1rem !important
    }

    .gap-xxl-4 {
        gap: 1.5rem !important
    }

    .gap-xxl-5 {
        gap: 3rem !important
    }

    .row-gap-xxl-0 {
        row-gap: 0 !important
    }

    .row-gap-xxl-1 {
        row-gap: .25rem !important
    }

    .row-gap-xxl-2 {
        row-gap: .5rem !important
    }

    .row-gap-xxl-3 {
        row-gap: 1rem !important
    }

    .row-gap-xxl-4 {
        row-gap: 1.5rem !important
    }

    .row-gap-xxl-5 {
        row-gap: 3rem !important
    }

    .column-gap-xxl-0 {
        column-gap: 0 !important
    }

    .column-gap-xxl-1 {
        column-gap: .25rem !important
    }

    .column-gap-xxl-2 {
        column-gap: .5rem !important
    }

    .column-gap-xxl-3 {
        column-gap: 1rem !important
    }

    .column-gap-xxl-4 {
        column-gap: 1.5rem !important
    }

    .column-gap-xxl-5 {
        column-gap: 3rem !important
    }
}

@media(min-width: 1200px) {
    .fs-1 {
        font-size:2.375rem !important
    }

    .fs-2 {
        font-size: 2rem !important
    }

    .fs-3 {
        font-size: 1.625rem !important
    }

    .fs-4 {
        font-size: 1.375rem !important
    }
}

@media print {
    .d-print-inline {
        display: inline !important
    }

    .d-print-inline-block {
        display: inline-block !important
    }

    .d-print-block {
        display: block !important
    }

    .d-print-grid {
        display: grid !important
    }

    .d-print-table {
        display: table !important
    }

    .d-print-table-row {
        display: table-row !important
    }

    .d-print-table-cell {
        display: table-cell !important
    }

    .d-print-flex {
        display: flex !important
    }

    .d-print-inline-flex {
        display: inline-flex !important
    }

    .d-print-none {
        display: none !important
    }
}

html:not([dir=rtl]) .object-fit-contain {
    object-fit: contain !important
}

html:not([dir=rtl]) .object-fit-cover {
    object-fit: cover !important
}

html:not([dir=rtl]) .object-fit-fill {
    object-fit: fill !important
}

html:not([dir=rtl]) .object-fit-scale {
    object-fit: scale-down !important
}

html:not([dir=rtl]) .object-fit-none {
    object-fit: none !important
}

html:not([dir=rtl]) .border-solid {
    border-style: solid !important
}

html:not([dir=rtl]) .border-dashed {
    border-style: dashed !important
}

html:not([dir=rtl]) .border-none {
    border-style: none !important
}

html:not([dir=rtl]) .border-label-primary {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-primary-rgb), var(--bs-border-opacity)) !important
}

html:not([dir=rtl]) .border-label-secondary {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-secondary-rgb), var(--bs-border-opacity)) !important
}

html:not([dir=rtl]) .border-label-success {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important
}

html:not([dir=rtl]) .border-label-info {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-info-rgb), var(--bs-border-opacity)) !important
}

html:not([dir=rtl]) .border-label-warning {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-warning-rgb), var(--bs-border-opacity)) !important
}

html:not([dir=rtl]) .border-label-danger {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-danger-rgb), var(--bs-border-opacity)) !important
}

html:not([dir=rtl]) .border-label-light {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-light-rgb), var(--bs-border-opacity)) !important
}

html:not([dir=rtl]) .border-label-dark {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-dark-rgb), var(--bs-border-opacity)) !important
}

html:not([dir=rtl]) .border-label-gray {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-gray-rgb), var(--bs-border-opacity)) !important
}

html:not([dir=rtl]) .border-label-black {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-black-rgb), var(--bs-border-opacity)) !important
}

html:not([dir=rtl]) .border-label-white {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-white-rgb), var(--bs-border-opacity)) !important
}

html:not([dir=rtl]) .border-opacity-10 {
    --bs-border-opacity: 0.1
}

html:not([dir=rtl]) .border-opacity-25 {
    --bs-border-opacity: 0.25
}

html:not([dir=rtl]) .border-opacity-50 {
    --bs-border-opacity: 0.5
}

html:not([dir=rtl]) .border-opacity-75 {
    --bs-border-opacity: 0.75
}

html:not([dir=rtl]) .border-opacity-100 {
    --bs-border-opacity: 1
}

html:not([dir=rtl]) .row-gap-0 {
    row-gap: 0 !important
}

html:not([dir=rtl]) .row-gap-1 {
    row-gap: .25rem !important
}

html:not([dir=rtl]) .row-gap-2 {
    row-gap: .5rem !important
}

html:not([dir=rtl]) .row-gap-3 {
    row-gap: 1rem !important
}

html:not([dir=rtl]) .row-gap-4 {
    row-gap: 1.5rem !important
}

html:not([dir=rtl]) .row-gap-5 {
    row-gap: 3rem !important
}

html:not([dir=rtl]) .column-gap-0 {
    column-gap: 0 !important
}

html:not([dir=rtl]) .column-gap-1 {
    column-gap: .25rem !important
}

html:not([dir=rtl]) .column-gap-2 {
    column-gap: .5rem !important
}

html:not([dir=rtl]) .column-gap-3 {
    column-gap: 1rem !important
}

html:not([dir=rtl]) .column-gap-4 {
    column-gap: 1.5rem !important
}

html:not([dir=rtl]) .column-gap-5 {
    column-gap: 3rem !important
}

html:not([dir=rtl]) .text-opacity-25 {
    --bs-text-opacity: 0.25
}

html:not([dir=rtl]) .text-opacity-50 {
    --bs-text-opacity: 0.5
}

html:not([dir=rtl]) .text-opacity-75 {
    --bs-text-opacity: 0.75
}

html:not([dir=rtl]) .text-opacity-100 {
    --bs-text-opacity: 1
}

html:not([dir=rtl]) .link-opacity-10 {
    --bs-link-opacity: 0.1
}

html:not([dir=rtl]) .link-opacity-10-hover:hover {
    --bs-link-opacity: 0.1
}

html:not([dir=rtl]) .link-opacity-25 {
    --bs-link-opacity: 0.25
}

html:not([dir=rtl]) .link-opacity-25-hover:hover {
    --bs-link-opacity: 0.25
}

html:not([dir=rtl]) .link-opacity-50 {
    --bs-link-opacity: 0.5
}

html:not([dir=rtl]) .link-opacity-50-hover:hover {
    --bs-link-opacity: 0.5
}

html:not([dir=rtl]) .link-opacity-75 {
    --bs-link-opacity: 0.75
}

html:not([dir=rtl]) .link-opacity-75-hover:hover {
    --bs-link-opacity: 0.75
}

html:not([dir=rtl]) .link-opacity-100 {
    --bs-link-opacity: 1
}

html:not([dir=rtl]) .link-opacity-100-hover:hover {
    --bs-link-opacity: 1
}

html:not([dir=rtl]) .link-offset-1 {
    text-underline-offset: .125em !important
}

html:not([dir=rtl]) .link-offset-1-hover:hover {
    text-underline-offset: .125em !important
}

html:not([dir=rtl]) .link-offset-2 {
    text-underline-offset: .25em !important
}

html:not([dir=rtl]) .link-offset-2-hover:hover {
    text-underline-offset: .25em !important
}

html:not([dir=rtl]) .link-offset-3 {
    text-underline-offset: .375em !important
}

html:not([dir=rtl]) .link-offset-3-hover:hover {
    text-underline-offset: .375em !important
}

html:not([dir=rtl]) .link-underline-primary {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-primary-rgb), var(--bs-link-underline-opacity)) !important
}

html:not([dir=rtl]) .link-underline-secondary {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-secondary-rgb), var(--bs-link-underline-opacity)) !important
}

html:not([dir=rtl]) .link-underline-success {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-success-rgb), var(--bs-link-underline-opacity)) !important
}

html:not([dir=rtl]) .link-underline-info {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-info-rgb), var(--bs-link-underline-opacity)) !important
}

html:not([dir=rtl]) .link-underline-warning {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-warning-rgb), var(--bs-link-underline-opacity)) !important
}

html:not([dir=rtl]) .link-underline-danger {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-danger-rgb), var(--bs-link-underline-opacity)) !important
}

html:not([dir=rtl]) .link-underline-light {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-light-rgb), var(--bs-link-underline-opacity)) !important
}

html:not([dir=rtl]) .link-underline-dark {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-dark-rgb), var(--bs-link-underline-opacity)) !important
}

html:not([dir=rtl]) .link-underline-gray {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-gray-rgb), var(--bs-link-underline-opacity)) !important
}

html:not([dir=rtl]) .link-underline {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-link-color-rgb), var(--bs-link-underline-opacity, 1)) !important
}

html:not([dir=rtl]) .link-underline-opacity-0 {
    --bs-link-underline-opacity: 0
}

html:not([dir=rtl]) .link-underline-opacity-0-hover:hover {
    --bs-link-underline-opacity: 0
}

html:not([dir=rtl]) .link-underline-opacity-10 {
    --bs-link-underline-opacity: 0.1
}

html:not([dir=rtl]) .link-underline-opacity-10-hover:hover {
    --bs-link-underline-opacity: 0.1
}

html:not([dir=rtl]) .link-underline-opacity-25 {
    --bs-link-underline-opacity: 0.25
}

html:not([dir=rtl]) .link-underline-opacity-25-hover:hover {
    --bs-link-underline-opacity: 0.25
}

html:not([dir=rtl]) .link-underline-opacity-50 {
    --bs-link-underline-opacity: 0.5
}

html:not([dir=rtl]) .link-underline-opacity-50-hover:hover {
    --bs-link-underline-opacity: 0.5
}

html:not([dir=rtl]) .link-underline-opacity-75 {
    --bs-link-underline-opacity: 0.75
}

html:not([dir=rtl]) .link-underline-opacity-75-hover:hover {
    --bs-link-underline-opacity: 0.75
}

html:not([dir=rtl]) .link-underline-opacity-100 {
    --bs-link-underline-opacity: 1
}

html:not([dir=rtl]) .link-underline-opacity-100-hover:hover {
    --bs-link-underline-opacity: 1
}

html:not([dir=rtl]) .bg-opacity-10 {
    --bs-bg-opacity: 0.1
}

html:not([dir=rtl]) .bg-opacity-25 {
    --bs-bg-opacity: 0.25
}

html:not([dir=rtl]) .bg-opacity-50 {
    --bs-bg-opacity: 0.5
}

html:not([dir=rtl]) .bg-opacity-75 {
    --bs-bg-opacity: 0.75
}

html:not([dir=rtl]) .bg-opacity-100 {
    --bs-bg-opacity: 1
}

html:not([dir=rtl]) .bg-primary-subtle {
    background-color: var(--bs-primary-bg-subtle) !important
}

html:not([dir=rtl]) .bg-secondary-subtle {
    background-color: var(--bs-secondary-bg-subtle) !important
}

html:not([dir=rtl]) .bg-success-subtle {
    background-color: var(--bs-success-bg-subtle) !important
}

html:not([dir=rtl]) .bg-info-subtle {
    background-color: var(--bs-info-bg-subtle) !important
}

html:not([dir=rtl]) .bg-warning-subtle {
    background-color: var(--bs-warning-bg-subtle) !important
}

html:not([dir=rtl]) .bg-danger-subtle {
    background-color: var(--bs-danger-bg-subtle) !important
}

html:not([dir=rtl]) .bg-light-subtle {
    background-color: var(--bs-light-bg-subtle) !important
}

html:not([dir=rtl]) .bg-dark-subtle {
    background-color: var(--bs-dark-bg-subtle) !important
}

html:not([dir=rtl]) .z-n1 {
    z-index: -1 !important
}

html:not([dir=rtl]) .z-0 {
    z-index: 0 !important
}

html:not([dir=rtl]) .z-1 {
    z-index: 1 !important
}

html:not([dir=rtl]) .z-2 {
    z-index: 2 !important
}

html:not([dir=rtl]) .z-3 {
    z-index: 3 !important
}

html:not([dir=rtl]) .z-4 {
    z-index: 4 !important
}

html:not([dir=rtl]) .z-5 {
    z-index: 5 !important
}

html:not([dir=rtl]) .float-start {
    float: left !important
}

html:not([dir=rtl]) .float-end {
    float: right !important
}

html:not([dir=rtl]) .float-none {
    float: none !important
}

html:not([dir=rtl]) .end-0 {
    right: 0 !important
}

html:not([dir=rtl]) .end-50 {
    right: 50% !important
}

html:not([dir=rtl]) .end-100 {
    right: 100% !important
}

html:not([dir=rtl]) .start-0 {
    left: 0 !important
}

html:not([dir=rtl]) .start-50 {
    left: 50% !important
}

html:not([dir=rtl]) .start-100 {
    left: 100% !important
}

html:not([dir=rtl]) .translate-middle {
    transform: translate(-50%, -50%) !important
}

html:not([dir=rtl]) .translate-middle-x {
    transform: translateX(-50%) !important
}

html:not([dir=rtl]) .translate-middle-y {
    transform: translateY(-50%) !important
}

html:not([dir=rtl]) .border-end {
    border-right: 1px solid #dbdade !important
}

html:not([dir=rtl]) .border-end-0 {
    border-right: 0 !important
}

html:not([dir=rtl]) .border-start {
    border-left: 1px solid #dbdade !important
}

html:not([dir=rtl]) .border-start-0 {
    border-left: 0 !important
}

html:not([dir=rtl]) .border-left-dashed {
    border-left-style: dashed !important
}

html:not([dir=rtl]) .border-right-dashed {
    border-right-style: dashed !important
}

html:not([dir=rtl]) .text-start {
    text-align: left !important
}

html:not([dir=rtl]) .text-end {
    text-align: right !important
}

html:not([dir=rtl]) .text-center {
    text-align: center !important
}

html:not([dir=rtl]) .rounded-end {
    border-top-right-radius: .375rem !important;
    border-bottom-right-radius: .375rem !important
}

html:not([dir=rtl]) .rounded-start {
    border-bottom-left-radius: .375rem !important;
    border-top-left-radius: .375rem !important
}

html:not([dir=rtl]) .rounded-start-top {
    border-top-left-radius: .375rem !important
}

html:not([dir=rtl]) .rounded-start-bottom {
    border-bottom-left-radius: .375rem !important
}

html:not([dir=rtl]) .rounded-end-top {
    border-top-right-radius: .375rem !important
}

html:not([dir=rtl]) .rounded-end-bottom {
    border-bottom-right-radius: .375rem !important
}

html:not([dir=rtl]) .me-0 {
    margin-right: 0 !important
}

html:not([dir=rtl]) .me-1 {
    margin-right: .25rem !important
}

html:not([dir=rtl]) .me-2 {
    margin-right: .5rem !important
}

html:not([dir=rtl]) .me-3 {
    margin-right: 1rem !important
}

html:not([dir=rtl]) .me-4 {
    margin-right: 1.5rem !important
}

html:not([dir=rtl]) .me-5 {
    margin-right: 3rem !important
}

html:not([dir=rtl]) .me-auto {
    margin-right: auto !important
}

html:not([dir=rtl]) .ms-0 {
    margin-left: 0 !important
}

html:not([dir=rtl]) .ms-1 {
    margin-left: .25rem !important
}

html:not([dir=rtl]) .ms-2 {
    margin-left: .5rem !important
}

html:not([dir=rtl]) .ms-3 {
    margin-left: 1rem !important
}

html:not([dir=rtl]) .ms-4 {
    margin-left: 1.5rem !important
}

html:not([dir=rtl]) .ms-5 {
    margin-left: 3rem !important
}

html:not([dir=rtl]) .ms-auto {
    margin-left: auto !important
}

html:not([dir=rtl]) .me-n1 {
    margin-right: -0.25rem !important
}

html:not([dir=rtl]) .me-n2 {
    margin-right: -0.5rem !important
}

html:not([dir=rtl]) .me-n3 {
    margin-right: -1rem !important
}

html:not([dir=rtl]) .me-n4 {
    margin-right: -1.5rem !important
}

html:not([dir=rtl]) .me-n5 {
    margin-right: -3rem !important
}

html:not([dir=rtl]) .ms-n1 {
    margin-left: -0.25rem !important
}

html:not([dir=rtl]) .ms-n2 {
    margin-left: -0.5rem !important
}

html:not([dir=rtl]) .ms-n3 {
    margin-left: -1rem !important
}

html:not([dir=rtl]) .ms-n4 {
    margin-left: -1.5rem !important
}

html:not([dir=rtl]) .ms-n5 {
    margin-left: -3rem !important
}

html:not([dir=rtl]) .pe-0 {
    padding-right: 0 !important
}

html:not([dir=rtl]) .pe-1 {
    padding-right: .25rem !important
}

html:not([dir=rtl]) .pe-2 {
    padding-right: .5rem !important
}

html:not([dir=rtl]) .pe-3 {
    padding-right: 1rem !important
}

html:not([dir=rtl]) .pe-4 {
    padding-right: 1.5rem !important
}

html:not([dir=rtl]) .pe-5 {
    padding-right: 3rem !important
}

html:not([dir=rtl]) .ps-0 {
    padding-left: 0 !important
}

html:not([dir=rtl]) .ps-1 {
    padding-left: .25rem !important
}

html:not([dir=rtl]) .ps-2 {
    padding-left: .5rem !important
}

html:not([dir=rtl]) .ps-3 {
    padding-left: 1rem !important
}

html:not([dir=rtl]) .ps-4 {
    padding-left: 1.5rem !important
}

html:not([dir=rtl]) .ps-5 {
    padding-left: 3rem !important
}

html:not([dir=rtl]) .rotate-0 {
    transform: rotate(0deg) !important
}

html:not([dir=rtl]) .rotate-90 {
    transform: rotate(90deg) !important
}

html:not([dir=rtl]) .rotate-180 {
    transform: rotate(180deg) !important
}

html:not([dir=rtl]) .rotate-270 {
    transform: rotate(270deg) !important
}

html:not([dir=rtl]) .rotate-n90 {
    transform: rotate(-90deg) !important
}

html:not([dir=rtl]) .rotate-n180 {
    transform: rotate(-180deg) !important
}

html:not([dir=rtl]) .rotate-n270 {
    transform: rotate(-270deg) !important
}

html:not([dir=rtl]) .scaleX-n1 {
    transform: scaleX(-1) !important
}

html:not([dir=rtl]) .scaleY-n1 {
    transform: scaleY(-1) !important
}

@media(min-width: 576px) {
    html:not([dir=rtl]) .object-fit-sm-contain {
        object-fit:contain !important
    }

    html:not([dir=rtl]) .object-fit-sm-cover {
        object-fit: cover !important
    }

    html:not([dir=rtl]) .object-fit-sm-fill {
        object-fit: fill !important
    }

    html:not([dir=rtl]) .object-fit-sm-scale {
        object-fit: scale-down !important
    }

    html:not([dir=rtl]) .object-fit-sm-none {
        object-fit: none !important
    }

    html:not([dir=rtl]) .border-sm-solid {
        border-style: solid !important
    }

    html:not([dir=rtl]) .border-sm-dashed {
        border-style: dashed !important
    }

    html:not([dir=rtl]) .border-sm-none {
        border-style: none !important
    }

    html:not([dir=rtl]) .row-gap-sm-0 {
        row-gap: 0 !important
    }

    html:not([dir=rtl]) .row-gap-sm-1 {
        row-gap: .25rem !important
    }

    html:not([dir=rtl]) .row-gap-sm-2 {
        row-gap: .5rem !important
    }

    html:not([dir=rtl]) .row-gap-sm-3 {
        row-gap: 1rem !important
    }

    html:not([dir=rtl]) .row-gap-sm-4 {
        row-gap: 1.5rem !important
    }

    html:not([dir=rtl]) .row-gap-sm-5 {
        row-gap: 3rem !important
    }

    html:not([dir=rtl]) .column-gap-sm-0 {
        column-gap: 0 !important
    }

    html:not([dir=rtl]) .column-gap-sm-1 {
        column-gap: .25rem !important
    }

    html:not([dir=rtl]) .column-gap-sm-2 {
        column-gap: .5rem !important
    }

    html:not([dir=rtl]) .column-gap-sm-3 {
        column-gap: 1rem !important
    }

    html:not([dir=rtl]) .column-gap-sm-4 {
        column-gap: 1.5rem !important
    }

    html:not([dir=rtl]) .column-gap-sm-5 {
        column-gap: 3rem !important
    }

    html:not([dir=rtl]) .float-sm-start {
        float: left !important
    }

    html:not([dir=rtl]) .float-sm-end {
        float: right !important
    }

    html:not([dir=rtl]) .float-sm-none {
        float: none !important
    }

    html:not([dir=rtl]) .text-sm-start {
        text-align: left !important
    }

    html:not([dir=rtl]) .text-sm-end {
        text-align: right !important
    }

    html:not([dir=rtl]) .text-sm-center {
        text-align: center !important
    }

    html:not([dir=rtl]) .me-sm-0 {
        margin-right: 0 !important
    }

    html:not([dir=rtl]) .me-sm-1 {
        margin-right: .25rem !important
    }

    html:not([dir=rtl]) .me-sm-2 {
        margin-right: .5rem !important
    }

    html:not([dir=rtl]) .me-sm-3 {
        margin-right: 1rem !important
    }

    html:not([dir=rtl]) .me-sm-4 {
        margin-right: 1.5rem !important
    }

    html:not([dir=rtl]) .me-sm-5 {
        margin-right: 3rem !important
    }

    html:not([dir=rtl]) .me-sm-auto {
        margin-right: auto !important
    }

    html:not([dir=rtl]) .ms-sm-0 {
        margin-left: 0 !important
    }

    html:not([dir=rtl]) .ms-sm-1 {
        margin-left: .25rem !important
    }

    html:not([dir=rtl]) .ms-sm-2 {
        margin-left: .5rem !important
    }

    html:not([dir=rtl]) .ms-sm-3 {
        margin-left: 1rem !important
    }

    html:not([dir=rtl]) .ms-sm-4 {
        margin-left: 1.5rem !important
    }

    html:not([dir=rtl]) .ms-sm-5 {
        margin-left: 3rem !important
    }

    html:not([dir=rtl]) .ms-sm-auto {
        margin-left: auto !important
    }

    html:not([dir=rtl]) .me-sm-n1 {
        margin-right: -0.25rem !important
    }

    html:not([dir=rtl]) .me-sm-n2 {
        margin-right: -0.5rem !important
    }

    html:not([dir=rtl]) .me-sm-n3 {
        margin-right: -1rem !important
    }

    html:not([dir=rtl]) .me-sm-n4 {
        margin-right: -1.5rem !important
    }

    html:not([dir=rtl]) .me-sm-n5 {
        margin-right: -3rem !important
    }

    html:not([dir=rtl]) .ms-sm-n1 {
        margin-left: -0.25rem !important
    }

    html:not([dir=rtl]) .ms-sm-n2 {
        margin-left: -0.5rem !important
    }

    html:not([dir=rtl]) .ms-sm-n3 {
        margin-left: -1rem !important
    }

    html:not([dir=rtl]) .ms-sm-n4 {
        margin-left: -1.5rem !important
    }

    html:not([dir=rtl]) .ms-sm-n5 {
        margin-left: -3rem !important
    }

    html:not([dir=rtl]) .pe-sm-0 {
        padding-right: 0 !important
    }

    html:not([dir=rtl]) .pe-sm-1 {
        padding-right: .25rem !important
    }

    html:not([dir=rtl]) .pe-sm-2 {
        padding-right: .5rem !important
    }

    html:not([dir=rtl]) .pe-sm-3 {
        padding-right: 1rem !important
    }

    html:not([dir=rtl]) .pe-sm-4 {
        padding-right: 1.5rem !important
    }

    html:not([dir=rtl]) .pe-sm-5 {
        padding-right: 3rem !important
    }

    html:not([dir=rtl]) .ps-sm-0 {
        padding-left: 0 !important
    }

    html:not([dir=rtl]) .ps-sm-1 {
        padding-left: .25rem !important
    }

    html:not([dir=rtl]) .ps-sm-2 {
        padding-left: .5rem !important
    }

    html:not([dir=rtl]) .ps-sm-3 {
        padding-left: 1rem !important
    }

    html:not([dir=rtl]) .ps-sm-4 {
        padding-left: 1.5rem !important
    }

    html:not([dir=rtl]) .ps-sm-5 {
        padding-left: 3rem !important
    }
}

@media(min-width: 768px) {
    html:not([dir=rtl]) .object-fit-md-contain {
        object-fit:contain !important
    }

    html:not([dir=rtl]) .object-fit-md-cover {
        object-fit: cover !important
    }

    html:not([dir=rtl]) .object-fit-md-fill {
        object-fit: fill !important
    }

    html:not([dir=rtl]) .object-fit-md-scale {
        object-fit: scale-down !important
    }

    html:not([dir=rtl]) .object-fit-md-none {
        object-fit: none !important
    }

    html:not([dir=rtl]) .border-md-solid {
        border-style: solid !important
    }

    html:not([dir=rtl]) .border-md-dashed {
        border-style: dashed !important
    }

    html:not([dir=rtl]) .border-md-none {
        border-style: none !important
    }

    html:not([dir=rtl]) .row-gap-md-0 {
        row-gap: 0 !important
    }

    html:not([dir=rtl]) .row-gap-md-1 {
        row-gap: .25rem !important
    }

    html:not([dir=rtl]) .row-gap-md-2 {
        row-gap: .5rem !important
    }

    html:not([dir=rtl]) .row-gap-md-3 {
        row-gap: 1rem !important
    }

    html:not([dir=rtl]) .row-gap-md-4 {
        row-gap: 1.5rem !important
    }

    html:not([dir=rtl]) .row-gap-md-5 {
        row-gap: 3rem !important
    }

    html:not([dir=rtl]) .column-gap-md-0 {
        column-gap: 0 !important
    }

    html:not([dir=rtl]) .column-gap-md-1 {
        column-gap: .25rem !important
    }

    html:not([dir=rtl]) .column-gap-md-2 {
        column-gap: .5rem !important
    }

    html:not([dir=rtl]) .column-gap-md-3 {
        column-gap: 1rem !important
    }

    html:not([dir=rtl]) .column-gap-md-4 {
        column-gap: 1.5rem !important
    }

    html:not([dir=rtl]) .column-gap-md-5 {
        column-gap: 3rem !important
    }

    html:not([dir=rtl]) .float-md-start {
        float: left !important
    }

    html:not([dir=rtl]) .float-md-end {
        float: right !important
    }

    html:not([dir=rtl]) .float-md-none {
        float: none !important
    }

    html:not([dir=rtl]) .text-md-start {
        text-align: left !important
    }

    html:not([dir=rtl]) .text-md-end {
        text-align: right !important
    }

    html:not([dir=rtl]) .text-md-center {
        text-align: center !important
    }

    html:not([dir=rtl]) .me-md-0 {
        margin-right: 0 !important
    }

    html:not([dir=rtl]) .me-md-1 {
        margin-right: .25rem !important
    }

    html:not([dir=rtl]) .me-md-2 {
        margin-right: .5rem !important
    }

    html:not([dir=rtl]) .me-md-3 {
        margin-right: 1rem !important
    }

    html:not([dir=rtl]) .me-md-4 {
        margin-right: 1.5rem !important
    }

    html:not([dir=rtl]) .me-md-5 {
        margin-right: 3rem !important
    }

    html:not([dir=rtl]) .me-md-auto {
        margin-right: auto !important
    }

    html:not([dir=rtl]) .ms-md-0 {
        margin-left: 0 !important
    }

    html:not([dir=rtl]) .ms-md-1 {
        margin-left: .25rem !important
    }

    html:not([dir=rtl]) .ms-md-2 {
        margin-left: .5rem !important
    }

    html:not([dir=rtl]) .ms-md-3 {
        margin-left: 1rem !important
    }

    html:not([dir=rtl]) .ms-md-4 {
        margin-left: 1.5rem !important
    }

    html:not([dir=rtl]) .ms-md-5 {
        margin-left: 3rem !important
    }

    html:not([dir=rtl]) .ms-md-auto {
        margin-left: auto !important
    }

    html:not([dir=rtl]) .me-md-n1 {
        margin-right: -0.25rem !important
    }

    html:not([dir=rtl]) .me-md-n2 {
        margin-right: -0.5rem !important
    }

    html:not([dir=rtl]) .me-md-n3 {
        margin-right: -1rem !important
    }

    html:not([dir=rtl]) .me-md-n4 {
        margin-right: -1.5rem !important
    }

    html:not([dir=rtl]) .me-md-n5 {
        margin-right: -3rem !important
    }

    html:not([dir=rtl]) .ms-md-n1 {
        margin-left: -0.25rem !important
    }

    html:not([dir=rtl]) .ms-md-n2 {
        margin-left: -0.5rem !important
    }

    html:not([dir=rtl]) .ms-md-n3 {
        margin-left: -1rem !important
    }

    html:not([dir=rtl]) .ms-md-n4 {
        margin-left: -1.5rem !important
    }

    html:not([dir=rtl]) .ms-md-n5 {
        margin-left: -3rem !important
    }

    html:not([dir=rtl]) .pe-md-0 {
        padding-right: 0 !important
    }

    html:not([dir=rtl]) .pe-md-1 {
        padding-right: .25rem !important
    }

    html:not([dir=rtl]) .pe-md-2 {
        padding-right: .5rem !important
    }

    html:not([dir=rtl]) .pe-md-3 {
        padding-right: 1rem !important
    }

    html:not([dir=rtl]) .pe-md-4 {
        padding-right: 1.5rem !important
    }

    html:not([dir=rtl]) .pe-md-5 {
        padding-right: 3rem !important
    }

    html:not([dir=rtl]) .ps-md-0 {
        padding-left: 0 !important
    }

    html:not([dir=rtl]) .ps-md-1 {
        padding-left: .25rem !important
    }

    html:not([dir=rtl]) .ps-md-2 {
        padding-left: .5rem !important
    }

    html:not([dir=rtl]) .ps-md-3 {
        padding-left: 1rem !important
    }

    html:not([dir=rtl]) .ps-md-4 {
        padding-left: 1.5rem !important
    }

    html:not([dir=rtl]) .ps-md-5 {
        padding-left: 3rem !important
    }
}

@media(min-width: 992px) {
    html:not([dir=rtl]) .object-fit-lg-contain {
        object-fit:contain !important
    }

    html:not([dir=rtl]) .object-fit-lg-cover {
        object-fit: cover !important
    }

    html:not([dir=rtl]) .object-fit-lg-fill {
        object-fit: fill !important
    }

    html:not([dir=rtl]) .object-fit-lg-scale {
        object-fit: scale-down !important
    }

    html:not([dir=rtl]) .object-fit-lg-none {
        object-fit: none !important
    }

    html:not([dir=rtl]) .border-lg-solid {
        border-style: solid !important
    }

    html:not([dir=rtl]) .border-lg-dashed {
        border-style: dashed !important
    }

    html:not([dir=rtl]) .border-lg-none {
        border-style: none !important
    }

    html:not([dir=rtl]) .row-gap-lg-0 {
        row-gap: 0 !important
    }

    html:not([dir=rtl]) .row-gap-lg-1 {
        row-gap: .25rem !important
    }

    html:not([dir=rtl]) .row-gap-lg-2 {
        row-gap: .5rem !important
    }

    html:not([dir=rtl]) .row-gap-lg-3 {
        row-gap: 1rem !important
    }

    html:not([dir=rtl]) .row-gap-lg-4 {
        row-gap: 1.5rem !important
    }

    html:not([dir=rtl]) .row-gap-lg-5 {
        row-gap: 3rem !important
    }

    html:not([dir=rtl]) .column-gap-lg-0 {
        column-gap: 0 !important
    }

    html:not([dir=rtl]) .column-gap-lg-1 {
        column-gap: .25rem !important
    }

    html:not([dir=rtl]) .column-gap-lg-2 {
        column-gap: .5rem !important
    }

    html:not([dir=rtl]) .column-gap-lg-3 {
        column-gap: 1rem !important
    }

    html:not([dir=rtl]) .column-gap-lg-4 {
        column-gap: 1.5rem !important
    }

    html:not([dir=rtl]) .column-gap-lg-5 {
        column-gap: 3rem !important
    }

    html:not([dir=rtl]) .float-lg-start {
        float: left !important
    }

    html:not([dir=rtl]) .float-lg-end {
        float: right !important
    }

    html:not([dir=rtl]) .float-lg-none {
        float: none !important
    }

    html:not([dir=rtl]) .text-lg-start {
        text-align: left !important
    }

    html:not([dir=rtl]) .text-lg-end {
        text-align: right !important
    }

    html:not([dir=rtl]) .text-lg-center {
        text-align: center !important
    }

    html:not([dir=rtl]) .me-lg-0 {
        margin-right: 0 !important
    }

    html:not([dir=rtl]) .me-lg-1 {
        margin-right: .25rem !important
    }

    html:not([dir=rtl]) .me-lg-2 {
        margin-right: .5rem !important
    }

    html:not([dir=rtl]) .me-lg-3 {
        margin-right: 1rem !important
    }

    html:not([dir=rtl]) .me-lg-4 {
        margin-right: 1.5rem !important
    }

    html:not([dir=rtl]) .me-lg-5 {
        margin-right: 3rem !important
    }

    html:not([dir=rtl]) .me-lg-auto {
        margin-right: auto !important
    }

    html:not([dir=rtl]) .ms-lg-0 {
        margin-left: 0 !important
    }

    html:not([dir=rtl]) .ms-lg-1 {
        margin-left: .25rem !important
    }

    html:not([dir=rtl]) .ms-lg-2 {
        margin-left: .5rem !important
    }

    html:not([dir=rtl]) .ms-lg-3 {
        margin-left: 1rem !important
    }

    html:not([dir=rtl]) .ms-lg-4 {
        margin-left: 1.5rem !important
    }

    html:not([dir=rtl]) .ms-lg-5 {
        margin-left: 3rem !important
    }

    html:not([dir=rtl]) .ms-lg-auto {
        margin-left: auto !important
    }

    html:not([dir=rtl]) .me-lg-n1 {
        margin-right: -0.25rem !important
    }

    html:not([dir=rtl]) .me-lg-n2 {
        margin-right: -0.5rem !important
    }

    html:not([dir=rtl]) .me-lg-n3 {
        margin-right: -1rem !important
    }

    html:not([dir=rtl]) .me-lg-n4 {
        margin-right: -1.5rem !important
    }

    html:not([dir=rtl]) .me-lg-n5 {
        margin-right: -3rem !important
    }

    html:not([dir=rtl]) .ms-lg-n1 {
        margin-left: -0.25rem !important
    }

    html:not([dir=rtl]) .ms-lg-n2 {
        margin-left: -0.5rem !important
    }

    html:not([dir=rtl]) .ms-lg-n3 {
        margin-left: -1rem !important
    }

    html:not([dir=rtl]) .ms-lg-n4 {
        margin-left: -1.5rem !important
    }

    html:not([dir=rtl]) .ms-lg-n5 {
        margin-left: -3rem !important
    }

    html:not([dir=rtl]) .pe-lg-0 {
        padding-right: 0 !important
    }

    html:not([dir=rtl]) .pe-lg-1 {
        padding-right: .25rem !important
    }

    html:not([dir=rtl]) .pe-lg-2 {
        padding-right: .5rem !important
    }

    html:not([dir=rtl]) .pe-lg-3 {
        padding-right: 1rem !important
    }

    html:not([dir=rtl]) .pe-lg-4 {
        padding-right: 1.5rem !important
    }

    html:not([dir=rtl]) .pe-lg-5 {
        padding-right: 3rem !important
    }

    html:not([dir=rtl]) .ps-lg-0 {
        padding-left: 0 !important
    }

    html:not([dir=rtl]) .ps-lg-1 {
        padding-left: .25rem !important
    }

    html:not([dir=rtl]) .ps-lg-2 {
        padding-left: .5rem !important
    }

    html:not([dir=rtl]) .ps-lg-3 {
        padding-left: 1rem !important
    }

    html:not([dir=rtl]) .ps-lg-4 {
        padding-left: 1.5rem !important
    }

    html:not([dir=rtl]) .ps-lg-5 {
        padding-left: 3rem !important
    }
}

@media(min-width: 1200px) {
    html:not([dir=rtl]) .object-fit-xl-contain {
        object-fit:contain !important
    }

    html:not([dir=rtl]) .object-fit-xl-cover {
        object-fit: cover !important
    }

    html:not([dir=rtl]) .object-fit-xl-fill {
        object-fit: fill !important
    }

    html:not([dir=rtl]) .object-fit-xl-scale {
        object-fit: scale-down !important
    }

    html:not([dir=rtl]) .object-fit-xl-none {
        object-fit: none !important
    }

    html:not([dir=rtl]) .border-xl-solid {
        border-style: solid !important
    }

    html:not([dir=rtl]) .border-xl-dashed {
        border-style: dashed !important
    }

    html:not([dir=rtl]) .border-xl-none {
        border-style: none !important
    }

    html:not([dir=rtl]) .row-gap-xl-0 {
        row-gap: 0 !important
    }

    html:not([dir=rtl]) .row-gap-xl-1 {
        row-gap: .25rem !important
    }

    html:not([dir=rtl]) .row-gap-xl-2 {
        row-gap: .5rem !important
    }

    html:not([dir=rtl]) .row-gap-xl-3 {
        row-gap: 1rem !important
    }

    html:not([dir=rtl]) .row-gap-xl-4 {
        row-gap: 1.5rem !important
    }

    html:not([dir=rtl]) .row-gap-xl-5 {
        row-gap: 3rem !important
    }

    html:not([dir=rtl]) .column-gap-xl-0 {
        column-gap: 0 !important
    }

    html:not([dir=rtl]) .column-gap-xl-1 {
        column-gap: .25rem !important
    }

    html:not([dir=rtl]) .column-gap-xl-2 {
        column-gap: .5rem !important
    }

    html:not([dir=rtl]) .column-gap-xl-3 {
        column-gap: 1rem !important
    }

    html:not([dir=rtl]) .column-gap-xl-4 {
        column-gap: 1.5rem !important
    }

    html:not([dir=rtl]) .column-gap-xl-5 {
        column-gap: 3rem !important
    }

    html:not([dir=rtl]) .float-xl-start {
        float: left !important
    }

    html:not([dir=rtl]) .float-xl-end {
        float: right !important
    }

    html:not([dir=rtl]) .float-xl-none {
        float: none !important
    }

    html:not([dir=rtl]) .text-xl-start {
        text-align: left !important
    }

    html:not([dir=rtl]) .text-xl-end {
        text-align: right !important
    }

    html:not([dir=rtl]) .text-xl-center {
        text-align: center !important
    }

    html:not([dir=rtl]) .me-xl-0 {
        margin-right: 0 !important
    }

    html:not([dir=rtl]) .me-xl-1 {
        margin-right: .25rem !important
    }

    html:not([dir=rtl]) .me-xl-2 {
        margin-right: .5rem !important
    }

    html:not([dir=rtl]) .me-xl-3 {
        margin-right: 1rem !important
    }

    html:not([dir=rtl]) .me-xl-4 {
        margin-right: 1.5rem !important
    }

    html:not([dir=rtl]) .me-xl-5 {
        margin-right: 3rem !important
    }

    html:not([dir=rtl]) .me-xl-auto {
        margin-right: auto !important
    }

    html:not([dir=rtl]) .ms-xl-0 {
        margin-left: 0 !important
    }

    html:not([dir=rtl]) .ms-xl-1 {
        margin-left: .25rem !important
    }

    html:not([dir=rtl]) .ms-xl-2 {
        margin-left: .5rem !important
    }

    html:not([dir=rtl]) .ms-xl-3 {
        margin-left: 1rem !important
    }

    html:not([dir=rtl]) .ms-xl-4 {
        margin-left: 1.5rem !important
    }

    html:not([dir=rtl]) .ms-xl-5 {
        margin-left: 3rem !important
    }

    html:not([dir=rtl]) .ms-xl-auto {
        margin-left: auto !important
    }

    html:not([dir=rtl]) .me-xl-n1 {
        margin-right: -0.25rem !important
    }

    html:not([dir=rtl]) .me-xl-n2 {
        margin-right: -0.5rem !important
    }

    html:not([dir=rtl]) .me-xl-n3 {
        margin-right: -1rem !important
    }

    html:not([dir=rtl]) .me-xl-n4 {
        margin-right: -1.5rem !important
    }

    html:not([dir=rtl]) .me-xl-n5 {
        margin-right: -3rem !important
    }

    html:not([dir=rtl]) .ms-xl-n1 {
        margin-left: -0.25rem !important
    }

    html:not([dir=rtl]) .ms-xl-n2 {
        margin-left: -0.5rem !important
    }

    html:not([dir=rtl]) .ms-xl-n3 {
        margin-left: -1rem !important
    }

    html:not([dir=rtl]) .ms-xl-n4 {
        margin-left: -1.5rem !important
    }

    html:not([dir=rtl]) .ms-xl-n5 {
        margin-left: -3rem !important
    }

    html:not([dir=rtl]) .pe-xl-0 {
        padding-right: 0 !important
    }

    html:not([dir=rtl]) .pe-xl-1 {
        padding-right: .25rem !important
    }

    html:not([dir=rtl]) .pe-xl-2 {
        padding-right: .5rem !important
    }

    html:not([dir=rtl]) .pe-xl-3 {
        padding-right: 1rem !important
    }

    html:not([dir=rtl]) .pe-xl-4 {
        padding-right: 1.5rem !important
    }

    html:not([dir=rtl]) .pe-xl-5 {
        padding-right: 3rem !important
    }

    html:not([dir=rtl]) .ps-xl-0 {
        padding-left: 0 !important
    }

    html:not([dir=rtl]) .ps-xl-1 {
        padding-left: .25rem !important
    }

    html:not([dir=rtl]) .ps-xl-2 {
        padding-left: .5rem !important
    }

    html:not([dir=rtl]) .ps-xl-3 {
        padding-left: 1rem !important
    }

    html:not([dir=rtl]) .ps-xl-4 {
        padding-left: 1.5rem !important
    }

    html:not([dir=rtl]) .ps-xl-5 {
        padding-left: 3rem !important
    }
}

@media(min-width: 1400px) {
    html:not([dir=rtl]) .object-fit-xxl-contain {
        object-fit:contain !important
    }

    html:not([dir=rtl]) .object-fit-xxl-cover {
        object-fit: cover !important
    }

    html:not([dir=rtl]) .object-fit-xxl-fill {
        object-fit: fill !important
    }

    html:not([dir=rtl]) .object-fit-xxl-scale {
        object-fit: scale-down !important
    }

    html:not([dir=rtl]) .object-fit-xxl-none {
        object-fit: none !important
    }

    html:not([dir=rtl]) .border-xxl-solid {
        border-style: solid !important
    }

    html:not([dir=rtl]) .border-xxl-dashed {
        border-style: dashed !important
    }

    html:not([dir=rtl]) .border-xxl-none {
        border-style: none !important
    }

    html:not([dir=rtl]) .row-gap-xxl-0 {
        row-gap: 0 !important
    }

    html:not([dir=rtl]) .row-gap-xxl-1 {
        row-gap: .25rem !important
    }

    html:not([dir=rtl]) .row-gap-xxl-2 {
        row-gap: .5rem !important
    }

    html:not([dir=rtl]) .row-gap-xxl-3 {
        row-gap: 1rem !important
    }

    html:not([dir=rtl]) .row-gap-xxl-4 {
        row-gap: 1.5rem !important
    }

    html:not([dir=rtl]) .row-gap-xxl-5 {
        row-gap: 3rem !important
    }

    html:not([dir=rtl]) .column-gap-xxl-0 {
        column-gap: 0 !important
    }

    html:not([dir=rtl]) .column-gap-xxl-1 {
        column-gap: .25rem !important
    }

    html:not([dir=rtl]) .column-gap-xxl-2 {
        column-gap: .5rem !important
    }

    html:not([dir=rtl]) .column-gap-xxl-3 {
        column-gap: 1rem !important
    }

    html:not([dir=rtl]) .column-gap-xxl-4 {
        column-gap: 1.5rem !important
    }

    html:not([dir=rtl]) .column-gap-xxl-5 {
        column-gap: 3rem !important
    }

    html:not([dir=rtl]) .float-xxl-start {
        float: left !important
    }

    html:not([dir=rtl]) .float-xxl-end {
        float: right !important
    }

    html:not([dir=rtl]) .float-xxl-none {
        float: none !important
    }

    html:not([dir=rtl]) .text-xxl-start {
        text-align: left !important
    }

    html:not([dir=rtl]) .text-xxl-end {
        text-align: right !important
    }

    html:not([dir=rtl]) .text-xxl-center {
        text-align: center !important
    }

    html:not([dir=rtl]) .me-xxl-0 {
        margin-right: 0 !important
    }

    html:not([dir=rtl]) .me-xxl-1 {
        margin-right: .25rem !important
    }

    html:not([dir=rtl]) .me-xxl-2 {
        margin-right: .5rem !important
    }

    html:not([dir=rtl]) .me-xxl-3 {
        margin-right: 1rem !important
    }

    html:not([dir=rtl]) .me-xxl-4 {
        margin-right: 1.5rem !important
    }

    html:not([dir=rtl]) .me-xxl-5 {
        margin-right: 3rem !important
    }

    html:not([dir=rtl]) .me-xxl-auto {
        margin-right: auto !important
    }

    html:not([dir=rtl]) .ms-xxl-0 {
        margin-left: 0 !important
    }

    html:not([dir=rtl]) .ms-xxl-1 {
        margin-left: .25rem !important
    }

    html:not([dir=rtl]) .ms-xxl-2 {
        margin-left: .5rem !important
    }

    html:not([dir=rtl]) .ms-xxl-3 {
        margin-left: 1rem !important
    }

    html:not([dir=rtl]) .ms-xxl-4 {
        margin-left: 1.5rem !important
    }

    html:not([dir=rtl]) .ms-xxl-5 {
        margin-left: 3rem !important
    }

    html:not([dir=rtl]) .ms-xxl-auto {
        margin-left: auto !important
    }

    html:not([dir=rtl]) .me-xxl-n1 {
        margin-right: -0.25rem !important
    }

    html:not([dir=rtl]) .me-xxl-n2 {
        margin-right: -0.5rem !important
    }

    html:not([dir=rtl]) .me-xxl-n3 {
        margin-right: -1rem !important
    }

    html:not([dir=rtl]) .me-xxl-n4 {
        margin-right: -1.5rem !important
    }

    html:not([dir=rtl]) .me-xxl-n5 {
        margin-right: -3rem !important
    }

    html:not([dir=rtl]) .ms-xxl-n1 {
        margin-left: -0.25rem !important
    }

    html:not([dir=rtl]) .ms-xxl-n2 {
        margin-left: -0.5rem !important
    }

    html:not([dir=rtl]) .ms-xxl-n3 {
        margin-left: -1rem !important
    }

    html:not([dir=rtl]) .ms-xxl-n4 {
        margin-left: -1.5rem !important
    }

    html:not([dir=rtl]) .ms-xxl-n5 {
        margin-left: -3rem !important
    }

    html:not([dir=rtl]) .pe-xxl-0 {
        padding-right: 0 !important
    }

    html:not([dir=rtl]) .pe-xxl-1 {
        padding-right: .25rem !important
    }

    html:not([dir=rtl]) .pe-xxl-2 {
        padding-right: .5rem !important
    }

    html:not([dir=rtl]) .pe-xxl-3 {
        padding-right: 1rem !important
    }

    html:not([dir=rtl]) .pe-xxl-4 {
        padding-right: 1.5rem !important
    }

    html:not([dir=rtl]) .pe-xxl-5 {
        padding-right: 3rem !important
    }

    html:not([dir=rtl]) .ps-xxl-0 {
        padding-left: 0 !important
    }

    html:not([dir=rtl]) .ps-xxl-1 {
        padding-left: .25rem !important
    }

    html:not([dir=rtl]) .ps-xxl-2 {
        padding-left: .5rem !important
    }

    html:not([dir=rtl]) .ps-xxl-3 {
        padding-left: 1rem !important
    }

    html:not([dir=rtl]) .ps-xxl-4 {
        padding-left: 1.5rem !important
    }

    html:not([dir=rtl]) .ps-xxl-5 {
        padding-left: 3rem !important
    }
}

[dir=rtl] .object-fit-contain {
    object-fit: contain !important
}

[dir=rtl] .object-fit-cover {
    object-fit: cover !important
}

[dir=rtl] .object-fit-fill {
    object-fit: fill !important
}

[dir=rtl] .object-fit-scale {
    object-fit: scale-down !important
}

[dir=rtl] .object-fit-none {
    object-fit: none !important
}

[dir=rtl] .border-solid {
    border-style: solid !important
}

[dir=rtl] .border-dashed {
    border-style: dashed !important
}

[dir=rtl] .border-none {
    border-style: none !important
}

[dir=rtl] .border-label-primary {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-primary-rgb), var(--bs-border-opacity)) !important
}

[dir=rtl] .border-label-secondary {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-secondary-rgb), var(--bs-border-opacity)) !important
}

[dir=rtl] .border-label-success {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important
}

[dir=rtl] .border-label-info {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-info-rgb), var(--bs-border-opacity)) !important
}

[dir=rtl] .border-label-warning {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-warning-rgb), var(--bs-border-opacity)) !important
}

[dir=rtl] .border-label-danger {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-danger-rgb), var(--bs-border-opacity)) !important
}

[dir=rtl] .border-label-light {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-light-rgb), var(--bs-border-opacity)) !important
}

[dir=rtl] .border-label-dark {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-dark-rgb), var(--bs-border-opacity)) !important
}

[dir=rtl] .border-label-gray {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-gray-rgb), var(--bs-border-opacity)) !important
}

[dir=rtl] .border-label-black {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-black-rgb), var(--bs-border-opacity)) !important
}

[dir=rtl] .border-label-white {
    --bs-border-opacity: 0.4;
    border-color: rgba(var(--bs-white-rgb), var(--bs-border-opacity)) !important
}

[dir=rtl] .border-opacity-10 {
    --bs-border-opacity: 0.1
}

[dir=rtl] .border-opacity-25 {
    --bs-border-opacity: 0.25
}

[dir=rtl] .border-opacity-50 {
    --bs-border-opacity: 0.5
}

[dir=rtl] .border-opacity-75 {
    --bs-border-opacity: 0.75
}

[dir=rtl] .border-opacity-100 {
    --bs-border-opacity: 1
}

[dir=rtl] .row-gap-0 {
    row-gap: 0 !important
}

[dir=rtl] .row-gap-1 {
    row-gap: .25rem !important
}

[dir=rtl] .row-gap-2 {
    row-gap: .5rem !important
}

[dir=rtl] .row-gap-3 {
    row-gap: 1rem !important
}

[dir=rtl] .row-gap-4 {
    row-gap: 1.5rem !important
}

[dir=rtl] .row-gap-5 {
    row-gap: 3rem !important
}

[dir=rtl] .column-gap-0 {
    column-gap: 0 !important
}

[dir=rtl] .column-gap-1 {
    column-gap: .25rem !important
}

[dir=rtl] .column-gap-2 {
    column-gap: .5rem !important
}

[dir=rtl] .column-gap-3 {
    column-gap: 1rem !important
}

[dir=rtl] .column-gap-4 {
    column-gap: 1.5rem !important
}

[dir=rtl] .column-gap-5 {
    column-gap: 3rem !important
}

[dir=rtl] .text-opacity-25 {
    --bs-text-opacity: 0.25
}

[dir=rtl] .text-opacity-50 {
    --bs-text-opacity: 0.5
}

[dir=rtl] .text-opacity-75 {
    --bs-text-opacity: 0.75
}

[dir=rtl] .text-opacity-100 {
    --bs-text-opacity: 1
}

[dir=rtl] .link-opacity-10 {
    --bs-link-opacity: 0.1
}

[dir=rtl] .link-opacity-10-hover:hover {
    --bs-link-opacity: 0.1
}

[dir=rtl] .link-opacity-25 {
    --bs-link-opacity: 0.25
}

[dir=rtl] .link-opacity-25-hover:hover {
    --bs-link-opacity: 0.25
}

[dir=rtl] .link-opacity-50 {
    --bs-link-opacity: 0.5
}

[dir=rtl] .link-opacity-50-hover:hover {
    --bs-link-opacity: 0.5
}

[dir=rtl] .link-opacity-75 {
    --bs-link-opacity: 0.75
}

[dir=rtl] .link-opacity-75-hover:hover {
    --bs-link-opacity: 0.75
}

[dir=rtl] .link-opacity-100 {
    --bs-link-opacity: 1
}

[dir=rtl] .link-opacity-100-hover:hover {
    --bs-link-opacity: 1
}

[dir=rtl] .link-offset-1 {
    text-underline-offset: .125em !important
}

[dir=rtl] .link-offset-1-hover:hover {
    text-underline-offset: .125em !important
}

[dir=rtl] .link-offset-2 {
    text-underline-offset: .25em !important
}

[dir=rtl] .link-offset-2-hover:hover {
    text-underline-offset: .25em !important
}

[dir=rtl] .link-offset-3 {
    text-underline-offset: .375em !important
}

[dir=rtl] .link-offset-3-hover:hover {
    text-underline-offset: .375em !important
}

[dir=rtl] .link-underline-primary {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-primary-rgb), var(--bs-link-underline-opacity)) !important
}

[dir=rtl] .link-underline-secondary {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-secondary-rgb), var(--bs-link-underline-opacity)) !important
}

[dir=rtl] .link-underline-success {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-success-rgb), var(--bs-link-underline-opacity)) !important
}

[dir=rtl] .link-underline-info {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-info-rgb), var(--bs-link-underline-opacity)) !important
}

[dir=rtl] .link-underline-warning {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-warning-rgb), var(--bs-link-underline-opacity)) !important
}

[dir=rtl] .link-underline-danger {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-danger-rgb), var(--bs-link-underline-opacity)) !important
}

[dir=rtl] .link-underline-light {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-light-rgb), var(--bs-link-underline-opacity)) !important
}

[dir=rtl] .link-underline-dark {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-dark-rgb), var(--bs-link-underline-opacity)) !important
}

[dir=rtl] .link-underline-gray {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-gray-rgb), var(--bs-link-underline-opacity)) !important
}

[dir=rtl] .link-underline {
    --bs-link-underline-opacity: 1;
    text-decoration-color: rgba(var(--bs-link-color-rgb), var(--bs-link-underline-opacity, 1)) !important
}

[dir=rtl] .link-underline-opacity-0 {
    --bs-link-underline-opacity: 0
}

[dir=rtl] .link-underline-opacity-0-hover:hover {
    --bs-link-underline-opacity: 0
}

[dir=rtl] .link-underline-opacity-10 {
    --bs-link-underline-opacity: 0.1
}

[dir=rtl] .link-underline-opacity-10-hover:hover {
    --bs-link-underline-opacity: 0.1
}

[dir=rtl] .link-underline-opacity-25 {
    --bs-link-underline-opacity: 0.25
}

[dir=rtl] .link-underline-opacity-25-hover:hover {
    --bs-link-underline-opacity: 0.25
}

[dir=rtl] .link-underline-opacity-50 {
    --bs-link-underline-opacity: 0.5
}

[dir=rtl] .link-underline-opacity-50-hover:hover {
    --bs-link-underline-opacity: 0.5
}

[dir=rtl] .link-underline-opacity-75 {
    --bs-link-underline-opacity: 0.75
}

[dir=rtl] .link-underline-opacity-75-hover:hover {
    --bs-link-underline-opacity: 0.75
}

[dir=rtl] .link-underline-opacity-100 {
    --bs-link-underline-opacity: 1
}

[dir=rtl] .link-underline-opacity-100-hover:hover {
    --bs-link-underline-opacity: 1
}

[dir=rtl] .bg-opacity-10 {
    --bs-bg-opacity: 0.1
}

[dir=rtl] .bg-opacity-25 {
    --bs-bg-opacity: 0.25
}

[dir=rtl] .bg-opacity-50 {
    --bs-bg-opacity: 0.5
}

[dir=rtl] .bg-opacity-75 {
    --bs-bg-opacity: 0.75
}

[dir=rtl] .bg-opacity-100 {
    --bs-bg-opacity: 1
}

[dir=rtl] .bg-primary-subtle {
    background-color: var(--bs-primary-bg-subtle) !important
}

[dir=rtl] .bg-secondary-subtle {
    background-color: var(--bs-secondary-bg-subtle) !important
}

[dir=rtl] .bg-success-subtle {
    background-color: var(--bs-success-bg-subtle) !important
}

[dir=rtl] .bg-info-subtle {
    background-color: var(--bs-info-bg-subtle) !important
}

[dir=rtl] .bg-warning-subtle {
    background-color: var(--bs-warning-bg-subtle) !important
}

[dir=rtl] .bg-danger-subtle {
    background-color: var(--bs-danger-bg-subtle) !important
}

[dir=rtl] .bg-light-subtle {
    background-color: var(--bs-light-bg-subtle) !important
}

[dir=rtl] .bg-dark-subtle {
    background-color: var(--bs-dark-bg-subtle) !important
}

[dir=rtl] .z-n1 {
    z-index: -1 !important
}

[dir=rtl] .z-0 {
    z-index: 0 !important
}

[dir=rtl] .z-1 {
    z-index: 1 !important
}

[dir=rtl] .z-2 {
    z-index: 2 !important
}

[dir=rtl] .z-3 {
    z-index: 3 !important
}

[dir=rtl] .z-4 {
    z-index: 4 !important
}

[dir=rtl] .z-5 {
    z-index: 5 !important
}

[dir=rtl] .float-start {
    float: right !important
}

[dir=rtl] .float-end {
    float: left !important
}

[dir=rtl] .float-none {
    float: none !important
}

[dir=rtl] .end-0 {
    left: 0 !important
}

[dir=rtl] .end-50 {
    left: 50% !important
}

[dir=rtl] .end-100 {
    left: 100% !important
}

[dir=rtl] .start-0 {
    right: 0 !important
}

[dir=rtl] .start-50 {
    right: 50% !important
}

[dir=rtl] .start-100 {
    right: 100% !important
}

[dir=rtl] .translate-middle {
    transform: translate(50%, -50%) !important
}

[dir=rtl] .translate-middle-x {
    transform: translateX(50%) !important
}

[dir=rtl] .translate-middle-y {
    transform: translateY(-50%) !important
}

[dir=rtl] .border-end {
    border-left: 1px solid #dbdade !important
}

[dir=rtl] .border-end-0 {
    border-left: 0 !important
}

[dir=rtl] .border-start {
    border-right: 1px solid #dbdade !important
}

[dir=rtl] .border-start-0 {
    border-right: 0 !important
}

[dir=rtl] .border-left-dashed {
    border-right-style: dashed !important
}

[dir=rtl] .border-right-dashed {
    border-left-style: dashed !important
}

[dir=rtl] .text-start {
    text-align: right !important
}

[dir=rtl] .text-end {
    text-align: left !important
}

[dir=rtl] .text-center {
    text-align: center !important
}

[dir=rtl] .rounded-end {
    border-top-left-radius: .375rem !important;
    border-bottom-left-radius: .375rem !important
}

[dir=rtl] .rounded-start {
    border-bottom-right-radius: .375rem !important;
    border-top-right-radius: .375rem !important
}

[dir=rtl] .rounded-start-top {
    border-top-right-radius: .375rem !important
}

[dir=rtl] .rounded-start-bottom {
    border-bottom-right-radius: .375rem !important
}

[dir=rtl] .rounded-end-top {
    border-top-left-radius: .375rem !important
}

[dir=rtl] .rounded-end-bottom {
    border-bottom-left-radius: .375rem !important
}

[dir=rtl] .me-0 {
    margin-left: 0 !important
}

[dir=rtl] .me-1 {
    margin-left: .25rem !important
}

[dir=rtl] .me-2 {
    margin-left: .5rem !important
}

[dir=rtl] .me-3 {
    margin-left: 1rem !important
}

[dir=rtl] .me-4 {
    margin-left: 1.5rem !important
}

[dir=rtl] .me-5 {
    margin-left: 3rem !important
}

[dir=rtl] .me-auto {
    margin-left: auto !important
}

[dir=rtl] .ms-0 {
    margin-right: 0 !important
}

[dir=rtl] .ms-1 {
    margin-right: .25rem !important
}

[dir=rtl] .ms-2 {
    margin-right: .5rem !important
}

[dir=rtl] .ms-3 {
    margin-right: 1rem !important
}

[dir=rtl] .ms-4 {
    margin-right: 1.5rem !important
}

[dir=rtl] .ms-5 {
    margin-right: 3rem !important
}

[dir=rtl] .ms-auto {
    margin-right: auto !important
}

[dir=rtl] .me-n1 {
    margin-left: -0.25rem !important
}

[dir=rtl] .me-n2 {
    margin-left: -0.5rem !important
}

[dir=rtl] .me-n3 {
    margin-left: -1rem !important
}

[dir=rtl] .me-n4 {
    margin-left: -1.5rem !important
}

[dir=rtl] .me-n5 {
    margin-left: -3rem !important
}

[dir=rtl] .ms-n1 {
    margin-right: -0.25rem !important
}

[dir=rtl] .ms-n2 {
    margin-right: -0.5rem !important
}

[dir=rtl] .ms-n3 {
    margin-right: -1rem !important
}

[dir=rtl] .ms-n4 {
    margin-right: -1.5rem !important
}

[dir=rtl] .ms-n5 {
    margin-right: -3rem !important
}

[dir=rtl] .pe-0 {
    padding-left: 0 !important
}

[dir=rtl] .pe-1 {
    padding-left: .25rem !important
}

[dir=rtl] .pe-2 {
    padding-left: .5rem !important
}

[dir=rtl] .pe-3 {
    padding-left: 1rem !important
}

[dir=rtl] .pe-4 {
    padding-left: 1.5rem !important
}

[dir=rtl] .pe-5 {
    padding-left: 3rem !important
}

[dir=rtl] .ps-0 {
    padding-right: 0 !important
}

[dir=rtl] .ps-1 {
    padding-right: .25rem !important
}

[dir=rtl] .ps-2 {
    padding-right: .5rem !important
}

[dir=rtl] .ps-3 {
    padding-right: 1rem !important
}

[dir=rtl] .ps-4 {
    padding-right: 1.5rem !important
}

[dir=rtl] .ps-5 {
    padding-right: 3rem !important
}

[dir=rtl] .rotate-0 {
    transform: rotate(0deg) !important
}

[dir=rtl] .rotate-90 {
    transform: rotate(-90deg) !important
}

[dir=rtl] .rotate-180 {
    transform: rotate(-180deg) !important
}

[dir=rtl] .rotate-270 {
    transform: rotate(-270deg) !important
}

[dir=rtl] .rotate-n90 {
    transform: rotate(90deg) !important
}

[dir=rtl] .rotate-n180 {
    transform: rotate(180deg) !important
}

[dir=rtl] .rotate-n270 {
    transform: rotate(270deg) !important
}

[dir=rtl] .scaleX-n1 {
    transform: scaleX(1) !important
}

[dir=rtl] .scaleX-n1-rtl {
    transform: scaleX(-1) !important
}

[dir=rtl] .scaleY-n1 {
    transform: scaleY(1) !important
}

[dir=rtl] .scaleY-n1-rtl {
    transform: scaleY(-1) !important
}

@media(min-width: 576px) {
    [dir=rtl] .object-fit-sm-contain {
        object-fit:contain !important
    }

    [dir=rtl] .object-fit-sm-cover {
        object-fit: cover !important
    }

    [dir=rtl] .object-fit-sm-fill {
        object-fit: fill !important
    }

    [dir=rtl] .object-fit-sm-scale {
        object-fit: scale-down !important
    }

    [dir=rtl] .object-fit-sm-none {
        object-fit: none !important
    }

    [dir=rtl] .border-sm-solid {
        border-style: solid !important
    }

    [dir=rtl] .border-sm-dashed {
        border-style: dashed !important
    }

    [dir=rtl] .border-sm-none {
        border-style: none !important
    }

    [dir=rtl] .row-gap-sm-0 {
        row-gap: 0 !important
    }

    [dir=rtl] .row-gap-sm-1 {
        row-gap: .25rem !important
    }

    [dir=rtl] .row-gap-sm-2 {
        row-gap: .5rem !important
    }

    [dir=rtl] .row-gap-sm-3 {
        row-gap: 1rem !important
    }

    [dir=rtl] .row-gap-sm-4 {
        row-gap: 1.5rem !important
    }

    [dir=rtl] .row-gap-sm-5 {
        row-gap: 3rem !important
    }

    [dir=rtl] .column-gap-sm-0 {
        column-gap: 0 !important
    }

    [dir=rtl] .column-gap-sm-1 {
        column-gap: .25rem !important
    }

    [dir=rtl] .column-gap-sm-2 {
        column-gap: .5rem !important
    }

    [dir=rtl] .column-gap-sm-3 {
        column-gap: 1rem !important
    }

    [dir=rtl] .column-gap-sm-4 {
        column-gap: 1.5rem !important
    }

    [dir=rtl] .column-gap-sm-5 {
        column-gap: 3rem !important
    }

    [dir=rtl] .float-sm-start {
        float: right !important
    }

    [dir=rtl] .float-sm-end {
        float: left !important
    }

    [dir=rtl] .float-sm-none {
        float: none !important
    }

    [dir=rtl] .text-sm-start {
        text-align: right !important
    }

    [dir=rtl] .text-sm-end {
        text-align: left !important
    }

    [dir=rtl] .text-sm-center {
        text-align: center !important
    }

    [dir=rtl] .me-sm-0 {
        margin-left: 0 !important
    }

    [dir=rtl] .me-sm-1 {
        margin-left: .25rem !important
    }

    [dir=rtl] .me-sm-2 {
        margin-left: .5rem !important
    }

    [dir=rtl] .me-sm-3 {
        margin-left: 1rem !important
    }

    [dir=rtl] .me-sm-4 {
        margin-left: 1.5rem !important
    }

    [dir=rtl] .me-sm-5 {
        margin-left: 3rem !important
    }

    [dir=rtl] .me-sm-auto {
        margin-left: auto !important
    }

    [dir=rtl] .ms-sm-0 {
        margin-right: 0 !important
    }

    [dir=rtl] .ms-sm-1 {
        margin-right: .25rem !important
    }

    [dir=rtl] .ms-sm-2 {
        margin-right: .5rem !important
    }

    [dir=rtl] .ms-sm-3 {
        margin-right: 1rem !important
    }

    [dir=rtl] .ms-sm-4 {
        margin-right: 1.5rem !important
    }

    [dir=rtl] .ms-sm-5 {
        margin-right: 3rem !important
    }

    [dir=rtl] .ms-sm-auto {
        margin-right: auto !important
    }

    [dir=rtl] .me-sm-n1 {
        margin-left: -0.25rem !important
    }

    [dir=rtl] .me-sm-n2 {
        margin-left: -0.5rem !important
    }

    [dir=rtl] .me-sm-n3 {
        margin-left: -1rem !important
    }

    [dir=rtl] .me-sm-n4 {
        margin-left: -1.5rem !important
    }

    [dir=rtl] .me-sm-n5 {
        margin-left: -3rem !important
    }

    [dir=rtl] .ms-sm-n1 {
        margin-right: -0.25rem !important
    }

    [dir=rtl] .ms-sm-n2 {
        margin-right: -0.5rem !important
    }

    [dir=rtl] .ms-sm-n3 {
        margin-right: -1rem !important
    }

    [dir=rtl] .ms-sm-n4 {
        margin-right: -1.5rem !important
    }

    [dir=rtl] .ms-sm-n5 {
        margin-right: -3rem !important
    }

    [dir=rtl] .pe-sm-0 {
        padding-left: 0 !important
    }

    [dir=rtl] .pe-sm-1 {
        padding-left: .25rem !important
    }

    [dir=rtl] .pe-sm-2 {
        padding-left: .5rem !important
    }

    [dir=rtl] .pe-sm-3 {
        padding-left: 1rem !important
    }

    [dir=rtl] .pe-sm-4 {
        padding-left: 1.5rem !important
    }

    [dir=rtl] .pe-sm-5 {
        padding-left: 3rem !important
    }

    [dir=rtl] .ps-sm-0 {
        padding-right: 0 !important
    }

    [dir=rtl] .ps-sm-1 {
        padding-right: .25rem !important
    }

    [dir=rtl] .ps-sm-2 {
        padding-right: .5rem !important
    }

    [dir=rtl] .ps-sm-3 {
        padding-right: 1rem !important
    }

    [dir=rtl] .ps-sm-4 {
        padding-right: 1.5rem !important
    }

    [dir=rtl] .ps-sm-5 {
        padding-right: 3rem !important
    }
}

@media(min-width: 768px) {
    [dir=rtl] .object-fit-md-contain {
        object-fit:contain !important
    }

    [dir=rtl] .object-fit-md-cover {
        object-fit: cover !important
    }

    [dir=rtl] .object-fit-md-fill {
        object-fit: fill !important
    }

    [dir=rtl] .object-fit-md-scale {
        object-fit: scale-down !important
    }

    [dir=rtl] .object-fit-md-none {
        object-fit: none !important
    }

    [dir=rtl] .border-md-solid {
        border-style: solid !important
    }

    [dir=rtl] .border-md-dashed {
        border-style: dashed !important
    }

    [dir=rtl] .border-md-none {
        border-style: none !important
    }

    [dir=rtl] .row-gap-md-0 {
        row-gap: 0 !important
    }

    [dir=rtl] .row-gap-md-1 {
        row-gap: .25rem !important
    }

    [dir=rtl] .row-gap-md-2 {
        row-gap: .5rem !important
    }

    [dir=rtl] .row-gap-md-3 {
        row-gap: 1rem !important
    }

    [dir=rtl] .row-gap-md-4 {
        row-gap: 1.5rem !important
    }

    [dir=rtl] .row-gap-md-5 {
        row-gap: 3rem !important
    }

    [dir=rtl] .column-gap-md-0 {
        column-gap: 0 !important
    }

    [dir=rtl] .column-gap-md-1 {
        column-gap: .25rem !important
    }

    [dir=rtl] .column-gap-md-2 {
        column-gap: .5rem !important
    }

    [dir=rtl] .column-gap-md-3 {
        column-gap: 1rem !important
    }

    [dir=rtl] .column-gap-md-4 {
        column-gap: 1.5rem !important
    }

    [dir=rtl] .column-gap-md-5 {
        column-gap: 3rem !important
    }

    [dir=rtl] .float-md-start {
        float: right !important
    }

    [dir=rtl] .float-md-end {
        float: left !important
    }

    [dir=rtl] .float-md-none {
        float: none !important
    }

    [dir=rtl] .text-md-start {
        text-align: right !important
    }

    [dir=rtl] .text-md-end {
        text-align: left !important
    }

    [dir=rtl] .text-md-center {
        text-align: center !important
    }

    [dir=rtl] .me-md-0 {
        margin-left: 0 !important
    }

    [dir=rtl] .me-md-1 {
        margin-left: .25rem !important
    }

    [dir=rtl] .me-md-2 {
        margin-left: .5rem !important
    }

    [dir=rtl] .me-md-3 {
        margin-left: 1rem !important
    }

    [dir=rtl] .me-md-4 {
        margin-left: 1.5rem !important
    }

    [dir=rtl] .me-md-5 {
        margin-left: 3rem !important
    }

    [dir=rtl] .me-md-auto {
        margin-left: auto !important
    }

    [dir=rtl] .ms-md-0 {
        margin-right: 0 !important
    }

    [dir=rtl] .ms-md-1 {
        margin-right: .25rem !important
    }

    [dir=rtl] .ms-md-2 {
        margin-right: .5rem !important
    }

    [dir=rtl] .ms-md-3 {
        margin-right: 1rem !important
    }

    [dir=rtl] .ms-md-4 {
        margin-right: 1.5rem !important
    }

    [dir=rtl] .ms-md-5 {
        margin-right: 3rem !important
    }

    [dir=rtl] .ms-md-auto {
        margin-right: auto !important
    }

    [dir=rtl] .me-md-n1 {
        margin-left: -0.25rem !important
    }

    [dir=rtl] .me-md-n2 {
        margin-left: -0.5rem !important
    }

    [dir=rtl] .me-md-n3 {
        margin-left: -1rem !important
    }

    [dir=rtl] .me-md-n4 {
        margin-left: -1.5rem !important
    }

    [dir=rtl] .me-md-n5 {
        margin-left: -3rem !important
    }

    [dir=rtl] .ms-md-n1 {
        margin-right: -0.25rem !important
    }

    [dir=rtl] .ms-md-n2 {
        margin-right: -0.5rem !important
    }

    [dir=rtl] .ms-md-n3 {
        margin-right: -1rem !important
    }

    [dir=rtl] .ms-md-n4 {
        margin-right: -1.5rem !important
    }

    [dir=rtl] .ms-md-n5 {
        margin-right: -3rem !important
    }

    [dir=rtl] .pe-md-0 {
        padding-left: 0 !important
    }

    [dir=rtl] .pe-md-1 {
        padding-left: .25rem !important
    }

    [dir=rtl] .pe-md-2 {
        padding-left: .5rem !important
    }

    [dir=rtl] .pe-md-3 {
        padding-left: 1rem !important
    }

    [dir=rtl] .pe-md-4 {
        padding-left: 1.5rem !important
    }

    [dir=rtl] .pe-md-5 {
        padding-left: 3rem !important
    }

    [dir=rtl] .ps-md-0 {
        padding-right: 0 !important
    }

    [dir=rtl] .ps-md-1 {
        padding-right: .25rem !important
    }

    [dir=rtl] .ps-md-2 {
        padding-right: .5rem !important
    }

    [dir=rtl] .ps-md-3 {
        padding-right: 1rem !important
    }

    [dir=rtl] .ps-md-4 {
        padding-right: 1.5rem !important
    }

    [dir=rtl] .ps-md-5 {
        padding-right: 3rem !important
    }
}

@media(min-width: 992px) {
    [dir=rtl] .object-fit-lg-contain {
        object-fit:contain !important
    }

    [dir=rtl] .object-fit-lg-cover {
        object-fit: cover !important
    }

    [dir=rtl] .object-fit-lg-fill {
        object-fit: fill !important
    }

    [dir=rtl] .object-fit-lg-scale {
        object-fit: scale-down !important
    }

    [dir=rtl] .object-fit-lg-none {
        object-fit: none !important
    }

    [dir=rtl] .border-lg-solid {
        border-style: solid !important
    }

    [dir=rtl] .border-lg-dashed {
        border-style: dashed !important
    }

    [dir=rtl] .border-lg-none {
        border-style: none !important
    }

    [dir=rtl] .row-gap-lg-0 {
        row-gap: 0 !important
    }

    [dir=rtl] .row-gap-lg-1 {
        row-gap: .25rem !important
    }

    [dir=rtl] .row-gap-lg-2 {
        row-gap: .5rem !important
    }

    [dir=rtl] .row-gap-lg-3 {
        row-gap: 1rem !important
    }

    [dir=rtl] .row-gap-lg-4 {
        row-gap: 1.5rem !important
    }

    [dir=rtl] .row-gap-lg-5 {
        row-gap: 3rem !important
    }

    [dir=rtl] .column-gap-lg-0 {
        column-gap: 0 !important
    }

    [dir=rtl] .column-gap-lg-1 {
        column-gap: .25rem !important
    }

    [dir=rtl] .column-gap-lg-2 {
        column-gap: .5rem !important
    }

    [dir=rtl] .column-gap-lg-3 {
        column-gap: 1rem !important
    }

    [dir=rtl] .column-gap-lg-4 {
        column-gap: 1.5rem !important
    }

    [dir=rtl] .column-gap-lg-5 {
        column-gap: 3rem !important
    }

    [dir=rtl] .float-lg-start {
        float: right !important
    }

    [dir=rtl] .float-lg-end {
        float: left !important
    }

    [dir=rtl] .float-lg-none {
        float: none !important
    }

    [dir=rtl] .text-lg-start {
        text-align: right !important
    }

    [dir=rtl] .text-lg-end {
        text-align: left !important
    }

    [dir=rtl] .text-lg-center {
        text-align: center !important
    }

    [dir=rtl] .me-lg-0 {
        margin-left: 0 !important
    }

    [dir=rtl] .me-lg-1 {
        margin-left: .25rem !important
    }

    [dir=rtl] .me-lg-2 {
        margin-left: .5rem !important
    }

    [dir=rtl] .me-lg-3 {
        margin-left: 1rem !important
    }

    [dir=rtl] .me-lg-4 {
        margin-left: 1.5rem !important
    }

    [dir=rtl] .me-lg-5 {
        margin-left: 3rem !important
    }

    [dir=rtl] .me-lg-auto {
        margin-left: auto !important
    }

    [dir=rtl] .ms-lg-0 {
        margin-right: 0 !important
    }

    [dir=rtl] .ms-lg-1 {
        margin-right: .25rem !important
    }

    [dir=rtl] .ms-lg-2 {
        margin-right: .5rem !important
    }

    [dir=rtl] .ms-lg-3 {
        margin-right: 1rem !important
    }

    [dir=rtl] .ms-lg-4 {
        margin-right: 1.5rem !important
    }

    [dir=rtl] .ms-lg-5 {
        margin-right: 3rem !important
    }

    [dir=rtl] .ms-lg-auto {
        margin-right: auto !important
    }

    [dir=rtl] .me-lg-n1 {
        margin-left: -0.25rem !important
    }

    [dir=rtl] .me-lg-n2 {
        margin-left: -0.5rem !important
    }

    [dir=rtl] .me-lg-n3 {
        margin-left: -1rem !important
    }

    [dir=rtl] .me-lg-n4 {
        margin-left: -1.5rem !important
    }

    [dir=rtl] .me-lg-n5 {
        margin-left: -3rem !important
    }

    [dir=rtl] .ms-lg-n1 {
        margin-right: -0.25rem !important
    }

    [dir=rtl] .ms-lg-n2 {
        margin-right: -0.5rem !important
    }

    [dir=rtl] .ms-lg-n3 {
        margin-right: -1rem !important
    }

    [dir=rtl] .ms-lg-n4 {
        margin-right: -1.5rem !important
    }

    [dir=rtl] .ms-lg-n5 {
        margin-right: -3rem !important
    }

    [dir=rtl] .pe-lg-0 {
        padding-left: 0 !important
    }

    [dir=rtl] .pe-lg-1 {
        padding-left: .25rem !important
    }

    [dir=rtl] .pe-lg-2 {
        padding-left: .5rem !important
    }

    [dir=rtl] .pe-lg-3 {
        padding-left: 1rem !important
    }

    [dir=rtl] .pe-lg-4 {
        padding-left: 1.5rem !important
    }

    [dir=rtl] .pe-lg-5 {
        padding-left: 3rem !important
    }

    [dir=rtl] .ps-lg-0 {
        padding-right: 0 !important
    }

    [dir=rtl] .ps-lg-1 {
        padding-right: .25rem !important
    }

    [dir=rtl] .ps-lg-2 {
        padding-right: .5rem !important
    }

    [dir=rtl] .ps-lg-3 {
        padding-right: 1rem !important
    }

    [dir=rtl] .ps-lg-4 {
        padding-right: 1.5rem !important
    }

    [dir=rtl] .ps-lg-5 {
        padding-right: 3rem !important
    }
}

@media(min-width: 1200px) {
    [dir=rtl] .object-fit-xl-contain {
        object-fit:contain !important
    }

    [dir=rtl] .object-fit-xl-cover {
        object-fit: cover !important
    }

    [dir=rtl] .object-fit-xl-fill {
        object-fit: fill !important
    }

    [dir=rtl] .object-fit-xl-scale {
        object-fit: scale-down !important
    }

    [dir=rtl] .object-fit-xl-none {
        object-fit: none !important
    }

    [dir=rtl] .border-xl-solid {
        border-style: solid !important
    }

    [dir=rtl] .border-xl-dashed {
        border-style: dashed !important
    }

    [dir=rtl] .border-xl-none {
        border-style: none !important
    }

    [dir=rtl] .row-gap-xl-0 {
        row-gap: 0 !important
    }

    [dir=rtl] .row-gap-xl-1 {
        row-gap: .25rem !important
    }

    [dir=rtl] .row-gap-xl-2 {
        row-gap: .5rem !important
    }

    [dir=rtl] .row-gap-xl-3 {
        row-gap: 1rem !important
    }

    [dir=rtl] .row-gap-xl-4 {
        row-gap: 1.5rem !important
    }

    [dir=rtl] .row-gap-xl-5 {
        row-gap: 3rem !important
    }

    [dir=rtl] .column-gap-xl-0 {
        column-gap: 0 !important
    }

    [dir=rtl] .column-gap-xl-1 {
        column-gap: .25rem !important
    }

    [dir=rtl] .column-gap-xl-2 {
        column-gap: .5rem !important
    }

    [dir=rtl] .column-gap-xl-3 {
        column-gap: 1rem !important
    }

    [dir=rtl] .column-gap-xl-4 {
        column-gap: 1.5rem !important
    }

    [dir=rtl] .column-gap-xl-5 {
        column-gap: 3rem !important
    }

    [dir=rtl] .float-xl-start {
        float: right !important
    }

    [dir=rtl] .float-xl-end {
        float: left !important
    }

    [dir=rtl] .float-xl-none {
        float: none !important
    }

    [dir=rtl] .text-xl-start {
        text-align: right !important
    }

    [dir=rtl] .text-xl-end {
        text-align: left !important
    }

    [dir=rtl] .text-xl-center {
        text-align: center !important
    }

    [dir=rtl] .me-xl-0 {
        margin-left: 0 !important
    }

    [dir=rtl] .me-xl-1 {
        margin-left: .25rem !important
    }

    [dir=rtl] .me-xl-2 {
        margin-left: .5rem !important
    }

    [dir=rtl] .me-xl-3 {
        margin-left: 1rem !important
    }

    [dir=rtl] .me-xl-4 {
        margin-left: 1.5rem !important
    }

    [dir=rtl] .me-xl-5 {
        margin-left: 3rem !important
    }

    [dir=rtl] .me-xl-auto {
        margin-left: auto !important
    }

    [dir=rtl] .ms-xl-0 {
        margin-right: 0 !important
    }

    [dir=rtl] .ms-xl-1 {
        margin-right: .25rem !important
    }

    [dir=rtl] .ms-xl-2 {
        margin-right: .5rem !important
    }

    [dir=rtl] .ms-xl-3 {
        margin-right: 1rem !important
    }

    [dir=rtl] .ms-xl-4 {
        margin-right: 1.5rem !important
    }

    [dir=rtl] .ms-xl-5 {
        margin-right: 3rem !important
    }

    [dir=rtl] .ms-xl-auto {
        margin-right: auto !important
    }

    [dir=rtl] .me-xl-n1 {
        margin-left: -0.25rem !important
    }

    [dir=rtl] .me-xl-n2 {
        margin-left: -0.5rem !important
    }

    [dir=rtl] .me-xl-n3 {
        margin-left: -1rem !important
    }

    [dir=rtl] .me-xl-n4 {
        margin-left: -1.5rem !important
    }

    [dir=rtl] .me-xl-n5 {
        margin-left: -3rem !important
    }

    [dir=rtl] .ms-xl-n1 {
        margin-right: -0.25rem !important
    }

    [dir=rtl] .ms-xl-n2 {
        margin-right: -0.5rem !important
    }

    [dir=rtl] .ms-xl-n3 {
        margin-right: -1rem !important
    }

    [dir=rtl] .ms-xl-n4 {
        margin-right: -1.5rem !important
    }

    [dir=rtl] .ms-xl-n5 {
        margin-right: -3rem !important
    }

    [dir=rtl] .pe-xl-0 {
        padding-left: 0 !important
    }

    [dir=rtl] .pe-xl-1 {
        padding-left: .25rem !important
    }

    [dir=rtl] .pe-xl-2 {
        padding-left: .5rem !important
    }

    [dir=rtl] .pe-xl-3 {
        padding-left: 1rem !important
    }

    [dir=rtl] .pe-xl-4 {
        padding-left: 1.5rem !important
    }

    [dir=rtl] .pe-xl-5 {
        padding-left: 3rem !important
    }

    [dir=rtl] .ps-xl-0 {
        padding-right: 0 !important
    }

    [dir=rtl] .ps-xl-1 {
        padding-right: .25rem !important
    }

    [dir=rtl] .ps-xl-2 {
        padding-right: .5rem !important
    }

    [dir=rtl] .ps-xl-3 {
        padding-right: 1rem !important
    }

    [dir=rtl] .ps-xl-4 {
        padding-right: 1.5rem !important
    }

    [dir=rtl] .ps-xl-5 {
        padding-right: 3rem !important
    }
}

@media(min-width: 1400px) {
    [dir=rtl] .object-fit-xxl-contain {
        object-fit:contain !important
    }

    [dir=rtl] .object-fit-xxl-cover {
        object-fit: cover !important
    }

    [dir=rtl] .object-fit-xxl-fill {
        object-fit: fill !important
    }

    [dir=rtl] .object-fit-xxl-scale {
        object-fit: scale-down !important
    }

    [dir=rtl] .object-fit-xxl-none {
        object-fit: none !important
    }

    [dir=rtl] .border-xxl-solid {
        border-style: solid !important
    }

    [dir=rtl] .border-xxl-dashed {
        border-style: dashed !important
    }

    [dir=rtl] .border-xxl-none {
        border-style: none !important
    }

    [dir=rtl] .row-gap-xxl-0 {
        row-gap: 0 !important
    }

    [dir=rtl] .row-gap-xxl-1 {
        row-gap: .25rem !important
    }

    [dir=rtl] .row-gap-xxl-2 {
        row-gap: .5rem !important
    }

    [dir=rtl] .row-gap-xxl-3 {
        row-gap: 1rem !important
    }

    [dir=rtl] .row-gap-xxl-4 {
        row-gap: 1.5rem !important
    }

    [dir=rtl] .row-gap-xxl-5 {
        row-gap: 3rem !important
    }

    [dir=rtl] .column-gap-xxl-0 {
        column-gap: 0 !important
    }

    [dir=rtl] .column-gap-xxl-1 {
        column-gap: .25rem !important
    }

    [dir=rtl] .column-gap-xxl-2 {
        column-gap: .5rem !important
    }

    [dir=rtl] .column-gap-xxl-3 {
        column-gap: 1rem !important
    }

    [dir=rtl] .column-gap-xxl-4 {
        column-gap: 1.5rem !important
    }

    [dir=rtl] .column-gap-xxl-5 {
        column-gap: 3rem !important
    }

    [dir=rtl] .float-xxl-start {
        float: right !important
    }

    [dir=rtl] .float-xxl-end {
        float: left !important
    }

    [dir=rtl] .float-xxl-none {
        float: none !important
    }

    [dir=rtl] .text-xxl-start {
        text-align: right !important
    }

    [dir=rtl] .text-xxl-end {
        text-align: left !important
    }

    [dir=rtl] .text-xxl-center {
        text-align: center !important
    }

    [dir=rtl] .me-xxl-0 {
        margin-left: 0 !important
    }

    [dir=rtl] .me-xxl-1 {
        margin-left: .25rem !important
    }

    [dir=rtl] .me-xxl-2 {
        margin-left: .5rem !important
    }

    [dir=rtl] .me-xxl-3 {
        margin-left: 1rem !important
    }

    [dir=rtl] .me-xxl-4 {
        margin-left: 1.5rem !important
    }

    [dir=rtl] .me-xxl-5 {
        margin-left: 3rem !important
    }

    [dir=rtl] .me-xxl-auto {
        margin-left: auto !important
    }

    [dir=rtl] .ms-xxl-0 {
        margin-right: 0 !important
    }

    [dir=rtl] .ms-xxl-1 {
        margin-right: .25rem !important
    }

    [dir=rtl] .ms-xxl-2 {
        margin-right: .5rem !important
    }

    [dir=rtl] .ms-xxl-3 {
        margin-right: 1rem !important
    }

    [dir=rtl] .ms-xxl-4 {
        margin-right: 1.5rem !important
    }

    [dir=rtl] .ms-xxl-5 {
        margin-right: 3rem !important
    }

    [dir=rtl] .ms-xxl-auto {
        margin-right: auto !important
    }

    [dir=rtl] .me-xxl-n1 {
        margin-left: -0.25rem !important
    }

    [dir=rtl] .me-xxl-n2 {
        margin-left: -0.5rem !important
    }

    [dir=rtl] .me-xxl-n3 {
        margin-left: -1rem !important
    }

    [dir=rtl] .me-xxl-n4 {
        margin-left: -1.5rem !important
    }

    [dir=rtl] .me-xxl-n5 {
        margin-left: -3rem !important
    }

    [dir=rtl] .ms-xxl-n1 {
        margin-right: -0.25rem !important
    }

    [dir=rtl] .ms-xxl-n2 {
        margin-right: -0.5rem !important
    }

    [dir=rtl] .ms-xxl-n3 {
        margin-right: -1rem !important
    }

    [dir=rtl] .ms-xxl-n4 {
        margin-right: -1.5rem !important
    }

    [dir=rtl] .ms-xxl-n5 {
        margin-right: -3rem !important
    }

    [dir=rtl] .pe-xxl-0 {
        padding-left: 0 !important
    }

    [dir=rtl] .pe-xxl-1 {
        padding-left: .25rem !important
    }

    [dir=rtl] .pe-xxl-2 {
        padding-left: .5rem !important
    }

    [dir=rtl] .pe-xxl-3 {
        padding-left: 1rem !important
    }

    [dir=rtl] .pe-xxl-4 {
        padding-left: 1.5rem !important
    }

    [dir=rtl] .pe-xxl-5 {
        padding-left: 3rem !important
    }

    [dir=rtl] .ps-xxl-0 {
        padding-right: 0 !important
    }

    [dir=rtl] .ps-xxl-1 {
        padding-right: .25rem !important
    }

    [dir=rtl] .ps-xxl-2 {
        padding-right: .5rem !important
    }

    [dir=rtl] .ps-xxl-3 {
        padding-right: 1rem !important
    }

    [dir=rtl] .ps-xxl-4 {
        padding-right: 1.5rem !important
    }

    [dir=rtl] .ps-xxl-5 {
        padding-right: 3rem !important
    }
}

body {
    text-rendering: optimizeLegibility;
    font-smoothing: antialiased;
    -moz-font-feature-settings: "liga" on;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

@media(min-width: 768px) {
    button.list-group-item {
        outline:none
    }
}

.app-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(75,70,92,.5);
    visibility: hidden;
    z-index: 3;
    transition: all .25s ease
}

.app-overlay.show {
    visibility: visible
}

.container,.container-fluid,.container-sm,.container-md,.container-lg,.container-xl,.container-xxl {
    padding-right: 1rem;
    padding-left: 1rem
}

@media(min-width: 992px) {
    .container,.container-fluid,.container-sm,.container-md,.container-lg,.container-xl,.container-xxl {
        padding-right:1.5rem;
        padding-left: 1.5rem
    }
}

.img-thumbnail {
    position: relative;
    display: block
}

.img-thumbnail img {
    z-index: 1
}

.img-thumbnail-content {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 3;
    display: block;
    opacity: 0;
    transition: all .2s ease-in-out;
    transform: translate(-50%, -50%)
}

.img-thumbnail:hover .img-thumbnail-content,.img-thumbnail:focus .img-thumbnail-content {
    opacity: 1
}

.img-thumbnail-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 2;
    display: block;
    transition: all .2s ease-in-out
}

.img-thumbnail:not(:hover):not(:focus) .img-thumbnail-overlay {
    opacity: 0 !important
}

.img-thumbnail-shadow {
    transition: box-shadow .2s
}

.img-thumbnail-shadow:hover,.img-thumbnail-shadow:focus {
    box-shadow: 0 5px 20px rgba(75,70,92,.4)
}

.img-thumbnail-zoom-in {
    overflow: hidden
}

.img-thumbnail-zoom-in img {
    transition: all .3s ease-in-out;
    transform: translate3d(0)
}

.img-thumbnail-zoom-in .img-thumbnail-content {
    transform: translate(-50%, -50%) scale(0.6)
}

.img-thumbnail-zoom-in:hover img,.img-thumbnail-zoom-in:focus img {
    transform: scale(1.1)
}

.img-thumbnail-zoom-in:hover .img-thumbnail-content,.img-thumbnail-zoom-in:focus .img-thumbnail-content {
    transform: translate(-50%, -50%) scale(1)
}

@media all and (-ms-high-contrast: none),(-ms-high-contrast: active) {
    .card,.card-body,.media,.flex-column,.tab-content {
        min-height: 1px
    }

    img {
        min-height: 1px;
        height: auto
    }
}

[dir=rtl] body {
    text-align: right;
    direction: rtl
}

.buy-now .btn-buy-now {
    position: fixed;
    bottom: 3rem;
    right: 1.5rem;
    z-index: 1080;
    box-shadow: 0 1px 20px 1px #ea5455 !important
}

[dir=rtl] .buy-now .btn-buy-now {
    left: 1.5rem;
    right: inherit
}

.buy-now .btn-buy-now:hover {
    box-shadow: none
}

.ui-square,.ui-rect,.ui-rect-30,.ui-rect-60,.ui-rect-67,.ui-rect-75 {
    position: relative !important;
    display: block !important;
    padding-top: 100% !important;
    width: 100% !important
}

.ui-square {
    padding-top: 100% !important
}

.ui-rect {
    padding-top: 50% !important
}

.ui-rect-30 {
    padding-top: 30% !important
}

.ui-rect-60 {
    padding-top: 60% !important
}

.ui-rect-67 {
    padding-top: 67% !important
}

.ui-rect-75 {
    padding-top: 75% !important
}

.ui-square-content,.ui-rect-content {
    position: absolute !important;
    top: 0 !important;
    right: 0 !important;
    bottom: 0 !important;
    left: 0 !important
}

.text-strike-through {
    text-decoration: line-through
}

.line-clamp-1 {
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical
}

.line-clamp-2 {
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical
}

.line-clamp-3 {
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical
}

.ui-stars,.ui-star,.ui-star>* {
    height: 1.1em;
    -webkit-user-drag: none;
    -khtml-user-drag: none;
    -moz-user-drag: none;
    -o-user-drag: none;
    user-drag: none
}

.ui-stars {
    display: inline-block;
    vertical-align: middle;
    white-space: nowrap
}

.ui-star {
    position: relative;
    display: block;
    float: left;
    width: 1.1em;
    height: 1.1em;
    text-decoration: none !important;
    font-size: 1.1em;
    line-height: 1;
    user-select: none
}

[dir=rtl] .ui-star {
    float: right
}

.ui-star+.ui-star {
    margin-left: -0.1em
}

[dir=rtl] .ui-star+.ui-star {
    margin-right: -0.1em;
    margin-left: 0
}

.ui-star>*,.ui-star>*::before,.ui-star>*::after {
    position: absolute;
    left: .55em;
    height: 100%;
    font-size: 1em;
    line-height: 1;
    transform: translateX(-50%)
}

[dir=rtl] .ui-star>*,[dir=rtl] .ui-star>*::before,[dir=rtl] .ui-star>*::after {
    right: .55em;
    left: auto;
    transform: translateX(50%)
}

.ui-star>* {
    top: 0;
    width: 100%;
    text-align: center
}

.ui-star>*:first-child {
    z-index: 10;
    display: none;
    overflow: hidden;
    color: #ff9f43
}

.ui-star>*:last-child {
    z-index: 5;
    display: block
}

.ui-star.half-filled>*:first-child {
    width: 50%;
    transform: translateX(-100%)
}

[dir=rtl] .ui-star.half-filled>*:first-child {
    transform: translateX(100%)
}

.ui-star.filled>*:first-child,.ui-star.half-filled>*:first-child {
    display: block
}

.ui-star.filled>*:last-child {
    display: none
}

.ui-stars.hoverable .ui-star>*:first-child {
    display: block
}

.ui-stars.hoverable .ui-star:first-child:not(.filled)>*:first-child,.ui-stars.hoverable .ui-star:first-child:not(.filled)~.ui-star>*:first-child,.ui-stars.hoverable .ui-star:first-child:not(.half-filled)>*:first-child,.ui-stars.hoverable .ui-star:first-child:not(.half-filled)~.ui-star>*:first-child {
    display: none
}

.ui-stars.hoverable .ui-star.filled>*:first-child,.ui-stars.hoverable .ui-star.half-filled>*:first-child {
    display: block !important
}

.ui-stars.hoverable:hover .ui-star>*:first-child {
    display: block !important;
    width: 100% !important;
    transform: translateX(-50%) !important
}

[dir=rtl] .ui-stars.hoverable:hover .ui-star>*:first-child {
    transform: translateX(50%) !important
}

.ui-stars.hoverable .ui-star:hover~.ui-star>*:first-child {
    display: none !important
}

.ui-stars.hoverable .ui-star:hover~.ui-star>*:last-child {
    display: block !important
}

.ui-bg-cover {
    background-color: rgba(0,0,0,0);
    background-position: center center;
    background-size: cover
}

.ui-bg-overlay-container,.ui-bg-video-container {
    position: relative
}

.ui-bg-overlay-container>*,.ui-bg-video-container>* {
    position: relative
}

.ui-bg-overlay-container .ui-bg-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: block
}

.light-style .ui-bordered {
    border: 1px solid #dbdade
}

.light-style .ui-star>*:last-child {
    color: rgba(75,70,92,.2)
}

.menu {
    display: flex
}

.menu .ps__thumb-y,.menu .ps__rail-y {
    width: .125rem !important
}

.menu .ps__rail-y {
    right: .25rem !important;
    left: auto !important;
    background: none !important
}

[dir=rtl] .menu .ps__rail-y {
    right: auto !important;
    left: .25rem !important
}

.menu .ps__rail-y:hover,.menu .ps__rail-y:focus,.menu .ps__rail-y.ps--clicking,.menu .ps__rail-y:hover>.ps__thumb-y,.menu .ps__rail-y:focus>.ps__thumb-y,.menu .ps__rail-y.ps--clicking>.ps__thumb-y {
    width: .375rem !important
}

.menu-inner {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    margin: 0;
    padding: 0;
    height: 100%
}

.menu-inner-shadow {
    display: none;
    position: absolute;
    top: 3.4375rem;
    height: 3rem;
    width: 100%;
    pointer-events: none;
    z-index: 2
}

html:not(.layout-menu-fixed) .menu-inner-shadow {
    display: none !important
}

.menu-item {
    align-items: flex-start;
    justify-content: flex-start
}

.menu-item.menu-item-animating {
    transition: height .3s ease-in-out
}

.menu-item,.menu-header,.menu-divider,.menu-block {
    flex: 0 0 auto;
    flex-direction: column;
    margin: 0;
    padding: 0;
    list-style: none
}

.menu-header {
    opacity: 1;
    transition: opacity .3s ease-in-out
}

.menu-icon {
    flex-grow: 0;
    flex-shrink: 0;
    margin-right: .5rem;
    font-size: 1.375rem
}

.menu:not(.menu-no-animation) .menu-icon {
    transition: margin-right .3s ease
}

[dir=rtl] .menu-icon {
    margin-right: 0;
    margin-left: .5rem
}

.menu:not(.menu-no-animation) [dir=rtl] .menu-icon {
    transition: margin-left .3s ease
}

.menu-link {
    position: relative;
    display: flex;
    align-items: center;
    flex: 0 1 auto;
    margin: 0
}

.menu-item.active>.menu-link.menu-toggle {
    font-weight: 500
}

.menu-item.disabled .menu-link {
    cursor: not-allowed !important
}

.menu:not(.menu-no-animation) .menu-link {
    transition-duration: .3s;
    transition-property: color,background-color
}

.menu-link>:not(.menu-icon) {
    flex: 0 1 auto;
    opacity: 1
}

.menu:not(.menu-no-animation) .menu-link>:not(.menu-icon) {
    transition: opacity .3s ease-in-out
}

.menu-sub {
    display: none;
    flex-direction: column;
    margin: 0;
    padding: 0
}

.menu:not(.menu-no-animation) .menu-sub {
    transition: background-color .3s
}

.menu-item.open>.menu-sub {
    display: flex
}

.menu-toggle::after {
    content: "";
    position: absolute;
    top: 48%;
    display: block;
    width: .42em;
    height: .42em;
    border: 1.5px solid;
    border-bottom: 0;
    border-left: 0;
    transform: translateY(-50%) rotate(45deg)
}

[dir=rtl] .menu-toggle::after {
    border-left: 1px solid;
    border-right: 0;
    transform: translateY(-50%) rotate(-45deg)
}

.menu-item.open:not(.menu-item-closing)>.menu-toggle::after {
    transform: translateY(-50%) rotate(135deg)
}

[dir=rtl] .menu-item.open:not(.menu-item-closing)>.menu-toggle::after {
    transform: translateY(-50%) rotate(-135deg)
}

.menu:not(.menu-no-animation) .menu-toggle::after {
    transition-duration: .3s;
    transition-property: -webkit-transform,transform
}

.menu-divider {
    width: 100%;
    border: 0;
    border-top: 1px solid
}

.menu-vertical {
    overflow: hidden;
    flex-direction: column
}

.menu-vertical:not(.menu-no-animation) {
    transition: width .3s
}

.menu-vertical,.menu-vertical .menu-block,.menu-vertical .menu-inner>.menu-item,.menu-vertical .menu-inner>.menu-header {
    width: 16.25rem
}

.menu-vertical .menu-inner {
    flex-direction: column;
    flex: 1 1 auto
}

.menu-vertical .menu-inner>.menu-item {
    margin: .125rem 0
}

.menu-vertical .menu-inner>.menu-item .menu-link {
    margin: 0 .875rem;
    border-radius: .375rem
}

.menu-vertical .menu-inner .menu-item.active>.menu-link {
    font-weight: 500
}

.menu-vertical .menu-header {
    padding: 1.25rem 1.75rem .375rem
}

.menu-vertical .menu-item .menu-link,.menu-vertical .menu-block {
    padding: .5rem 1rem
}

.menu-vertical .menu-item .menu-link {
    font-size: .9375rem
}

.menu-vertical .menu-item .menu-toggle {
    padding-right: calc(1rem + 1.26em)
}

[dir=rtl] .menu-vertical .menu-item .menu-toggle {
    padding-right: 1rem;
    padding-left: calc(1rem + 1.26em)
}

.menu-vertical .menu-item .menu-toggle::after {
    right: 1rem
}

[dir=rtl] .menu-vertical .menu-item .menu-toggle::after {
    right: auto;
    left: 1rem
}

.menu-vertical .menu-divider {
    margin-top: .5rem;
    margin-bottom: .5rem;
    padding: 0
}

.menu-vertical .menu-sub {
    padding: .25rem 0
}

.menu-vertical .menu-sub .menu-link {
    padding-top: .5rem;
    padding-bottom: .5rem
}

.menu-vertical .menu-sub .menu-item {
    margin: .125rem 0
}

.menu-vertical .menu-sub .menu-item:first-child {
    margin-top: 0 !important
}

.menu-vertical .menu-sub .menu-item:last-child {
    margin-bottom: 0 !important
}

.menu-vertical .menu-icon {
    width: 1.375rem
}

.menu-vertical .menu-sub .menu-icon {
    margin-right: 0
}

[dir=rtl] .menu-vertical .menu-sub .menu-icon {
    margin-left: 0
}

.menu-vertical .menu-horizontal-wrapper {
    flex: none
}

.menu-vertical .menu-sub .menu-link {
    padding-left: 2.875rem
}

[dir=rtl] .menu-vertical .menu-sub .menu-link {
    padding-right: 2.875rem;
    padding-left: 1rem
}

.menu-vertical .menu-sub .menu-sub .menu-link {
    padding-left: 3.375rem
}

[dir=rtl] .menu-vertical .menu-sub .menu-sub .menu-link {
    padding-right: 3.375rem;
    padding-left: 1rem
}

.menu-vertical .menu-sub .menu-sub .menu-sub .menu-link {
    padding-left: 3.875rem
}

[dir=rtl] .menu-vertical .menu-sub .menu-sub .menu-sub .menu-link {
    padding-right: 3.875rem;
    padding-left: 1rem
}

.menu-vertical .menu-sub .menu-sub .menu-sub .menu-sub .menu-link {
    padding-left: 4.375rem
}

[dir=rtl] .menu-vertical .menu-sub .menu-sub .menu-sub .menu-sub .menu-link {
    padding-right: 4.375rem;
    padding-left: 1rem
}

.menu-vertical .menu-sub .menu-sub .menu-sub .menu-sub .menu-sub .menu-link {
    padding-left: 4.875rem
}

[dir=rtl] .menu-vertical .menu-sub .menu-sub .menu-sub .menu-sub .menu-sub .menu-link {
    padding-right: 4.875rem;
    padding-left: 1rem
}

.menu-collapsed:not(:hover) {
    width: 5.25rem
}

.menu-collapsed:not(:hover) .menu-inner>.menu-item {
    width: 5.25rem
}

.menu-collapsed:not(:hover) .menu-inner>.menu-header,.menu-collapsed:not(:hover) .menu-block {
    position: relative;
    margin-left: 5.25rem;
    padding-right: 1.5rem;
    padding-left: .5rem;
    width: 16.25rem
}

.menu-collapsed:not(:hover) .menu-inner>.menu-header .menu-header-text,.menu-collapsed:not(:hover) .menu-block .menu-header-text {
    overflow: hidden;
    opacity: 0
}

.menu-collapsed:not(:hover) .menu-inner>.menu-header::before,.menu-collapsed:not(:hover) .menu-block::before {
    content: "";
    font-family: "tabler-icons";
    position: absolute;
    left: -3.28125rem;
    color: #a5a3ae;
    top: .25rem;
    font-size: 1.375rem
}

.menu-collapsed:not(:hover) .menu-inner>.menu-item div:not(.menu-block) {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    opacity: 0
}

.menu-collapsed:not(:hover) .menu-inner>.menu-item>.menu-sub,.menu-collapsed:not(:hover) .menu-inner>.menu-item.open>.menu-sub {
    display: none
}

.menu-collapsed:not(:hover) .menu-inner>.menu-item>.menu-toggle::after {
    display: none
}

.menu-collapsed:not(:hover) .menu-inner>.menu-item>.menu-link .menu-icon {
    text-align: center;
    margin-right: 0
}

[dir=rtl] .menu-collapsed:not(:hover) .menu-block {
    width: 5.25rem !important
}

[dir=rtl] .menu-collapsed:not(:hover) .menu-inner>.menu-item>.menu-link {
    padding-left: 1rem
}

[dir=rtl] .menu-collapsed:not(:hover) .menu-inner>.menu-header,[dir=rtl] .menu-collapsed:not(:hover) .menu-block {
    margin-right: 5.25rem;
    margin-left: 0;
    padding-right: .5rem;
    padding-left: 1.5rem
}

[dir=rtl] .menu-collapsed:not(:hover) .menu-inner>.menu-header::before,[dir=rtl] .menu-collapsed:not(:hover) .menu-block::before {
    right: -3.28125rem;
    left: auto
}

[dir=rtl] .menu-collapsed:not(:hover) .menu-inner>.menu-item>.menu-link .menu-icon {
    margin-left: 0
}

.menu-horizontal {
    flex-direction: row;
    width: 100%
}

.menu-horizontal .menu-inner {
    overflow: hidden;
    flex-direction: row;
    flex: 0 1 100%
}

.menu-horizontal .menu-inner>.menu-item.active>.menu-link.menu-toggle {
    font-weight: 500
}

.menu-horizontal .menu-inner .menu-item.active>.menu-link:not(.menu-toggle) {
    font-weight: 500
}

.menu-horizontal .menu-item .menu-link {
    padding: .5rem .875rem
}

.menu-horizontal .menu-item .menu-toggle {
    padding-right: calc(0.875rem + 1.26em)
}

[dir=rtl] .menu-horizontal .menu-item .menu-toggle {
    padding-right: .875rem;
    padding-left: calc(0.875rem + 1.26em)
}

.menu-horizontal .menu-item .menu-toggle::after {
    right: .875rem
}

[dir=rtl] .menu-horizontal .menu-item .menu-toggle::after {
    right: auto;
    left: .875rem
}

.menu-horizontal .menu-inner>.menu-item>.menu-toggle::after {
    transform: translateY(-50%) rotate(135deg)
}

[dir=rtl] .menu-horizontal .menu-inner>.menu-item>.menu-toggle::after {
    transform: translateY(-50%) rotate(-135deg)
}

.menu-horizontal .menu-inner>.menu-item>.menu-toggle::before {
    position: absolute;
    block-size: .625rem;
    content: "";
    inline-size: 100%;
    inset-block-start: 100%;
    inset-inline-start: 0;
    z-index: 2;
    pointer-events: auto
}

.menu-horizontal .menu-inner>.menu-item>.menu-sub {
    margin-top: .625rem
}

.menu-horizontal .menu-sub .menu-item.open:not(.menu-item-closing)>.menu-toggle::after {
    transform: translateY(-50%) rotate(45deg)
}

[dir=rtl] .menu-horizontal .menu-sub .menu-item.open:not(.menu-item-closing)>.menu-toggle::after {
    transform: translateY(-50%) rotate(-45deg)
}

.menu-horizontal .menu-inner>.menu-item:not(.menu-item-closing).open .menu-item.open {
    position: relative
}

.menu-horizontal .menu-header,.menu-horizontal .menu-divider {
    display: none !important
}

.menu-horizontal .menu-sub {
    position: absolute;
    width: 15.625rem;
    padding: .375rem 0;
    box-shadow: 0 .625rem 1.25rem rgba(165,163,174,.4)
}

.menu-horizontal .menu-sub .menu-item {
    padding: .125rem .5rem
}

.menu-horizontal .menu-sub .menu-item.open .menu-link>div::after {
    position: absolute;
    content: "";
    z-index: 2;
    pointer-events: auto;
    width: 1.0625rem;
    height: 100%;
    right: -1.0625rem
}

.menu-horizontal .menu-sub .menu-sub {
    position: absolute;
    left: 100%;
    top: 0;
    width: 100%
}

[dir=rtl] .menu-horizontal .menu-sub .menu-sub {
    left: -100%
}

.menu-horizontal .menu-sub .menu-link {
    padding-top: .5rem;
    padding-bottom: .5rem;
    border-radius: .375rem
}

.menu-horizontal .menu-inner>.menu-item .menu-sub {
    border-radius: .375rem
}

.menu-horizontal:not(.menu-no-animation) .menu-inner .menu-item.open .menu-sub {
    animation: menuDropdownShow .3s ease-in-out
}

.menu-horizontal .menu-sub .menu-link {
    padding-left: 2.75rem
}

[dir=rtl] .menu-horizontal .menu-sub .menu-link {
    padding-right: 2.75rem;
    padding-left: .875rem
}

@media(max-width: 991.98px) {
    .menu-horizontal {
        display:none
    }
}

.menu-horizontal-wrapper {
    overflow: hidden;
    flex: 0 1 100%;
    width: 0
}

.menu:not(.menu-no-animation) .menu-horizontal-wrapper .menu-inner {
    transition: margin .3s
}

.menu-horizontal-prev,.menu-horizontal-next {
    position: relative;
    display: block;
    flex: 0 0 auto;
    width: 2.25rem
}

.menu-horizontal-prev::after,.menu-horizontal-next::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    display: block;
    width: .5rem;
    height: .5rem;
    border: 1px solid;
    border-top: 0
}

.menu-horizontal-prev.disabled,.menu-horizontal-next.disabled {
    cursor: not-allowed !important
}

.menu-horizontal-prev::after {
    border-right: 0;
    transform: translate(-50%, -50%) rotate(45deg)
}

[dir=rtl] .menu-horizontal-prev::after {
    transform: translate(-50%, -50%) rotate(-135deg)
}

.menu-horizontal-next::after {
    border-left: 0;
    transform: translate(-50%, -50%) rotate(-45deg)
}

[dir=rtl] .menu-horizontal-next::after {
    transform: translate(-50%, -50%) rotate(135deg)
}

@-webkit-keyframes menuDropdownShow {
    0% {
        opacity: 0;
        transform: translateY(-0.5rem)
    }

    100% {
        opacity: 1;
        transform: translateY(0)
    }
}

@-moz-keyframes menuDropdownShow {
    0% {
        opacity: 0;
        transform: translateY(-0.5rem)
    }

    100% {
        opacity: 1;
        transform: translateY(0)
    }
}

@keyframes menuDropdownShow {
    0% {
        opacity: 0;
        transform: translateY(-0.5rem)
    }

    100% {
        opacity: 1;
        transform: translateY(0)
    }
}

.menu-light {
    color: rgba(75,70,92,.5)
}

.menu-light .menu-link,.menu-light .menu-horizontal-prev,.menu-light .menu-horizontal-next {
    color: rgba(75,70,92,.5)
}

.menu-light .menu-link:hover,.menu-light .menu-link:focus,.menu-light .menu-horizontal-prev:hover,.menu-light .menu-horizontal-prev:focus,.menu-light .menu-horizontal-next:hover,.menu-light .menu-horizontal-next:focus {
    color: #6f6b7d
}

.menu-light .menu-link.active,.menu-light .menu-horizontal-prev.active,.menu-light .menu-horizontal-next.active {
    color: #6f6b7d
}

.menu-light .menu-item.disabled .menu-link {
    color: rgba(75,70,92,.3) !important
}

.menu-light .menu-item.open:not(.menu-item-closing)>.menu-toggle,.menu-light .menu-item.active>.menu-link {
    color: #6f6b7d
}

.menu-light .menu-item.active>.menu-link:not(.menu-toggle) {
    background: rgba(0,0,0,.05)
}

.menu-light .menu-inner>.menu-item.menu-item-closing .menu-item.open .menu-sub,.menu-light .menu-inner>.menu-item.menu-item-closing .menu-item.open .menu-toggle {
    color: rgba(75,70,92,.5)
}

.menu-light .menu-text {
    color: #6f6b7d
}

.menu-light .menu-header {
    color: rgba(75,70,92,.5)
}

.menu-light hr,.menu-light .menu-divider,.menu-light .menu-inner>.menu-item.open>.menu-sub::before {
    border-color: rgba(0,0,0,.06) !important
}

.menu-light .menu-inner>.menu-header::before,.menu-light .menu-block::before {
    background-color: rgba(75,70,92,.3)
}

.menu-light .menu-inner>.menu-item.open .menu-item.open>.menu-toggle::before {
    background-color: rgba(0,0,0,.06)
}

.menu-light .menu-inner>.menu-item.open .menu-item.active>.menu-link::before {
    background-color: #6f6b7d
}

.menu-light .ps__thumb-y {
    background: rgba(75,70,92,.5) !important
}

.menu-dark {
    color: rgba(255,255,255,.8)
}

.menu-dark .menu-link,.menu-dark .menu-horizontal-prev,.menu-dark .menu-horizontal-next {
    color: rgba(255,255,255,.8)
}

.menu-dark .menu-link:hover,.menu-dark .menu-link:focus,.menu-dark .menu-horizontal-prev:hover,.menu-dark .menu-horizontal-prev:focus,.menu-dark .menu-horizontal-next:hover,.menu-dark .menu-horizontal-next:focus {
    color: #fff
}

.menu-dark .menu-link.active,.menu-dark .menu-horizontal-prev.active,.menu-dark .menu-horizontal-next.active {
    color: #fff
}

.menu-dark .menu-item.disabled .menu-link {
    color: rgba(255,255,255,.4) !important
}

.menu-dark .menu-item.open:not(.menu-item-closing)>.menu-toggle,.menu-dark .menu-item.active>.menu-link {
    color: #fff
}

.menu-dark .menu-item.active>.menu-link:not(.menu-toggle) {
    background: rgba(0,0,0,.06)
}

.menu-dark .menu-inner>.menu-item.menu-item-closing .menu-item.open .menu-sub,.menu-dark .menu-inner>.menu-item.menu-item-closing .menu-item.open .menu-toggle {
    color: rgba(255,255,255,.8)
}

.menu-dark .menu-text {
    color: #fff
}

.menu-dark .menu-header {
    color: rgba(255,255,255,.8)
}

.menu-dark hr,.menu-dark .menu-divider,.menu-dark .menu-inner>.menu-item.open>.menu-sub::before {
    border-color: rgba(255,255,255,.2) !important
}

.menu-dark .menu-inner>.menu-header::before,.menu-dark .menu-block::before {
    background-color: rgba(255,255,255,.4)
}

.menu-dark .menu-inner>.menu-item.open .menu-item.open>.menu-toggle::before {
    background-color: rgba(255,255,255,.2)
}

.menu-dark .menu-inner>.menu-item.open .menu-item.active>.menu-link::before {
    background-color: #fff
}

.menu-dark .ps__thumb-y {
    background: rgba(255,255,255,.8) !important
}

.layout-container {
    min-height: 100vh
}

.layout-wrapper,.layout-container {
    width: 100%;
    display: flex;
    flex: 1 1 auto;
    align-items: stretch
}

.layout-menu-offcanvas .layout-wrapper,.layout-menu-fixed-offcanvas .layout-wrapper {
    overflow: hidden
}

.layout-menu-offcanvas .layout-navbar .layout-menu-toggle,.layout-menu-fixed-offcanvas .layout-navbar .layout-menu-toggle {
    display: block !important
}

@media(min-width: 1200px) {
    .layout-menu-offcanvas .layout-menu .layout-menu-toggle,.layout-menu-fixed-offcanvas .layout-menu .layout-menu-toggle {
        display:none
    }
}

.layout-page,.content-wrapper,.content-wrapper>*,.layout-menu {
    min-height: 1px
}

.layout-navbar,.content-footer {
    flex: 0 0 auto
}

.layout-page {
    display: flex;
    flex: 1 1 auto;
    align-items: stretch;
    padding: 0
}

.layout-without-menu .layout-page {
    padding-right: 0 !important;
    padding-left: 0 !important
}

.content-wrapper {
    display: flex;
    align-items: stretch;
    flex: 1 1 auto;
    flex-direction: column;
    justify-content: space-between
}

.content-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1;
    width: 100vw;
    height: 100vh;
    background-color: #4b465c
}

.content-backdrop.fade {
    opacity: 0
}

.content-backdrop.show {
    opacity: .5
}

.layout-menu-fixed .content-backdrop {
    z-index: 10
}

.layout-horizontal .content-backdrop:not(.fade) {
    z-index: 9;
    top: 3.875rem !important
}

.content-backdrop.fade {
    z-index: -1
}

.layout-navbar {
    position: relative;
    padding-top: .25rem;
    padding-bottom: .2rem;
    height: 3.875rem;
    flex-wrap: nowrap;
    color: #6f6b7d;
    z-index: 2
}

.layout-navbar .navbar {
    transform: translate3d(0, 0, 0)
}

.layout-navbar .navbar-nav-right {
    flex-basis: 100%
}

.layout-navbar.navbar-detached {
    width: calc(100% - 1.5rem*2);
    margin: 1rem auto 0;
    border-radius: .375rem;
    padding: 0 1.5rem
}

.layout-navbar.navbar-detached.container-xxl {
    max-width: calc(1440px - 1.5rem*2)
}

.layout-navbar-fixed .layout-navbar.navbar-detached {
    width: calc(100% - 1.5rem*2 - 16.25rem)
}

@media(max-width: 1199.98px) {
    .layout-navbar-fixed .layout-navbar.navbar-detached {
        width:calc(100% - 1.5rem*2) !important
    }
}

@media(max-width: 991.98px) {
    .layout-navbar-fixed .layout-navbar.navbar-detached {
        width:calc(100% - 1rem*2) !important
    }
}

.layout-navbar-fixed.layout-menu-collapsed .layout-navbar.navbar-detached {
    width: calc(100% - 1.5rem*2 - 5.25rem)
}

@media(max-width: 1199.98px) {
    .layout-navbar.navbar-detached {
        width:calc(100vw - (100vw - 100%) - 1.5rem*2) !important
    }
}

@media(max-width: 991.98px) {
    .layout-navbar.navbar-detached {
        width:calc(100vw - (100vw - 100%) - 1rem*2) !important
    }
}

.layout-menu-collapsed .layout-navbar.navbar-detached,.layout-without-menu .layout-navbar.navbar-detached {
    width: calc(100% - 1.5rem*2)
}

.layout-navbar .navbar-search-wrapper .search-input,.layout-navbar .navbar-search-wrapper .input-group-text {
    background-color: rgba(0,0,0,0)
}

.layout-navbar .navbar-search-wrapper .navbar-search-suggestion {
    max-height: 28rem;
    border-radius: .5rem
}

.layout-navbar .navbar-search-wrapper .navbar-search-suggestion .suggestion {
    color: #6f6b7d
}

.layout-navbar .navbar-search-wrapper .navbar-search-suggestion .suggestion:hover,.layout-navbar .navbar-search-wrapper .navbar-search-suggestion .suggestion.active {
    background: #f8f7fa;
    color: #6f6b7d
}

.layout-navbar .navbar-search-wrapper .navbar-search-suggestion .suggestions-header {
    font-weight: 500
}

.layout-navbar .search-input-wrapper .search-toggler {
    position: absolute;
    top: 1.25rem;
    right: 1rem;
    z-index: 1
}

[dir=rtl] .layout-navbar .search-input-wrapper .search-toggler {
    right: inherit;
    left: 1rem
}

.layout-navbar .search-input-wrapper .twitter-typeahead {
    position: absolute !important;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%
}

@media(min-width: 1400px) {
    .layout-navbar .search-input-wrapper .twitter-typeahead.container-xxl {
        left:calc((100% - 1440px)*.5)
    }

    [dir=rtl] .layout-navbar .search-input-wrapper .twitter-typeahead.container-xxl {
        right: calc((100% - 1440px)*.5);
        left: inherit
    }

    .layout-navbar .search-input-wrapper .twitter-typeahead.container-xxl+.search-toggler {
        right: calc((100% - 1440px + 5rem)*.5)
    }

    [dir=rtl] .layout-navbar .search-input-wrapper .twitter-typeahead.container-xxl+.search-toggler {
        left: calc((100% - 1440px + 5rem)*.5);
        right: inherit
    }
}

.layout-navbar .search-input-wrapper .search-input {
    height: 100%;
    box-shadow: none
}

.layout-navbar .search-input-wrapper .navbar-search-suggestion {
    width: 100%
}

.layout-horizontal .layout-navbar .search-input-wrapper .navbar-search-suggestion {
    width: 96%
}

.layout-navbar .navbar-dropdown .badge-notifications {
    top: .5rem;
    padding: .2rem .4rem
}

.layout-navbar .navbar-dropdown .dropdown-menu {
    min-width: 22rem;
    overflow: hidden
}

.layout-navbar .navbar-dropdown .dropdown-menu .last-login {
    white-space: normal
}

.layout-navbar .navbar-dropdown.dropdown-notifications .dropdown-notifications-list {
    max-height: 24.08rem
}

.layout-navbar .navbar-dropdown.dropdown-notifications .dropdown-notifications-list .dropdown-notifications-item {
    padding: 1rem;
    cursor: pointer
}

.layout-navbar .navbar-dropdown.dropdown-notifications .dropdown-notifications-list .dropdown-notifications-item .dropdown-notifications-actions {
    text-align: center
}

.layout-navbar .navbar-dropdown.dropdown-notifications .dropdown-notifications-list .dropdown-notifications-item .dropdown-notifications-actions>a {
    display: block
}

.layout-navbar .navbar-dropdown.dropdown-notifications .dropdown-notifications-list .dropdown-notifications-item .dropdown-notifications-archive i,.layout-navbar .navbar-dropdown.dropdown-notifications .dropdown-notifications-list .dropdown-notifications-item .dropdown-notifications-archive span {
    color: #6f6b7d
}

.layout-navbar .navbar-dropdown.dropdown-notifications .dropdown-notifications-list .dropdown-notifications-item.marked-as-read .dropdown-notifications-read,.layout-navbar .navbar-dropdown.dropdown-notifications .dropdown-notifications-list .dropdown-notifications-item.marked-as-read .dropdown-notifications-archive {
    visibility: hidden
}

.layout-navbar .navbar-dropdown.dropdown-notifications .dropdown-notifications-list .dropdown-notifications-item.marked-as-read .dropdown-notifications-read span {
    background-color: #a8aaae
}

.layout-navbar .navbar-dropdown.dropdown-notifications .dropdown-notifications-list .dropdown-notifications-item:not(.marked-as-read) .dropdown-notifications-archive {
    visibility: hidden
}

.layout-navbar .navbar-dropdown.dropdown-notifications .dropdown-notifications-list .dropdown-notifications-item:hover.marked-as-read .dropdown-notifications-read,.layout-navbar .navbar-dropdown.dropdown-notifications .dropdown-notifications-list .dropdown-notifications-item:hover.marked-as-read .dropdown-notifications-archive {
    visibility: visible
}

.layout-navbar .navbar-dropdown.dropdown-notifications .dropdown-notifications-list .dropdown-notifications-item:hover:not(.marked-as-read) .dropdown-notifications-archive {
    visibility: visible
}

.layout-navbar .navbar-dropdown.dropdown-shortcuts .dropdown-shortcuts-list {
    max-height: 24.08rem
}

.layout-navbar .navbar-dropdown.dropdown-shortcuts .dropdown-shortcuts-item {
    text-align: center;
    padding: .875rem
}

.layout-navbar .navbar-dropdown.dropdown-shortcuts .dropdown-shortcuts-item:hover {
    background-color: rgba(75,70,92,.04)
}

.layout-navbar .navbar-dropdown.dropdown-shortcuts .dropdown-shortcuts-item .dropdown-shortcuts-icon {
    height: 3rem;
    width: 3rem;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgba(75,70,92,.08)
}

.layout-navbar .navbar-dropdown.dropdown-shortcuts .dropdown-shortcuts-item a,.layout-navbar .navbar-dropdown.dropdown-shortcuts .dropdown-shortcuts-item a:hover {
    display: block;
    margin-bottom: 0;
    color: #6f6b7d !important;
    font-weight: 500
}

.layout-navbar .navbar-dropdown.dropdown-user .dropdown-menu {
    min-width: 14rem
}

.layout-navbar[class*=bg-]:not(.bg-navbar-theme) .nav-item .input-group-text,.layout-navbar[class*=bg-]:not(.bg-navbar-theme) .nav-item .dropdown-toggle {
    color: #fff
}

@media(max-width: 1199.98px) {
    .layout-navbar .navbar-nav .nav-item.dropdown .dropdown-menu {
        position:absolute
    }

    .layout-navbar .navbar-nav .nav-item.dropdown .dropdown-menu .last-login {
        white-space: nowrap
    }
}

@media(max-width: 767.98px) {
    .layout-navbar .navbar-nav .nav-item.dropdown {
        position:static;
        float: left
    }

    .layout-navbar .navbar-nav .nav-item.dropdown .badge-notifications {
        top: auto
    }

    .layout-navbar .navbar-nav .nav-item.dropdown .dropdown-menu {
        position: absolute;
        left: .9rem;
        min-width: auto;
        width: 92%
    }
}

html:not([dir=rtl]) .layout-horizontal .layout-navbar .navbar-search-suggestion {
    left: 2% !important
}

[dir=rtl] .layout-horizontal .layout-navbar .navbar-search-suggestion {
    right: 2% !important
}

@media(max-width: 1199.98px) {
    .layout-navbar {
        z-index:1080
    }
}

.layout-menu {
    position: relative;
    flex: 1 0 auto
}

.layout-menu a:focus-visible {
    outline: none
}

.layout-menu .menu {
    transform: translate3d(0, 0, 0)
}

.layout-menu .menu-vertical {
    height: 100%
}

.layout-content-navbar .layout-page {
    flex-basis: 100%;
    flex-direction: column;
    width: 0;
    min-width: 0;
    max-width: 100%
}

.layout-content-navbar .content-wrapper {
    width: 100%
}

.layout-navbar-full .layout-container {
    flex-direction: column
}

@media(min-width: 1200px) {
    .layout-navbar-full:not(.layout-horizontal) .menu-inner {
        margin-top:.75rem
    }
}

.layout-navbar-full .content-wrapper {
    flex-basis: 100%;
    width: 0;
    min-width: 0;
    max-width: 100%
}

.layout-navbar-full .content-backdrop.show {
    z-index: 9
}

.layout-menu-fixed .layout-navbar-full .content-backdrop.show,.layout-menu-fixed-offcanvas .layout-navbar-full .content-backdrop.show {
    z-index: 1076
}

.layout-menu-flipped .layout-navbar-full .layout-page {
    flex-direction: row-reverse
}

.layout-menu-flipped .layout-content-navbar .layout-container {
    flex-direction: row-reverse
}

.layout-menu-toggle {
    display: block
}

.layout-menu-toggle .menu-toggle-icon::before {
    content: ""
}

.layout-menu-collapsed .layout-menu-toggle .menu-toggle-icon::before {
    content: ""
}

@media(min-width: 1200px) {
    .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .menu-vertical,.layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu.menu-vertical {
        width:5.25rem
    }

    .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .menu-vertical .menu-inner>.menu-item,.layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu.menu-vertical .menu-inner>.menu-item {
        width: 5.25rem
    }

    .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .menu-vertical .menu-inner>.menu-header,.layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .menu-vertical .menu-block,.layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu.menu-vertical .menu-inner>.menu-header,.layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu.menu-vertical .menu-block {
        position: relative;
        margin-left: 5.25rem;
        padding-right: 1.5rem;
        padding-left: .5rem;
        width: 16.25rem
    }

    .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .menu-vertical .menu-inner>.menu-header .menu-header-text,.layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .menu-vertical .menu-block .menu-header-text,.layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu.menu-vertical .menu-inner>.menu-header .menu-header-text,.layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu.menu-vertical .menu-block .menu-header-text {
        overflow: hidden;
        opacity: 0
    }

    .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .menu-vertical .menu-inner>.menu-header::before,.layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .menu-vertical .menu-block::before,.layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu.menu-vertical .menu-inner>.menu-header::before,.layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu.menu-vertical .menu-block::before {
        content: "";
        font-family: "tabler-icons";
        position: absolute;
        left: -3.28125rem;
        color: #a5a3ae;
        top: .25rem;
        font-size: 1.375rem
    }

    .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .menu-vertical .menu-inner>.menu-item div:not(.menu-block),.layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu.menu-vertical .menu-inner>.menu-item div:not(.menu-block) {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        opacity: 0
    }

    .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .menu-vertical .menu-inner>.menu-item>.menu-sub,.layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .menu-vertical .menu-inner>.menu-item.open>.menu-sub,.layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu.menu-vertical .menu-inner>.menu-item>.menu-sub,.layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu.menu-vertical .menu-inner>.menu-item.open>.menu-sub {
        display: none
    }

    .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .menu-vertical .menu-inner>.menu-item>.menu-toggle::after,.layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu.menu-vertical .menu-inner>.menu-item>.menu-toggle::after {
        display: none
    }

    .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .menu-vertical .menu-inner>.menu-item>.menu-link .menu-icon,.layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu.menu-vertical .menu-inner>.menu-item>.menu-link .menu-icon {
        text-align: center;
        margin-right: 0
    }

    [dir=rtl].layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .menu-vertical .menu-block,[dir=rtl].layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu.menu-vertical .menu-block {
        width: 5.25rem !important
    }

    [dir=rtl].layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .menu-vertical .menu-inner>.menu-item>.menu-link,[dir=rtl].layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu.menu-vertical .menu-inner>.menu-item>.menu-link {
        padding-left: 1rem
    }

    [dir=rtl].layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .menu-vertical .menu-inner>.menu-header,[dir=rtl].layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .menu-vertical .menu-block,[dir=rtl].layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu.menu-vertical .menu-inner>.menu-header,[dir=rtl].layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu.menu-vertical .menu-block {
        margin-right: 5.25rem;
        margin-left: 0;
        padding-right: .5rem;
        padding-left: 1.5rem
    }

    [dir=rtl].layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .menu-vertical .menu-inner>.menu-header::before,[dir=rtl].layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .menu-vertical .menu-block::before,[dir=rtl].layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu.menu-vertical .menu-inner>.menu-header::before,[dir=rtl].layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu.menu-vertical .menu-block::before {
        right: -3.28125rem;
        left: auto
    }

    [dir=rtl].layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .menu-vertical .menu-inner>.menu-item>.menu-link .menu-icon,[dir=rtl].layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu.menu-vertical .menu-inner>.menu-item>.menu-link .menu-icon {
        margin-left: 0
    }

    .layout-menu-hover.layout-menu-collapsed .layout-menu {
        margin-right: -11rem
    }

    .layout-menu-hover.layout-menu-collapsed.layout-menu-flipped .layout-menu {
        margin-left: -11rem;
        margin-right: 0
    }

    [dir=rtl].layout-menu-hover.layout-menu-collapsed .layout-menu {
        margin-left: -11rem;
        margin-right: 0
    }

    [dir=rtl].layout-menu-hover.layout-menu-collapsed.layout-menu-flipped .layout-menu {
        margin-right: -11rem;
        margin-left: 0
    }
}

@media(min-width: 1200px) {
    .layout-menu-collapsed.layout-menu-offcanvas .layout-menu {
        margin-right:-16.25rem;
        transform: translateX(-100%)
    }

    .layout-menu-collapsed.layout-menu-offcanvas.layout-menu-flipped .layout-menu {
        margin-right: 0;
        margin-left: -16.25rem;
        transform: translateX(100%)
    }

    [dir=rtl].layout-menu-collapsed.layout-menu-offcanvas .layout-menu {
        margin-right: 0;
        margin-left: -16.25rem;
        transform: translateX(100%)
    }

    [dir=rtl].layout-menu-collapsed.layout-menu-offcanvas.layout-menu-flipped .layout-menu {
        margin-right: -16.25rem;
        margin-left: 0;
        transform: translateX(-100%)
    }
}

@media(min-width: 1200px) {
    .layout-menu-fixed .layout-menu,.layout-menu-fixed-offcanvas .layout-menu {
        position:fixed;
        top: 0;
        bottom: 0;
        left: 0;
        margin-right: 0 !important;
        margin-left: 0 !important
    }

    .layout-menu-fixed.layout-menu-flipped .layout-menu,.layout-menu-fixed-offcanvas.layout-menu-flipped .layout-menu {
        right: 0;
        left: auto
    }

    [dir=rtl].layout-menu-fixed .layout-menu,[dir=rtl].layout-menu-fixed-offcanvas .layout-menu {
        right: 0;
        left: auto
    }

    [dir=rtl].layout-menu-fixed.layout-menu-flipped .layout-menu,[dir=rtl].layout-menu-fixed-offcanvas.layout-menu-flipped .layout-menu {
        right: auto;
        left: 0
    }

    .layout-menu-fixed-offcanvas.layout-menu-collapsed .layout-menu {
        transform: translateX(-100%)
    }

    .layout-menu-fixed-offcanvas.layout-menu-collapsed.layout-menu-flipped .layout-menu {
        transform: translateX(100%)
    }

    [dir=rtl].layout-menu-fixed-offcanvas.layout-menu-collapsed .layout-menu {
        transform: translateX(100%)
    }

    [dir=rtl].layout-menu-fixed-offcanvas.layout-menu-collapsed.layout-menu-flipped .layout-menu {
        transform: translateX(-100%)
    }

    .layout-menu-fixed:not(.layout-menu-collapsed) .layout-page,.layout-menu-fixed-offcanvas:not(.layout-menu-collapsed) .layout-page {
        padding-left: 16.25rem
    }

    .layout-menu-fixed:not(.layout-menu-collapsed).layout-menu-flipped .layout-page,.layout-menu-fixed-offcanvas:not(.layout-menu-collapsed).layout-menu-flipped .layout-page {
        padding-right: 16.25rem;
        padding-left: 0
    }

    [dir=rtl].layout-menu-fixed:not(.layout-menu-collapsed) .layout-page,[dir=rtl].layout-menu-fixed-offcanvas:not(.layout-menu-collapsed) .layout-page {
        padding-right: 16.25rem;
        padding-left: 0
    }

    [dir=rtl].layout-menu-fixed:not(.layout-menu-collapsed).layout-menu-flipped .layout-page,[dir=rtl].layout-menu-fixed-offcanvas:not(.layout-menu-collapsed).layout-menu-flipped .layout-page {
        padding-right: 0;
        padding-left: 16.25rem
    }

    .layout-menu-fixed.layout-menu-collapsed .layout-page {
        padding-left: 5.25rem
    }

    .layout-menu-fixed.layout-menu-collapsed.layout-menu-flipped .layout-page {
        padding-right: 5.25rem;
        padding-left: 0
    }

    [dir=rtl].layout-menu-fixed.layout-menu-collapsed .layout-page {
        padding-right: 5.25rem;
        padding-left: 0
    }

    [dir=rtl].layout-menu-fixed.layout-menu-collapsed.layout-menu-flipped .layout-page {
        padding-right: 0;
        padding-left: 5.25rem
    }
}

html:not(.layout-navbar-fixed):not(.layout-menu-fixed):not(.layout-menu-fixed-offcanvas) .layout-page,html:not(.layout-navbar-fixed) .layout-content-navbar .layout-page {
    padding-top: 0 !important
}

html:not(.layout-footer-fixed) .content-wrapper {
    padding-bottom: 0 !important
}

@media(max-width: 1199.98px) {
    .layout-menu-fixed .layout-wrapper.layout-navbar-full .layout-menu,.layout-menu-fixed-offcanvas .layout-wrapper.layout-navbar-full .layout-menu {
        top:0 !important
    }

    html:not(.layout-navbar-fixed) .layout-navbar-full .layout-page {
        padding-top: 0 !important
    }
}

.layout-navbar-hidden .layout-navbar {
    display: none
}

.layout-navbar-fixed .layout-navbar {
    position: fixed;
    top: 0;
    right: 0;
    left: 0
}

@media(min-width: 1200px) {
    .layout-menu-fixed .layout-navbar-full .layout-navbar,.layout-menu-fixed-offcanvas .layout-navbar-full .layout-navbar {
        position:fixed;
        top: 0;
        right: 0;
        left: 0
    }

    .layout-navbar-fixed:not(.layout-menu-collapsed) .layout-content-navbar:not(.layout-without-menu) .layout-navbar,.layout-menu-fixed.layout-navbar-fixed:not(.layout-menu-collapsed) .layout-content-navbar:not(.layout-without-menu) .layout-navbar,.layout-menu-fixed-offcanvas.layout-navbar-fixed:not(.layout-menu-collapsed) .layout-content-navbar:not(.layout-without-menu) .layout-navbar {
        left: 16.25rem
    }

    .layout-navbar-fixed:not(.layout-menu-collapsed).layout-menu-flipped .layout-content-navbar:not(.layout-without-menu) .layout-navbar,.layout-menu-fixed.layout-navbar-fixed:not(.layout-menu-collapsed).layout-menu-flipped .layout-content-navbar:not(.layout-without-menu) .layout-navbar,.layout-menu-fixed-offcanvas.layout-navbar-fixed:not(.layout-menu-collapsed).layout-menu-flipped .layout-content-navbar:not(.layout-without-menu) .layout-navbar {
        right: 16.25rem;
        left: 0
    }

    .layout-menu-fixed .layout-horizontal .layout-page .menu-horizontal,.layout-menu-fixed-offcanvas .layout-horizontal .layout-page .menu-horizontal {
        position: fixed;
        top: 3.875rem
    }

    .layout-menu-fixed .layout-horizontal .layout-page .menu-horizontal+[class*=container-],.layout-menu-fixed-offcanvas .layout-horizontal .layout-page .menu-horizontal+[class*=container-] {
        padding-top: 5.15rem !important
    }

    [dir=rtl].layout-navbar-fixed:not(.layout-menu-collapsed) .layout-content-navbar:not(.layout-without-menu) .layout-navbar,[dir=rtl].layout-menu-fixed.layout-navbar-fixed:not(.layout-menu-collapsed) .layout-content-navbar:not(.layout-without-menu) .layout-navbar,[dir=rtl].layout-menu-fixed-offcanvas.layout-navbar-fixed:not(.layout-menu-collapsed) .layout-content-navbar:not(.layout-without-menu) .layout-navbar {
        right: 16.25rem;
        left: 0
    }

    [dir=rtl].layout-navbar-fixed:not(.layout-menu-collapsed).layout-menu-flipped .layout-content-navbar:not(.layout-without-menu) .layout-navbar,[dir=rtl].layout-menu-fixed.layout-navbar-fixed:not(.layout-menu-collapsed).layout-menu-flipped .layout-content-navbar:not(.layout-without-menu) .layout-navbar,[dir=rtl].layout-menu-fixed-offcanvas.layout-navbar-fixed:not(.layout-menu-collapsed).layout-menu-flipped .layout-content-navbar:not(.layout-without-menu) .layout-navbar {
        right: 0;
        left: 16.25rem
    }

    .layout-navbar-fixed.layout-menu-collapsed:not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-content-navbar .layout-navbar,.layout-menu-fixed.layout-navbar-fixed.layout-menu-collapsed .layout-content-navbar .layout-navbar {
        left: 5.25rem
    }

    .layout-navbar-fixed.layout-menu-collapsed:not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas).layout-menu-flipped .layout-content-navbar .layout-navbar,.layout-menu-fixed.layout-navbar-fixed.layout-menu-collapsed.layout-menu-flipped .layout-content-navbar .layout-navbar {
        right: 5.25rem;
        left: 0
    }

    [dir=rtl].layout-navbar-fixed.layout-menu-collapsed:not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-content-navbar .layout-navbar,[dir=rtl].layout-menu-fixed.layout-navbar-fixed.layout-menu-collapsed .layout-content-navbar .layout-navbar {
        right: 5.25rem;
        left: 0
    }

    [dir=rtl].layout-navbar-fixed.layout-menu-collapsed:not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas).layout-menu-flipped .layout-content-navbar .layout-navbar,[dir=rtl].layout-menu-fixed.layout-navbar-fixed.layout-menu-collapsed.layout-menu-flipped .layout-content-navbar .layout-navbar {
        right: 0;
        left: 5.25rem
    }
}

.layout-footer-fixed .content-footer {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0
}

@media(min-width: 1200px) {
    .layout-footer-fixed:not(.layout-menu-collapsed) .layout-wrapper:not(.layout-without-menu) .content-footer {
        left:16.25rem
    }

    .layout-footer-fixed:not(.layout-menu-collapsed).layout-menu-flipped .layout-wrapper:not(.layout-without-menu) .content-footer {
        right: 16.25rem;
        left: 0
    }

    .layout-footer-fixed.layout-menu-collapsed:not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-wrapper:not(.layout-without-menu) .content-footer {
        left: 5.25rem
    }

    .layout-footer-fixed.layout-menu-collapsed:not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas).layout-menu-flipped .layout-wrapper:not(.layout-without-menu) .content-footer {
        right: 5.25rem;
        left: 0
    }

    [dir=rtl].layout-footer-fixed:not(.layout-menu-collapsed) .layout-wrapper:not(.layout-without-menu) .content-footer {
        left: 0;
        right: 16.25rem
    }

    [dir=rtl].layout-footer-fixed:not(.layout-menu-collapsed).layout-menu-flipped .layout-wrapper:not(.layout-without-menu) .content-footer {
        left: 16.25rem;
        right: 0
    }

    [dir=rtl].layout-footer-fixed.layout-menu-collapsed:not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-wrapper:not(.layout-without-menu) .content-footer {
        left: 0;
        right: 5.25rem
    }

    [dir=rtl].layout-footer-fixed.layout-menu-collapsed:not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas).layout-menu-flipped .layout-wrapper:not(.layout-without-menu) .content-footer {
        right: 0;
        left: 5.25rem
    }
}

@media(max-width: 1199.98px) {
    .layout-menu {
        position:fixed !important;
        top: 0 !important;
        height: 100% !important;
        left: 0 !important;
        margin-right: 0 !important;
        margin-left: 0 !important;
        transform: translate3d(-100%, 0, 0);
        will-change: transform,-webkit-transform
    }

    [dir=rtl] .layout-menu {
        right: 0 !important;
        left: auto !important;
        transform: translate3d(100%, 0, 0)
    }

    .layout-menu-flipped .layout-menu {
        right: 0 !important;
        left: auto !important;
        transform: translate3d(100%, 0, 0)
    }

    .layout-menu-expanded .layout-menu {
        transform: translate3d(0, 0, 0) !important
    }

    .layout-menu-expanded body {
        overflow: hidden
    }

    [dir=rtl].layout-menu-flipped .layout-menu {
        right: auto !important;
        left: 0 !important;
        transform: translate3d(-100%, 0, 0)
    }

    .layout-overlay {
        position: fixed;
        top: 0;
        right: 0;
        height: 100% !important;
        left: 0;
        display: none;
        background: #4b465c;
        opacity: .5;
        cursor: pointer
    }

    .layout-menu-expanded .layout-overlay {
        display: block
    }

    .layout-menu-100vh .layout-menu,.layout-menu-100vh .layout-overlay {
        height: 100vh !important
    }

    .drag-target {
        height: 100%;
        width: 40px;
        position: fixed;
        top: 0;
        left: 0px;
        z-index: 1036
    }
}

.layout-navbar-fixed body:not(.modal-open) .layout-navbar-full .layout-navbar,.layout-menu-fixed body:not(.modal-open) .layout-navbar-full .layout-navbar,.layout-menu-fixed-offcanvas body:not(.modal-open) .layout-navbar-full .layout-navbar {
    z-index: 1080
}

.layout-navbar-fixed body:not(.modal-open) .layout-content-navbar .layout-navbar,.layout-menu-fixed body:not(.modal-open) .layout-content-navbar .layout-navbar,.layout-menu-fixed-offcanvas body:not(.modal-open) .layout-content-navbar .layout-navbar {
    z-index: 1075
}

.layout-footer-fixed .content-footer {
    z-index: 1030
}

.layout-menu-horizontal {
    z-index: 9
}

@media(max-width: 1199.98px) {
    .layout-menu {
        z-index:1100
    }

    .layout-overlay {
        z-index: 1099
    }
}

@media(min-width: 1200px) {
    .layout-navbar-full .layout-navbar {
        z-index:10
    }

    .layout-navbar-full .layout-menu {
        z-index: 9
    }

    .layout-content-navbar .layout-navbar {
        z-index: 9
    }

    .layout-content-navbar .layout-menu {
        z-index: 10
    }

    .layout-menu-collapsed:not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas).layout-menu-hover .layout-navbar-full .layout-menu {
        z-index: 1075 !important
    }

    .layout-menu-collapsed:not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-content-navbar .layout-menu {
        z-index: 1085 !important
    }

    .layout-menu-fixed body:not(.modal-open) .layout-navbar-full .layout-menu,.layout-menu-fixed-offcanvas body:not(.modal-open) .layout-navbar-full .layout-menu {
        z-index: 1075
    }

    .layout-navbar-fixed body:not(.modal-open) .layout-content-navbar .layout-menu,.layout-menu-fixed body:not(.modal-open) .layout-content-navbar .layout-menu,.layout-menu-fixed-offcanvas body:not(.modal-open) .layout-content-navbar .layout-menu {
        z-index: 1080
    }
}

.layout-menu-link-no-transition .layout-menu .menu-link,.layout-menu-link-no-transition .layout-menu-horizontal .menu-link {
    transition: none !important;
    animation: none !important
}

.layout-no-transition .layout-menu,.layout-no-transition .layout-menu .menu,.layout-no-transition .layout-menu .menu-item,.layout-no-transition .layout-menu-horizontal,.layout-no-transition .layout-menu-horizontal .menu,.layout-no-transition .layout-menu-horizontal .menu-item {
    transition: none !important;
    animation: none !important
}

@media(max-width: 1199.98px) {
    .layout-transitioning .layout-overlay {
        animation:menuAnimation .3s
    }

    .layout-transitioning .layout-menu {
        transition-duration: .3s;
        transition-property: transform,-webkit-transform
    }
}

@media(min-width: 1200px) {
    .layout-menu-collapsed:not(.layout-transitioning):not(.layout-menu-offcanvas):not(.layout-menu-fixed):not(.layout-menu-fixed-offcanvas) .layout-menu {
        transition-duration:.3s;
        transition-property: margin-left,margin-right,width
    }

    .layout-transitioning.layout-menu-offcanvas .layout-menu {
        transition-duration: .3s;
        transition-property: margin-left,margin-right,transform,-webkit-transform
    }

    .layout-transitioning.layout-menu-fixed .layout-page,.layout-transitioning.layout-menu-fixed-offcanvas .layout-page {
        transition-duration: .3s;
        transition-property: padding-left,padding-right
    }

    .layout-transitioning.layout-menu-fixed .layout-menu {
        transition: width .3s
    }

    .layout-transitioning.layout-menu-fixed-offcanvas .layout-menu {
        transition-duration: .3s;
        transition-property: transform,-webkit-transform
    }

    .layout-transitioning.layout-navbar-fixed .layout-content-navbar .layout-navbar,.layout-transitioning.layout-footer-fixed .content-footer {
        transition-duration: .3s;
        transition-property: left,right
    }

    .layout-transitioning:not(.layout-menu-offcanvas):not(.layout-menu-fixed):not(.layout-menu-fixed-offcanvas) .layout-menu {
        transition-duration: .3s;
        transition-property: margin-left,margin-right,width
    }
}

@media all and (-ms-high-contrast: none),(-ms-high-contrast: active) {
    .menu,.layout-menu,.layout-page,.layout-navbar,.content-footer {
        transition: none !important;
        transition-duration: 0s !important
    }

    .layout-overlay {
        animation: none !important
    }
}

@-webkit-keyframes menuAnimation {
    0% {
        opacity: 0
    }

    100% {
        opacity: .5
    }
}

@-moz-keyframes menuAnimation {
    0% {
        opacity: 0
    }

    100% {
        opacity: .5
    }
}

@keyframes menuAnimation {
    0% {
        opacity: 0
    }

    100% {
        opacity: .5
    }
}

.app-brand {
    display: flex;
    flex-grow: 0;
    flex-shrink: 0;
    overflow: hidden;
    line-height: 1;
    min-height: 1px;
    align-items: center
}

.app-brand-link {
    display: flex;
    align-items: center
}

.app-brand-logo {
    display: block;
    flex-grow: 0;
    flex-shrink: 0;
    overflow: hidden;
    min-height: 1px
}

.app-brand-logo img,.app-brand-logo svg {
    display: block
}

.app-brand-text {
    flex-shrink: 0;
    opacity: 1;
    transition: opacity .3s ease-in-out
}

html:not([dir=rtl]) .app-brand-text {
    margin-left: .625rem !important
}

[dir=rtl] .app-brand-text {
    margin-right: .625rem !important
}

.app-brand-img-collapsed {
    display: none
}

.app-brand .layout-menu-toggle {
    display: block
}

.menu-vertical .app-brand {
    margin: 0 .875rem 0 1rem;
    padding-right: .5rem;
    padding-left: .5rem
}

.menu-horizontal .app-brand,.menu-horizontal .app-brand+.menu-divider {
    display: none !important
}

:not(.layout-menu)>.menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand {
    width: 5.25rem
}

:not(.layout-menu)>.menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand-logo,:not(.layout-menu)>.menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand-link,:not(.layout-menu)>.menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand-text {
    margin-right: auto;
    margin-left: auto
}

:not(.layout-menu)>.menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand-logo~.app-brand-text,:not(.layout-menu)>.menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand .layout-menu-toggle {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    opacity: 0
}

:not(.layout-menu)>.menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand-img {
    display: none
}

:not(.layout-menu)>.menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand-img-collapsed {
    display: block
}

@media(min-width: 1200px) {
    .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand {
        width:5.25rem
    }

    .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand-logo,.layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand-link,.layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand-text {
        margin-right: auto;
        margin-left: auto
    }

    .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand-logo~.app-brand-text,.layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand .layout-menu-toggle {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        opacity: 0
    }

    .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand-img {
        display: none
    }

    .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand-img-collapsed {
        display: block
    }
}

.custom-option {
    padding-left: 0;
    border: 1px solid #dbdade;
    border-radius: .375rem
}

.custom-option:hover {
    border: 1px solid #c9c8ce
}

.custom-option.custom-option-image {
    border-width: 1px !important
}

.custom-option.custom-option-image .custom-option-body img {
    border-radius: .375rem
}

.custom-option .custom-option-content {
    cursor: pointer;
    width: 100%
}

.custom-option-basic .custom-option-content {
    padding: 1.07em;
    padding-left: 2.77em
}

.custom-option-basic .custom-option-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: .25rem
}

.custom-option-icon.checked i,.custom-option-icon.checked svg {
    color: #7367f0
}

.custom-option-icon .custom-option-content {
    text-align: center;
    padding: 1.07em
}

.custom-option-icon .custom-option-body {
    display: block;
    margin-bottom: .5rem
}

.custom-option-icon .custom-option-body i {
    font-size: 1.75rem;
    margin-bottom: .5rem;
    display: block
}

.custom-option-icon .custom-option-body svg {
    height: 38px;
    width: 38px;
    margin-bottom: .25rem
}

.custom-option-icon .custom-option-body .custom-option-title {
    display: block;
    font-size: .9375rem;
    font-weight: 500;
    color: #5d596c
}

.custom-option-icon .form-check-input {
    float: none !important;
    margin: 0 !important
}

.custom-option-image {
    border-width: 1px
}

.custom-option-image .custom-option-content {
    padding: 0
}

.custom-option-image .custom-option-body img {
    height: 100%;
    width: 100%
}

.custom-option-image.custom-option-image-radio .form-check-input {
    display: none
}

.custom-option-image.custom-option-image-check {
    position: relative
}

.custom-option-image.custom-option-image-check .form-check-input {
    position: absolute;
    top: 16px;
    right: 16px;
    margin: 0;
    border: 0;
    opacity: 0
}

.custom-option-image.custom-option-image-check .form-check-input:checked {
    opacity: 1
}

.custom-option-image.custom-option-image-check:hover .form-check-input {
    border: inherit;
    border-width: 2px;
    opacity: 1
}

.custom-option-image.custom-option-image-check:not(.checked):hover .form-check-input {
    background-color: rgba(0,0,0,0)
}

[dir=rtl] .custom-option {
    padding-right: 0
}

[dir=rtl] .custom-option-basic .custom-option-content {
    padding-right: 2.77em;
    padding-left: 1.07em
}

[dir=rtl] .custom-option-image.custom-option-image-check .form-check-input {
    right: auto;
    left: 10px
}

.switch {
    margin-right: .75rem;
    position: relative;
    vertical-align: middle;
    margin-bottom: 0;
    display: inline-block;
    border-radius: 30rem;
    cursor: pointer;
    min-height: 1.35rem;
    font-size: .9375rem;
    line-height: 1.4
}

.switch .switch-label:first-child {
    padding-right: .5rem
}

.switch .switch-input~.switch-label {
    padding-left: 3rem
}

.switch .switch-toggle-slider {
    width: 2.5rem;
    height: 1.35rem;
    font-size: .625rem;
    line-height: 1.35rem;
    border: 1px solid rgba(0,0,0,0);
    top: 0
}

.switch .switch-toggle-slider i {
    position: relative;
    font-size: .9375rem;
    top: -1.35px
}

.switch .switch-label {
    top: .01875rem
}

.switch .switch-input:checked~.switch-toggle-slider::after {
    left: 1.15rem
}

.switch .switch-toggle-slider::after {
    top: -1px;
    margin: .25rem 0 0 .25rem;
    width: 13px;
    height: 13px
}

.switch .switch-on {
    padding-left: .25rem;
    padding-right: 1.1rem
}

.switch .switch-off {
    padding-left: 1.1rem;
    padding-right: .25rem
}

[dir=rtl] .switch .switch-label {
    padding-right: 3rem;
    padding-left: 0
}

[dir=rtl] .switch .switch-input:checked~.switch-toggle-slider::after {
    left: auto;
    right: 1.15rem
}

[dir=rtl] .switch .switch-toggle-slider::after {
    margin-left: 0;
    margin-right: .25rem
}

[dir=rtl] .switch .switch-on {
    padding-left: 1.1rem;
    padding-right: .25rem
}

[dir=rtl] .switch .switch-off {
    padding-left: .25rem;
    padding-right: 1.1rem
}

[dir=rtl] .switch {
    margin-left: .75rem;
    margin-right: 0
}

.switch-input {
    opacity: 0;
    position: absolute;
    padding: 0;
    margin: 0;
    z-index: -1
}

.switch-toggle-slider {
    position: absolute;
    overflow: hidden;
    border-radius: 30rem;
    background: rgba(0,0,0,0);
    border: 1px solid rgba(75,70,92,.2) !important;
    color: rgba(75,70,92,.4);
    transition-duration: .2s;
    transition-property: left,right,background,box-shadow;
    cursor: pointer;
    user-select: none
}

.switch-toggle-slider i {
    top: -2.3px !important
}

.switch-label {
    display: inline-block;
    font-weight: 400;
    color: #6f6b7d;
    position: relative;
    cursor: default
}

.switch-off,.switch-on {
    height: 100%;
    width: 100%;
    text-align: center;
    position: absolute;
    top: 0;
    transition-duration: .2s;
    transition-property: left,right
}

.switch-on {
    left: -100%
}

[dir=rtl] .switch-on {
    left: auto;
    right: -100%
}

.switch-input:not(:checked)~.switch-toggle-slider .switch-on {
    color: rgba(0,0,0,0)
}

.switch-off {
    left: 0
}

[dir=rtl] .switch-off {
    right: 0;
    left: auto
}

.switch-input:checked~.switch-toggle-slider {
    border-color: #7367f0
}

.switch-input:checked~.switch-toggle-slider:after {
    background: #fff
}

.switch-input:checked~.switch-toggle-slider .switch-on {
    left: 0
}

[dir=rtl] .switch-input:checked~.switch-toggle-slider .switch-on {
    right: 0;
    left: auto
}

.switch-input:checked~.switch-toggle-slider .switch-off {
    left: 100%;
    color: rgba(0,0,0,0)
}

[dir=rtl] .switch-input:checked~.switch-toggle-slider .switch-off {
    right: 100%;
    left: auto
}

.switch-toggle-slider::after {
    content: "";
    position: absolute;
    left: 0;
    display: block;
    border-radius: 999px;
    background: rgba(75,70,92,.2);
    box-shadow: none;
    transition-duration: .2s;
    transition-property: left,right,background
}

[dir=rtl] .switch-toggle-slider::after {
    right: 0;
    left: auto
}

.switches-stacked::after {
    display: block;
    clear: both;
    content: ""
}

.switches-stacked .switch {
    display: block
}

html:not([dir=rtl]) .switches-stacked .switch {
    margin-right: 0
}

[dir=rtl] .switches-stacked .switch {
    margin-left: 0
}

.switches-stacked .switch:not(:last-child) {
    margin-bottom: .75rem
}

.switch-square,.switch-square .switch-toggle-slider {
    border-radius: .375rem
}

.switch-square .switch-toggle-slider::after {
    border-radius: calc(0.375rem - 2px)
}

.switch.switch-outline .switch-toggle-slider:after {
    background: rgba(75,70,92,.2)
}

.switch-input:disabled~.switch-toggle-slider {
    opacity: .5;
    background: rgba(75,70,92,.2);
    border-color: rgba(0,0,0,0) !important
}

.switch-input:disabled~.switch-toggle-slider::after {
    box-shadow: none
}

.switch-input:disabled~.switch-label {
    color: #a5a3ae
}

.switch-sm {
    min-height: 1.125rem;
    font-size: .75rem;
    line-height: 1.48
}

.switch-sm .switch-label:first-child {
    padding-right: .5rem
}

.switch-sm .switch-input~.switch-label {
    padding-left: 2.5rem
}

.switch-sm .switch-toggle-slider {
    width: 2rem;
    height: 1.125rem;
    font-size: .625rem;
    line-height: 1.125rem;
    border: 1px solid rgba(0,0,0,0);
    top: 0
}

.switch-sm .switch-toggle-slider i {
    position: relative;
    font-size: .75rem;
    top: -2px
}

.switch-sm .switch-label {
    top: .0075rem
}

.switch-sm .switch-input:checked~.switch-toggle-slider::after {
    left: .875rem
}

.switch-sm .switch-toggle-slider::after {
    top: -1px;
    margin: .25rem 0 0 .25rem;
    width: 10px;
    height: 10px
}

.switch-sm .switch-on {
    padding-left: .25rem;
    padding-right: .875rem
}

.switch-sm .switch-off {
    padding-left: .875rem;
    padding-right: .25rem
}

[dir=rtl] .switch-sm .switch-label {
    padding-right: 2.5rem;
    padding-left: 0
}

[dir=rtl] .switch-sm .switch-input:checked~.switch-toggle-slider::after {
    left: auto;
    right: .875rem
}

[dir=rtl] .switch-sm .switch-toggle-slider::after {
    margin-left: 0;
    margin-right: .25rem
}

[dir=rtl] .switch-sm .switch-on {
    padding-left: .875rem;
    padding-right: .25rem
}

[dir=rtl] .switch-sm .switch-off {
    padding-left: .25rem;
    padding-right: .875rem
}

.switch-lg {
    min-height: 1.75rem;
    font-size: 1rem;
    line-height: 1.47
}

.switch-lg .switch-label:first-child {
    padding-right: .5rem
}

.switch-lg .switch-input~.switch-label {
    padding-left: 3.75rem
}

.switch-lg .switch-toggle-slider {
    width: 3.25rem;
    height: 1.75rem;
    font-size: .625rem;
    line-height: 1.75rem;
    border: 1px solid rgba(0,0,0,0);
    top: 0
}

.switch-lg .switch-toggle-slider i {
    position: relative;
    font-size: 1rem;
    top: -2px
}

.switch-lg .switch-label {
    top: .14rem
}

.switch-lg .switch-input:checked~.switch-toggle-slider::after {
    left: 1.5rem
}

.switch-lg .switch-toggle-slider::after {
    top: -1px;
    margin: .25rem 0 0 .25rem;
    width: 20px;
    height: 20px
}

.switch-lg .switch-on {
    padding-left: .25rem;
    padding-right: 1.5rem
}

.switch-lg .switch-off {
    padding-left: 1.5rem;
    padding-right: .25rem
}

[dir=rtl] .switch-lg .switch-label {
    padding-right: 3.75rem;
    padding-left: 0
}

[dir=rtl] .switch-lg .switch-input:checked~.switch-toggle-slider::after {
    left: auto;
    right: 1.5rem
}

[dir=rtl] .switch-lg .switch-toggle-slider::after {
    margin-left: 0;
    margin-right: .25rem
}

[dir=rtl] .switch-lg .switch-on {
    padding-left: 1.5rem;
    padding-right: .25rem
}

[dir=rtl] .switch-lg .switch-off {
    padding-left: .25rem;
    padding-right: 1.5rem
}

.switch-secondary.switch .switch-input:checked~.switch-toggle-slider {
    background: #a8aaae;
    border-color: #a8aaae !important;
    color: #fff
}

.switch-secondary.switch .switch-input:active~.switch-toggle-slider {
    box-shadow: none
}

.switch-secondary.switch .switch-input:focus~.switch-toggle-slider {
    border: 1px solid #a8aaae;
    box-shadow: 0 0 .25rem .05rem rgba(115,103,240,.1)
}

.switch-success.switch .switch-input:checked~.switch-toggle-slider {
    background: #28c76f;
    border-color: #28c76f !important;
    color: #fff
}

.switch-success.switch .switch-input:active~.switch-toggle-slider {
    box-shadow: none
}

.switch-success.switch .switch-input:focus~.switch-toggle-slider {
    border: 1px solid #28c76f;
    box-shadow: 0 0 .25rem .05rem rgba(115,103,240,.1)
}

.switch-info.switch .switch-input:checked~.switch-toggle-slider {
    background: #00cfe8;
    border-color: #00cfe8 !important;
    color: #fff
}

.switch-info.switch .switch-input:active~.switch-toggle-slider {
    box-shadow: none
}

.switch-info.switch .switch-input:focus~.switch-toggle-slider {
    border: 1px solid #00cfe8;
    box-shadow: 0 0 .25rem .05rem rgba(115,103,240,.1)
}

.switch-warning.switch .switch-input:checked~.switch-toggle-slider {
    background: #ff9f43;
    border-color: #ff9f43 !important;
    color: #fff
}

.switch-warning.switch .switch-input:active~.switch-toggle-slider {
    box-shadow: none
}

.switch-warning.switch .switch-input:focus~.switch-toggle-slider {
    border: 1px solid #ff9f43;
    box-shadow: 0 0 .25rem .05rem rgba(115,103,240,.1)
}

.switch-danger.switch .switch-input:checked~.switch-toggle-slider {
    background: #ea5455;
    border-color: #ea5455 !important;
    color: #fff
}

.switch-danger.switch .switch-input:active~.switch-toggle-slider {
    box-shadow: none
}

.switch-danger.switch .switch-input:focus~.switch-toggle-slider {
    border: 1px solid #ea5455;
    box-shadow: 0 0 .25rem .05rem rgba(115,103,240,.1)
}

.switch-dark.switch .switch-input:checked~.switch-toggle-slider {
    background: #4b4b4b;
    border-color: #4b4b4b !important;
    color: #fff
}

.switch-dark.switch .switch-input:active~.switch-toggle-slider {
    box-shadow: none
}

.switch-dark.switch .switch-input:focus~.switch-toggle-slider {
    border: 1px solid #4b4b4b;
    box-shadow: 0 0 .25rem .05rem rgba(115,103,240,.1)
}

.switch-gray.switch .switch-input:checked~.switch-toggle-slider {
    background: rgba(75,70,92,.05);
    border-color: rgba(75,70,92,.05) !important;
    color: #fff
}

.switch-gray.switch .switch-input:active~.switch-toggle-slider {
    box-shadow: none
}

.switch-gray.switch .switch-input:focus~.switch-toggle-slider {
    border: 1px solid rgba(75,70,92,.05);
    box-shadow: 0 0 .25rem .05rem rgba(115,103,240,.1)
}

.switch .valid-feedback,.switch .invalid-feedback {
    padding-left: .5rem
}

.was-validated .switch-input:valid~.switch-label,.switch-input.invalid~.switch-label,.switch-input.is-valid~.switch-label {
    color: #28c76f
}

.was-validated .switch-input:valid~.valid-feedback,.was-validated .switch-input:valid~.valid-tooltip,.switch-input.invalid~.valid-feedback,.switch-input.invalid~.valid-tooltip,.switch-input.is-valid~.valid-feedback,.switch-input.is-valid~.valid-tooltip {
    display: block
}

.was-validated .switch-input:valid~.switch-toggle-slider,.switch-input.invalid~.switch-toggle-slider,.switch-input.is-valid~.switch-toggle-slider {
    border: 1px solid #28c76f !important
}

.was-validated .switch-input:valid:checked~.switch-toggle-slider,.switch-input.invalid:checked~.switch-toggle-slider,.switch-input.is-valid:checked~.switch-toggle-slider {
    background: #28c76f;
    border-color: #28c76f !important;
    color: #fff
}

.was-validated .switch-input:valid:focus~.switch-toggle-slider,.switch-input.invalid:focus~.switch-toggle-slider,.switch-input.is-valid:focus~.switch-toggle-slider {
    box-shadow: 0 0 .25rem .05rem rgba(40,199,111,.4)
}

.was-validated .switch-input:valid:active~.switch-toggle-slider,.switch-input.invalid:active~.switch-toggle-slider,.switch-input.is-valid:active~.switch-toggle-slider {
    box-shadow: none
}

.was-validated .switch-input:invalid~.switch-label,.switch-input.invalid~.switch-label,.switch-input.is-invalid~.switch-label {
    color: #ea5455
}

.was-validated .switch-input:invalid~.invalid-feedback,.was-validated .switch-input:invalid~.invalid-tooltip,.switch-input.invalid~.invalid-feedback,.switch-input.invalid~.invalid-tooltip,.switch-input.is-invalid~.invalid-feedback,.switch-input.is-invalid~.invalid-tooltip {
    display: block
}

.was-validated .switch-input:invalid~.switch-toggle-slider,.switch-input.invalid~.switch-toggle-slider,.switch-input.is-invalid~.switch-toggle-slider {
    border: 1px solid #ea5455 !important
}

.was-validated .switch-input:invalid:checked~.switch-toggle-slider,.switch-input.invalid:checked~.switch-toggle-slider,.switch-input.is-invalid:checked~.switch-toggle-slider {
    background: #ea5455;
    border-color: #ea5455 !important;
    color: #fff
}

.was-validated .switch-input:invalid:focus~.switch-toggle-slider,.switch-input.invalid:focus~.switch-toggle-slider,.switch-input.is-invalid:focus~.switch-toggle-slider {
    box-shadow: 0 0 .25rem .05rem rgba(234,84,85,.4)
}

.was-validated .switch-input:invalid:active~.switch-toggle-slider,.switch-input.invalid:active~.switch-toggle-slider,.switch-input.is-invalid:active~.switch-toggle-slider {
    box-shadow: none
}

.avatar {
    position: relative;
    width: 2.375rem;
    height: 2.375rem;
    cursor: pointer
}

.avatar img {
    width: 100%;
    height: 100%
}

.avatar .avatar-initial {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    text-transform: uppercase;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    background-color: #c9c8ce;
    font-weight: 500
}

.avatar.avatar-online:after,.avatar.avatar-offline:after,.avatar.avatar-away:after,.avatar.avatar-busy:after {
    content: "";
    position: absolute;
    bottom: 0;
    right: 3px;
    width: 8px;
    height: 8px;
    border-radius: 100%;
    box-shadow: 0 0 0 2px #fff
}

.avatar.avatar-online:after {
    background-color: #28c76f
}

.avatar.avatar-offline:after {
    background-color: #a8aaae
}

.avatar.avatar-away:after {
    background-color: #ff9f43
}

.avatar.avatar-busy:after {
    background-color: #ea5455
}

.pull-up {
    transition: all .25s ease
}

.pull-up:hover {
    transform: translateY(-4px) scale(1.02);
    box-shadow: 0 .25rem 1rem rgba(165,163,174,.45);
    z-index: 30;
    border-radius: 50%
}

.avatar-xs {
    width: 1.625rem;
    height: 1.625rem
}

.avatar-xs .avatar-initial {
    font-size: .625rem
}

.avatar-xs.avatar-online:after,.avatar-xs.avatar-offline:after,.avatar-xs.avatar-away:after,.avatar-xs.avatar-busy:after {
    width: .325rem;
    height: .325rem;
    right: 1px
}

.avatar-sm {
    width: 2rem;
    height: 2rem
}

.avatar-sm .avatar-initial {
    font-size: .75rem
}

.avatar-sm.avatar-online:after,.avatar-sm.avatar-offline:after,.avatar-sm.avatar-away:after,.avatar-sm.avatar-busy:after {
    width: .4rem;
    height: .4rem;
    right: 2px
}

.avatar-md {
    width: 3rem;
    height: 3rem
}

.avatar-md .avatar-initial {
    font-size: 1.125rem
}

.avatar-md.avatar-online:after,.avatar-md.avatar-offline:after,.avatar-md.avatar-away:after,.avatar-md.avatar-busy:after {
    width: .6rem;
    height: .6rem;
    right: 4px
}

.avatar-lg {
    width: 4rem;
    height: 4rem
}

.avatar-lg .avatar-initial {
    font-size: 1.5rem
}

.avatar-lg.avatar-online:after,.avatar-lg.avatar-offline:after,.avatar-lg.avatar-away:after,.avatar-lg.avatar-busy:after {
    width: .8rem;
    height: .8rem;
    right: 5px
}

.avatar-xl {
    width: 4.5rem;
    height: 4.5rem
}

.avatar-xl .avatar-initial {
    font-size: 1.875rem
}

.avatar-xl.avatar-online:after,.avatar-xl.avatar-offline:after,.avatar-xl.avatar-away:after,.avatar-xl.avatar-busy:after {
    width: .9rem;
    height: .9rem;
    right: 6px
}

.avatar-group .avatar {
    transition: all .25s ease
}

.avatar-group .avatar img,.avatar-group .avatar .avatar-initial {
    border: 2px solid #fff
}

.avatar-group .avatar .avatar-initial {
    color: #6f6b7d;
    background-color: #f6f6f7
}

.avatar-group .avatar:hover {
    z-index: 30;
    transition: all .25s ease
}

.avatar-group .avatar {
    margin-left: -0.8rem
}

.avatar-group .avatar:first-child {
    margin-left: 0
}

.avatar-group .avatar-xs {
    margin-left: -0.65rem
}

.avatar-group .avatar-sm {
    margin-left: -0.75rem
}

.avatar-group .avatar-md {
    margin-left: -0.9rem
}

.avatar-group .avatar-lg {
    margin-left: -1.5rem
}

.avatar-group .avatar-xl {
    margin-left: -1.75rem
}

[dir=rtl] .avatar-group .avatar {
    margin-right: -0.8rem;
    margin-left: 0
}

[dir=rtl] .avatar-group .avatar-xs {
    margin-right: -0.65rem
}

[dir=rtl] .avatar-group .avatar-sm {
    margin-right: -0.75rem
}

[dir=rtl] .avatar-group .avatar-md {
    margin-right: -0.9rem
}

[dir=rtl] .avatar-group .avatar-lg {
    margin-right: -1.5rem
}

[dir=rtl] .avatar-group .avatar-xl {
    margin-right: -1.75rem
}

.timeline {
    position: relative;
    height: 100%;
    width: 100%;
    padding: 0;
    list-style: none
}

.timeline .timeline-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: row
}

.timeline .timeline-header>*:first-child {
    margin-right: .5rem
}

.timeline .timeline-end-indicator {
    position: absolute;
    bottom: -1.35rem;
    left: -0.65rem
}

.timeline .timeline-end-indicator i {
    font-size: 1.5rem;
    color: #dbdade
}

.timeline .timeline-item {
    position: relative;
    padding-left: 3rem
}

.timeline .timeline-item .timeline-event {
    position: relative;
    top: -1rem;
    width: 100%;
    top: -1rem;
    min-height: 4rem;
    background-color: #fff;
    border-radius: .375rem;
    padding: 1.1rem 1.5rem .6rem
}

.timeline .timeline-item .timeline-event:before {
    position: absolute;
    top: .75rem;
    left: 32px;
    right: 100%;
    width: 0;
    height: 0;
    border-top: 1rem solid rgba(0,0,0,0);
    border-right: 1rem solid;
    border-left: 0 solid;
    border-bottom: 1rem solid rgba(0,0,0,0);
    border-left-color: #fff;
    border-right-color: #fff;
    margin-left: -3rem;
    content: ""
}

.timeline .timeline-item .timeline-event.timeline-event-shadow {
    box-shadow: 0 .5rem 1rem rgba(75,70,92,.075) !important
}

.timeline .timeline-item .timeline-event .timeline-event-time {
    position: absolute;
    top: 1.1rem;
    font-size: .85rem;
    color: #a5a3ae
}

.timeline .timeline-item .timeline-indicator,.timeline .timeline-item .timeline-indicator-advanced {
    position: absolute;
    left: -0.75rem;
    top: -0.2rem;
    z-index: 2;
    height: 1.5rem;
    width: 1.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    border-radius: 50%
}

.timeline .timeline-item .timeline-indicator i,.timeline .timeline-item .timeline-indicator-advanced i {
    background-color: #f8f7fa
}

.card .timeline .timeline-item .timeline-indicator i,.card .timeline .timeline-item .timeline-indicator-advanced i {
    background-color: #fff
}

.timeline .timeline-item .timeline-indicator i,.timeline .timeline-item .timeline-indicator-advanced i {
    color: #7367f0
}

.timeline .timeline-item .timeline-indicator-advanced {
    background-color: #fff;
    top: -0.1rem
}

.timeline .timeline-item .timeline-point {
    position: absolute;
    left: -0.43rem;
    top: 0;
    z-index: 2;
    display: block;
    height: .75rem;
    width: .75rem;
    border-radius: 50%;
    background-color: #7367f0
}

.timeline .timeline-item.timeline-item-transparent .timeline-event {
    top: -1.4rem;
    background-color: rgba(0,0,0,0)
}

html:not([dir=rtl]) .timeline .timeline-item.timeline-item-transparent .timeline-event {
    padding-left: 0
}

.timeline .timeline-item.timeline-item-transparent .timeline-event.timeline-event-shadow {
    padding-left: 2rem
}

.timeline .timeline-item.timeline-item-transparent .timeline-event:before {
    display: none
}

.timeline.timeline-center:before {
    left: 50%;
    height: 97%
}

.timeline.timeline-center:after {
    left: 50%;
    margin-left: -0.55rem
}

.timeline.timeline-center .timeline-end-indicator {
    bottom: -1.4rem;
    left: 50%;
    margin-left: .55rem
}

.timeline.timeline-center .timeline-item {
    width: 50%;
    clear: both
}

.timeline.timeline-center .timeline-item.timeline-item-left,.timeline.timeline-center .timeline-item:nth-of-type(odd):not(.timeline-item-left):not(.timeline-item-right) {
    float: left;
    padding-left: 0;
    padding-right: 3rem;
    left: 0px;
    padding-bottom: 3rem;
    border-left: 0;
    border-right: 1px solid #dbdade
}

.timeline.timeline-center .timeline-item.timeline-item-left .timeline-event .timeline-event-time,.timeline.timeline-center .timeline-item:nth-of-type(odd):not(.timeline-item-left):not(.timeline-item-right) .timeline-event .timeline-event-time {
    right: -10.2rem
}

.timeline.timeline-center .timeline-item.timeline-item-left .timeline-event:before,.timeline.timeline-center .timeline-item:nth-of-type(odd):not(.timeline-item-left):not(.timeline-item-right) .timeline-event:before {
    right: -15px;
    left: auto;
    border-left-width: 16px;
    border-right-width: 0
}

.timeline.timeline-center .timeline-item.timeline-item-left .timeline-point,.timeline.timeline-center .timeline-item:nth-of-type(odd):not(.timeline-item-left):not(.timeline-item-right) .timeline-point {
    left: 100%
}

.timeline.timeline-center .timeline-item.timeline-item-right,.timeline.timeline-center .timeline-item:nth-of-type(even):not(.timeline-item-left):not(.timeline-item-right) {
    float: right;
    right: 1px;
    padding-left: 3rem;
    padding-bottom: 3rem;
    border-left: 1px solid #dbdade
}

.timeline.timeline-center .timeline-item.timeline-item-right .timeline-event .timeline-event-time,.timeline.timeline-center .timeline-item:nth-of-type(even):not(.timeline-item-left):not(.timeline-item-right) .timeline-event .timeline-event-time {
    left: -10.2rem
}

.timeline.timeline-center .timeline-item.timeline-item-right .timeline-event .timeline-point,.timeline.timeline-center .timeline-item:nth-of-type(even):not(.timeline-item-left):not(.timeline-item-right) .timeline-event .timeline-point {
    left: 0
}

.timeline.timeline-center .timeline-item .timeline-point {
    left: 50%;
    margin-left: -0.6875rem
}

.timeline.timeline-center .timeline-item .timeline-point-indicator {
    left: 50%;
    margin-left: -0.3125rem
}

.timeline.timeline-advance .timeline-item .timeline-event:before,.timeline.timeline-advance .timeline-item .timeline-event:after {
    border: rgba(0,0,0,0)
}

html:not([dir=rtl]) .timeline-item {
    border-left: 1px solid #dbdade
}

[dir=rtl] .timeline:not(.timeline-center) .timeline-item {
    border-right: 1px solid #dbdade
}

[dir=rtl] .timeline:not(.timeline-center):before {
    right: -1px;
    left: auto
}

[dir=rtl] .timeline:not(.timeline-center):after {
    left: auto;
    margin-right: -0.65rem
}

[dir=rtl] .timeline:not(.timeline-center) .timeline-end-indicator {
    left: auto;
    right: -0.75rem
}

[dir=rtl] .timeline:not(.timeline-center) .timeline-item {
    padding-left: 0;
    padding-right: 3rem;
    border-right: 1px solid #dbdade
}

[dir=rtl] .timeline:not(.timeline-center) .timeline-item .timeline-event:before {
    right: -1rem;
    left: auto;
    border-left-width: 1rem;
    border-right-width: 0
}

[dir=rtl] .timeline:not(.timeline-center) .timeline-item.timeline-item-transparent .timeline-event {
    padding-right: 0
}

[dir=rtl] .timeline:not(.timeline-center) .timeline-item .timeline-point {
    right: -0.4rem;
    left: auto
}

[dir=rtl] .timeline:not(.timeline-center) .timeline-item .timeline-indicator {
    right: -0.78rem;
    left: auto
}

[dir=rtl] .timeline:not(.timeline-center) .timeline-item .timeline-indicator-advanced {
    right: -0.78rem;
    left: auto
}

@media(min-width: 768px) {
    .timeline.timeline-center .timeline-item.timeline-item-left .timeline-indicator,.timeline.timeline-center .timeline-item:nth-of-type(odd):not(.timeline-item-left):not(.timeline-item-right) .timeline-indicator {
        left:calc(100% - 1.5rem/2)
    }

    .timeline.timeline-center .timeline-item.timeline-item-left .timeline-event:after,.timeline.timeline-center .timeline-item:nth-of-type(odd):not(.timeline-item-left):not(.timeline-item-right) .timeline-event:after {
        transform: rotate(180deg);
        right: -16px;
        left: auto
    }
}

@media(max-width: 767.98px) {
    .timeline.timeline-center:before {
        left:1rem
    }

    .timeline.timeline-center:after {
        left: 0
    }

    .timeline.timeline-center .timeline-end-indicator {
        left: -2px
    }

    .timeline.timeline-center .timeline-item {
        border-right: 0 !important;
        left: 0rem;
        float: left !important;
        width: 100%;
        padding-left: 3rem !important;
        padding-right: 0 !important;
        border-right: 0 !important
    }

    .timeline.timeline-center .timeline-item:not(:last-child) {
        border-left: 1px solid #dbdade !important
    }

    .timeline.timeline-center .timeline-item:not(:last-child) {
        border-left: 1px solid #dbdade !important
    }

    .timeline.timeline-center .timeline-item .timeline-event:before {
        right: 100% !important;
        border-right-width: 1rem !important;
        border-left-width: 0 !important
    }

    .timeline.timeline-center .timeline-item .timeline-event .timeline-event-time {
        top: -1.4rem;
        left: 0 !important;
        right: auto !important
    }

    .timeline.timeline-center .timeline-item .timeline-point {
        left: -0.7rem !important;
        margin-left: 0 !important
    }

    .timeline.timeline-center .timeline-item .timeline-point-indicator {
        left: 0 !important;
        margin-left: -0.3125rem !important
    }

    [dir=rtl] .timeline.timeline-center:before {
        left: auto;
        right: 1rem
    }

    [dir=rtl] .timeline.timeline-center .timeline-item {
        border-left: 0 !important;
        right: 1px !important
    }

    [dir=rtl] .timeline.timeline-center .timeline-item:not(:last-child) {
        border-right: 1px solid #dbdade !important
    }

    [dir=rtl] .timeline.timeline-center:after {
        right: -0.55rem;
        left: auto
    }

    [dir=rtl] .timeline.timeline-center .timeline-item {
        float: right !important;
        width: 100%;
        padding-right: 3.5rem !important;
        padding-left: 1.5rem !important
    }

    [dir=rtl] .timeline.timeline-center .timeline-item .timeline-event:before {
        left: 100% !important;
        right: -1rem !important;
        border-left-width: 1rem !important;
        border-right-width: 0 !important
    }

    [dir=rtl] .timeline.timeline-center .timeline-item .timeline-event:after {
        transform: rotate(0deg);
        right: -16.5px;
        left: auto
    }

    [dir=rtl] .timeline.timeline-center .timeline-item .timeline-event .timeline-event-time {
        top: -1.2rem;
        right: 0 !important;
        left: auto !important
    }

    [dir=rtl] .timeline.timeline-center .timeline-item .timeline-point {
        right: -0.7rem !important;
        margin-right: 0 !important
    }
}

@media(max-width: 767.98px) {
    [dir=rtl] .timeline .timeline-item .timeline-indicator,[dir=rtl] .timeline .timeline-item .timeline-indicator-advanced {
        left:auto;
        right: -0.6875rem
    }

    [dir=rtl] .timeline-center .timeline-item {
        padding-left: 0;
        padding-right: 3rem
    }

    [dir=rtl] .timeline-center .timeline-item .timeline-event:after {
        right: -16.5px;
        left: auto;
        border-left-width: 1rem;
        border-right-width: 0;
        border-left-color: #dbdade;
        border-right-color: rgba(75,70,92,.3)
    }
}

@media(max-width: 575.98px) {
    .timeline .timeline-header {
        flex-direction:column;
        align-items: flex-start
    }
}

.timeline .timeline-item-secondary .timeline-event {
    background-color: rgba(168,170,174,.1)
}

.timeline .timeline-item-secondary .timeline-event:before {
    border-left-color: rgba(168,170,174,.1) !important;
    border-right-color: rgba(168,170,174,.1) !important
}

.timeline .timeline-point-secondary {
    background-color: #a8aaae !important;
    box-shadow: 0 0 0 .1875rem rgba(168,170,174,.16)
}

.timeline .timeline-indicator-secondary i {
    color: #a8aaae !important
}

.timeline .timeline-item-success .timeline-event {
    background-color: rgba(40,199,111,.1)
}

.timeline .timeline-item-success .timeline-event:before {
    border-left-color: rgba(40,199,111,.1) !important;
    border-right-color: rgba(40,199,111,.1) !important
}

.timeline .timeline-point-success {
    background-color: #28c76f !important;
    box-shadow: 0 0 0 .1875rem rgba(40,199,111,.16)
}

.timeline .timeline-indicator-success i {
    color: #28c76f !important
}

.timeline .timeline-item-info .timeline-event {
    background-color: rgba(0,207,232,.1)
}

.timeline .timeline-item-info .timeline-event:before {
    border-left-color: rgba(0,207,232,.1) !important;
    border-right-color: rgba(0,207,232,.1) !important
}

.timeline .timeline-point-info {
    background-color: #00cfe8 !important;
    box-shadow: 0 0 0 .1875rem rgba(0,207,232,.16)
}

.timeline .timeline-indicator-info i {
    color: #00cfe8 !important
}

.timeline .timeline-item-warning .timeline-event {
    background-color: rgba(255,159,67,.1)
}

.timeline .timeline-item-warning .timeline-event:before {
    border-left-color: rgba(255,159,67,.1) !important;
    border-right-color: rgba(255,159,67,.1) !important
}

.timeline .timeline-point-warning {
    background-color: #ff9f43 !important;
    box-shadow: 0 0 0 .1875rem rgba(255,159,67,.16)
}

.timeline .timeline-indicator-warning i {
    color: #ff9f43 !important
}

.timeline .timeline-item-danger .timeline-event {
    background-color: rgba(234,84,85,.1)
}

.timeline .timeline-item-danger .timeline-event:before {
    border-left-color: rgba(234,84,85,.1) !important;
    border-right-color: rgba(234,84,85,.1) !important
}

.timeline .timeline-point-danger {
    background-color: #ea5455 !important;
    box-shadow: 0 0 0 .1875rem rgba(234,84,85,.16)
}

.timeline .timeline-indicator-danger i {
    color: #ea5455 !important
}

.timeline .timeline-item-dark .timeline-event {
    background-color: rgba(75,75,75,.1)
}

.timeline .timeline-item-dark .timeline-event:before {
    border-left-color: rgba(75,75,75,.1) !important;
    border-right-color: rgba(75,75,75,.1) !important
}

.timeline .timeline-point-dark {
    background-color: #4b4b4b !important;
    box-shadow: 0 0 0 .1875rem rgba(75,75,75,.16)
}

.timeline .timeline-indicator-dark i {
    color: #4b4b4b !important
}

.timeline .timeline-item-gray .timeline-event {
    background-color: rgba(75,70,92,.1)
}

.timeline .timeline-item-gray .timeline-event:before {
    border-left-color: rgba(75,70,92,.1) !important;
    border-right-color: rgba(75,70,92,.1) !important
}

.timeline .timeline-point-gray {
    background-color: rgba(75,70,92,.05) !important;
    box-shadow: 0 0 0 .1875rem rgba(75,70,92,.16)
}

.timeline .timeline-indicator-gray i {
    color: rgba(75,70,92,.05) !important
}

.blockUI.blockOverlay,.blockUI.blockMsg {
    z-index: 1091 !important;
    color: #fff !important
}

[dir=rtl] #sortable-cards {
    flex-direction: row-reverse
}

[dir=rtl] #image-list-1,[dir=rtl] #image-list-2 {
    flex-direction: row-reverse;
    justify-content: flex-end
}

.divider {
    display: block;
    text-align: center;
    margin: 1rem 0;
    overflow: hidden;
    white-space: nowrap
}

.divider .divider-text {
    position: relative;
    display: inline-block;
    font-size: .8rem;
    padding: 0rem 1rem
}

.divider .divider-text i {
    font-size: 1.25rem
}

.divider .divider-text:before,.divider .divider-text:after {
    content: "";
    position: absolute;
    top: 50%;
    width: 100vw;
    border-top: 1px solid rgba(75,70,92,.2)
}

.divider .divider-text:before {
    right: 100%
}

.divider .divider-text:after {
    left: 100%
}

.divider.text-start .divider-text {
    padding-left: 0
}

.divider.text-end .divider-text {
    padding-right: 0
}

.divider.text-start-center .divider-text {
    left: -25%
}

.divider.text-end-center .divider-text {
    right: -25%
}

.divider.divider-dotted .divider-text:before,.divider.divider-dotted .divider-text:after,.divider.divider-dotted:before,.divider.divider-dotted:after {
    border-style: dotted;
    border-width: 0 1px 1px;
    border-color: rgba(75,70,92,.2)
}

.divider.divider-dashed .divider-text:before,.divider.divider-dashed .divider-text:after,.divider.divider-dashed:before,.divider.divider-dashed:after {
    border-style: dashed;
    border-width: 0 1px 1px;
    border-color: rgba(75,70,92,.2)
}

.divider.divider-vertical {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    margin: unset
}

.divider.divider-vertical:before,.divider.divider-vertical:after {
    content: "";
    position: absolute;
    left: 50%;
    border-left: 1px solid rgba(75,70,92,.2)
}

.divider.divider-vertical:before {
    bottom: 50%;
    top: 0
}

.divider.divider-vertical:after {
    top: 50%;
    bottom: 0
}

.divider.divider-vertical.divider-dashed:before,.divider.divider-vertical.divider-dashed:after {
    border-width: 1px 1px 1px 0
}

.divider.divider-vertical.divider-dotted:before,.divider.divider-vertical.divider-dotted:after {
    border-width: 1px 1px 1px 0
}

.divider.divider-vertical .divider-text {
    background-color: #fff;
    z-index: 1;
    padding: .5rem
}

.divider.divider-vertical .divider-text:before,.divider.divider-vertical .divider-text:after {
    content: unset
}

.divider.divider-vertical .divider-text .badge-divider-bg {
    padding: .375rem .29rem;
    border-radius: 50%;
    font-weight: 500;
    font-size: .6875rem
}

[dir=rtl] .divider.text-start-center .divider-text {
    right: -25%;
    left: auto
}

[dir=rtl] .divider.text-end-center .divider-text {
    left: -25%;
    right: auto
}

[dir=rtl] .divider.text-start .divider-text {
    padding-right: 0;
    padding-left: 1rem
}

[dir=rtl] .divider.text-end .divider-text {
    padding-left: 0;
    padding-right: 1rem
}

.divider.divider-secondary.divider-vertical:before,.divider.divider-secondary.divider-vertical:after,.divider.divider-secondary .divider-text:before,.divider.divider-secondary .divider-text:after {
    border-color: #a8aaae
}

.divider.divider-success.divider-vertical:before,.divider.divider-success.divider-vertical:after,.divider.divider-success .divider-text:before,.divider.divider-success .divider-text:after {
    border-color: #28c76f
}

.divider.divider-info.divider-vertical:before,.divider.divider-info.divider-vertical:after,.divider.divider-info .divider-text:before,.divider.divider-info .divider-text:after {
    border-color: #00cfe8
}

.divider.divider-warning.divider-vertical:before,.divider.divider-warning.divider-vertical:after,.divider.divider-warning .divider-text:before,.divider.divider-warning .divider-text:after {
    border-color: #ff9f43
}

.divider.divider-danger.divider-vertical:before,.divider.divider-danger.divider-vertical:after,.divider.divider-danger .divider-text:before,.divider.divider-danger .divider-text:after {
    border-color: #ea5455
}

.divider.divider-dark.divider-vertical:before,.divider.divider-dark.divider-vertical:after,.divider.divider-dark .divider-text:before,.divider.divider-dark .divider-text:after {
    border-color: #4b4b4b
}

.divider.divider-gray.divider-vertical:before,.divider.divider-gray.divider-vertical:after,.divider.divider-gray .divider-text:before,.divider.divider-gray .divider-text:after {
    border-color: rgba(75,70,92,.05)
}

.footer-link {
    display: inline-block
}

.layout-footer-fixed .layout-wrapper:not(.layout-horizontal) .content-footer .footer-container {
    padding-inline:1.5rem;border-top-left-radius: .375rem;
    border-top-right-radius: .375rem
}

.content-footer .footer-container {
    block-size: 56px
}

.footer-light {
    color: rgba(75,70,92,.5)
}

.footer-light .footer-text {
    color: #6f6b7d
}

.footer-light .footer-link {
    color: rgba(75,70,92,.5)
}

.footer-light .footer-link:hover,.footer-light .footer-link:focus {
    color: #6f6b7d
}

.footer-light .footer-link.disabled {
    color: rgba(75,70,92,.3) !important
}

.footer-light .show>.footer-link,.footer-light .active>.footer-link,.footer-light .footer-link.show,.footer-light .footer-link.active {
    color: #6f6b7d
}

.footer-light hr {
    border-color: rgba(0,0,0,.06)
}

.footer-dark {
    color: rgba(255,255,255,.8)
}

.footer-dark .footer-text {
    color: #fff
}

.footer-dark .footer-link {
    color: rgba(255,255,255,.8)
}

.footer-dark .footer-link:hover,.footer-dark .footer-link:focus {
    color: #fff
}

.footer-dark .footer-link.disabled {
    color: rgba(255,255,255,.4) !important
}

.footer-dark .show>.footer-link,.footer-dark .active>.footer-link,.footer-dark .footer-link.show,.footer-dark .footer-link.active {
    color: #fff
}

.footer-dark hr {
    border-color: rgba(255,255,255,.2)
}

:root {
    --bs-facebook: #3b5998;
    --bs-twitter: #1da1f2;
    --bs-google-plus: #dd4b39;
    --bs-instagram: #e1306c;
    --bs-linkedin: #0077b5;
    --bs-github: #333;
    --bs-dribbble: #ea4c89;
    --bs-pinterest: #cb2027;
    --bs-slack: #4a154b;
    --bs-reddit: #ff4500;
    --bs-youtube: #ff0000;
    --bs-vimeo: #1ab7ea
}

.bg-facebook {
    background-color: #3b5998 !important
}

a.bg-facebook:hover,a.bg-facebook:focus {
    background-color: #385590 !important
}

.dropdown-notifications-item:not(.mark-as-read) .dropdown-notifications-read span {
    background-color: #3b5998
}

.bg-label-facebook {
    background-color: #e2e6f0 !important;
    color: #3b5998 !important
}

.bg-label-hover-facebook {
    background-color: #e2e6f0 !important;
    color: #3b5998 !important
}

.bg-label-hover-facebook:hover {
    background-color: #3b5998 !important;
    color: #fff !important
}

.btn-facebook {
    color: #fff;
    background-color: #3b5998;
    border-color: #3b5998
}

.btn-facebook:hover {
    color: #fff !important;
    background-color: #355089 !important;
    border-color: #355089 !important
}

.btn-check:focus+.btn-facebook,.btn-facebook:focus,.btn-facebook.focus {
    color: #fff;
    background-color: #355089;
    border-color: #355089;
    box-shadow: none
}

.btn-check:checked+.btn-facebook,.btn-check:active+.btn-facebook,.btn-facebook:active,.btn-facebook.active,.btn-facebook.show.dropdown-toggle,.show>.btn-facebook.dropdown-toggle {
    color: #fff !important;
    background-color: #355089 !important;
    border-color: #355089 !important
}

.btn-facebook.disabled,.btn-facebook:disabled {
    color: #fff !important;
    background-color: #3b5998 !important;
    border-color: #3b5998 !important;
    box-shadow: none !important
}

.btn-group .btn-facebook,.input-group .btn-facebook {
    border-right: var(--bs-border-width) solid #355089;
    border-left: var(--bs-border-width) solid #355089
}

.btn-group-vertical .btn-facebook {
    border-top-color: #355089;
    border-bottom-color: #355089
}

.btn-label-facebook {
    color: #3b5998;
    border-color: rgba(0,0,0,0);
    background: #e0e4ef
}

.btn-label-facebook.waves-effect .waves-ripple {
    background: radial-gradient(rgba(59, 89, 152, 0.2) 0, rgba(59, 89, 152, 0.3) 40%, rgba(59, 89, 152, 0.4) 50%, rgba(59, 89, 152, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-facebook:hover {
    border-color: rgba(0,0,0,0) !important;
    background: #d0d7e6 !important;
    color: #3b5998 !important
}

.btn-label-facebook:focus,.btn-label-facebook.focus {
    color: #3b5998;
    background: #d0d7e6;
    box-shadow: none !important
}

.btn-label-facebook:active,.btn-label-facebook.active,.btn-label-facebook.show.dropdown-toggle,.show>.btn-label-facebook.dropdown-toggle {
    color: #3b5998 !important;
    background-color: #d0d7e6 !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-facebook:active:focus,.btn-label-facebook.active:focus,.btn-label-facebook.show.dropdown-toggle:focus,.show>.btn-label-facebook.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-facebook.disabled,.btn-label-facebook:disabled {
    color: #3b5998 !important;
    border-color: rgba(0,0,0,0) !important;
    background: #e2e6f0 !important;
    box-shadow: none
}

.btn-group .btn-label-facebook,.input-group .btn-label-facebook {
    border-right: var(--bs-border-width) solid #d0d7e6;
    border-left: var(--bs-border-width) solid #d0d7e6
}

.btn-group-vertical .btn-label-facebook {
    border-top-color: #d0d7e6;
    border-bottom-color: #d0d7e6
}

.btn-outline-facebook {
    color: #3b5998;
    border-color: #3b5998;
    background: rgba(0,0,0,0)
}

.btn-outline-facebook.waves-effect .waves-ripple {
    background: radial-gradient(rgba(59, 89, 152, 0.2) 0, rgba(59, 89, 152, 0.3) 40%, rgba(59, 89, 152, 0.4) 50%, rgba(59, 89, 152, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-facebook:hover {
    color: #3b5998 !important;
    background-color: #eff2f7 !important;
    border-color: #3b5998 !important
}

.btn-check:focus+.btn-outline-facebook,.btn-outline-facebook:focus {
    color: #3b5998;
    background-color: #eff2f7;
    border-color: #3b5998;
    box-shadow: none
}

.btn-check:checked+.btn-outline-facebook,.btn-check:active+.btn-outline-facebook,.btn-outline-facebook:active,.btn-outline-facebook.active,.btn-outline-facebook.dropdown-toggle.show {
    color: #3b5998 !important;
    background-color: #e0e4ef !important;
    border-color: #3b5998 !important
}

.btn-check:checked+.btn-outline-facebook:focus,.btn-check:active+.btn-outline-facebook:focus,.btn-outline-facebook:active:focus,.btn-outline-facebook.active:focus,.btn-outline-facebook.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-facebook.disabled,.btn-outline-facebook:disabled {
    color: #3b5998 !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-facebook .badge {
    background: #3b5998;
    border-color: #3b5998;
    color: #fff
}

.btn-outline-facebook:hover .badge,.btn-outline-facebook:focus:hover .badge,.btn-outline-facebook:active .badge,.btn-outline-facebook.active .badge,.show>.btn-outline-facebook.dropdown-toggle .badge {
    background: #3b5998;
    border-color: #3b5998
}

.bg-twitter {
    background-color: #1da1f2 !important
}

a.bg-twitter:hover,a.bg-twitter:focus {
    background-color: #1c99e6 !important
}

.dropdown-notifications-item:not(.mark-as-read) .dropdown-notifications-read span {
    background-color: #1da1f2
}

.bg-label-twitter {
    background-color: #ddf1fd !important;
    color: #1da1f2 !important
}

.bg-label-hover-twitter {
    background-color: #ddf1fd !important;
    color: #1da1f2 !important
}

.bg-label-hover-twitter:hover {
    background-color: #1da1f2 !important;
    color: #fff !important
}

.btn-twitter {
    color: #fff;
    background-color: #1da1f2;
    border-color: #1da1f2
}

.btn-twitter:hover {
    color: #fff !important;
    background-color: #1a91da !important;
    border-color: #1a91da !important
}

.btn-check:focus+.btn-twitter,.btn-twitter:focus,.btn-twitter.focus {
    color: #fff;
    background-color: #1a91da;
    border-color: #1a91da;
    box-shadow: none
}

.btn-check:checked+.btn-twitter,.btn-check:active+.btn-twitter,.btn-twitter:active,.btn-twitter.active,.btn-twitter.show.dropdown-toggle,.show>.btn-twitter.dropdown-toggle {
    color: #fff !important;
    background-color: #1a91da !important;
    border-color: #1a91da !important
}

.btn-twitter.disabled,.btn-twitter:disabled {
    color: #fff !important;
    background-color: #1da1f2 !important;
    border-color: #1da1f2 !important;
    box-shadow: none !important
}

.btn-group .btn-twitter,.input-group .btn-twitter {
    border-right: var(--bs-border-width) solid #1a91da;
    border-left: var(--bs-border-width) solid #1a91da
}

.btn-group-vertical .btn-twitter {
    border-top-color: #1a91da;
    border-bottom-color: #1a91da
}

.btn-label-twitter {
    color: #1da1f2;
    border-color: rgba(0,0,0,0);
    background: #dbf0fd
}

.btn-label-twitter.waves-effect .waves-ripple {
    background: radial-gradient(rgba(29, 161, 242, 0.2) 0, rgba(29, 161, 242, 0.3) 40%, rgba(29, 161, 242, 0.4) 50%, rgba(29, 161, 242, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-twitter:hover {
    border-color: rgba(0,0,0,0) !important;
    background: #c9e8fc !important;
    color: #1da1f2 !important
}

.btn-label-twitter:focus,.btn-label-twitter.focus {
    color: #1da1f2;
    background: #c9e8fc;
    box-shadow: none !important
}

.btn-label-twitter:active,.btn-label-twitter.active,.btn-label-twitter.show.dropdown-toggle,.show>.btn-label-twitter.dropdown-toggle {
    color: #1da1f2 !important;
    background-color: #c9e8fc !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-twitter:active:focus,.btn-label-twitter.active:focus,.btn-label-twitter.show.dropdown-toggle:focus,.show>.btn-label-twitter.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-twitter.disabled,.btn-label-twitter:disabled {
    color: #1da1f2 !important;
    border-color: rgba(0,0,0,0) !important;
    background: #ddf1fd !important;
    box-shadow: none
}

.btn-group .btn-label-twitter,.input-group .btn-label-twitter {
    border-right: var(--bs-border-width) solid #c9e8fc;
    border-left: var(--bs-border-width) solid #c9e8fc
}

.btn-group-vertical .btn-label-twitter {
    border-top-color: #c9e8fc;
    border-bottom-color: #c9e8fc
}

.btn-outline-twitter {
    color: #1da1f2;
    border-color: #1da1f2;
    background: rgba(0,0,0,0)
}

.btn-outline-twitter.waves-effect .waves-ripple {
    background: radial-gradient(rgba(29, 161, 242, 0.2) 0, rgba(29, 161, 242, 0.3) 40%, rgba(29, 161, 242, 0.4) 50%, rgba(29, 161, 242, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-twitter:hover {
    color: #1da1f2 !important;
    background-color: #edf7fe !important;
    border-color: #1da1f2 !important
}

.btn-check:focus+.btn-outline-twitter,.btn-outline-twitter:focus {
    color: #1da1f2;
    background-color: #edf7fe;
    border-color: #1da1f2;
    box-shadow: none
}

.btn-check:checked+.btn-outline-twitter,.btn-check:active+.btn-outline-twitter,.btn-outline-twitter:active,.btn-outline-twitter.active,.btn-outline-twitter.dropdown-toggle.show {
    color: #1da1f2 !important;
    background-color: #dbf0fd !important;
    border-color: #1da1f2 !important
}

.btn-check:checked+.btn-outline-twitter:focus,.btn-check:active+.btn-outline-twitter:focus,.btn-outline-twitter:active:focus,.btn-outline-twitter.active:focus,.btn-outline-twitter.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-twitter.disabled,.btn-outline-twitter:disabled {
    color: #1da1f2 !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-twitter .badge {
    background: #1da1f2;
    border-color: #1da1f2;
    color: #fff
}

.btn-outline-twitter:hover .badge,.btn-outline-twitter:focus:hover .badge,.btn-outline-twitter:active .badge,.btn-outline-twitter.active .badge,.show>.btn-outline-twitter.dropdown-toggle .badge {
    background: #1da1f2;
    border-color: #1da1f2
}

.bg-google-plus {
    background-color: #dd4b39 !important
}

a.bg-google-plus:hover,a.bg-google-plus:focus {
    background-color: #d24736 !important
}

.dropdown-notifications-item:not(.mark-as-read) .dropdown-notifications-read span {
    background-color: #dd4b39
}

.bg-label-google-plus {
    background-color: #fae4e1 !important;
    color: #dd4b39 !important
}

.bg-label-hover-google-plus {
    background-color: #fae4e1 !important;
    color: #dd4b39 !important
}

.bg-label-hover-google-plus:hover {
    background-color: #dd4b39 !important;
    color: #fff !important
}

.btn-google-plus {
    color: #fff;
    background-color: #dd4b39;
    border-color: #dd4b39
}

.btn-google-plus:hover {
    color: #fff !important;
    background-color: #c74433 !important;
    border-color: #c74433 !important
}

.btn-check:focus+.btn-google-plus,.btn-google-plus:focus,.btn-google-plus.focus {
    color: #fff;
    background-color: #c74433;
    border-color: #c74433;
    box-shadow: none
}

.btn-check:checked+.btn-google-plus,.btn-check:active+.btn-google-plus,.btn-google-plus:active,.btn-google-plus.active,.btn-google-plus.show.dropdown-toggle,.show>.btn-google-plus.dropdown-toggle {
    color: #fff !important;
    background-color: #c74433 !important;
    border-color: #c74433 !important
}

.btn-google-plus.disabled,.btn-google-plus:disabled {
    color: #fff !important;
    background-color: #dd4b39 !important;
    border-color: #dd4b39 !important;
    box-shadow: none !important
}

.btn-group .btn-google-plus,.input-group .btn-google-plus {
    border-right: var(--bs-border-width) solid #c74433;
    border-left: var(--bs-border-width) solid #c74433
}

.btn-group-vertical .btn-google-plus {
    border-top-color: #c74433;
    border-bottom-color: #c74433
}

.btn-label-google-plus {
    color: #dd4b39;
    border-color: rgba(0,0,0,0);
    background: #fae2df
}

.btn-label-google-plus.waves-effect .waves-ripple {
    background: radial-gradient(rgba(221, 75, 57, 0.2) 0, rgba(221, 75, 57, 0.3) 40%, rgba(221, 75, 57, 0.4) 50%, rgba(221, 75, 57, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-google-plus:hover {
    border-color: rgba(0,0,0,0) !important;
    background: #f7d4cf !important;
    color: #dd4b39 !important
}

.btn-label-google-plus:focus,.btn-label-google-plus.focus {
    color: #dd4b39;
    background: #f7d4cf;
    box-shadow: none !important
}

.btn-label-google-plus:active,.btn-label-google-plus.active,.btn-label-google-plus.show.dropdown-toggle,.show>.btn-label-google-plus.dropdown-toggle {
    color: #dd4b39 !important;
    background-color: #f7d4cf !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-google-plus:active:focus,.btn-label-google-plus.active:focus,.btn-label-google-plus.show.dropdown-toggle:focus,.show>.btn-label-google-plus.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-google-plus.disabled,.btn-label-google-plus:disabled {
    color: #dd4b39 !important;
    border-color: rgba(0,0,0,0) !important;
    background: #fae4e1 !important;
    box-shadow: none
}

.btn-group .btn-label-google-plus,.input-group .btn-label-google-plus {
    border-right: var(--bs-border-width) solid #f7d4cf;
    border-left: var(--bs-border-width) solid #f7d4cf
}

.btn-group-vertical .btn-label-google-plus {
    border-top-color: #f7d4cf;
    border-bottom-color: #f7d4cf
}

.btn-outline-google-plus {
    color: #dd4b39;
    border-color: #dd4b39;
    background: rgba(0,0,0,0)
}

.btn-outline-google-plus.waves-effect .waves-ripple {
    background: radial-gradient(rgba(221, 75, 57, 0.2) 0, rgba(221, 75, 57, 0.3) 40%, rgba(221, 75, 57, 0.4) 50%, rgba(221, 75, 57, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-google-plus:hover {
    color: #dd4b39 !important;
    background-color: #fcf1ef !important;
    border-color: #dd4b39 !important
}

.btn-check:focus+.btn-outline-google-plus,.btn-outline-google-plus:focus {
    color: #dd4b39;
    background-color: #fcf1ef;
    border-color: #dd4b39;
    box-shadow: none
}

.btn-check:checked+.btn-outline-google-plus,.btn-check:active+.btn-outline-google-plus,.btn-outline-google-plus:active,.btn-outline-google-plus.active,.btn-outline-google-plus.dropdown-toggle.show {
    color: #dd4b39 !important;
    background-color: #fae2df !important;
    border-color: #dd4b39 !important
}

.btn-check:checked+.btn-outline-google-plus:focus,.btn-check:active+.btn-outline-google-plus:focus,.btn-outline-google-plus:active:focus,.btn-outline-google-plus.active:focus,.btn-outline-google-plus.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-google-plus.disabled,.btn-outline-google-plus:disabled {
    color: #dd4b39 !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-google-plus .badge {
    background: #dd4b39;
    border-color: #dd4b39;
    color: #fff
}

.btn-outline-google-plus:hover .badge,.btn-outline-google-plus:focus:hover .badge,.btn-outline-google-plus:active .badge,.btn-outline-google-plus.active .badge,.show>.btn-outline-google-plus.dropdown-toggle .badge {
    background: #dd4b39;
    border-color: #dd4b39
}

.bg-instagram {
    background-color: #e1306c !important
}

a.bg-instagram:hover,a.bg-instagram:focus {
    background-color: #d62e67 !important
}

.dropdown-notifications-item:not(.mark-as-read) .dropdown-notifications-read span {
    background-color: #e1306c
}

.bg-label-instagram {
    background-color: #fbe0e9 !important;
    color: #e1306c !important
}

.bg-label-hover-instagram {
    background-color: #fbe0e9 !important;
    color: #e1306c !important
}

.bg-label-hover-instagram:hover {
    background-color: #e1306c !important;
    color: #fff !important
}

.btn-instagram {
    color: #fff;
    background-color: #e1306c;
    border-color: #e1306c
}

.btn-instagram:hover {
    color: #fff !important;
    background-color: #cb2b61 !important;
    border-color: #cb2b61 !important
}

.btn-check:focus+.btn-instagram,.btn-instagram:focus,.btn-instagram.focus {
    color: #fff;
    background-color: #cb2b61;
    border-color: #cb2b61;
    box-shadow: none
}

.btn-check:checked+.btn-instagram,.btn-check:active+.btn-instagram,.btn-instagram:active,.btn-instagram.active,.btn-instagram.show.dropdown-toggle,.show>.btn-instagram.dropdown-toggle {
    color: #fff !important;
    background-color: #cb2b61 !important;
    border-color: #cb2b61 !important
}

.btn-instagram.disabled,.btn-instagram:disabled {
    color: #fff !important;
    background-color: #e1306c !important;
    border-color: #e1306c !important;
    box-shadow: none !important
}

.btn-group .btn-instagram,.input-group .btn-instagram {
    border-right: var(--bs-border-width) solid #cb2b61;
    border-left: var(--bs-border-width) solid #cb2b61
}

.btn-group-vertical .btn-instagram {
    border-top-color: #cb2b61;
    border-bottom-color: #cb2b61
}

.btn-label-instagram {
    color: #e1306c;
    border-color: rgba(0,0,0,0);
    background: #fadee7
}

.btn-label-instagram.waves-effect .waves-ripple {
    background: radial-gradient(rgba(225, 48, 108, 0.2) 0, rgba(225, 48, 108, 0.3) 40%, rgba(225, 48, 108, 0.4) 50%, rgba(225, 48, 108, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-instagram:hover {
    border-color: rgba(0,0,0,0) !important;
    background: #f8cddc !important;
    color: #e1306c !important
}

.btn-label-instagram:focus,.btn-label-instagram.focus {
    color: #e1306c;
    background: #f8cddc;
    box-shadow: none !important
}

.btn-label-instagram:active,.btn-label-instagram.active,.btn-label-instagram.show.dropdown-toggle,.show>.btn-label-instagram.dropdown-toggle {
    color: #e1306c !important;
    background-color: #f8cddc !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-instagram:active:focus,.btn-label-instagram.active:focus,.btn-label-instagram.show.dropdown-toggle:focus,.show>.btn-label-instagram.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-instagram.disabled,.btn-label-instagram:disabled {
    color: #e1306c !important;
    border-color: rgba(0,0,0,0) !important;
    background: #fbe0e9 !important;
    box-shadow: none
}

.btn-group .btn-label-instagram,.input-group .btn-label-instagram {
    border-right: var(--bs-border-width) solid #f8cddc;
    border-left: var(--bs-border-width) solid #f8cddc
}

.btn-group-vertical .btn-label-instagram {
    border-top-color: #f8cddc;
    border-bottom-color: #f8cddc
}

.btn-outline-instagram {
    color: #e1306c;
    border-color: #e1306c;
    background: rgba(0,0,0,0)
}

.btn-outline-instagram.waves-effect .waves-ripple {
    background: radial-gradient(rgba(225, 48, 108, 0.2) 0, rgba(225, 48, 108, 0.3) 40%, rgba(225, 48, 108, 0.4) 50%, rgba(225, 48, 108, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-instagram:hover {
    color: #e1306c !important;
    background-color: #fdeef3 !important;
    border-color: #e1306c !important
}

.btn-check:focus+.btn-outline-instagram,.btn-outline-instagram:focus {
    color: #e1306c;
    background-color: #fdeef3;
    border-color: #e1306c;
    box-shadow: none
}

.btn-check:checked+.btn-outline-instagram,.btn-check:active+.btn-outline-instagram,.btn-outline-instagram:active,.btn-outline-instagram.active,.btn-outline-instagram.dropdown-toggle.show {
    color: #e1306c !important;
    background-color: #fadee7 !important;
    border-color: #e1306c !important
}

.btn-check:checked+.btn-outline-instagram:focus,.btn-check:active+.btn-outline-instagram:focus,.btn-outline-instagram:active:focus,.btn-outline-instagram.active:focus,.btn-outline-instagram.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-instagram.disabled,.btn-outline-instagram:disabled {
    color: #e1306c !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-instagram .badge {
    background: #e1306c;
    border-color: #e1306c;
    color: #fff
}

.btn-outline-instagram:hover .badge,.btn-outline-instagram:focus:hover .badge,.btn-outline-instagram:active .badge,.btn-outline-instagram.active .badge,.show>.btn-outline-instagram.dropdown-toggle .badge {
    background: #e1306c;
    border-color: #e1306c
}

.bg-linkedin {
    background-color: #0077b5 !important
}

a.bg-linkedin:hover,a.bg-linkedin:focus {
    background-color: #0071ac !important
}

.dropdown-notifications-item:not(.mark-as-read) .dropdown-notifications-read span {
    background-color: #0077b5
}

.bg-label-linkedin {
    background-color: #d9ebf4 !important;
    color: #0077b5 !important
}

.bg-label-hover-linkedin {
    background-color: #d9ebf4 !important;
    color: #0077b5 !important
}

.bg-label-hover-linkedin:hover {
    background-color: #0077b5 !important;
    color: #fff !important
}

.btn-linkedin {
    color: #fff;
    background-color: #0077b5;
    border-color: #0077b5
}

.btn-linkedin:hover {
    color: #fff !important;
    background-color: #006ba3 !important;
    border-color: #006ba3 !important
}

.btn-check:focus+.btn-linkedin,.btn-linkedin:focus,.btn-linkedin.focus {
    color: #fff;
    background-color: #006ba3;
    border-color: #006ba3;
    box-shadow: none
}

.btn-check:checked+.btn-linkedin,.btn-check:active+.btn-linkedin,.btn-linkedin:active,.btn-linkedin.active,.btn-linkedin.show.dropdown-toggle,.show>.btn-linkedin.dropdown-toggle {
    color: #fff !important;
    background-color: #006ba3 !important;
    border-color: #006ba3 !important
}

.btn-linkedin.disabled,.btn-linkedin:disabled {
    color: #fff !important;
    background-color: #0077b5 !important;
    border-color: #0077b5 !important;
    box-shadow: none !important
}

.btn-group .btn-linkedin,.input-group .btn-linkedin {
    border-right: var(--bs-border-width) solid #006ba3;
    border-left: var(--bs-border-width) solid #006ba3
}

.btn-group-vertical .btn-linkedin {
    border-top-color: #006ba3;
    border-bottom-color: #006ba3
}

.btn-label-linkedin {
    color: #0077b5;
    border-color: rgba(0,0,0,0);
    background: #d6e9f3
}

.btn-label-linkedin.waves-effect .waves-ripple {
    background: radial-gradient(rgba(0, 119, 181, 0.2) 0, rgba(0, 119, 181, 0.3) 40%, rgba(0, 119, 181, 0.4) 50%, rgba(0, 119, 181, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-linkedin:hover {
    border-color: rgba(0,0,0,0) !important;
    background: #c2deed !important;
    color: #0077b5 !important
}

.btn-label-linkedin:focus,.btn-label-linkedin.focus {
    color: #0077b5;
    background: #c2deed;
    box-shadow: none !important
}

.btn-label-linkedin:active,.btn-label-linkedin.active,.btn-label-linkedin.show.dropdown-toggle,.show>.btn-label-linkedin.dropdown-toggle {
    color: #0077b5 !important;
    background-color: #c2deed !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-linkedin:active:focus,.btn-label-linkedin.active:focus,.btn-label-linkedin.show.dropdown-toggle:focus,.show>.btn-label-linkedin.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-linkedin.disabled,.btn-label-linkedin:disabled {
    color: #0077b5 !important;
    border-color: rgba(0,0,0,0) !important;
    background: #d9ebf4 !important;
    box-shadow: none
}

.btn-group .btn-label-linkedin,.input-group .btn-label-linkedin {
    border-right: var(--bs-border-width) solid #c2deed;
    border-left: var(--bs-border-width) solid #c2deed
}

.btn-group-vertical .btn-label-linkedin {
    border-top-color: #c2deed;
    border-bottom-color: #c2deed
}

.btn-outline-linkedin {
    color: #0077b5;
    border-color: #0077b5;
    background: rgba(0,0,0,0)
}

.btn-outline-linkedin.waves-effect .waves-ripple {
    background: radial-gradient(rgba(0, 119, 181, 0.2) 0, rgba(0, 119, 181, 0.3) 40%, rgba(0, 119, 181, 0.4) 50%, rgba(0, 119, 181, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-linkedin:hover {
    color: #0077b5 !important;
    background-color: #ebf4f9 !important;
    border-color: #0077b5 !important
}

.btn-check:focus+.btn-outline-linkedin,.btn-outline-linkedin:focus {
    color: #0077b5;
    background-color: #ebf4f9;
    border-color: #0077b5;
    box-shadow: none
}

.btn-check:checked+.btn-outline-linkedin,.btn-check:active+.btn-outline-linkedin,.btn-outline-linkedin:active,.btn-outline-linkedin.active,.btn-outline-linkedin.dropdown-toggle.show {
    color: #0077b5 !important;
    background-color: #d6e9f3 !important;
    border-color: #0077b5 !important
}

.btn-check:checked+.btn-outline-linkedin:focus,.btn-check:active+.btn-outline-linkedin:focus,.btn-outline-linkedin:active:focus,.btn-outline-linkedin.active:focus,.btn-outline-linkedin.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-linkedin.disabled,.btn-outline-linkedin:disabled {
    color: #0077b5 !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-linkedin .badge {
    background: #0077b5;
    border-color: #0077b5;
    color: #fff
}

.btn-outline-linkedin:hover .badge,.btn-outline-linkedin:focus:hover .badge,.btn-outline-linkedin:active .badge,.btn-outline-linkedin.active .badge,.show>.btn-outline-linkedin.dropdown-toggle .badge {
    background: #0077b5;
    border-color: #0077b5
}

.bg-github {
    background-color: #333 !important
}

a.bg-github:hover,a.bg-github:focus {
    background-color: #303030 !important
}

.dropdown-notifications-item:not(.mark-as-read) .dropdown-notifications-read span {
    background-color: #333
}

.bg-label-github {
    background-color: #e0e0e0 !important;
    color: #333 !important
}

.bg-label-hover-github {
    background-color: #e0e0e0 !important;
    color: #333 !important
}

.bg-label-hover-github:hover {
    background-color: #333 !important;
    color: #fff !important
}

.btn-github {
    color: #fff;
    background-color: #333;
    border-color: #333
}

.btn-github:hover {
    color: #fff !important;
    background-color: #2e2e2e !important;
    border-color: #2e2e2e !important
}

.btn-check:focus+.btn-github,.btn-github:focus,.btn-github.focus {
    color: #fff;
    background-color: #2e2e2e;
    border-color: #2e2e2e;
    box-shadow: none
}

.btn-check:checked+.btn-github,.btn-check:active+.btn-github,.btn-github:active,.btn-github.active,.btn-github.show.dropdown-toggle,.show>.btn-github.dropdown-toggle {
    color: #fff !important;
    background-color: #2e2e2e !important;
    border-color: #2e2e2e !important
}

.btn-github.disabled,.btn-github:disabled {
    color: #fff !important;
    background-color: #333 !important;
    border-color: #333 !important;
    box-shadow: none !important
}

.btn-group .btn-github,.input-group .btn-github {
    border-right: var(--bs-border-width) solid #2e2e2e;
    border-left: var(--bs-border-width) solid #2e2e2e
}

.btn-group-vertical .btn-github {
    border-top-color: #2e2e2e;
    border-bottom-color: #2e2e2e
}

.btn-label-github {
    color: #333;
    border-color: rgba(0,0,0,0);
    background: #dedede
}

.btn-label-github.waves-effect .waves-ripple {
    background: radial-gradient(rgba(51, 51, 51, 0.2) 0, rgba(51, 51, 51, 0.3) 40%, rgba(51, 51, 51, 0.4) 50%, rgba(51, 51, 51, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-github:hover {
    border-color: rgba(0,0,0,0) !important;
    background: #cecece !important;
    color: #333 !important
}

.btn-label-github:focus,.btn-label-github.focus {
    color: #333;
    background: #cecece;
    box-shadow: none !important
}

.btn-label-github:active,.btn-label-github.active,.btn-label-github.show.dropdown-toggle,.show>.btn-label-github.dropdown-toggle {
    color: #333 !important;
    background-color: #cecece !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-github:active:focus,.btn-label-github.active:focus,.btn-label-github.show.dropdown-toggle:focus,.show>.btn-label-github.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-github.disabled,.btn-label-github:disabled {
    color: #333 !important;
    border-color: rgba(0,0,0,0) !important;
    background: #e0e0e0 !important;
    box-shadow: none
}

.btn-group .btn-label-github,.input-group .btn-label-github {
    border-right: var(--bs-border-width) solid #cecece;
    border-left: var(--bs-border-width) solid #cecece
}

.btn-group-vertical .btn-label-github {
    border-top-color: #cecece;
    border-bottom-color: #cecece
}

.btn-outline-github {
    color: #333;
    border-color: #333;
    background: rgba(0,0,0,0)
}

.btn-outline-github.waves-effect .waves-ripple {
    background: radial-gradient(rgba(51, 51, 51, 0.2) 0, rgba(51, 51, 51, 0.3) 40%, rgba(51, 51, 51, 0.4) 50%, rgba(51, 51, 51, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-github:hover {
    color: #333 !important;
    background-color: #efefef !important;
    border-color: #333 !important
}

.btn-check:focus+.btn-outline-github,.btn-outline-github:focus {
    color: #333;
    background-color: #efefef;
    border-color: #333;
    box-shadow: none
}

.btn-check:checked+.btn-outline-github,.btn-check:active+.btn-outline-github,.btn-outline-github:active,.btn-outline-github.active,.btn-outline-github.dropdown-toggle.show {
    color: #333 !important;
    background-color: #dedede !important;
    border-color: #333 !important
}

.btn-check:checked+.btn-outline-github:focus,.btn-check:active+.btn-outline-github:focus,.btn-outline-github:active:focus,.btn-outline-github.active:focus,.btn-outline-github.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-github.disabled,.btn-outline-github:disabled {
    color: #333 !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-github .badge {
    background: #333;
    border-color: #333;
    color: #fff
}

.btn-outline-github:hover .badge,.btn-outline-github:focus:hover .badge,.btn-outline-github:active .badge,.btn-outline-github.active .badge,.show>.btn-outline-github.dropdown-toggle .badge {
    background: #333;
    border-color: #333
}

.bg-dribbble {
    background-color: #ea4c89 !important
}

a.bg-dribbble:hover,a.bg-dribbble:focus {
    background-color: #de4882 !important
}

.dropdown-notifications-item:not(.mark-as-read) .dropdown-notifications-read span {
    background-color: #ea4c89
}

.bg-label-dribbble {
    background-color: #fce4ed !important;
    color: #ea4c89 !important
}

.bg-label-hover-dribbble {
    background-color: #fce4ed !important;
    color: #ea4c89 !important
}

.bg-label-hover-dribbble:hover {
    background-color: #ea4c89 !important;
    color: #fff !important
}

.btn-dribbble {
    color: #fff;
    background-color: #ea4c89;
    border-color: #ea4c89
}

.btn-dribbble:hover {
    color: #fff !important;
    background-color: #d3447b !important;
    border-color: #d3447b !important
}

.btn-check:focus+.btn-dribbble,.btn-dribbble:focus,.btn-dribbble.focus {
    color: #fff;
    background-color: #d3447b;
    border-color: #d3447b;
    box-shadow: none
}

.btn-check:checked+.btn-dribbble,.btn-check:active+.btn-dribbble,.btn-dribbble:active,.btn-dribbble.active,.btn-dribbble.show.dropdown-toggle,.show>.btn-dribbble.dropdown-toggle {
    color: #fff !important;
    background-color: #d3447b !important;
    border-color: #d3447b !important
}

.btn-dribbble.disabled,.btn-dribbble:disabled {
    color: #fff !important;
    background-color: #ea4c89 !important;
    border-color: #ea4c89 !important;
    box-shadow: none !important
}

.btn-group .btn-dribbble,.input-group .btn-dribbble {
    border-right: var(--bs-border-width) solid #d3447b;
    border-left: var(--bs-border-width) solid #d3447b
}

.btn-group-vertical .btn-dribbble {
    border-top-color: #d3447b;
    border-bottom-color: #d3447b
}

.btn-label-dribbble {
    color: #ea4c89;
    border-color: rgba(0,0,0,0);
    background: #fce2ec
}

.btn-label-dribbble.waves-effect .waves-ripple {
    background: radial-gradient(rgba(234, 76, 137, 0.2) 0, rgba(234, 76, 137, 0.3) 40%, rgba(234, 76, 137, 0.4) 50%, rgba(234, 76, 137, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-dribbble:hover {
    border-color: rgba(0,0,0,0) !important;
    background: #fad4e3 !important;
    color: #ea4c89 !important
}

.btn-label-dribbble:focus,.btn-label-dribbble.focus {
    color: #ea4c89;
    background: #fad4e3;
    box-shadow: none !important
}

.btn-label-dribbble:active,.btn-label-dribbble.active,.btn-label-dribbble.show.dropdown-toggle,.show>.btn-label-dribbble.dropdown-toggle {
    color: #ea4c89 !important;
    background-color: #fad4e3 !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-dribbble:active:focus,.btn-label-dribbble.active:focus,.btn-label-dribbble.show.dropdown-toggle:focus,.show>.btn-label-dribbble.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-dribbble.disabled,.btn-label-dribbble:disabled {
    color: #ea4c89 !important;
    border-color: rgba(0,0,0,0) !important;
    background: #fce4ed !important;
    box-shadow: none
}

.btn-group .btn-label-dribbble,.input-group .btn-label-dribbble {
    border-right: var(--bs-border-width) solid #fad4e3;
    border-left: var(--bs-border-width) solid #fad4e3
}

.btn-group-vertical .btn-label-dribbble {
    border-top-color: #fad4e3;
    border-bottom-color: #fad4e3
}

.btn-outline-dribbble {
    color: #ea4c89;
    border-color: #ea4c89;
    background: rgba(0,0,0,0)
}

.btn-outline-dribbble.waves-effect .waves-ripple {
    background: radial-gradient(rgba(234, 76, 137, 0.2) 0, rgba(234, 76, 137, 0.3) 40%, rgba(234, 76, 137, 0.4) 50%, rgba(234, 76, 137, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-dribbble:hover {
    color: #ea4c89 !important;
    background-color: #fdf1f6 !important;
    border-color: #ea4c89 !important
}

.btn-check:focus+.btn-outline-dribbble,.btn-outline-dribbble:focus {
    color: #ea4c89;
    background-color: #fdf1f6;
    border-color: #ea4c89;
    box-shadow: none
}

.btn-check:checked+.btn-outline-dribbble,.btn-check:active+.btn-outline-dribbble,.btn-outline-dribbble:active,.btn-outline-dribbble.active,.btn-outline-dribbble.dropdown-toggle.show {
    color: #ea4c89 !important;
    background-color: #fce2ec !important;
    border-color: #ea4c89 !important
}

.btn-check:checked+.btn-outline-dribbble:focus,.btn-check:active+.btn-outline-dribbble:focus,.btn-outline-dribbble:active:focus,.btn-outline-dribbble.active:focus,.btn-outline-dribbble.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-dribbble.disabled,.btn-outline-dribbble:disabled {
    color: #ea4c89 !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-dribbble .badge {
    background: #ea4c89;
    border-color: #ea4c89;
    color: #fff
}

.btn-outline-dribbble:hover .badge,.btn-outline-dribbble:focus:hover .badge,.btn-outline-dribbble:active .badge,.btn-outline-dribbble.active .badge,.show>.btn-outline-dribbble.dropdown-toggle .badge {
    background: #ea4c89;
    border-color: #ea4c89
}

.bg-pinterest {
    background-color: #cb2027 !important
}

a.bg-pinterest:hover,a.bg-pinterest:focus {
    background-color: #c11e25 !important
}

.dropdown-notifications-item:not(.mark-as-read) .dropdown-notifications-read span {
    background-color: #cb2027
}

.bg-label-pinterest {
    background-color: #f7dedf !important;
    color: #cb2027 !important
}

.bg-label-hover-pinterest {
    background-color: #f7dedf !important;
    color: #cb2027 !important
}

.bg-label-hover-pinterest:hover {
    background-color: #cb2027 !important;
    color: #fff !important
}

.btn-pinterest {
    color: #fff;
    background-color: #cb2027;
    border-color: #cb2027
}

.btn-pinterest:hover {
    color: #fff !important;
    background-color: #b71d23 !important;
    border-color: #b71d23 !important
}

.btn-check:focus+.btn-pinterest,.btn-pinterest:focus,.btn-pinterest.focus {
    color: #fff;
    background-color: #b71d23;
    border-color: #b71d23;
    box-shadow: none
}

.btn-check:checked+.btn-pinterest,.btn-check:active+.btn-pinterest,.btn-pinterest:active,.btn-pinterest.active,.btn-pinterest.show.dropdown-toggle,.show>.btn-pinterest.dropdown-toggle {
    color: #fff !important;
    background-color: #b71d23 !important;
    border-color: #b71d23 !important
}

.btn-pinterest.disabled,.btn-pinterest:disabled {
    color: #fff !important;
    background-color: #cb2027 !important;
    border-color: #cb2027 !important;
    box-shadow: none !important
}

.btn-group .btn-pinterest,.input-group .btn-pinterest {
    border-right: var(--bs-border-width) solid #b71d23;
    border-left: var(--bs-border-width) solid #b71d23
}

.btn-group-vertical .btn-pinterest {
    border-top-color: #b71d23;
    border-bottom-color: #b71d23
}

.btn-label-pinterest {
    color: #cb2027;
    border-color: rgba(0,0,0,0);
    background: #f7dbdc
}

.btn-label-pinterest.waves-effect .waves-ripple {
    background: radial-gradient(rgba(203, 32, 39, 0.2) 0, rgba(203, 32, 39, 0.3) 40%, rgba(203, 32, 39, 0.4) 50%, rgba(203, 32, 39, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-pinterest:hover {
    border-color: rgba(0,0,0,0) !important;
    background: #f3c9cb !important;
    color: #cb2027 !important
}

.btn-label-pinterest:focus,.btn-label-pinterest.focus {
    color: #cb2027;
    background: #f3c9cb;
    box-shadow: none !important
}

.btn-label-pinterest:active,.btn-label-pinterest.active,.btn-label-pinterest.show.dropdown-toggle,.show>.btn-label-pinterest.dropdown-toggle {
    color: #cb2027 !important;
    background-color: #f3c9cb !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-pinterest:active:focus,.btn-label-pinterest.active:focus,.btn-label-pinterest.show.dropdown-toggle:focus,.show>.btn-label-pinterest.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-pinterest.disabled,.btn-label-pinterest:disabled {
    color: #cb2027 !important;
    border-color: rgba(0,0,0,0) !important;
    background: #f7dedf !important;
    box-shadow: none
}

.btn-group .btn-label-pinterest,.input-group .btn-label-pinterest {
    border-right: var(--bs-border-width) solid #f3c9cb;
    border-left: var(--bs-border-width) solid #f3c9cb
}

.btn-group-vertical .btn-label-pinterest {
    border-top-color: #f3c9cb;
    border-bottom-color: #f3c9cb
}

.btn-outline-pinterest {
    color: #cb2027;
    border-color: #cb2027;
    background: rgba(0,0,0,0)
}

.btn-outline-pinterest.waves-effect .waves-ripple {
    background: radial-gradient(rgba(203, 32, 39, 0.2) 0, rgba(203, 32, 39, 0.3) 40%, rgba(203, 32, 39, 0.4) 50%, rgba(203, 32, 39, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-pinterest:hover {
    color: #cb2027 !important;
    background-color: #fbedee !important;
    border-color: #cb2027 !important
}

.btn-check:focus+.btn-outline-pinterest,.btn-outline-pinterest:focus {
    color: #cb2027;
    background-color: #fbedee;
    border-color: #cb2027;
    box-shadow: none
}

.btn-check:checked+.btn-outline-pinterest,.btn-check:active+.btn-outline-pinterest,.btn-outline-pinterest:active,.btn-outline-pinterest.active,.btn-outline-pinterest.dropdown-toggle.show {
    color: #cb2027 !important;
    background-color: #f7dbdc !important;
    border-color: #cb2027 !important
}

.btn-check:checked+.btn-outline-pinterest:focus,.btn-check:active+.btn-outline-pinterest:focus,.btn-outline-pinterest:active:focus,.btn-outline-pinterest.active:focus,.btn-outline-pinterest.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-pinterest.disabled,.btn-outline-pinterest:disabled {
    color: #cb2027 !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-pinterest .badge {
    background: #cb2027;
    border-color: #cb2027;
    color: #fff
}

.btn-outline-pinterest:hover .badge,.btn-outline-pinterest:focus:hover .badge,.btn-outline-pinterest:active .badge,.btn-outline-pinterest.active .badge,.show>.btn-outline-pinterest.dropdown-toggle .badge {
    background: #cb2027;
    border-color: #cb2027
}

.bg-slack {
    background-color: #4a154b !important
}

a.bg-slack:hover,a.bg-slack:focus {
    background-color: #461447 !important
}

.dropdown-notifications-item:not(.mark-as-read) .dropdown-notifications-read span {
    background-color: #4a154b
}

.bg-label-slack {
    background-color: #e4dce4 !important;
    color: #4a154b !important
}

.bg-label-hover-slack {
    background-color: #e4dce4 !important;
    color: #4a154b !important
}

.bg-label-hover-slack:hover {
    background-color: #4a154b !important;
    color: #fff !important
}

.btn-slack {
    color: #fff;
    background-color: #4a154b;
    border-color: #4a154b
}

.btn-slack:hover {
    color: #fff !important;
    background-color: #431344 !important;
    border-color: #431344 !important
}

.btn-check:focus+.btn-slack,.btn-slack:focus,.btn-slack.focus {
    color: #fff;
    background-color: #431344;
    border-color: #431344;
    box-shadow: none
}

.btn-check:checked+.btn-slack,.btn-check:active+.btn-slack,.btn-slack:active,.btn-slack.active,.btn-slack.show.dropdown-toggle,.show>.btn-slack.dropdown-toggle {
    color: #fff !important;
    background-color: #431344 !important;
    border-color: #431344 !important
}

.btn-slack.disabled,.btn-slack:disabled {
    color: #fff !important;
    background-color: #4a154b !important;
    border-color: #4a154b !important;
    box-shadow: none !important
}

.btn-group .btn-slack,.input-group .btn-slack {
    border-right: var(--bs-border-width) solid #431344;
    border-left: var(--bs-border-width) solid #431344
}

.btn-group-vertical .btn-slack {
    border-top-color: #431344;
    border-bottom-color: #431344
}

.btn-label-slack {
    color: #4a154b;
    border-color: rgba(0,0,0,0);
    background: #e2dae2
}

.btn-label-slack.waves-effect .waves-ripple {
    background: radial-gradient(rgba(74, 21, 75, 0.2) 0, rgba(74, 21, 75, 0.3) 40%, rgba(74, 21, 75, 0.4) 50%, rgba(74, 21, 75, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-slack:hover {
    border-color: rgba(0,0,0,0) !important;
    background: #d4c7d4 !important;
    color: #4a154b !important
}

.btn-label-slack:focus,.btn-label-slack.focus {
    color: #4a154b;
    background: #d4c7d4;
    box-shadow: none !important
}

.btn-label-slack:active,.btn-label-slack.active,.btn-label-slack.show.dropdown-toggle,.show>.btn-label-slack.dropdown-toggle {
    color: #4a154b !important;
    background-color: #d4c7d4 !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-slack:active:focus,.btn-label-slack.active:focus,.btn-label-slack.show.dropdown-toggle:focus,.show>.btn-label-slack.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-slack.disabled,.btn-label-slack:disabled {
    color: #4a154b !important;
    border-color: rgba(0,0,0,0) !important;
    background: #e4dce4 !important;
    box-shadow: none
}

.btn-group .btn-label-slack,.input-group .btn-label-slack {
    border-right: var(--bs-border-width) solid #d4c7d4;
    border-left: var(--bs-border-width) solid #d4c7d4
}

.btn-group-vertical .btn-label-slack {
    border-top-color: #d4c7d4;
    border-bottom-color: #d4c7d4
}

.btn-outline-slack {
    color: #4a154b;
    border-color: #4a154b;
    background: rgba(0,0,0,0)
}

.btn-outline-slack.waves-effect .waves-ripple {
    background: radial-gradient(rgba(74, 21, 75, 0.2) 0, rgba(74, 21, 75, 0.3) 40%, rgba(74, 21, 75, 0.4) 50%, rgba(74, 21, 75, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-slack:hover {
    color: #4a154b !important;
    background-color: #f1ecf1 !important;
    border-color: #4a154b !important
}

.btn-check:focus+.btn-outline-slack,.btn-outline-slack:focus {
    color: #4a154b;
    background-color: #f1ecf1;
    border-color: #4a154b;
    box-shadow: none
}

.btn-check:checked+.btn-outline-slack,.btn-check:active+.btn-outline-slack,.btn-outline-slack:active,.btn-outline-slack.active,.btn-outline-slack.dropdown-toggle.show {
    color: #4a154b !important;
    background-color: #e2dae2 !important;
    border-color: #4a154b !important
}

.btn-check:checked+.btn-outline-slack:focus,.btn-check:active+.btn-outline-slack:focus,.btn-outline-slack:active:focus,.btn-outline-slack.active:focus,.btn-outline-slack.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-slack.disabled,.btn-outline-slack:disabled {
    color: #4a154b !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-slack .badge {
    background: #4a154b;
    border-color: #4a154b;
    color: #fff
}

.btn-outline-slack:hover .badge,.btn-outline-slack:focus:hover .badge,.btn-outline-slack:active .badge,.btn-outline-slack.active .badge,.show>.btn-outline-slack.dropdown-toggle .badge {
    background: #4a154b;
    border-color: #4a154b
}

.bg-reddit {
    background-color: #ff4500 !important
}

a.bg-reddit:hover,a.bg-reddit:focus {
    background-color: #f24200 !important
}

.dropdown-notifications-item:not(.mark-as-read) .dropdown-notifications-read span {
    background-color: #ff4500
}

.bg-label-reddit {
    background-color: #ffe3d9 !important;
    color: #ff4500 !important
}

.bg-label-hover-reddit {
    background-color: #ffe3d9 !important;
    color: #ff4500 !important
}

.bg-label-hover-reddit:hover {
    background-color: #ff4500 !important;
    color: #fff !important
}

.btn-reddit {
    color: #fff;
    background-color: #ff4500;
    border-color: #ff4500
}

.btn-reddit:hover {
    color: #fff !important;
    background-color: #e63e00 !important;
    border-color: #e63e00 !important
}

.btn-check:focus+.btn-reddit,.btn-reddit:focus,.btn-reddit.focus {
    color: #fff;
    background-color: #e63e00;
    border-color: #e63e00;
    box-shadow: none
}

.btn-check:checked+.btn-reddit,.btn-check:active+.btn-reddit,.btn-reddit:active,.btn-reddit.active,.btn-reddit.show.dropdown-toggle,.show>.btn-reddit.dropdown-toggle {
    color: #fff !important;
    background-color: #e63e00 !important;
    border-color: #e63e00 !important
}

.btn-reddit.disabled,.btn-reddit:disabled {
    color: #fff !important;
    background-color: #ff4500 !important;
    border-color: #ff4500 !important;
    box-shadow: none !important
}

.btn-group .btn-reddit,.input-group .btn-reddit {
    border-right: var(--bs-border-width) solid #e63e00;
    border-left: var(--bs-border-width) solid #e63e00
}

.btn-group-vertical .btn-reddit {
    border-top-color: #e63e00;
    border-bottom-color: #e63e00
}

.btn-label-reddit {
    color: #ff4500;
    border-color: rgba(0,0,0,0);
    background: #ffe1d6
}

.btn-label-reddit.waves-effect .waves-ripple {
    background: radial-gradient(rgba(255, 69, 0, 0.2) 0, rgba(255, 69, 0, 0.3) 40%, rgba(255, 69, 0, 0.4) 50%, rgba(255, 69, 0, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-reddit:hover {
    border-color: rgba(0,0,0,0) !important;
    background: #ffd2c2 !important;
    color: #ff4500 !important
}

.btn-label-reddit:focus,.btn-label-reddit.focus {
    color: #ff4500;
    background: #ffd2c2;
    box-shadow: none !important
}

.btn-label-reddit:active,.btn-label-reddit.active,.btn-label-reddit.show.dropdown-toggle,.show>.btn-label-reddit.dropdown-toggle {
    color: #ff4500 !important;
    background-color: #ffd2c2 !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-reddit:active:focus,.btn-label-reddit.active:focus,.btn-label-reddit.show.dropdown-toggle:focus,.show>.btn-label-reddit.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-reddit.disabled,.btn-label-reddit:disabled {
    color: #ff4500 !important;
    border-color: rgba(0,0,0,0) !important;
    background: #ffe3d9 !important;
    box-shadow: none
}

.btn-group .btn-label-reddit,.input-group .btn-label-reddit {
    border-right: var(--bs-border-width) solid #ffd2c2;
    border-left: var(--bs-border-width) solid #ffd2c2
}

.btn-group-vertical .btn-label-reddit {
    border-top-color: #ffd2c2;
    border-bottom-color: #ffd2c2
}

.btn-outline-reddit {
    color: #ff4500;
    border-color: #ff4500;
    background: rgba(0,0,0,0)
}

.btn-outline-reddit.waves-effect .waves-ripple {
    background: radial-gradient(rgba(255, 69, 0, 0.2) 0, rgba(255, 69, 0, 0.3) 40%, rgba(255, 69, 0, 0.4) 50%, rgba(255, 69, 0, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-reddit:hover {
    color: #ff4500 !important;
    background-color: #fff0eb !important;
    border-color: #ff4500 !important
}

.btn-check:focus+.btn-outline-reddit,.btn-outline-reddit:focus {
    color: #ff4500;
    background-color: #fff0eb;
    border-color: #ff4500;
    box-shadow: none
}

.btn-check:checked+.btn-outline-reddit,.btn-check:active+.btn-outline-reddit,.btn-outline-reddit:active,.btn-outline-reddit.active,.btn-outline-reddit.dropdown-toggle.show {
    color: #ff4500 !important;
    background-color: #ffe1d6 !important;
    border-color: #ff4500 !important
}

.btn-check:checked+.btn-outline-reddit:focus,.btn-check:active+.btn-outline-reddit:focus,.btn-outline-reddit:active:focus,.btn-outline-reddit.active:focus,.btn-outline-reddit.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-reddit.disabled,.btn-outline-reddit:disabled {
    color: #ff4500 !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-reddit .badge {
    background: #ff4500;
    border-color: #ff4500;
    color: #fff
}

.btn-outline-reddit:hover .badge,.btn-outline-reddit:focus:hover .badge,.btn-outline-reddit:active .badge,.btn-outline-reddit.active .badge,.show>.btn-outline-reddit.dropdown-toggle .badge {
    background: #ff4500;
    border-color: #ff4500
}

.bg-youtube {
    background-color: red !important
}

a.bg-youtube:hover,a.bg-youtube:focus {
    background-color: #f20000 !important
}

.dropdown-notifications-item:not(.mark-as-read) .dropdown-notifications-read span {
    background-color: red
}

.bg-label-youtube {
    background-color: #ffd9d9 !important;
    color: red !important
}

.bg-label-hover-youtube {
    background-color: #ffd9d9 !important;
    color: red !important
}

.bg-label-hover-youtube:hover {
    background-color: red !important;
    color: #fff !important
}

.btn-youtube {
    color: #fff;
    background-color: red;
    border-color: red
}

.btn-youtube:hover {
    color: #fff !important;
    background-color: #e60000 !important;
    border-color: #e60000 !important
}

.btn-check:focus+.btn-youtube,.btn-youtube:focus,.btn-youtube.focus {
    color: #fff;
    background-color: #e60000;
    border-color: #e60000;
    box-shadow: none
}

.btn-check:checked+.btn-youtube,.btn-check:active+.btn-youtube,.btn-youtube:active,.btn-youtube.active,.btn-youtube.show.dropdown-toggle,.show>.btn-youtube.dropdown-toggle {
    color: #fff !important;
    background-color: #e60000 !important;
    border-color: #e60000 !important
}

.btn-youtube.disabled,.btn-youtube:disabled {
    color: #fff !important;
    background-color: red !important;
    border-color: red !important;
    box-shadow: none !important
}

.btn-group .btn-youtube,.input-group .btn-youtube {
    border-right: var(--bs-border-width) solid #e60000;
    border-left: var(--bs-border-width) solid #e60000
}

.btn-group-vertical .btn-youtube {
    border-top-color: #e60000;
    border-bottom-color: #e60000
}

.btn-label-youtube {
    color: red;
    border-color: rgba(0,0,0,0);
    background: #ffd6d6
}

.btn-label-youtube.waves-effect .waves-ripple {
    background: radial-gradient(rgba(255, 0, 0, 0.2) 0, rgba(255, 0, 0, 0.3) 40%, rgba(255, 0, 0, 0.4) 50%, rgba(255, 0, 0, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-youtube:hover {
    border-color: rgba(0,0,0,0) !important;
    background: #ffc2c2 !important;
    color: red !important
}

.btn-label-youtube:focus,.btn-label-youtube.focus {
    color: red;
    background: #ffc2c2;
    box-shadow: none !important
}

.btn-label-youtube:active,.btn-label-youtube.active,.btn-label-youtube.show.dropdown-toggle,.show>.btn-label-youtube.dropdown-toggle {
    color: red !important;
    background-color: #ffc2c2 !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-youtube:active:focus,.btn-label-youtube.active:focus,.btn-label-youtube.show.dropdown-toggle:focus,.show>.btn-label-youtube.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-youtube.disabled,.btn-label-youtube:disabled {
    color: red !important;
    border-color: rgba(0,0,0,0) !important;
    background: #ffd9d9 !important;
    box-shadow: none
}

.btn-group .btn-label-youtube,.input-group .btn-label-youtube {
    border-right: var(--bs-border-width) solid #ffc2c2;
    border-left: var(--bs-border-width) solid #ffc2c2
}

.btn-group-vertical .btn-label-youtube {
    border-top-color: #ffc2c2;
    border-bottom-color: #ffc2c2
}

.btn-outline-youtube {
    color: red;
    border-color: red;
    background: rgba(0,0,0,0)
}

.btn-outline-youtube.waves-effect .waves-ripple {
    background: radial-gradient(rgba(255, 0, 0, 0.2) 0, rgba(255, 0, 0, 0.3) 40%, rgba(255, 0, 0, 0.4) 50%, rgba(255, 0, 0, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-youtube:hover {
    color: red !important;
    background-color: #ffebeb !important;
    border-color: red !important
}

.btn-check:focus+.btn-outline-youtube,.btn-outline-youtube:focus {
    color: red;
    background-color: #ffebeb;
    border-color: red;
    box-shadow: none
}

.btn-check:checked+.btn-outline-youtube,.btn-check:active+.btn-outline-youtube,.btn-outline-youtube:active,.btn-outline-youtube.active,.btn-outline-youtube.dropdown-toggle.show {
    color: red !important;
    background-color: #ffd6d6 !important;
    border-color: red !important
}

.btn-check:checked+.btn-outline-youtube:focus,.btn-check:active+.btn-outline-youtube:focus,.btn-outline-youtube:active:focus,.btn-outline-youtube.active:focus,.btn-outline-youtube.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-youtube.disabled,.btn-outline-youtube:disabled {
    color: red !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-youtube .badge {
    background: red;
    border-color: red;
    color: #fff
}

.btn-outline-youtube:hover .badge,.btn-outline-youtube:focus:hover .badge,.btn-outline-youtube:active .badge,.btn-outline-youtube.active .badge,.show>.btn-outline-youtube.dropdown-toggle .badge {
    background: red;
    border-color: red
}

.bg-vimeo {
    background-color: #1ab7ea !important
}

a.bg-vimeo:hover,a.bg-vimeo:focus {
    background-color: #19aede !important
}

.dropdown-notifications-item:not(.mark-as-read) .dropdown-notifications-read span {
    background-color: #1ab7ea
}

.bg-label-vimeo {
    background-color: #ddf4fc !important;
    color: #1ab7ea !important
}

.bg-label-hover-vimeo {
    background-color: #ddf4fc !important;
    color: #1ab7ea !important
}

.bg-label-hover-vimeo:hover {
    background-color: #1ab7ea !important;
    color: #fff !important
}

.btn-vimeo {
    color: #fff;
    background-color: #1ab7ea;
    border-color: #1ab7ea
}

.btn-vimeo:hover {
    color: #fff !important;
    background-color: #17a5d3 !important;
    border-color: #17a5d3 !important
}

.btn-check:focus+.btn-vimeo,.btn-vimeo:focus,.btn-vimeo.focus {
    color: #fff;
    background-color: #17a5d3;
    border-color: #17a5d3;
    box-shadow: none
}

.btn-check:checked+.btn-vimeo,.btn-check:active+.btn-vimeo,.btn-vimeo:active,.btn-vimeo.active,.btn-vimeo.show.dropdown-toggle,.show>.btn-vimeo.dropdown-toggle {
    color: #fff !important;
    background-color: #17a5d3 !important;
    border-color: #17a5d3 !important
}

.btn-vimeo.disabled,.btn-vimeo:disabled {
    color: #fff !important;
    background-color: #1ab7ea !important;
    border-color: #1ab7ea !important;
    box-shadow: none !important
}

.btn-group .btn-vimeo,.input-group .btn-vimeo {
    border-right: var(--bs-border-width) solid #17a5d3;
    border-left: var(--bs-border-width) solid #17a5d3
}

.btn-group-vertical .btn-vimeo {
    border-top-color: #17a5d3;
    border-bottom-color: #17a5d3
}

.btn-label-vimeo {
    color: #1ab7ea;
    border-color: rgba(0,0,0,0);
    background: #daf3fc
}

.btn-label-vimeo.waves-effect .waves-ripple {
    background: radial-gradient(rgba(26, 183, 234, 0.2) 0, rgba(26, 183, 234, 0.3) 40%, rgba(26, 183, 234, 0.4) 50%, rgba(26, 183, 234, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-vimeo:hover {
    border-color: rgba(0,0,0,0) !important;
    background: #c8eefa !important;
    color: #1ab7ea !important
}

.btn-label-vimeo:focus,.btn-label-vimeo.focus {
    color: #1ab7ea;
    background: #c8eefa;
    box-shadow: none !important
}

.btn-label-vimeo:active,.btn-label-vimeo.active,.btn-label-vimeo.show.dropdown-toggle,.show>.btn-label-vimeo.dropdown-toggle {
    color: #1ab7ea !important;
    background-color: #c8eefa !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-vimeo:active:focus,.btn-label-vimeo.active:focus,.btn-label-vimeo.show.dropdown-toggle:focus,.show>.btn-label-vimeo.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-vimeo.disabled,.btn-label-vimeo:disabled {
    color: #1ab7ea !important;
    border-color: rgba(0,0,0,0) !important;
    background: #ddf4fc !important;
    box-shadow: none
}

.btn-group .btn-label-vimeo,.input-group .btn-label-vimeo {
    border-right: var(--bs-border-width) solid #c8eefa;
    border-left: var(--bs-border-width) solid #c8eefa
}

.btn-group-vertical .btn-label-vimeo {
    border-top-color: #c8eefa;
    border-bottom-color: #c8eefa
}

.btn-outline-vimeo {
    color: #1ab7ea;
    border-color: #1ab7ea;
    background: rgba(0,0,0,0)
}

.btn-outline-vimeo.waves-effect .waves-ripple {
    background: radial-gradient(rgba(26, 183, 234, 0.2) 0, rgba(26, 183, 234, 0.3) 40%, rgba(26, 183, 234, 0.4) 50%, rgba(26, 183, 234, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-vimeo:hover {
    color: #1ab7ea !important;
    background-color: #edf9fd !important;
    border-color: #1ab7ea !important
}

.btn-check:focus+.btn-outline-vimeo,.btn-outline-vimeo:focus {
    color: #1ab7ea;
    background-color: #edf9fd;
    border-color: #1ab7ea;
    box-shadow: none
}

.btn-check:checked+.btn-outline-vimeo,.btn-check:active+.btn-outline-vimeo,.btn-outline-vimeo:active,.btn-outline-vimeo.active,.btn-outline-vimeo.dropdown-toggle.show {
    color: #1ab7ea !important;
    background-color: #daf3fc !important;
    border-color: #1ab7ea !important
}

.btn-check:checked+.btn-outline-vimeo:focus,.btn-check:active+.btn-outline-vimeo:focus,.btn-outline-vimeo:active:focus,.btn-outline-vimeo.active:focus,.btn-outline-vimeo.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-vimeo.disabled,.btn-outline-vimeo:disabled {
    color: #1ab7ea !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-vimeo .badge {
    background: #1ab7ea;
    border-color: #1ab7ea;
    color: #fff
}

.btn-outline-vimeo:hover .badge,.btn-outline-vimeo:focus:hover .badge,.btn-outline-vimeo:active .badge,.btn-outline-vimeo.active .badge,.show>.btn-outline-vimeo.dropdown-toggle .badge {
    background: #1ab7ea;
    border-color: #1ab7ea
}

.btn-white {
    color: #6f6b7d;
    background-color: #fff;
    border-color: #fff
}

.btn-white:hover {
    color: #4b465c !important;
    background-color: #fff !important;
    border-color: #fff !important
}

.btn-check:focus+.btn-white,.btn-white:focus,.btn-white.focus {
    color: #4b465c;
    background-color: #fff;
    border-color: #fff;
    box-shadow: none
}

.btn-check:checked+.btn-white,.btn-check:active+.btn-white,.btn-white:active,.btn-white.active,.btn-white.show.dropdown-toggle,.show>.btn-white.dropdown-toggle {
    color: #4b465c !important;
    background-color: #fff !important;
    border-color: #fff !important
}

.btn-white.disabled,.btn-white:disabled {
    color: #4b465c !important;
    background-color: #fff !important;
    border-color: #fff !important;
    box-shadow: none !important
}

.btn-group .btn-white,.input-group .btn-white {
    border-right: var(--bs-border-width) solid #fff;
    border-left: var(--bs-border-width) solid #fff
}

.btn-group-vertical .btn-white {
    border-top-color: #fff;
    border-bottom-color: #fff
}

.btn-label-white {
    color: #6f6b7d;
    border-color: rgba(0,0,0,0);
    background: #fff
}

.btn-label-white.waves-effect .waves-ripple {
    background: radial-gradient(rgba(255, 255, 255, 0.2) 0, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-label-white:hover {
    border-color: rgba(0,0,0,0) !important;
    background: #fff !important;
    color: #fff !important
}

.btn-label-white:focus,.btn-label-white.focus {
    color: #fff;
    background: #fff;
    box-shadow: none !important
}

.btn-label-white:active,.btn-label-white.active,.btn-label-white.show.dropdown-toggle,.show>.btn-label-white.dropdown-toggle {
    color: #fff !important;
    background-color: #fff !important;
    border-color: rgba(0,0,0,0) !important
}

.btn-label-white:active:focus,.btn-label-white.active:focus,.btn-label-white.show.dropdown-toggle:focus,.show>.btn-label-white.dropdown-toggle:focus {
    box-shadow: none
}

.btn-label-white.disabled,.btn-label-white:disabled {
    color: #6f6b7d !important;
    border-color: rgba(0,0,0,0) !important;
    background: #fff !important;
    box-shadow: none
}

.btn-group .btn-label-white,.input-group .btn-label-white {
    border-right: var(--bs-border-width) solid #fff;
    border-left: var(--bs-border-width) solid #fff
}

.btn-group-vertical .btn-label-white {
    border-top-color: #fff;
    border-bottom-color: #fff
}

.btn-outline-white {
    color: #fff;
    border-color: #fff;
    background: rgba(0,0,0,0)
}

.btn-outline-white.waves-effect .waves-ripple {
    background: radial-gradient(rgba(255, 255, 255, 0.2) 0, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
}

.btn-outline-white:hover {
    color: #fff !important;
    background-color: #fff !important;
    border-color: #fff !important
}

.btn-check:focus+.btn-outline-white,.btn-outline-white:focus {
    color: #fff;
    background-color: #fff;
    border-color: #fff;
    box-shadow: none
}

.btn-check:checked+.btn-outline-white,.btn-check:active+.btn-outline-white,.btn-outline-white:active,.btn-outline-white.active,.btn-outline-white.dropdown-toggle.show {
    color: #fff !important;
    background-color: #fff !important;
    border-color: #fff !important
}

.btn-check:checked+.btn-outline-white:focus,.btn-check:active+.btn-outline-white:focus,.btn-outline-white:active:focus,.btn-outline-white.active:focus,.btn-outline-white.dropdown-toggle.show:focus {
    box-shadow: none
}

.btn-outline-white.disabled,.btn-outline-white:disabled {
    color: #fff !important;
    background-color: rgba(0,0,0,0) !important
}

.btn-outline-white .badge {
    background: #fff;
    border-color: #fff;
    color: #4b465c
}

.btn-outline-white:hover .badge,.btn-outline-white:focus:hover .badge,.btn-outline-white:active .badge,.btn-outline-white.active .badge,.show>.btn-outline-white.dropdown-toggle .badge {
    background: #fff;
    border-color: #fff
}

.form-check-black .form-check-input:focus {
    border-color: #000
}

.form-check-black .form-check-input:checked,.form-check-black .form-check-input[type=checkbox]:indeterminate {
    background-color: #000;
    border-color: #000
}

.form-check-black.custom-option.checked {
    border: 1px solid #000
}

.form-check-white .form-check-input:focus {
    border-color: #fff
}

.form-check-white .form-check-input:checked,.form-check-white .form-check-input[type=checkbox]:indeterminate {
    background-color: #fff;
    border-color: #fff
}

.form-check-white.custom-option.checked {
    border: 1px solid #fff
}

.form-check-silver .form-check-input:focus {
    border-color: #eee
}

.form-check-silver .form-check-input:checked,.form-check-silver .form-check-input[type=checkbox]:indeterminate {
    background-color: #eee;
    border-color: #eee
}

.form-check-silver.custom-option.checked {
    border: 1px solid #eee
}

.form-check-gray .form-check-input:focus {
    border-color: #777
}

.form-check-gray .form-check-input:checked,.form-check-gray .form-check-input[type=checkbox]:indeterminate {
    background-color: #777;
    border-color: #777
}

.form-check-gray.custom-option.checked {
    border: 1px solid #777
}

.form-check-gold .form-check-input:focus {
    border-color: #ffeb3b
}

.form-check-gold .form-check-input:checked,.form-check-gold .form-check-input[type=checkbox]:indeterminate {
    background-color: #ffeb3b;
    border-color: #ffeb3b
}

.form-check-gold.custom-option.checked {
    border: 1px solid #ffeb3b
}

.form-check-pink .form-check-input:focus {
    border-color: #e91e63
}

.form-check-pink .form-check-input:checked,.form-check-pink .form-check-input[type=checkbox]:indeterminate {
    background-color: #e91e63;
    border-color: #e91e63
}

.form-check-pink.custom-option.checked {
    border: 1px solid #e91e63
}

.form-check-red .form-check-input:focus {
    border-color: #f44336
}

.form-check-red .form-check-input:checked,.form-check-red .form-check-input[type=checkbox]:indeterminate {
    background-color: #f44336;
    border-color: #f44336
}

.form-check-red.custom-option.checked {
    border: 1px solid #f44336
}

.navbar.bg-secondary {
    background-color: rgba(168,170,174,.95) !important;
    color: #f3f4f4
}

.navbar.bg-secondary .navbar-brand,.navbar.bg-secondary .navbar-brand a {
    color: #fff
}

.navbar.bg-secondary .navbar-brand:hover,.navbar.bg-secondary .navbar-brand:focus,.navbar.bg-secondary .navbar-brand a:hover,.navbar.bg-secondary .navbar-brand a:focus {
    color: #fff
}

.navbar.bg-secondary .navbar-search-wrapper .navbar-search-icon,.navbar.bg-secondary .navbar-search-wrapper .search-input {
    color: #f3f4f4
}

.navbar.bg-secondary .search-input-wrapper .search-input,.navbar.bg-secondary .search-input-wrapper .search-toggler {
    background-color: #a8aaae !important;
    color: #f3f4f4
}

.navbar.bg-secondary .navbar-nav>.nav-link,.navbar.bg-secondary .navbar-nav>.nav-item>.nav-link,.navbar.bg-secondary .navbar-nav>.nav>.nav-item>.nav-link {
    color: #f3f4f4
}

.navbar.bg-secondary .navbar-nav>.nav-link:hover,.navbar.bg-secondary .navbar-nav>.nav-link:focus,.navbar.bg-secondary .navbar-nav>.nav-item>.nav-link:hover,.navbar.bg-secondary .navbar-nav>.nav-item>.nav-link:focus,.navbar.bg-secondary .navbar-nav>.nav>.nav-item>.nav-link:hover,.navbar.bg-secondary .navbar-nav>.nav>.nav-item>.nav-link:focus {
    color: #fff
}

.navbar.bg-secondary .navbar-nav>.nav-link.disabled,.navbar.bg-secondary .navbar-nav>.nav-item>.nav-link.disabled,.navbar.bg-secondary .navbar-nav>.nav>.nav-item>.nav-link.disabled {
    color: #d5d6d8 !important
}

.navbar.bg-secondary .navbar-nav .show>.nav-link,.navbar.bg-secondary .navbar-nav .active>.nav-link,.navbar.bg-secondary .navbar-nav .nav-link.show,.navbar.bg-secondary .navbar-nav .nav-link.active {
    color: #fff
}

.navbar.bg-secondary .navbar-toggler {
    color: #f3f4f4;
    border-color: rgba(255,255,255,.15)
}

.navbar.bg-secondary .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3Csvg width=\'14px\' height=\'11px\' viewBox=\'0 0 14 11\' version=\'1.1\' xmlns=\'http://www.w3.org/2000/svg\' xmlns:xlink=\'http://www.w3.org/1999/xlink\'%3E%3Cdefs%3E%3Cpath d=\'M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z\' id=\'path-1\'%3E%3C/path%3E%3C/defs%3E%3Cg id=\'💎-UI-Elements\' stroke=\'none\' stroke-width=\'1\' fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg id=\'12)-Navbar\' transform=\'translate(-1174.000000, -1290.000000)\'%3E%3Cg id=\'Group\' transform=\'translate(1174.000000, 1288.000000)\'%3E%3Cg id=\'Icon-Color\' transform=\'translate(0.000000, 2.000000)\'%3E%3Cuse fill=\'rgba(255, 255, 255, 0.8)\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3Cuse fill-opacity=\'0.1\' fill=\'rgba(255, 255, 255, 0.8)\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E")
}

.navbar.bg-secondary .navbar-text {
    color: #f3f4f4
}

.navbar.bg-secondary .navbar-text a {
    color: #fff
}

.navbar.bg-secondary .navbar-text a:hover,.navbar.bg-secondary .navbar-text a:focus {
    color: #fff
}

.navbar.bg-secondary hr {
    border-color: rgba(255,255,255,.15)
}

.navbar.bg-success {
    background-color: rgba(40,199,111,.95) !important;
    color: #d9f5e5
}

.navbar.bg-success .navbar-brand,.navbar.bg-success .navbar-brand a {
    color: #fff
}

.navbar.bg-success .navbar-brand:hover,.navbar.bg-success .navbar-brand:focus,.navbar.bg-success .navbar-brand a:hover,.navbar.bg-success .navbar-brand a:focus {
    color: #fff
}

.navbar.bg-success .navbar-search-wrapper .navbar-search-icon,.navbar.bg-success .navbar-search-wrapper .search-input {
    color: #d9f5e5
}

.navbar.bg-success .search-input-wrapper .search-input,.navbar.bg-success .search-input-wrapper .search-toggler {
    background-color: #28c76f !important;
    color: #d9f5e5
}

.navbar.bg-success .navbar-nav>.nav-link,.navbar.bg-success .navbar-nav>.nav-item>.nav-link,.navbar.bg-success .navbar-nav>.nav>.nav-item>.nav-link {
    color: #d9f5e5
}

.navbar.bg-success .navbar-nav>.nav-link:hover,.navbar.bg-success .navbar-nav>.nav-link:focus,.navbar.bg-success .navbar-nav>.nav-item>.nav-link:hover,.navbar.bg-success .navbar-nav>.nav-item>.nav-link:focus,.navbar.bg-success .navbar-nav>.nav>.nav-item>.nav-link:hover,.navbar.bg-success .navbar-nav>.nav>.nav-item>.nav-link:focus {
    color: #fff
}

.navbar.bg-success .navbar-nav>.nav-link.disabled,.navbar.bg-success .navbar-nav>.nav-item>.nav-link.disabled,.navbar.bg-success .navbar-nav>.nav>.nav-item>.nav-link.disabled {
    color: #92e3b6 !important
}

.navbar.bg-success .navbar-nav .show>.nav-link,.navbar.bg-success .navbar-nav .active>.nav-link,.navbar.bg-success .navbar-nav .nav-link.show,.navbar.bg-success .navbar-nav .nav-link.active {
    color: #fff
}

.navbar.bg-success .navbar-toggler {
    color: #d9f5e5;
    border-color: rgba(255,255,255,.15)
}

.navbar.bg-success .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3Csvg width=\'14px\' height=\'11px\' viewBox=\'0 0 14 11\' version=\'1.1\' xmlns=\'http://www.w3.org/2000/svg\' xmlns:xlink=\'http://www.w3.org/1999/xlink\'%3E%3Cdefs%3E%3Cpath d=\'M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z\' id=\'path-1\'%3E%3C/path%3E%3C/defs%3E%3Cg id=\'💎-UI-Elements\' stroke=\'none\' stroke-width=\'1\' fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg id=\'12)-Navbar\' transform=\'translate(-1174.000000, -1290.000000)\'%3E%3Cg id=\'Group\' transform=\'translate(1174.000000, 1288.000000)\'%3E%3Cg id=\'Icon-Color\' transform=\'translate(0.000000, 2.000000)\'%3E%3Cuse fill=\'rgba(255, 255, 255, 0.8)\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3Cuse fill-opacity=\'0.1\' fill=\'rgba(255, 255, 255, 0.8)\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E")
}

.navbar.bg-success .navbar-text {
    color: #d9f5e5
}

.navbar.bg-success .navbar-text a {
    color: #fff
}

.navbar.bg-success .navbar-text a:hover,.navbar.bg-success .navbar-text a:focus {
    color: #fff
}

.navbar.bg-success hr {
    border-color: rgba(255,255,255,.15)
}

.navbar.bg-info {
    background-color: rgba(0,207,232,.95) !important;
    color: #d4f7fb
}

.navbar.bg-info .navbar-brand,.navbar.bg-info .navbar-brand a {
    color: #fff
}

.navbar.bg-info .navbar-brand:hover,.navbar.bg-info .navbar-brand:focus,.navbar.bg-info .navbar-brand a:hover,.navbar.bg-info .navbar-brand a:focus {
    color: #fff
}

.navbar.bg-info .navbar-search-wrapper .navbar-search-icon,.navbar.bg-info .navbar-search-wrapper .search-input {
    color: #d4f7fb
}

.navbar.bg-info .search-input-wrapper .search-input,.navbar.bg-info .search-input-wrapper .search-toggler {
    background-color: #00cfe8 !important;
    color: #d4f7fb
}

.navbar.bg-info .navbar-nav>.nav-link,.navbar.bg-info .navbar-nav>.nav-item>.nav-link,.navbar.bg-info .navbar-nav>.nav>.nav-item>.nav-link {
    color: #d4f7fb
}

.navbar.bg-info .navbar-nav>.nav-link:hover,.navbar.bg-info .navbar-nav>.nav-link:focus,.navbar.bg-info .navbar-nav>.nav-item>.nav-link:hover,.navbar.bg-info .navbar-nav>.nav-item>.nav-link:focus,.navbar.bg-info .navbar-nav>.nav>.nav-item>.nav-link:hover,.navbar.bg-info .navbar-nav>.nav>.nav-item>.nav-link:focus {
    color: #fff
}

.navbar.bg-info .navbar-nav>.nav-link.disabled,.navbar.bg-info .navbar-nav>.nav-item>.nav-link.disabled,.navbar.bg-info .navbar-nav>.nav>.nav-item>.nav-link.disabled {
    color: #7fe7f3 !important
}

.navbar.bg-info .navbar-nav .show>.nav-link,.navbar.bg-info .navbar-nav .active>.nav-link,.navbar.bg-info .navbar-nav .nav-link.show,.navbar.bg-info .navbar-nav .nav-link.active {
    color: #fff
}

.navbar.bg-info .navbar-toggler {
    color: #d4f7fb;
    border-color: rgba(255,255,255,.15)
}

.navbar.bg-info .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3Csvg width=\'14px\' height=\'11px\' viewBox=\'0 0 14 11\' version=\'1.1\' xmlns=\'http://www.w3.org/2000/svg\' xmlns:xlink=\'http://www.w3.org/1999/xlink\'%3E%3Cdefs%3E%3Cpath d=\'M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z\' id=\'path-1\'%3E%3C/path%3E%3C/defs%3E%3Cg id=\'💎-UI-Elements\' stroke=\'none\' stroke-width=\'1\' fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg id=\'12)-Navbar\' transform=\'translate(-1174.000000, -1290.000000)\'%3E%3Cg id=\'Group\' transform=\'translate(1174.000000, 1288.000000)\'%3E%3Cg id=\'Icon-Color\' transform=\'translate(0.000000, 2.000000)\'%3E%3Cuse fill=\'rgba(255, 255, 255, 0.8)\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3Cuse fill-opacity=\'0.1\' fill=\'rgba(255, 255, 255, 0.8)\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E")
}

.navbar.bg-info .navbar-text {
    color: #d4f7fb
}

.navbar.bg-info .navbar-text a {
    color: #fff
}

.navbar.bg-info .navbar-text a:hover,.navbar.bg-info .navbar-text a:focus {
    color: #fff
}

.navbar.bg-info hr {
    border-color: rgba(255,255,255,.15)
}

.navbar.bg-warning {
    background-color: rgba(255,159,67,.95) !important;
    color: #fff3e8
}

.navbar.bg-warning .navbar-brand,.navbar.bg-warning .navbar-brand a {
    color: #fff
}

.navbar.bg-warning .navbar-brand:hover,.navbar.bg-warning .navbar-brand:focus,.navbar.bg-warning .navbar-brand a:hover,.navbar.bg-warning .navbar-brand a:focus {
    color: #fff
}

.navbar.bg-warning .navbar-search-wrapper .navbar-search-icon,.navbar.bg-warning .navbar-search-wrapper .search-input {
    color: #fff3e8
}

.navbar.bg-warning .search-input-wrapper .search-input,.navbar.bg-warning .search-input-wrapper .search-toggler {
    background-color: #ff9f43 !important;
    color: #fff3e8
}

.navbar.bg-warning .navbar-nav>.nav-link,.navbar.bg-warning .navbar-nav>.nav-item>.nav-link,.navbar.bg-warning .navbar-nav>.nav>.nav-item>.nav-link {
    color: #fff3e8
}

.navbar.bg-warning .navbar-nav>.nav-link:hover,.navbar.bg-warning .navbar-nav>.nav-link:focus,.navbar.bg-warning .navbar-nav>.nav-item>.nav-link:hover,.navbar.bg-warning .navbar-nav>.nav-item>.nav-link:focus,.navbar.bg-warning .navbar-nav>.nav>.nav-item>.nav-link:hover,.navbar.bg-warning .navbar-nav>.nav>.nav-item>.nav-link:focus {
    color: #fff
}

.navbar.bg-warning .navbar-nav>.nav-link.disabled,.navbar.bg-warning .navbar-nav>.nav-item>.nav-link.disabled,.navbar.bg-warning .navbar-nav>.nav>.nav-item>.nav-link.disabled {
    color: #ffd1a6 !important
}

.navbar.bg-warning .navbar-nav .show>.nav-link,.navbar.bg-warning .navbar-nav .active>.nav-link,.navbar.bg-warning .navbar-nav .nav-link.show,.navbar.bg-warning .navbar-nav .nav-link.active {
    color: #fff
}

.navbar.bg-warning .navbar-toggler {
    color: #fff3e8;
    border-color: rgba(255,255,255,.15)
}

.navbar.bg-warning .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3Csvg width=\'14px\' height=\'11px\' viewBox=\'0 0 14 11\' version=\'1.1\' xmlns=\'http://www.w3.org/2000/svg\' xmlns:xlink=\'http://www.w3.org/1999/xlink\'%3E%3Cdefs%3E%3Cpath d=\'M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z\' id=\'path-1\'%3E%3C/path%3E%3C/defs%3E%3Cg id=\'💎-UI-Elements\' stroke=\'none\' stroke-width=\'1\' fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg id=\'12)-Navbar\' transform=\'translate(-1174.000000, -1290.000000)\'%3E%3Cg id=\'Group\' transform=\'translate(1174.000000, 1288.000000)\'%3E%3Cg id=\'Icon-Color\' transform=\'translate(0.000000, 2.000000)\'%3E%3Cuse fill=\'rgba(255, 255, 255, 0.8)\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3Cuse fill-opacity=\'0.1\' fill=\'rgba(255, 255, 255, 0.8)\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E")
}

.navbar.bg-warning .navbar-text {
    color: #fff3e8
}

.navbar.bg-warning .navbar-text a {
    color: #fff
}

.navbar.bg-warning .navbar-text a:hover,.navbar.bg-warning .navbar-text a:focus {
    color: #fff
}

.navbar.bg-warning hr {
    border-color: rgba(255,255,255,.15)
}

.navbar.bg-danger {
    background-color: rgba(234,84,85,.95) !important;
    color: #fbdddd
}

.navbar.bg-danger .navbar-brand,.navbar.bg-danger .navbar-brand a {
    color: #fff
}

.navbar.bg-danger .navbar-brand:hover,.navbar.bg-danger .navbar-brand:focus,.navbar.bg-danger .navbar-brand a:hover,.navbar.bg-danger .navbar-brand a:focus {
    color: #fff
}

.navbar.bg-danger .navbar-search-wrapper .navbar-search-icon,.navbar.bg-danger .navbar-search-wrapper .search-input {
    color: #fbdddd
}

.navbar.bg-danger .search-input-wrapper .search-input,.navbar.bg-danger .search-input-wrapper .search-toggler {
    background-color: #ea5455 !important;
    color: #fbdddd
}

.navbar.bg-danger .navbar-nav>.nav-link,.navbar.bg-danger .navbar-nav>.nav-item>.nav-link,.navbar.bg-danger .navbar-nav>.nav>.nav-item>.nav-link {
    color: #fbdddd
}

.navbar.bg-danger .navbar-nav>.nav-link:hover,.navbar.bg-danger .navbar-nav>.nav-link:focus,.navbar.bg-danger .navbar-nav>.nav-item>.nav-link:hover,.navbar.bg-danger .navbar-nav>.nav-item>.nav-link:focus,.navbar.bg-danger .navbar-nav>.nav>.nav-item>.nav-link:hover,.navbar.bg-danger .navbar-nav>.nav>.nav-item>.nav-link:focus {
    color: #fff
}

.navbar.bg-danger .navbar-nav>.nav-link.disabled,.navbar.bg-danger .navbar-nav>.nav-item>.nav-link.disabled,.navbar.bg-danger .navbar-nav>.nav>.nav-item>.nav-link.disabled {
    color: #f4a6a7 !important
}

.navbar.bg-danger .navbar-nav .show>.nav-link,.navbar.bg-danger .navbar-nav .active>.nav-link,.navbar.bg-danger .navbar-nav .nav-link.show,.navbar.bg-danger .navbar-nav .nav-link.active {
    color: #fff
}

.navbar.bg-danger .navbar-toggler {
    color: #fbdddd;
    border-color: rgba(255,255,255,.15)
}

.navbar.bg-danger .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3Csvg width=\'14px\' height=\'11px\' viewBox=\'0 0 14 11\' version=\'1.1\' xmlns=\'http://www.w3.org/2000/svg\' xmlns:xlink=\'http://www.w3.org/1999/xlink\'%3E%3Cdefs%3E%3Cpath d=\'M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z\' id=\'path-1\'%3E%3C/path%3E%3C/defs%3E%3Cg id=\'💎-UI-Elements\' stroke=\'none\' stroke-width=\'1\' fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg id=\'12)-Navbar\' transform=\'translate(-1174.000000, -1290.000000)\'%3E%3Cg id=\'Group\' transform=\'translate(1174.000000, 1288.000000)\'%3E%3Cg id=\'Icon-Color\' transform=\'translate(0.000000, 2.000000)\'%3E%3Cuse fill=\'rgba(255, 255, 255, 0.8)\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3Cuse fill-opacity=\'0.1\' fill=\'rgba(255, 255, 255, 0.8)\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E")
}

.navbar.bg-danger .navbar-text {
    color: #fbdddd
}

.navbar.bg-danger .navbar-text a {
    color: #fff
}

.navbar.bg-danger .navbar-text a:hover,.navbar.bg-danger .navbar-text a:focus {
    color: #fff
}

.navbar.bg-danger hr {
    border-color: rgba(255,255,255,.15)
}

.navbar.bg-dark {
    background-color: rgba(75,75,75,.95) !important;
    color: #ccc
}

.navbar.bg-dark .navbar-brand,.navbar.bg-dark .navbar-brand a {
    color: #fff
}

.navbar.bg-dark .navbar-brand:hover,.navbar.bg-dark .navbar-brand:focus,.navbar.bg-dark .navbar-brand a:hover,.navbar.bg-dark .navbar-brand a:focus {
    color: #fff
}

.navbar.bg-dark .navbar-search-wrapper .navbar-search-icon,.navbar.bg-dark .navbar-search-wrapper .search-input {
    color: #ccc
}

.navbar.bg-dark .search-input-wrapper .search-input,.navbar.bg-dark .search-input-wrapper .search-toggler {
    background-color: #4b4b4b !important;
    color: #ccc
}

.navbar.bg-dark .navbar-nav>.nav-link,.navbar.bg-dark .navbar-nav>.nav-item>.nav-link,.navbar.bg-dark .navbar-nav>.nav>.nav-item>.nav-link {
    color: #ccc
}

.navbar.bg-dark .navbar-nav>.nav-link:hover,.navbar.bg-dark .navbar-nav>.nav-link:focus,.navbar.bg-dark .navbar-nav>.nav-item>.nav-link:hover,.navbar.bg-dark .navbar-nav>.nav-item>.nav-link:focus,.navbar.bg-dark .navbar-nav>.nav>.nav-item>.nav-link:hover,.navbar.bg-dark .navbar-nav>.nav>.nav-item>.nav-link:focus {
    color: #fff
}

.navbar.bg-dark .navbar-nav>.nav-link.disabled,.navbar.bg-dark .navbar-nav>.nav-item>.nav-link.disabled,.navbar.bg-dark .navbar-nav>.nav>.nav-item>.nav-link.disabled {
    color: #989898 !important
}

.navbar.bg-dark .navbar-nav .show>.nav-link,.navbar.bg-dark .navbar-nav .active>.nav-link,.navbar.bg-dark .navbar-nav .nav-link.show,.navbar.bg-dark .navbar-nav .nav-link.active {
    color: #fff
}

.navbar.bg-dark .navbar-toggler {
    color: #ccc;
    border-color: rgba(255,255,255,.15)
}

.navbar.bg-dark .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3Csvg width=\'14px\' height=\'11px\' viewBox=\'0 0 14 11\' version=\'1.1\' xmlns=\'http://www.w3.org/2000/svg\' xmlns:xlink=\'http://www.w3.org/1999/xlink\'%3E%3Cdefs%3E%3Cpath d=\'M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z\' id=\'path-1\'%3E%3C/path%3E%3C/defs%3E%3Cg id=\'💎-UI-Elements\' stroke=\'none\' stroke-width=\'1\' fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg id=\'12)-Navbar\' transform=\'translate(-1174.000000, -1290.000000)\'%3E%3Cg id=\'Group\' transform=\'translate(1174.000000, 1288.000000)\'%3E%3Cg id=\'Icon-Color\' transform=\'translate(0.000000, 2.000000)\'%3E%3Cuse fill=\'rgba(255, 255, 255, 0.8)\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3Cuse fill-opacity=\'0.1\' fill=\'rgba(255, 255, 255, 0.8)\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E")
}

.navbar.bg-dark .navbar-text {
    color: #ccc
}

.navbar.bg-dark .navbar-text a {
    color: #fff
}

.navbar.bg-dark .navbar-text a:hover,.navbar.bg-dark .navbar-text a:focus {
    color: #fff
}

.navbar.bg-dark hr {
    border-color: rgba(255,255,255,.15)
}

.navbar.bg-gray {
    background-color: rgba(246,246,247,.95) !important;
    color: #8d8a98
}

.navbar.bg-gray .navbar-brand,.navbar.bg-gray .navbar-brand a {
    color: #4b465c
}

.navbar.bg-gray .navbar-brand:hover,.navbar.bg-gray .navbar-brand:focus,.navbar.bg-gray .navbar-brand a:hover,.navbar.bg-gray .navbar-brand a:focus {
    color: #4b465c
}

.navbar.bg-gray .navbar-search-wrapper .navbar-search-icon,.navbar.bg-gray .navbar-search-wrapper .search-input {
    color: #8d8a98
}

.navbar.bg-gray .search-input-wrapper .search-input,.navbar.bg-gray .search-input-wrapper .search-toggler {
    background-color: rgba(75,70,92,.05) !important;
    color: #8d8a98
}

.navbar.bg-gray .navbar-nav>.nav-link,.navbar.bg-gray .navbar-nav>.nav-item>.nav-link,.navbar.bg-gray .navbar-nav>.nav>.nav-item>.nav-link {
    color: #8d8a98
}

.navbar.bg-gray .navbar-nav>.nav-link:hover,.navbar.bg-gray .navbar-nav>.nav-link:focus,.navbar.bg-gray .navbar-nav>.nav-item>.nav-link:hover,.navbar.bg-gray .navbar-nav>.nav-item>.nav-link:focus,.navbar.bg-gray .navbar-nav>.nav>.nav-item>.nav-link:hover,.navbar.bg-gray .navbar-nav>.nav>.nav-item>.nav-link:focus {
    color: #4b465c
}

.navbar.bg-gray .navbar-nav>.nav-link.disabled,.navbar.bg-gray .navbar-nav>.nav-item>.nav-link.disabled,.navbar.bg-gray .navbar-nav>.nav>.nav-item>.nav-link.disabled {
    color: #b7b5be !important
}

.navbar.bg-gray .navbar-nav .show>.nav-link,.navbar.bg-gray .navbar-nav .active>.nav-link,.navbar.bg-gray .navbar-nav .nav-link.show,.navbar.bg-gray .navbar-nav .nav-link.active {
    color: #4b465c
}

.navbar.bg-gray .navbar-toggler {
    color: #8d8a98;
    border-color: rgba(75,70,92,.0767423529)
}

.navbar.bg-gray .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3Csvg width=\'14px\' height=\'11px\' viewBox=\'0 0 14 11\' version=\'1.1\' xmlns=\'http://www.w3.org/2000/svg\' xmlns:xlink=\'http://www.w3.org/1999/xlink\'%3E%3Cdefs%3E%3Cpath d=\'M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z\' id=\'path-1\'%3E%3C/path%3E%3C/defs%3E%3Cg id=\'💎-UI-Elements\' stroke=\'none\' stroke-width=\'1\' fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg id=\'12)-Navbar\' transform=\'translate(-1174.000000, -1290.000000)\'%3E%3Cg id=\'Group\' transform=\'translate(1174.000000, 1288.000000)\'%3E%3Cg id=\'Icon-Color\' transform=\'translate(0.000000, 2.000000)\'%3E%3Cuse fill=\'rgba(75, 70, 92, 0.5)\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3Cuse fill-opacity=\'0.1\' fill=\'rgba(75, 70, 92, 0.5)\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E")
}

.navbar.bg-gray .navbar-text {
    color: #8d8a98
}

.navbar.bg-gray .navbar-text a {
    color: #4b465c
}

.navbar.bg-gray .navbar-text a:hover,.navbar.bg-gray .navbar-text a:focus {
    color: #4b465c
}

.navbar.bg-gray hr {
    border-color: rgba(75,70,92,.0767423529)
}

.navbar.bg-white {
    background-color: rgba(255,255,255,.95) !important;
    color: #6f6b7d
}

.navbar.bg-white .navbar-brand,.navbar.bg-white .navbar-brand a {
    color: #5d596c
}

.navbar.bg-white .navbar-brand:hover,.navbar.bg-white .navbar-brand:focus,.navbar.bg-white .navbar-brand a:hover,.navbar.bg-white .navbar-brand a:focus {
    color: #5d596c
}

.navbar.bg-white .navbar-search-wrapper .navbar-search-icon,.navbar.bg-white .navbar-search-wrapper .search-input {
    color: #6f6b7d
}

.navbar.bg-white .search-input-wrapper .search-input,.navbar.bg-white .search-input-wrapper .search-toggler {
    background-color: #fff !important;
    color: #6f6b7d
}

.navbar.bg-white .navbar-nav>.nav-link,.navbar.bg-white .navbar-nav>.nav-item>.nav-link,.navbar.bg-white .navbar-nav>.nav>.nav-item>.nav-link {
    color: #6f6b7d
}

.navbar.bg-white .navbar-nav>.nav-link:hover,.navbar.bg-white .navbar-nav>.nav-link:focus,.navbar.bg-white .navbar-nav>.nav-item>.nav-link:hover,.navbar.bg-white .navbar-nav>.nav-item>.nav-link:focus,.navbar.bg-white .navbar-nav>.nav>.nav-item>.nav-link:hover,.navbar.bg-white .navbar-nav>.nav>.nav-item>.nav-link:focus {
    color: #5d596c
}

.navbar.bg-white .navbar-nav>.nav-link.disabled,.navbar.bg-white .navbar-nav>.nav-item>.nav-link.disabled,.navbar.bg-white .navbar-nav>.nav>.nav-item>.nav-link.disabled {
    color: #a9a6b1 !important
}

.navbar.bg-white .navbar-nav .show>.nav-link,.navbar.bg-white .navbar-nav .active>.nav-link,.navbar.bg-white .navbar-nav .nav-link.show,.navbar.bg-white .navbar-nav .nav-link.active {
    color: #5d596c
}

.navbar.bg-white .navbar-toggler {
    color: #6f6b7d;
    border-color: rgba(93,89,108,.075)
}

.navbar.bg-white .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3Csvg width=\'14px\' height=\'11px\' viewBox=\'0 0 14 11\' version=\'1.1\' xmlns=\'http://www.w3.org/2000/svg\' xmlns:xlink=\'http://www.w3.org/1999/xlink\'%3E%3Cdefs%3E%3Cpath d=\'M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z\' id=\'path-1\'%3E%3C/path%3E%3C/defs%3E%3Cg id=\'💎-UI-Elements\' stroke=\'none\' stroke-width=\'1\' fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg id=\'12)-Navbar\' transform=\'translate(-1174.000000, -1290.000000)\'%3E%3Cg id=\'Group\' transform=\'translate(1174.000000, 1288.000000)\'%3E%3Cg id=\'Icon-Color\' transform=\'translate(0.000000, 2.000000)\'%3E%3Cuse fill=\'rgba(75, 70, 92, 0.5)\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3Cuse fill-opacity=\'0.1\' fill=\'rgba(75, 70, 92, 0.5)\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E")
}

.navbar.bg-white .navbar-text {
    color: #6f6b7d
}

.navbar.bg-white .navbar-text a {
    color: #5d596c
}

.navbar.bg-white .navbar-text a:hover,.navbar.bg-white .navbar-text a:focus {
    color: #5d596c
}

.navbar.bg-white hr {
    border-color: rgba(93,89,108,.075)
}

.navbar.bg-light {
    background-color: rgba(223,223,227,.95) !important;
    color: #6f6b7d
}

.navbar.bg-light .navbar-brand,.navbar.bg-light .navbar-brand a {
    color: #5d596c
}

.navbar.bg-light .navbar-brand:hover,.navbar.bg-light .navbar-brand:focus,.navbar.bg-light .navbar-brand a:hover,.navbar.bg-light .navbar-brand a:focus {
    color: #5d596c
}

.navbar.bg-light .navbar-search-wrapper .navbar-search-icon,.navbar.bg-light .navbar-search-wrapper .search-input {
    color: #6f6b7d
}

.navbar.bg-light .search-input-wrapper .search-input,.navbar.bg-light .search-input-wrapper .search-toggler {
    background-color: #dfdfe3 !important;
    color: #6f6b7d
}

.navbar.bg-light .navbar-nav>.nav-link,.navbar.bg-light .navbar-nav>.nav-item>.nav-link,.navbar.bg-light .navbar-nav>.nav>.nav-item>.nav-link {
    color: #6f6b7d
}

.navbar.bg-light .navbar-nav>.nav-link:hover,.navbar.bg-light .navbar-nav>.nav-link:focus,.navbar.bg-light .navbar-nav>.nav-item>.nav-link:hover,.navbar.bg-light .navbar-nav>.nav-item>.nav-link:focus,.navbar.bg-light .navbar-nav>.nav>.nav-item>.nav-link:hover,.navbar.bg-light .navbar-nav>.nav>.nav-item>.nav-link:focus {
    color: #5d596c
}

.navbar.bg-light .navbar-nav>.nav-link.disabled,.navbar.bg-light .navbar-nav>.nav-item>.nav-link.disabled,.navbar.bg-light .navbar-nav>.nav>.nav-item>.nav-link.disabled {
    color: #9c99a6 !important
}

.navbar.bg-light .navbar-nav .show>.nav-link,.navbar.bg-light .navbar-nav .active>.nav-link,.navbar.bg-light .navbar-nav .nav-link.show,.navbar.bg-light .navbar-nav .nav-link.active {
    color: #5d596c
}

.navbar.bg-light .navbar-toggler {
    color: #6f6b7d;
    border-color: rgba(93,89,108,.081185098)
}

.navbar.bg-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3Csvg width=\'14px\' height=\'11px\' viewBox=\'0 0 14 11\' version=\'1.1\' xmlns=\'http://www.w3.org/2000/svg\' xmlns:xlink=\'http://www.w3.org/1999/xlink\'%3E%3Cdefs%3E%3Cpath d=\'M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z\' id=\'path-1\'%3E%3C/path%3E%3C/defs%3E%3Cg id=\'💎-UI-Elements\' stroke=\'none\' stroke-width=\'1\' fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg id=\'12)-Navbar\' transform=\'translate(-1174.000000, -1290.000000)\'%3E%3Cg id=\'Group\' transform=\'translate(1174.000000, 1288.000000)\'%3E%3Cg id=\'Icon-Color\' transform=\'translate(0.000000, 2.000000)\'%3E%3Cuse fill=\'rgba(75, 70, 92, 0.5)\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3Cuse fill-opacity=\'0.1\' fill=\'rgba(75, 70, 92, 0.5)\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E")
}

.navbar.bg-light .navbar-text {
    color: #6f6b7d
}

.navbar.bg-light .navbar-text a {
    color: #5d596c
}

.navbar.bg-light .navbar-text a:hover,.navbar.bg-light .navbar-text a:focus {
    color: #5d596c
}

.navbar.bg-light hr {
    border-color: rgba(93,89,108,.081185098)
}

.navbar.bg-lighter {
    background-color: rgba(250,249,250,.95) !important;
    color: #6f6b7d
}

.navbar.bg-lighter .navbar-brand,.navbar.bg-lighter .navbar-brand a {
    color: #5d596c
}

.navbar.bg-lighter .navbar-brand:hover,.navbar.bg-lighter .navbar-brand:focus,.navbar.bg-lighter .navbar-brand a:hover,.navbar.bg-lighter .navbar-brand a:focus {
    color: #5d596c
}

.navbar.bg-lighter .navbar-search-wrapper .navbar-search-icon,.navbar.bg-lighter .navbar-search-wrapper .search-input {
    color: #6f6b7d
}

.navbar.bg-lighter .search-input-wrapper .search-input,.navbar.bg-lighter .search-input-wrapper .search-toggler {
    background-color: rgba(75,70,92,.03) !important;
    color: #6f6b7d
}

.navbar.bg-lighter .navbar-nav>.nav-link,.navbar.bg-lighter .navbar-nav>.nav-item>.nav-link,.navbar.bg-lighter .navbar-nav>.nav>.nav-item>.nav-link {
    color: #6f6b7d
}

.navbar.bg-lighter .navbar-nav>.nav-link:hover,.navbar.bg-lighter .navbar-nav>.nav-link:focus,.navbar.bg-lighter .navbar-nav>.nav-item>.nav-link:hover,.navbar.bg-lighter .navbar-nav>.nav-item>.nav-link:focus,.navbar.bg-lighter .navbar-nav>.nav>.nav-item>.nav-link:hover,.navbar.bg-lighter .navbar-nav>.nav>.nav-item>.nav-link:focus {
    color: #5d596c
}

.navbar.bg-lighter .navbar-nav>.nav-link.disabled,.navbar.bg-lighter .navbar-nav>.nav-item>.nav-link.disabled,.navbar.bg-lighter .navbar-nav>.nav>.nav-item>.nav-link.disabled {
    color: #a7a4af !important
}

.navbar.bg-lighter .navbar-nav .show>.nav-link,.navbar.bg-lighter .navbar-nav .active>.nav-link,.navbar.bg-lighter .navbar-nav .nav-link.show,.navbar.bg-lighter .navbar-nav .nav-link.active {
    color: #5d596c
}

.navbar.bg-lighter .navbar-toggler {
    color: #6f6b7d;
    border-color: rgba(93,89,108,.0760954902)
}

.navbar.bg-lighter .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3Csvg width=\'14px\' height=\'11px\' viewBox=\'0 0 14 11\' version=\'1.1\' xmlns=\'http://www.w3.org/2000/svg\' xmlns:xlink=\'http://www.w3.org/1999/xlink\'%3E%3Cdefs%3E%3Cpath d=\'M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z\' id=\'path-1\'%3E%3C/path%3E%3C/defs%3E%3Cg id=\'💎-UI-Elements\' stroke=\'none\' stroke-width=\'1\' fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg id=\'12)-Navbar\' transform=\'translate(-1174.000000, -1290.000000)\'%3E%3Cg id=\'Group\' transform=\'translate(1174.000000, 1288.000000)\'%3E%3Cg id=\'Icon-Color\' transform=\'translate(0.000000, 2.000000)\'%3E%3Cuse fill=\'rgba(75, 70, 92, 0.5)\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3Cuse fill-opacity=\'0.1\' fill=\'rgba(75, 70, 92, 0.5)\' xlink:href=\'%23path-1\'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E")
}

.navbar.bg-lighter .navbar-text {
    color: #6f6b7d
}

.navbar.bg-lighter .navbar-text a {
    color: #5d596c
}

.navbar.bg-lighter .navbar-text a:hover,.navbar.bg-lighter .navbar-text a:focus {
    color: #5d596c
}

.navbar.bg-lighter hr {
    border-color: rgba(93,89,108,.0760954902)
}

.layout-footer-fixed .layout-horizontal .footer.bg-secondary {
    background-color: #a8aaae !important;
    color: #f3f4f4
}

.layout-footer-fixed .layout-wrapper:not(.layout-horizontal) .footer.bg-secondary .footer-container {
    background-color: #a8aaae !important;
    color: #f3f4f4
}

.footer.bg-secondary .footer-link {
    color: #f3f4f4
}

.footer.bg-secondary .footer-link:hover,.footer.bg-secondary .footer-link:focus {
    color: #fff
}

.footer.bg-secondary .footer-link.disabled {
    color: #d5d6d8 !important
}

.footer.bg-secondary .footer-text {
    color: #fff
}

.footer.bg-secondary .show>.footer-link,.footer.bg-secondary .active>.footer-link,.footer.bg-secondary .footer-link.show,.footer.bg-secondary .footer-link.active {
    color: #fff
}

.footer.bg-secondary hr {
    border-color: rgba(255,255,255,.15)
}

.layout-footer-fixed .layout-horizontal .footer.bg-success {
    background-color: #28c76f !important;
    color: #d9f5e5
}

.layout-footer-fixed .layout-wrapper:not(.layout-horizontal) .footer.bg-success .footer-container {
    background-color: #28c76f !important;
    color: #d9f5e5
}

.footer.bg-success .footer-link {
    color: #d9f5e5
}

.footer.bg-success .footer-link:hover,.footer.bg-success .footer-link:focus {
    color: #fff
}

.footer.bg-success .footer-link.disabled {
    color: #92e3b6 !important
}

.footer.bg-success .footer-text {
    color: #fff
}

.footer.bg-success .show>.footer-link,.footer.bg-success .active>.footer-link,.footer.bg-success .footer-link.show,.footer.bg-success .footer-link.active {
    color: #fff
}

.footer.bg-success hr {
    border-color: rgba(255,255,255,.15)
}

.layout-footer-fixed .layout-horizontal .footer.bg-info {
    background-color: #00cfe8 !important;
    color: #d4f7fb
}

.layout-footer-fixed .layout-wrapper:not(.layout-horizontal) .footer.bg-info .footer-container {
    background-color: #00cfe8 !important;
    color: #d4f7fb
}

.footer.bg-info .footer-link {
    color: #d4f7fb
}

.footer.bg-info .footer-link:hover,.footer.bg-info .footer-link:focus {
    color: #fff
}

.footer.bg-info .footer-link.disabled {
    color: #7fe7f3 !important
}

.footer.bg-info .footer-text {
    color: #fff
}

.footer.bg-info .show>.footer-link,.footer.bg-info .active>.footer-link,.footer.bg-info .footer-link.show,.footer.bg-info .footer-link.active {
    color: #fff
}

.footer.bg-info hr {
    border-color: rgba(255,255,255,.15)
}

.layout-footer-fixed .layout-horizontal .footer.bg-warning {
    background-color: #ff9f43 !important;
    color: #fff3e8
}

.layout-footer-fixed .layout-wrapper:not(.layout-horizontal) .footer.bg-warning .footer-container {
    background-color: #ff9f43 !important;
    color: #fff3e8
}

.footer.bg-warning .footer-link {
    color: #fff3e8
}

.footer.bg-warning .footer-link:hover,.footer.bg-warning .footer-link:focus {
    color: #fff
}

.footer.bg-warning .footer-link.disabled {
    color: #ffd1a6 !important
}

.footer.bg-warning .footer-text {
    color: #fff
}

.footer.bg-warning .show>.footer-link,.footer.bg-warning .active>.footer-link,.footer.bg-warning .footer-link.show,.footer.bg-warning .footer-link.active {
    color: #fff
}

.footer.bg-warning hr {
    border-color: rgba(255,255,255,.15)
}

.layout-footer-fixed .layout-horizontal .footer.bg-danger {
    background-color: #ea5455 !important;
    color: #fbdddd
}

.layout-footer-fixed .layout-wrapper:not(.layout-horizontal) .footer.bg-danger .footer-container {
    background-color: #ea5455 !important;
    color: #fbdddd
}

.footer.bg-danger .footer-link {
    color: #fbdddd
}

.footer.bg-danger .footer-link:hover,.footer.bg-danger .footer-link:focus {
    color: #fff
}

.footer.bg-danger .footer-link.disabled {
    color: #f4a6a7 !important
}

.footer.bg-danger .footer-text {
    color: #fff
}

.footer.bg-danger .show>.footer-link,.footer.bg-danger .active>.footer-link,.footer.bg-danger .footer-link.show,.footer.bg-danger .footer-link.active {
    color: #fff
}

.footer.bg-danger hr {
    border-color: rgba(255,255,255,.15)
}

.layout-footer-fixed .layout-horizontal .footer.bg-dark {
    background-color: #4b4b4b !important;
    color: #ccc
}

.layout-footer-fixed .layout-wrapper:not(.layout-horizontal) .footer.bg-dark .footer-container {
    background-color: #4b4b4b !important;
    color: #ccc
}

.footer.bg-dark .footer-link {
    color: #ccc
}

.footer.bg-dark .footer-link:hover,.footer.bg-dark .footer-link:focus {
    color: #fff
}

.footer.bg-dark .footer-link.disabled {
    color: #989898 !important
}

.footer.bg-dark .footer-text {
    color: #fff
}

.footer.bg-dark .show>.footer-link,.footer.bg-dark .active>.footer-link,.footer.bg-dark .footer-link.show,.footer.bg-dark .footer-link.active {
    color: #fff
}

.footer.bg-dark hr {
    border-color: rgba(255,255,255,.15)
}

.layout-footer-fixed .layout-horizontal .footer.bg-gray {
    background-color: #f6f6f7 !important;
    color: #8d8a98
}

.layout-footer-fixed .layout-wrapper:not(.layout-horizontal) .footer.bg-gray .footer-container {
    background-color: #f6f6f7 !important;
    color: #8d8a98
}

.footer.bg-gray .footer-link {
    color: #8d8a98
}

.footer.bg-gray .footer-link:hover,.footer.bg-gray .footer-link:focus {
    color: #4b465c
}

.footer.bg-gray .footer-link.disabled {
    color: #b7b5be !important
}

.footer.bg-gray .footer-text {
    color: #4b465c
}

.footer.bg-gray .show>.footer-link,.footer.bg-gray .active>.footer-link,.footer.bg-gray .footer-link.show,.footer.bg-gray .footer-link.active {
    color: #4b465c
}

.footer.bg-gray hr {
    border-color: rgba(75,70,92,.0767423529)
}

.layout-footer-fixed .layout-horizontal .footer.bg-white {
    background-color: #fff !important;
    color: #6f6b7d
}

.layout-footer-fixed .layout-wrapper:not(.layout-horizontal) .footer.bg-white .footer-container {
    background-color: #fff !important;
    color: #6f6b7d
}

.footer.bg-white .footer-link {
    color: #6f6b7d
}

.footer.bg-white .footer-link:hover,.footer.bg-white .footer-link:focus {
    color: #5d596c
}

.footer.bg-white .footer-link.disabled {
    color: #a9a6b1 !important
}

.footer.bg-white .footer-text {
    color: #5d596c
}

.footer.bg-white .show>.footer-link,.footer.bg-white .active>.footer-link,.footer.bg-white .footer-link.show,.footer.bg-white .footer-link.active {
    color: #5d596c
}

.footer.bg-white hr {
    border-color: rgba(93,89,108,.075)
}

.layout-footer-fixed .layout-horizontal .footer.bg-light {
    background-color: #dfdfe3 !important;
    color: #6f6b7d
}

.layout-footer-fixed .layout-wrapper:not(.layout-horizontal) .footer.bg-light .footer-container {
    background-color: #dfdfe3 !important;
    color: #6f6b7d
}

.footer.bg-light .footer-link {
    color: #6f6b7d
}

.footer.bg-light .footer-link:hover,.footer.bg-light .footer-link:focus {
    color: #5d596c
}

.footer.bg-light .footer-link.disabled {
    color: #9c99a6 !important
}

.footer.bg-light .footer-text {
    color: #5d596c
}

.footer.bg-light .show>.footer-link,.footer.bg-light .active>.footer-link,.footer.bg-light .footer-link.show,.footer.bg-light .footer-link.active {
    color: #5d596c
}

.footer.bg-light hr {
    border-color: rgba(93,89,108,.081185098)
}

.layout-footer-fixed .layout-horizontal .footer.bg-lighter {
    background-color: #faf9fa !important;
    color: #6f6b7d
}

.layout-footer-fixed .layout-wrapper:not(.layout-horizontal) .footer.bg-lighter .footer-container {
    background-color: #faf9fa !important;
    color: #6f6b7d
}

.footer.bg-lighter .footer-link {
    color: #6f6b7d
}

.footer.bg-lighter .footer-link:hover,.footer.bg-lighter .footer-link:focus {
    color: #5d596c
}

.footer.bg-lighter .footer-link.disabled {
    color: #a7a4af !important
}

.footer.bg-lighter .footer-text {
    color: #5d596c
}

.footer.bg-lighter .show>.footer-link,.footer.bg-lighter .active>.footer-link,.footer.bg-lighter .footer-link.show,.footer.bg-lighter .footer-link.active {
    color: #5d596c
}

.footer.bg-lighter hr {
    border-color: rgba(93,89,108,.0760954902)
}
' );
		?>