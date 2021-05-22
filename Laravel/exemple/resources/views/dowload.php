<!DOCTYPE html>
<html lang="fr" >
<head>
  <meta charset="UTF-8">
  <title>Max Music</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width" /><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,300,700'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">
<style>
    
h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6, p, .navbar, .brand, a, .td-name, td, button, input, select, textarea {
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-family: "Montserrat", "Helvetica", Arial, sans-serif;
  font-weight: 300;
}

h1, .h1, h2, .h2, h3, .h3, h4, .h4 {
  margin: 30px 0 0;
}

h1, .h1 {
  font-size: 3.6em;
}

h2, .h2 {
  font-size: 2.8em;
}

h3, .h3 {
  font-size: 1.825em;
  line-height: 1.4;
  margin: 20px 0 0px;
}

h4, .h4 {
  font-size: 1.6em;
  line-height: 1.2em;
}

h5, .h5 {
  font-size: 1.35em;
  line-height: 1.4em;
}

h6, .h6 {
  font-size: 0.9em;
  font-weight: 600;
  text-transform: uppercase;
  line-height: 1.5em;
}

p {
  font-size: 15px;
  line-height: 1.5em;
  margin-bottom: 5px;
}

h1 small, h2 small, h3 small, h4 small, h5 small, h6 small, .h1 small, .h2 small, .h3 small, .h4 small, .h5 small, .h6 small, h1 .small, h2 .small, h3 .small, h4 .small, h5 .small, h6 .small, .h1 .small, .h2 .small, .h3 .small, .h4 .small, .h5 .small, .h6 .small {
  color: #9A9A9A;
  line-height: 1.5em;
}

h1 small, h2 small, h3 small, h1 .small, h2 .small, h3 .small {
  font-size: 60%;
}

.title,
.card-title,
.info-title,
.footer-brand,
.footer-big h5,
.footer-big h4,
.media .media-heading {
  font-family: "Montserrat", "Helvetica", Arial, sans-serif;
}
.title,
.title a,
.card-title,
.card-title a,
.info-title,
.info-title a,
.footer-brand,
.footer-brand a,
.footer-big h5,
.footer-big h5 a,
.footer-big h4,
.footer-big h4 a,
.media .media-heading,
.media .media-heading a {
  color: #333333;
  text-decoration: none;
}

.title-uppercase {
  text-transform: uppercase;
}

.description {
  color: #9A9A9A;
}

blockquote small {
  font-style: normal;
}

.text-muted {
  color: #DDDDDD;
}

.text-primary, .text-primary:hover {
  color: #51cbce !important;
}

.text-info, .text-info:hover {
  color: #51bcda !important;
}

.text-success, .text-success:hover {
  color: #6bd098 !important;
}

.text-warning, .text-warning:hover {
  color: #fbc658 !important;
}

.text-danger, .text-danger:hover {
  color: #f5593d !important;
}

.glyphicon {
  line-height: 1;
}

.heart {
  color: #EB5E28;
  animation: heathing 1s ease infinite;
}

@keyframes heathing {
  0% {
    transform: scale(0.75);
  }
  20% {
    transform: scale(1);
  }
  40% {
    transform: scale(0.75);
  }
  60% {
    transform: scale(1);
  }
  80% {
    transform: scale(0.75);
  }
  100% {
    transform: scale(0.75);
  }
}
.footer .credits,
.footer-nav {
  line-height: 85px;
}

.footer .btn {
  margin-bottom: 0;
}

.blockquote {
  border-left: 0 none;
  border-bottom: 1px solid #CCC5B9;
  border-top: 1px solid #CCC5B9;
  font-weight: 300;
  margin: 15px 0 10px;
  text-align: center;
}

.title {
  margin-top: 30px;
  margin-bottom: 25px;
  min-height: 32px;
}

.title.text-center {
  margin-bottom: 50px;
}

/*     General overwrite     */
body {
  color: #66615b;
  font-size: 14px;
  font-weight: 300;
  font-family: 'Montserrat', "Helvetica", Arial, sans-serif;
}

a {
  color: #51bcda;
}
a:hover, a:focus {
  color: #2ba9cd;
  text-decoration: none;
}

hr {
  border-color: #F1EAE0;
}

.icon {
  fill: #66615b;
}

.fa-base {
  font-size: 1.25em !important;
}

a:focus, a:active,
button::-moz-focus-inner,
input[type="reset"]::-moz-focus-inner,
input[type="button"]::-moz-focus-inner,
input[type="submit"]::-moz-focus-inner,
select::-moz-focus-inner,
input[type="file"] > input[type="button"]::-moz-focus-inner {
  outline: 0;
}

.ui-slider-handle:focus,
.navbar-toggle {
  outline: 0 !important;
}

/*           Animations              */
.form-control,
.input-group-addon,
.tagsinput,
.navbar,
.navbar .alert,
.carousel-control.right,
.carousel-control.left {
  -webkit-transition: all 300ms linear;
  -moz-transition: all 300ms linear;
  -o-transition: all 300ms linear;
  -ms-transition: all 300ms linear;
  transition: all 300ms linear;
}

.tagsinput .tag,
.tagsinput-remove-link,
.filter,
.btn-hover,
[data-toggle="collapse"] i,
.animation-transition-fast,
.dropdown-menu .dropdown-item {
  -webkit-transition: all 150ms linear;
  -moz-transition: all 150ms linear;
  -o-transition: all 150ms linear;
  -ms-transition: all 150ms linear;
  transition: all 150ms linear;
}

.btn-morphing .fa,
.btn-morphing .circle,
.gsdk-collapse {
  -webkit-transition: all 300ms linear;
  -moz-transition: all 300ms linear;
  -o-transition: all 300ms linear;
  -ms-transition: all 300ms linear;
  transition: all 300ms linear;
}

.fa {
  width: 18px;
  text-align: center;
}

.margin-top {
  margin-top: 50px;
}

.iframe-container iframe {
  box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

/*       CT colors          */
.ct-blue {
  color: #51cbce;
}

.ct-azure {
  color: #51bcda;
}

.ct-green {
  color: #6bd098;
}

.ct-orange {
  color: #fbc658;
}

.ct-red {
  color: #f5593d;
}

.pagination .page-item .page-link .fa {
  width: auto;
  font-weight: 600;
}

.bg-primary {
  background-color: #6dd3d6 !important;
}

.bg-info {
  background-color: #6ec7e0 !important;
}

.bg-success {
  background-color: #86d9ab !important;
}

.bg-warning {
  background-color: #fcd27b !important;
}

.bg-danger {
  background-color: #f7765f !important;
}

.navbar-transparent {
  background-color: transparent !important;
  border-bottom: 1px solid transparent;
}

.btn {
  box-sizing: border-box;
  border-width: 2px;
  font-size: 12px;
  font-weight: 600;
  padding: 0.5rem 18px;
  line-height: 1.75;
  cursor: pointer;
  text-transform: uppercase;
  background-color: #66615B;
  border-color: #66615B;
  color: #FFFFFF;
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transition: all 150ms linear;
  -moz-transition: all 150ms linear;
  -o-transition: all 150ms linear;
  -ms-transition: all 150ms linear;
  transition: all 150ms linear;
}
.btn.btn-border, .btn.btn-link {
  background-color: transparent;
}
.btn:hover, .btn:focus, .btn:active, .btn.active, .show > .btn.dropdown-toggle {
  background-color: #403D39;
  color: #FFFFFF;
  border-color: #403D39;
}
.btn .caret {
  border-top-color: #FFFFFF;
}
.btn.btn-link {
  color: #66615B;
}
.btn.btn-link:hover, .btn.btn-link:focus, .btn.btn-link:active, .btn.btn-link.active, .open > .btn.btn-link.dropdown-toggle {
  background-color: transparent;
  color: #403D39;
}
.btn.btn-link .caret {
  border-top-color: #66615B;
}
.btn .caret {
  border-top-color: #FFFFFF;
}
.btn:hover, .btn:focus {
  outline: 0 !important;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn:active, .btn.active, .open > .btn.dropdown-toggle {
  -webkit-box-shadow: none;
  box-shadow: none;
  outline: 0 !important;
}
.btn[class*="btn-outline-"] {
  background-image: none;
  background-color: transparent;
}

.btn-just-icon {
  border-radius: 50px;
  height: 40px;
  width: 40px;
  min-width: 40px;
  padding: 8px;
}
.btn-just-icon.btn-sm {
  padding: 4px !important;
}
.btn-just-icon i {
  font-size: 16px;
  padding: 2px 0px;
}

.upgrade-pro .btn {
  margin-top: 30px;
}

.btn-link.btn-just-icon {
  padding: 8px;
}

.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
  margin-left: -2px;
}

.btn-primary {
  background-color: #51cbce;
  border-color: #51cbce;
  color: #FFFFFF;
  opacity: 1;
  filter: alpha(opacity=100);
}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .show > .btn-primary.dropdown-toggle {
  background-color: #34b5b8;
  color: #FFFFFF;
  border-color: #34b5b8;
}
.btn-primary .caret {
  border-top-color: #FFFFFF;
}
.btn-primary.btn-link {
  color: #51cbce;
}
.btn-primary.btn-link:hover, .btn-primary.btn-link:focus, .btn-primary.btn-link:active, .btn-primary.btn-link.active, .open > .btn-primary.btn-link.dropdown-toggle {
  background-color: transparent;
  color: #34b5b8;
}
.btn-primary.btn-link .caret {
  border-top-color: #51cbce;
}
.btn-primary .caret {
  border-top-color: #FFFFFF;
}

.btn-success {
  background-color: #6bd098;
  border-color: #6bd098;
  color: #FFFFFF;
  opacity: 1;
  filter: alpha(opacity=100);
}
.btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active, .show > .btn-success.dropdown-toggle {
  background-color: #44c47d;
  color: #FFFFFF;
  border-color: #44c47d;
}
.btn-success .caret {
  border-top-color: #FFFFFF;
}
.btn-success.btn-link {
  color: #6bd098;
}
.btn-success.btn-link:hover, .btn-success.btn-link:focus, .btn-success.btn-link:active, .btn-success.btn-link.active, .open > .btn-success.btn-link.dropdown-toggle {
  background-color: transparent;
  color: #44c47d;
}
.btn-success.btn-link .caret {
  border-top-color: #6bd098;
}
.btn-success .caret {
  border-top-color: #FFFFFF;
}

.btn-info {
  background-color: #51bcda;
  border-color: #51bcda;
  color: #FFFFFF;
  opacity: 1;
  filter: alpha(opacity=100);
}
.btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.active, .show > .btn-info.dropdown-toggle {
  background-color: #2ba9cd;
  color: #FFFFFF;
  border-color: #2ba9cd;
}
.btn-info .caret {
  border-top-color: #FFFFFF;
}
.btn-info.btn-link {
  color: #51bcda;
}
.btn-info.btn-link:hover, .btn-info.btn-link:focus, .btn-info.btn-link:active, .btn-info.btn-link.active, .open > .btn-info.btn-link.dropdown-toggle {
  background-color: transparent;
  color: #2ba9cd;
}
.btn-info.btn-link .caret {
  border-top-color: #51bcda;
}
.btn-info .caret {
  border-top-color: #FFFFFF;
}

.btn-warning {
  background-color: #fbc658;
  border-color: #fbc658;
  color: #FFFFFF;
  opacity: 1;
  filter: alpha(opacity=100);
}
.btn-warning:hover, .btn-warning:focus, .btn-warning:active, .btn-warning.active, .show > .btn-warning.dropdown-toggle {
  background-color: #fab526;
  color: #FFFFFF;
  border-color: #fab526;
}
.btn-warning .caret {
  border-top-color: #FFFFFF;
}
.btn-warning.btn-link {
  color: #fbc658;
}
.btn-warning.btn-link:hover, .btn-warning.btn-link:focus, .btn-warning.btn-link:active, .btn-warning.btn-link.active, .open > .btn-warning.btn-link.dropdown-toggle {
  background-color: transparent;
  color: #fab526;
}
.btn-warning.btn-link .caret {
  border-top-color: #fbc658;
}
.btn-warning .caret {
  border-top-color: #FFFFFF;
}

.btn-danger {
  background-color: #f5593d;
  border-color: #f5593d;
  color: #FFFFFF;
  opacity: 1;
  filter: alpha(opacity=100);
}
.btn-danger:hover, .btn-danger:focus, .btn-danger:active, .btn-danger.active, .show > .btn-danger.dropdown-toggle {
  background-color: #f33816;
  color: #FFFFFF;
  border-color: #f33816;
}
.btn-danger .caret {
  border-top-color: #FFFFFF;
}
.btn-danger.btn-link {
  color: #f5593d;
}
.btn-danger.btn-link:hover, .btn-danger.btn-link:focus, .btn-danger.btn-link:active, .btn-danger.btn-link.active, .open > .btn-danger.btn-link.dropdown-toggle {
  background-color: transparent;
  color: #f33816;
}
.btn-danger.btn-link .caret {
  border-top-color: #f5593d;
}
.btn-danger .caret {
  border-top-color: #FFFFFF;
}

.btn-neutral {
  background-color: #FFFFFF;
  border-color: #FFFFFF;
  color: #FFFFFF;
  opacity: 1;
  filter: alpha(opacity=100);
}
.btn-neutral:hover, .btn-neutral:focus, .btn-neutral:active, .btn-neutral.active, .show > .btn-neutral.dropdown-toggle {
  background-color: #403D39;
  color: #FFFFFF;
  border-color: #403D39;
}
.btn-neutral .caret {
  border-top-color: #FFFFFF;
}
.btn-neutral.btn-link {
  color: #FFFFFF;
}
.btn-neutral.btn-link:hover, .btn-neutral.btn-link:focus, .btn-neutral.btn-link:active, .btn-neutral.btn-link.active, .open > .btn-neutral.btn-link.dropdown-toggle {
  background-color: transparent;
  color: #403D39;
}
.btn-neutral.btn-link .caret {
  border-top-color: #FFFFFF;
}
.btn-neutral .caret {
  border-top-color: #FFFFFF;
}

.btn-outline-default {
  border-color: #66615B;
  color: #66615B;
  opacity: 1;
  filter: alpha(opacity=100);
}
.btn-outline-default:hover, .btn-outline-default:focus, .btn-outline-default:active, .btn-outline-default.active, .open > .btn-outline-default.dropdown-toggle {
  background-color: #66615B;
  color: rgba(255, 255, 255, 0.8);
  border-color: #66615B;
}
.btn-outline-default:hover .caret, .btn-outline-default:focus .caret, .btn-outline-default:active .caret, .btn-outline-default.active .caret, .open > .btn-outline-default.dropdown-toggle .caret {
  border-top-color: rgba(255, 255, 255, 0.8);
}
.btn-outline-default .caret {
  border-top-color: #FFFFFF;
}
.btn-outline-default.disabled, .btn-outline-default.disabled:hover, .btn-outline-default.disabled:focus, .btn-outline-default.disabled.focus, .btn-outline-default.disabled:active, .btn-outline-default.disabled.active, .btn-outline-default:disabled, .btn-outline-default:disabled:hover, .btn-outline-default:disabled:focus, .btn-outline-default:disabled.focus, .btn-outline-default:disabled:active, .btn-outline-default:disabled.active, .btn-outline-default[disabled], .btn-outline-default[disabled]:hover, .btn-outline-default[disabled]:focus, .btn-outline-default[disabled].focus, .btn-outline-default[disabled]:active, .btn-outline-default[disabled].active, fieldset[disabled] .btn-outline-default, fieldset[disabled] .btn-outline-default:hover, fieldset[disabled] .btn-outline-default:focus, fieldset[disabled] .btn-outline-default.focus, fieldset[disabled] .btn-outline-default:active, fieldset[disabled] .btn-outline-default.active {
  background-color: transparent;
  border-color: #66615B;
}

.btn-outline-primary {
  border-color: #51cbce;
  color: #51cbce;
  opacity: 1;
  filter: alpha(opacity=100);
}
.btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary:active, .btn-outline-primary.active, .open > .btn-outline-primary.dropdown-toggle {
  background-color: #51cbce;
  color: rgba(255, 255, 255, 0.8);
  border-color: #51cbce;
}
.btn-outline-primary:hover .caret, .btn-outline-primary:focus .caret, .btn-outline-primary:active .caret, .btn-outline-primary.active .caret, .open > .btn-outline-primary.dropdown-toggle .caret {
  border-top-color: rgba(255, 255, 255, 0.8);
}
.btn-outline-primary .caret {
  border-top-color: #FFFFFF;
}
.btn-outline-primary.disabled, .btn-outline-primary.disabled:hover, .btn-outline-primary.disabled:focus, .btn-outline-primary.disabled.focus, .btn-outline-primary.disabled:active, .btn-outline-primary.disabled.active, .btn-outline-primary:disabled, .btn-outline-primary:disabled:hover, .btn-outline-primary:disabled:focus, .btn-outline-primary:disabled.focus, .btn-outline-primary:disabled:active, .btn-outline-primary:disabled.active, .btn-outline-primary[disabled], .btn-outline-primary[disabled]:hover, .btn-outline-primary[disabled]:focus, .btn-outline-primary[disabled].focus, .btn-outline-primary[disabled]:active, .btn-outline-primary[disabled].active, fieldset[disabled] .btn-outline-primary, fieldset[disabled] .btn-outline-primary:hover, fieldset[disabled] .btn-outline-primary:focus, fieldset[disabled] .btn-outline-primary.focus, fieldset[disabled] .btn-outline-primary:active, fieldset[disabled] .btn-outline-primary.active {
  background-color: transparent;
  border-color: #51cbce;
}

.btn-outline-success {
  border-color: #6bd098;
  color: #6bd098;
  opacity: 1;
  filter: alpha(opacity=100);
}
.btn-outline-success:hover, .btn-outline-success:focus, .btn-outline-success:active, .btn-outline-success.active, .open > .btn-outline-success.dropdown-toggle {
  background-color: #6bd098;
  color: rgba(255, 255, 255, 0.8);
  border-color: #6bd098;
}
.btn-outline-success:hover .caret, .btn-outline-success:focus .caret, .btn-outline-success:active .caret, .btn-outline-success.active .caret, .open > .btn-outline-success.dropdown-toggle .caret {
  border-top-color: rgba(255, 255, 255, 0.8);
}
.btn-outline-success .caret {
  border-top-color: #FFFFFF;
}
.btn-outline-success.disabled, .btn-outline-success.disabled:hover, .btn-outline-success.disabled:focus, .btn-outline-success.disabled.focus, .btn-outline-success.disabled:active, .btn-outline-success.disabled.active, .btn-outline-success:disabled, .btn-outline-success:disabled:hover, .btn-outline-success:disabled:focus, .btn-outline-success:disabled.focus, .btn-outline-success:disabled:active, .btn-outline-success:disabled.active, .btn-outline-success[disabled], .btn-outline-success[disabled]:hover, .btn-outline-success[disabled]:focus, .btn-outline-success[disabled].focus, .btn-outline-success[disabled]:active, .btn-outline-success[disabled].active, fieldset[disabled] .btn-outline-success, fieldset[disabled] .btn-outline-success:hover, fieldset[disabled] .btn-outline-success:focus, fieldset[disabled] .btn-outline-success.focus, fieldset[disabled] .btn-outline-success:active, fieldset[disabled] .btn-outline-success.active {
  background-color: transparent;
  border-color: #6bd098;
}

.btn-outline-info {
  border-color: #51bcda;
  color: #51bcda;
  opacity: 1;
  filter: alpha(opacity=100);
}
.btn-outline-info:hover, .btn-outline-info:focus, .btn-outline-info:active, .btn-outline-info.active, .open > .btn-outline-info.dropdown-toggle {
  background-color: #51bcda;
  color: rgba(255, 255, 255, 0.8);
  border-color: #51bcda;
}
.btn-outline-info:hover .caret, .btn-outline-info:focus .caret, .btn-outline-info:active .caret, .btn-outline-info.active .caret, .open > .btn-outline-info.dropdown-toggle .caret {
  border-top-color: rgba(255, 255, 255, 0.8);
}
.btn-outline-info .caret {
  border-top-color: #FFFFFF;
}
.btn-outline-info.disabled, .btn-outline-info.disabled:hover, .btn-outline-info.disabled:focus, .btn-outline-info.disabled.focus, .btn-outline-info.disabled:active, .btn-outline-info.disabled.active, .btn-outline-info:disabled, .btn-outline-info:disabled:hover, .btn-outline-info:disabled:focus, .btn-outline-info:disabled.focus, .btn-outline-info:disabled:active, .btn-outline-info:disabled.active, .btn-outline-info[disabled], .btn-outline-info[disabled]:hover, .btn-outline-info[disabled]:focus, .btn-outline-info[disabled].focus, .btn-outline-info[disabled]:active, .btn-outline-info[disabled].active, fieldset[disabled] .btn-outline-info, fieldset[disabled] .btn-outline-info:hover, fieldset[disabled] .btn-outline-info:focus, fieldset[disabled] .btn-outline-info.focus, fieldset[disabled] .btn-outline-info:active, fieldset[disabled] .btn-outline-info.active {
  background-color: transparent;
  border-color: #51bcda;
}

.btn-outline-warning {
  border-color: #fbc658;
  color: #fbc658;
  opacity: 1;
  filter: alpha(opacity=100);
}
.btn-outline-warning:hover, .btn-outline-warning:focus, .btn-outline-warning:active, .btn-outline-warning.active, .open > .btn-outline-warning.dropdown-toggle {
  background-color: #fbc658;
  color: rgba(255, 255, 255, 0.8);
  border-color: #fbc658;
}
.btn-outline-warning:hover .caret, .btn-outline-warning:focus .caret, .btn-outline-warning:active .caret, .btn-outline-warning.active .caret, .open > .btn-outline-warning.dropdown-toggle .caret {
  border-top-color: rgba(255, 255, 255, 0.8);
}
.btn-outline-warning .caret {
  border-top-color: #FFFFFF;
}
.btn-outline-warning.disabled, .btn-outline-warning.disabled:hover, .btn-outline-warning.disabled:focus, .btn-outline-warning.disabled.focus, .btn-outline-warning.disabled:active, .btn-outline-warning.disabled.active, .btn-outline-warning:disabled, .btn-outline-warning:disabled:hover, .btn-outline-warning:disabled:focus, .btn-outline-warning:disabled.focus, .btn-outline-warning:disabled:active, .btn-outline-warning:disabled.active, .btn-outline-warning[disabled], .btn-outline-warning[disabled]:hover, .btn-outline-warning[disabled]:focus, .btn-outline-warning[disabled].focus, .btn-outline-warning[disabled]:active, .btn-outline-warning[disabled].active, fieldset[disabled] .btn-outline-warning, fieldset[disabled] .btn-outline-warning:hover, fieldset[disabled] .btn-outline-warning:focus, fieldset[disabled] .btn-outline-warning.focus, fieldset[disabled] .btn-outline-warning:active, fieldset[disabled] .btn-outline-warning.active {
  background-color: transparent;
  border-color: #fbc658;
}

.btn-outline-danger {
  border-color: #f5593d;
  color: #f5593d;
  opacity: 1;
  filter: alpha(opacity=100);
}
.btn-outline-danger:hover, .btn-outline-danger:focus, .btn-outline-danger:active, .btn-outline-danger.active, .open > .btn-outline-danger.dropdown-toggle {
  background-color: #f5593d;
  color: rgba(255, 255, 255, 0.8);
  border-color: #f5593d;
}
.btn-outline-danger:hover .caret, .btn-outline-danger:focus .caret, .btn-outline-danger:active .caret, .btn-outline-danger.active .caret, .open > .btn-outline-danger.dropdown-toggle .caret {
  border-top-color: rgba(255, 255, 255, 0.8);
}
.btn-outline-danger .caret {
  border-top-color: #FFFFFF;
}
.btn-outline-danger.disabled, .btn-outline-danger.disabled:hover, .btn-outline-danger.disabled:focus, .btn-outline-danger.disabled.focus, .btn-outline-danger.disabled:active, .btn-outline-danger.disabled.active, .btn-outline-danger:disabled, .btn-outline-danger:disabled:hover, .btn-outline-danger:disabled:focus, .btn-outline-danger:disabled.focus, .btn-outline-danger:disabled:active, .btn-outline-danger:disabled.active, .btn-outline-danger[disabled], .btn-outline-danger[disabled]:hover, .btn-outline-danger[disabled]:focus, .btn-outline-danger[disabled].focus, .btn-outline-danger[disabled]:active, .btn-outline-danger[disabled].active, fieldset[disabled] .btn-outline-danger, fieldset[disabled] .btn-outline-danger:hover, fieldset[disabled] .btn-outline-danger:focus, fieldset[disabled] .btn-outline-danger.focus, fieldset[disabled] .btn-outline-danger:active, fieldset[disabled] .btn-outline-danger.active {
  background-color: transparent;
  border-color: #f5593d;
}

.btn-outline-neutral {
  border-color: #FFFFFF;
  color: #FFFFFF;
  opacity: 1;
  filter: alpha(opacity=100);
}
.btn-outline-neutral:hover, .btn-outline-neutral:focus, .btn-outline-neutral:active, .btn-outline-neutral.active, .open > .btn-outline-neutral.dropdown-toggle {
  background-color: #FFFFFF;
  color: rgba(255, 255, 255, 0.8);
  border-color: #FFFFFF;
}
.btn-outline-neutral:hover .caret, .btn-outline-neutral:focus .caret, .btn-outline-neutral:active .caret, .btn-outline-neutral.active .caret, .open > .btn-outline-neutral.dropdown-toggle .caret {
  border-top-color: rgba(255, 255, 255, 0.8);
}
.btn-outline-neutral .caret {
  border-top-color: #FFFFFF;
}
.btn-outline-neutral.disabled, .btn-outline-neutral.disabled:hover, .btn-outline-neutral.disabled:focus, .btn-outline-neutral.disabled.focus, .btn-outline-neutral.disabled:active, .btn-outline-neutral.disabled.active, .btn-outline-neutral:disabled, .btn-outline-neutral:disabled:hover, .btn-outline-neutral:disabled:focus, .btn-outline-neutral:disabled.focus, .btn-outline-neutral:disabled:active, .btn-outline-neutral:disabled.active, .btn-outline-neutral[disabled], .btn-outline-neutral[disabled]:hover, .btn-outline-neutral[disabled]:focus, .btn-outline-neutral[disabled].focus, .btn-outline-neutral[disabled]:active, .btn-outline-neutral[disabled].active, fieldset[disabled] .btn-outline-neutral, fieldset[disabled] .btn-outline-neutral:hover, fieldset[disabled] .btn-outline-neutral:focus, fieldset[disabled] .btn-outline-neutral.focus, fieldset[disabled] .btn-outline-neutral:active, fieldset[disabled] .btn-outline-neutral.active {
  background-color: transparent;
  border-color: #FFFFFF;
}
.btn-outline-neutral:hover, .btn-outline-neutral:focus {
  color: #403D39;
  background-color: #FFFFFF;
}

.btn-neutral {
  background-color: #FFFFFF;
  border-color: #FFFFFF;
  color: #FFFFFF;
  opacity: 1;
  filter: alpha(opacity=100);
  color: #66615B;
}
.btn-neutral:hover, .btn-neutral:focus, .btn-neutral:active, .btn-neutral.active, .show > .btn-neutral.dropdown-toggle {
  background-color: #FFFFFF;
  color: #FFFFFF;
  border-color: #FFFFFF;
}
.btn-neutral .caret {
  border-top-color: #FFFFFF;
}
.btn-neutral.btn-link {
  color: #FFFFFF;
}
.btn-neutral.btn-link:hover, .btn-neutral.btn-link:focus, .btn-neutral.btn-link:active, .btn-neutral.btn-link.active, .open > .btn-neutral.btn-link.dropdown-toggle {
  background-color: transparent;
  color: #FFFFFF;
}
.btn-neutral.btn-link .caret {
  border-top-color: #FFFFFF;
}
.btn-neutral .caret {
  border-top-color: #FFFFFF;
}
.btn-neutral:hover, .btn-neutral:focus {
  color: #403D39;
}
.btn-neutral.btn-border:hover, .btn-neutral.btn-border:focus {
  color: #66615B;
}
.btn-neutral.btn-border:active, .btn-neutral.btn-border.active, .open > .btn-neutral.btn-border.dropdown-toggle {
  background-color: #FFFFFF;
  color: #66615B;
}
.btn-neutral.btn-link:active, .btn-neutral.btn-link.active {
  background-color: transparent;
}

.btn:disabled, .btn[disabled], .btn.disabled {
  opacity: 0.5;
  filter: alpha(opacity=50);
}

.btn-link {
  border-color: transparent !important;
  padding: 7px 18px;
}
.btn-link:hover, .btn-link:focus, .btn-link:active {
  text-decoration: none;
  border-color: transparent;
}
.btn-link.btn-icon {
  padding: 7px;
}

.btn-lg {
  font-size: 14px;
  padding: 11px 30px;
}
.btn-lg.btn-simple {
  padding: 13px 30px;
}

.btn-sm {
  font-size: 12px;
  padding: 4px 10px;
}
.btn-sm.btn-simple {
  padding: 6px 10px;
}

.btn-wd {
  min-width: 140px;
}

.btn-group.select {
  width: 100%;
}

.btn-group.select .btn {
  text-align: left;
}

.btn-group.select .caret {
  position: absolute;
  top: 50%;
  margin-top: -1px;
  right: 8px;
}

.btn-just-icon.btn-sm {
  height: 30px;
  width: 30px;
  min-width: 30px;
  padding: 0;
}
.btn-just-icon.btn-sm i {
  font-size: 12px;
}
.btn-just-icon.btn-lg {
  height: 50px;
  width: 50px;
  min-width: 50px;
  padding: 13px;
}
.btn-just-icon.btn-lg i {
  font-size: 18px;
  padding: 0;
}

.btn-round {
  border-radius: 30px;
}

.btn.btn-link:focus {
  box-shadow: none !important;
  text-decoration: none;
}

.column .btn-link {
  padding: 7px 0;
}

.share-buttons .btn-outline-default {
  margin-top: 24px;
}

#modals .btn-outline-neutral {
  margin-bottom: 10px;
}

.btn-group.select {
  overflow: visible !important;
}

.media .media-body .media-footer .btn-neutral {
  margin: 15px 3px;
  font-size: 14px;
}
.media .media-body .media-footer .btn-neutral i {
  margin-right: 0 !important;
}

.form-control::-moz-placeholder {
  color: #d2d2d2;
  opacity: 1;
  filter: alpha(opacity=100);
}

.form-control:-moz-placeholder {
  color: #d2d2d2;
  opacity: 1;
  filter: alpha(opacity=100);
}

.form-control::-webkit-input-placeholder {
  color: #d2d2d2;
  opacity: 1;
  filter: alpha(opacity=100);
}

.form-control:-ms-input-placeholder {
  color: #d2d2d2;
  opacity: 1;
  filter: alpha(opacity=100);
}

.form-control {
  background-color: #FFFFFF;
  border: 1px solid #DDDDDD;
  border-radius: 4px;
  color: #66615b;
  font-size: 14px;
  padding: 7px 12px;
  height: 40px;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.form-control:focus {
  background-color: #FFFFFF;
  border: 1px solid #9A9A9A;
  -webkit-box-shadow: none;
  box-shadow: none;
  outline: 0 !important;
}
.form-control.no-border {
  border: medium none !important;
}
.has-success .form-control, .has-error .form-control, .has-success .form-control:focus, .has-error .form-control:focus {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.has-success .form-control {
  border: 1px solid #ccc;
  color: #66615b;
}
.has-success .form-control:focus {
  border: 1px solid #6bd098;
  color: #6bd098;
}
.has-danger .form-control {
  background-color: #FFC0A4;
  border: 1px solid #f5593d;
  color: #f5593d;
}
.has-danger .form-control:focus {
  background-color: #FFFFFF;
  border: 1px solid #f5593d;
}
.form-control + .form-control-feedback {
  border-radius: 6px;
  font-size: 14px;
  color: #f5593d;
  font-size: .8rem;
  position: absolute;
  top: 100%;
  padding-left: 12px;
  vertical-align: middle;
}
.open .form-control {
  border-radius: 4px 4px 0 0;
  border-bottom-color: transparent;
}

.input-group.input-group-focus .input-group-addon {
  border-color: #9A9A9A;
}

.input-lg {
  height: 55px;
  padding: 11px 30px;
}

.has-error .form-control-feedback, .has-error .control-label {
  color: #f5593d;
}

.has-success .form-control-feedback, .has-success .control-label {
  color: #6bd098;
}

.input-group-addon {
  background-color: #FFFFFF;
  border-radius: 4px;
}
.input-group-addon.no-border {
  border: medium none !important;
}
.has-success .input-group-addon, .has-error .input-group-addon {
  background-color: #FFFFFF;
}
.has-error .form-control:focus + .input-group-addon {
  color: #f5593d;
}
.has-success .form-control:focus + .input-group-addon {
  color: #6bd098;
}
.form-control:focus + .input-group-addon, .form-control:focus ~ .input-group-addon {
  background-color: #FFFFFF;
}

.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle) {
  border-right: 0 none;
  padding-right: 0;
}

.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child) {
  border-left: 0 none;
}

.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
  background-color: #E3E3E3;
  color: #66615B;
  cursor: not-allowed;
}

.input-group[disabled] .input-group-addon {
  background-color: #E3E3E3;
  cursor: not-allowed;
  border-color: #DDDDDD;
}

.input-group-btn .btn {
  border-width: 1px;
  padding: 9px 18px;
}

.input-group-btn .btn-default:not(.btn-fill) {
  border-color: #DDDDDD;
}

.input-group-btn:last-child > .btn {
  margin-left: 0;
}

textarea.form-control {
  padding: 10px 18px;
  height: auto;
}

.form-group {
  position: relative;
}

.register-form .form-control {
  border: 1px solid transparent !important;
}

#inputs .input-group {
  margin-bottom: 1rem;
}

.card-form-horizontal .card-block .form-group {
  margin-bottom: 0;
}

.form-group-no-border .form-control,
.form-group-no-border .input-group-addon {
  border: 0 !important;
}

.progress {
  background-color: #DDDDDD;
  border-radius: 3px;
  box-shadow: none;
  height: 8px;
}

.progress-thin {
  height: 4px;
}

.progress-bar {
  background-color: #51cbce;
}

.progress-bar-primary {
  background-color: #51cbce;
}

.progress-bar-info {
  background-color: #51bcda;
}

.progress-bar-success {
  background-color: #6bd098;
}

.progress-bar-warning {
  background-color: #fbc658;
}

.progress-bar-danger {
  background-color: #f5593d;
}

.noUi-target,
.noUi-target * {
  -webkit-touch-callout: none;
  -ms-touch-action: none;
  user-select: none;
  box-sizing: border-box;
}

.noUi-base {
  width: 100%;
  height: 100%;
  position: relative;
}

.noUi-origin {
  position: absolute;
  right: 0;
  top: 0;
  left: 0;
  bottom: 0;
}

.noUi-handle {
  position: relative;
  z-index: 1;
  box-sizing: border-box;
}

.noUi-stacking .noUi-handle {
  z-index: 10;
}

.noUi-state-tap .noUi-origin {
  transition: left 0.3s, top 0.3s;
}

.noUi-state-drag * {
  cursor: inherit !important;
}

.noUi-horizontal {
  height: 10px;
}

.noUi-handle {
  box-sizing: border-box;
  width: 14px;
  height: 14px;
  left: -10px;
  top: -6px;
  cursor: pointer;
  border-radius: 100%;
  transition: all 0.2s ease-out;
  border: 1px solid;
  background: #FFFFFF;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.noUi-vertical .noUi-handle {
  margin-left: 5px;
  cursor: ns-resize;
}

.noUi-horizontal.noUi-extended {
  padding: 0 15px;
}

.noUi-horizontal.noUi-extended .noUi-origin {
  right: -15px;
}

.noUi-background {
  height: 2px;
  margin: 20px 0;
}

.noUi-origin {
  margin: 0;
  border-radius: 0;
  height: 2px;
  background: #c8c8c8;
}

.noUi-origin[style^="left: 0"] .noUi-handle {
  background-color: #fff;
  border: 2px solid #c8c8c8;
}

.noUi-origin[style^="left: 0"] .noUi-handle.noUi-active {
  border-width: 1px;
}

.noUi-target {
  border-radius: 3px;
}

.noUi-horizontal {
  height: 2px;
  margin: 15px 0;
}

.noUi-vertical {
  height: 100%;
  width: 2px;
  margin: 0 15px;
  display: inline-block;
}

.noUi-handle.noUi-active {
  transform: scale3d(2, 2, 1);
}

[disabled].noUi-slider {
  opacity: 0.5;
}

[disabled] .noUi-handle {
  cursor: not-allowed;
}

.slider {
  background: #c8c8c8;
}

.c-1-color {
  background-color: blue;
}

.c-2-color {
  background-color: white;
}

.slider.noUi-connect {
  background-color: #7AC29A;
}

.slider .noUi-handle {
  border-color: #7AC29A;
}

.slider.slider-info .noUi-origin:first-child {
  background-color: #51cbce;
}

.slider.slider-info .noUi-handle {
  border-color: #51cbce;
}

.slider.slider-success .noUi-connect,
.slider.slider-success.noUi-connect {
  background-color: #51cbce;
}

.slider.slider-success .noUi-handle {
  border-color: #51cbce;
}

.slider.slider-warning .noUi-connect,
.slider.slider-warning.noUi-connect {
  background-color: #ff9800;
}

.slider.slider-warning .noUi-handle {
  border-color: #ff9800;
}

.slider.slider-danger .noUi-connect,
.slider.slider-danger.noUi-connect {
  background-color: #f44336;
}

.slider.slider-danger .noUi-handle {
  border-color: #f44336;
}

.alert {
  border: 0;
  border-radius: 0;
  color: #FFFFFF;
  padding: 10px 15px;
  font-size: 14px;
}
.alert .close {
  font-size: 20px;
  color: #FFFFFF;
}
.container .alert {
  border-radius: 4px;
}
.navbar .alert {
  border-radius: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 85px;
  width: 100%;
  z-index: 3;
}
.navbar:not(.navbar-transparent) .alert {
  top: 70px;
}
.alert .alert-icon {
  display: block;
  font-size: 30px;
  left: 15px;
  position: absolute;
  top: 50%;
  margin-top: -22px;
}
.alert .alert-wrapper.message {
  padding-right: 60px;
}
.alert .alert-wrapper i {
  position: relative;
  font-size: 20px;
  top: 5px;
  margin-top: -5px;
  font-weight: 600;
}

.alert-info {
  background-color: #6ec7e0;
}

.alert-success {
  background-color: #86d9ab;
}

.alert-warning {
  background-color: #fcd27b;
}

.alert-danger {
  background-color: #f7765f;
}

/*           Labels & Progress-bar              */
.label {
  padding: 0.2em 0.6em;
  border-radius: 10px;
  color: #FFFFFF;
  font-weight: 500;
  font-size: 0.75em;
  text-transform: uppercase;
  display: inline-block;
  margin-bottom: 3px;
  line-height: 17px;
}

.label-primary {
  background-color: #51cbce;
}

.label-info {
  background-color: #51bcda;
}

.label-success {
  background-color: #6bd098;
}

.label-warning {
  background-color: #fbc658;
}

.label-danger {
  background-color: #f5593d;
}

.label-default {
  background-color: #66615B;
}

.tooltip {
  font-size: 12px;
  font-weight: 400;
}

.tooltip-inner {
  background-color: #FFFFFF;
  border-radius: 4px;
  box-shadow: 0 1px 13px rgba(0, 0, 0, 0.14), 0 0 0 1px rgba(115, 71, 38, 0.23);
  color: #66615B;
  max-width: 200px;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
}

.tooltip-inner:after {
  content: "";
  display: inline-block;
  position: absolute;
}

.tooltip-inner:before {
  content: "";
  display: inline-block;
  position: absolute;
}

.tooltip.bs-tether-element-attached-left,
.tooltip.tooltip-right {
  padding: 0 3px !important;
}

.tooltip.bs-tether-element-attached-right .tooltip-inner::before,
.tooltip.tooltip-left .tooltip-inner::before {
  border-left: 11px solid rgba(0, 0, 0, 0.2);
  border-top: 11px solid transparent;
  border-bottom: 11px solid transparent;
  right: -7px;
  left: auto;
  margin-left: 0;
  top: 13px;
}

.tooltip.bs-tether-element-attached-right .tooltip-inner::after,
.tooltip.tooltip-left .tooltip-inner::after {
  border-left: 11px solid #FFFFFF;
  border-top: 11px solid transparent;
  border-bottom: 11px solid transparent;
  right: -6px;
  left: auto;
  margin-left: 0;
  top: 8px;
}

.tooltip.bs-tether-element-attached-bottom .tooltip-inner::before,
.tooltip.tooltip-top .tooltip-inner::before {
  border-top: 11px solid rgba(0, 0, 0, 0.2);
  border-left: 11px solid transparent;
  border-right: 11px solid transparent;
  bottom: -6px;
  left: 100%;
  margin-left: -60%;
}

.tooltip.bs-tether-element-attached-bottom .tooltip-inner::after,
.tooltip.tooltip-top .tooltip-inner::after {
  border-top: 11px solid #FFFFFF;
  border-left: 11px solid transparent;
  border-right: 11px solid transparent;
  bottom: -5px;
  content: "";
  display: inline-block;
  left: 100%;
  margin-left: -60%;
  position: absolute;
}

.tooltip.bs-tether-element-attached-left .tooltip-inner::before,
.tooltip.tooltip-right .tooltip-inner::before {
  border-right: 11px solid rgba(0, 0, 0, 0.2);
  border-top: 11px solid transparent;
  border-bottom: 11px solid transparent;
  top: 13px;
  margin-left: -8px;
  content: "";
  display: inline-block;
  position: absolute;
  left: 0;
}

.tooltip.bs-tether-element-attached-left .tooltip-inner::after,
.tooltip.tooltip-right .tooltip-inner::after {
  border-right: 11px solid #FFFFFF;
  border-top: 11px solid transparent;
  border-bottom: 11px solid transparent;
  top: 8px;
  margin-left: -7px;
  content: "";
  display: inline-block;
  position: absolute;
  left: 0;
}

.popover.bs-tether-element-attached-top::after, .popover.popover-bottom::after,
.popover.bs-tether-element-attached-top::before, .popover.popover-bottom::before {
  border-bottom-color: #FF8F5E !important;
  top: -9px;
}

.tooltip.bs-tether-element-attached-top .tooltip-inner::before,
.tooltip.tooltip-bottom .tooltip-inner::before {
  border-bottom: 11px solid rgba(0, 0, 0, 0.2);
  border-left: 11px solid transparent;
  border-right: 11px solid transparent;
  top: -7px;
  content: "";
  display: inline-block;
  left: 100%;
  margin-left: -60%;
  position: absolute;
}

.tooltip.bs-tether-element-attached-top .tooltip-inner::after,
.tooltip.tooltip-bottom .tooltip-inner::after {
  border-bottom: 11px solid #FFFFFF;
  border-left: 11px solid transparent;
  border-right: 11px solid transparent;
  top: -6px;
  content: "";
  display: inline-block;
  left: 100%;
  margin-left: -60%;
  position: absolute;
}

.tooltip.show {
  opacity: 1 !important;
}

.popover {
  border: 0;
  border-radius: 4px;
  background-color: #FFFCF5;
  color: #66615b;
  font-weight: 400;
  padding: 0;
  z-index: 1031;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.popover-title {
  background-color: #FFFCF5;
  border-bottom: 0 none;
  font-size: 15px;
  font-weight: normal;
  line-height: 22px;
  padding: 15px 15px 0px 15px;
  margin: 0;
  color: #66615b;
  text-align: center;
  border-radius: 4px 4px 0 0;
  margin-bottom: -10px;
}

.popover-content {
  padding: 15px;
  text-align: center;
}

.popover .arrow {
  border: 0;
}

.popover.top .arrow {
  margin-left: 0;
}

.popover.bottom .arrow:after {
  border-bottom-color: #f7765f;
}

.popover-filter {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
  background-color: #000000;
  opacity: 0;
  filter: alpha(opacity=0);
  visibility: hidden;
  transition: visibility 0s linear 0.3s,opacity 0.3s linear;
}

.popover-filter.in {
  visibility: visible;
  opacity: 0.2;
  filter: alpha(opacity=20);
  transition-delay: 0s;
}

.popover.left > .arrow::after {
  border-left-color: #f7765f;
  bottom: -20px;
}

.popover.top > .arrow::after {
  border-top-color: #f7765f;
}

.popover.right > .arrow::after {
  border-right-color: #f7765f;
}

.popover.left::before {
  border-left-color: #f7765f;
  bottom: -20px;
}

.popover-filter.in {
  visibility: visible;
  opacity: 0.2;
  filter: alpha(opacity=20);
  transition-delay: 0s;
}

.popover-primary {
  background-color: #6dd3d6;
  color: #FFFFFF;
}
.popover-primary .popover-title {
  background-color: #6dd3d6;
  color: rgba(0, 0, 0, 0.56);
}
.popover-primary.bottom .arrow:after {
  border-bottom-color: #6dd3d6;
}
.popover-primary.left > .arrow::after {
  border-left-color: #6dd3d6;
}
.popover-primary.top > .arrow::after {
  border-top-color: #6dd3d6;
}
.popover-primary.right > .arrow::after {
  border-right-color: #6dd3d6;
}

.popover-info {
  background-color: #6ec7e0;
  color: #FFFFFF;
}
.popover-info .popover-title {
  background-color: #6ec7e0;
  color: rgba(0, 0, 0, 0.56);
}
.popover-info.bottom .arrow:after {
  border-bottom-color: #6ec7e0;
}
.popover-info.left > .arrow::after {
  border-left-color: #6ec7e0;
}
.popover-info.top > .arrow::after {
  border-top-color: #6ec7e0;
}
.popover-info.right > .arrow::after {
  border-right-color: #6ec7e0;
}

.popover-success {
  background-color: #86d9ab;
  color: #FFFFFF;
}
.popover-success .popover-title {
  background-color: #86d9ab;
  color: rgba(0, 0, 0, 0.56);
}
.popover-success.bottom .arrow:after {
  border-bottom-color: #86d9ab;
}
.popover-success.left > .arrow::after {
  border-left-color: #86d9ab;
}
.popover-success.top > .arrow::after {
  border-top-color: #86d9ab;
}
.popover-success.right > .arrow::after {
  border-right-color: #86d9ab;
}

.popover-warning {
  background-color: #fcd27b;
  color: #FFFFFF;
}
.popover-warning .popover-title {
  background-color: #fcd27b;
  color: rgba(0, 0, 0, 0.56);
}
.popover-warning.bottom .arrow:after {
  border-bottom-color: #fcd27b;
}
.popover-warning.left > .arrow::after {
  border-left-color: #fcd27b;
}
.popover-warning.top > .arrow::after {
  border-top-color: #fcd27b;
}
.popover-warning.right > .arrow::after {
  border-right-color: #fcd27b;
}

.popover-danger {
  background-color: #f7765f;
  color: #FFFFFF;
}
.popover-danger .popover-title {
  background-color: #f7765f;
  color: rgba(0, 0, 0, 0.56);
}
.popover-danger.bottom .arrow:after {
  border-bottom-color: #f7765f;
}
.popover-danger.left > .arrow::after {
  border-left-color: #f7765f;
}
.popover-danger.top > .arrow::after {
  border-top-color: #f7765f;
}
.popover-danger.right > .arrow::after {
  border-right-color: #f7765f;
}

.popover-primary.bs-tether-element-attached-bottom::after,
.popover-primary.bs-tether-element-attached-bottom::before,
.popover-primary.popover-top::after,
.popover-primary.popover-top::before {
  border-top-color: #6dd3d6 !important;
}

.popover.popover-info.bs-tether-element-attached-top::after,
.popover.popover-info.popover-bottom::after,
.popover.popover-info.bs-tether-element-attached-top::before,
.popover.popover-info.popover-bottom::before {
  border-bottom-color: #6ec7e0 !important;
}

.popover-success.bs-tether-element-attached-left::after,
.popover-success.bs-tether-element-attached-left::before,
.popover-success.popover-right::after,
.popover-success.popover-right::before {
  border-right-color: #86d9ab !important;
}

.popover.popover-warning.bs-tether-element-attached-right::after,
.popover.popover-warning.bs-tether-element-attached-right::before,
.popover.popover-warning.popover-left::after,
.popover.popover-warning.popover-left::before {
  border-left-color: #fcd27b !important;
}

.popover.popover-danger.bs-tether-element-attached-right::after,
.popover.popover-danger.bs-tether-element-attached-right::before,
.popover.popover-danger.popover-left::after,
.popover.popover-danger.popover-left::before {
  border-left-color: #f7765f !important;
}

.popover.bs-tether-element-attached-top::after, .popover.popover-bottom::after,
.popover.bs-tether-element-attached-top::before, .popover.popover-bottom::before {
  border-bottom-color: #fff !important;
}

.section {
  padding: 70px 0;
  position: relative;
  background-color: #FFFFFF;
}

.section-with-space {
  padding: 60px 0;
}

.section-gray {
  background-color: #EEEEEE;
}

.section-nude {
  background-color: #FFFCF5;
}

.section-gold {
  background-color: #caac90;
  color: #FFFFFF;
}

.section-brown {
  background-color: #A59E94;
  color: #FFFFFF;
}

.section-light-blue {
  background-color: #51cbce;
  color: #FFFFFF;
}

.section-dark-blue {
  background-color: #506367;
  color: #FFFFFF;
}

.section-dark {
  background-color: #0b1011;
}

.section-image,
.section-gold,
.section-dark {
  position: relative;
}
.section-image .title,
.section-image .info-title,
.section-image .card-plain .card-title,
.section-gold .title,
.section-gold .info-title,
.section-gold .card-plain .card-title,
.section-dark .title,
.section-dark .info-title,
.section-dark .card-plain .card-title {
  color: #FFFFFF !important;
}
.section-image .category,
.section-image .description,
.section-image .card-plain .card-description,
.section-image .card-plain .card-category,
.section-gold .category,
.section-gold .description,
.section-gold .card-plain .card-description,
.section-gold .card-plain .card-category,
.section-dark .category,
.section-dark .description,
.section-dark .card-plain .card-description,
.section-dark .card-plain .card-category {
  color: rgba(255, 255, 255, 0.7);
}
.section-image hr,
.section-gold hr,
.section-dark hr {
  border-color: rgba(255, 255, 255, 0.19);
}

.page-header .title,
.page-header .info-title,
.carousel-caption .title,
.carousel-caption .info-title {
  color: #FFFFFF;
}

[class*="features-"],
[class*="team-"],
[class*="projects-"],
[class*="pricing-"],
[class*="testimonials-"],
[class*="contactus-"] {
  padding: 80px 0;
}

.section-image {
  background-position: center center;
  background-size: cover;
}
.section-image:before {
  background-color: rgba(0, 0, 0, 0.5);
  content: "";
  display: block;
  height: 100%;
  left: 0;
  top: 0;
  position: absolute;
  width: 100%;
  z-index: 1;
}
.section-image .container {
  position: relative;
  z-index: 2;
}

.section-login {
  min-height: 700px;
}

.checkbox,
.radio {
  margin-left: -3px;
}

.checkbox label {
  display: inline-block;
  vertical-align: middle;
  position: relative;
  padding-left: 10px;
  width: 67%;
}

.checkbox label::before,
.checkbox label::after {
  content: "";
  display: inline-block;
  position: absolute;
  width: 21px;
  height: 21px;
  left: 0;
  margin-left: -20px;
  border-radius: 4px;
  opacity: .50;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  top: 0;
  background-color: #66615b;
  transition: opacity 0.2s linear;
}

.checkbox label::after {
  top: -2px;
  text-align: center;
  font-size: 17px;
  opacity: .9;
  color: #FFFFFF;
  background-color: inherit;
}

.checkbox input[type="checkbox"],
.radio input[type="radio"] {
  opacity: 0;
  z-index: 1;
  cursor: pointer;
  width: 21px;
  height: 21px;
  top: -3px;
}

.checkbox input[type="checkbox"]:checked + label::after {
  font-family: 'FontAwesome';
  content: "\f00c";
}

.checkbox input[type="checkbox"]:checked + label::before {
  opacity: 1;
}

.checkbox input[type="checkbox"]:disabled + label {
  color: #ddd;
}

.checkbox input[type="checkbox"]:disabled + label::before {
  background-color: #ddd;
  cursor: not-allowed;
}

.checkbox.checkbox-circle label::before {
  border-radius: 50%;
}

.checkbox.checkbox-inline {
  margin-top: 0;
}

.radio label {
  display: inline-block;
  vertical-align: middle;
  position: relative;
  padding-left: 10px;
  width: 64%;
}

.radio label::before,
.radio label::after {
  font-family: 'FontAwesome';
  content: "\f10c";
  font-size: 25px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  display: inline-block;
  position: absolute;
  left: 0;
  top: -8px;
  color: #66615b;
  opacity: .50;
  margin-left: -20px;
  padding: 1px;
}

.radio label::after {
  content: "\f192";
  opacity: 0;
  font-size: 25px;
  background-color: transparent;
  transition: opacity 0.2s linear;
}

.radio input[type="radio"]:not(:disabled):hover + label::before {
  font-family: 'FontAwesome';
  content: "\f192";
  color: #66615b;
  opacity: .50;
}

.radio input[type="radio"]:checked + label::after {
  opacity: 1;
}

.radio input[type="radio"]:disabled + label {
  color: #ddd;
}

.radio input[type="radio"]:disabled + label::before,
.radio input[type="radio"]:disabled + label::after {
  color: #ddd;
}

.radio.radio-inline {
  margin-top: 0;
}

.nav .nav-item .nav-link:hover,
.nav .nav-item .nav-link:focus {
  background-color: transparent;
}

.navbar {
  border: 0;
  font-size: 14px;
  transition: all 0.4s;
  -webkit-transition: all 0.4s;
  padding: 0;
  background: #FFFFFF;
  box-shadow: 0 6px 10px -4px rgba(0, 0, 0, 0.15);
}
.navbar .navbar-brand {
  font-weight: 600;
  margin: 5px 0px;
  padding: 20px 15px;
  font-size: 14px;
  color: #66615B;
  text-transform: uppercase;
}
.navbar .nav-link i {
  font-size: 16px;
  position: relative;
  top: 4px;
  right: 3px;
}
.navbar .nav-link [class^="fa"] {
  top: 2px;
}
.navbar .nav-link p {
  margin: 0px 0px;
  color: #9A9A9A !important;
  text-transform: uppercase;
  font-weight: 600;
  font-size: 12px;
  line-height: 1.5em;
  padding: 15px 0;
}
.navbar .nav-link p:hover {
  color: #403D39 !important;
}
.navbar .navbar-nav .nav-item .nav-link {
  line-height: 1.6;
  margin: 15px 0px;
  padding: 10px 15px;
  opacity: .8;
  font-size: 12px;
  text-transform: uppercase;
  font-weight: 600;
  color: #66615B;
}
.navbar .navbar-nav .nav-item .nav-link.btn {
  margin: 15px 3px;
  padding: 9px;
}
.navbar .navbar-nav .dropdown-menu {
  border-radius: 12px;
  margin-top: 1px;
}
.navbar .navbar-collapse .nav-item .nav-link p {
  display: inline;
}
.navbar .navbar-collapse .nav-item .dropdown-item i {
  margin: 0 10px;
  margin: 0 10px 0px 5px;
  font-size: 18px;
  position: relative;
  top: 3px;
}
.navbar .navbar-collapse.show .navbar-nav .nav-item {
  padding-right: 10px;
}
.navbar .notification-bubble {
  right: 72px;
  padding: 0.2em 0.6em;
  position: absolute;
  top: 15px;
}
.navbar .btn {
  margin: 15px 3px;
  font-size: 12px;
}
.navbar .btn i {
  font-size: 14px;
  line-height: 13px;
}
.navbar .btn-simple {
  font-size: 16px;
}
.navbar .caret {
  left: 0;
  right: 0;
  margin-right: auto;
  margin-left: auto;
  position: absolute;
}
.navbar.navbar-transparent {
  padding-top: 25px;
}
.navbar .logo-container {
  margin-top: 5px;
}
.navbar .logo-container .logo {
  overflow: hidden;
  border-radius: 50%;
  border: 1px solid #333333;
  width: 50px;
  float: left;
}
.navbar .logo-container .logo img {
  width: 100%;
}
.navbar .logo-container .brand {
  font-size: 18px;
  color: #FFFFFF;
  line-height: 20px;
  float: left;
  margin-left: 10px;
  margin-top: 5px;
  width: 75px;
  height: 50px;
}

.navbar.fixed-top .nav-link i {
  top: 4px;
}

.navbar-absolute {
  position: absolute;
  width: 100%;
  padding-top: 10px;
  z-index: 1029;
}

.navbar-transparent .navbar-brand, [class*="bg"] .navbar-brand {
  color: #FFFFFF;
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.navbar-transparent .navbar-brand:focus, .navbar-transparent .navbar-brand:hover, [class*="bg"] .navbar-brand:focus, [class*="bg"] .navbar-brand:hover {
  background-color: transparent;
  opacity: 1;
  filter: alpha(opacity=100);
  color: #FFFFFF;
}
.navbar-transparent .navbar-nav .nav-item .nav-link:not(.btn), [class*="bg"] .navbar-nav .nav-item .nav-link:not(.btn) {
  color: #FFFFFF;
  border-color: #FFFFFF;
}
.navbar-transparent .navbar-nav .active .nav-link
.active .nav-link:hover,
.navbar-transparent .navbar-nav .active .nav-link:focus,
.navbar-transparent .navbar-nav .nav-item .nav-link:hover,
.navbar-transparent .navbar-nav .nav-item .nav-link:focus, [class*="bg"] .navbar-nav .active .nav-link
.active .nav-link:hover,
[class*="bg"] .navbar-nav .active .nav-link:focus,
[class*="bg"] .navbar-nav .nav-item .nav-link:hover,
[class*="bg"] .navbar-nav .nav-item .nav-link:focus {
  background-color: transparent;
  color: #FFFFFF;
  opacity: 1;
  filter: alpha(opacity=100);
}
.navbar-transparent .navbar-nav .nav .nav-item a.btn:hover, [class*="bg"] .navbar-nav .nav .nav-item a.btn:hover {
  background-color: transparent;
}
.navbar-transparent .navbar-nav .dropdown .nav-link .caret,
.navbar-transparent .navbar-nav .dropdown .nav-link:hover .caret,
.navbar-transparent .navbar-nav .dropdown .nav-link:focus .caret, [class*="bg"] .navbar-nav .dropdown .nav-link .caret,
[class*="bg"] .navbar-nav .dropdown .nav-link:hover .caret,
[class*="bg"] .navbar-nav .dropdown .nav-link:focus .caret {
  border-bottom-color: #FFFFFF;
  border-top-color: #FFFFFF;
}
.navbar-transparent .navbar-nav .open .nav-link,
.navbar-transparent .navbar-nav .open .nav-link:hover,
.navbar-transparent .navbar-nav .open .nav-link:focus, [class*="bg"] .navbar-nav .open .nav-link,
[class*="bg"] .navbar-nav .open .nav-link:hover,
[class*="bg"] .navbar-nav .open .nav-link:focus {
  background-color: transparent;
  color: #66615B;
  opacity: 1;
  filter: alpha(opacity=100);
}
.navbar-transparent .btn-default.btn-fill, [class*="bg"] .btn-default.btn-fill {
  color: #9A9A9A;
  background-color: #FFFFFF;
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.navbar-transparent .btn-default.btn-fill:hover,
.navbar-transparent .btn-default.btn-fill:focus,
.navbar-transparent .btn-default.btn-fill:active,
.navbar-transparent .btn-default.btn-fill.active,
.navbar-transparent .open .dropdown-toggle.btn-fill.btn-default, [class*="bg"] .btn-default.btn-fill:hover,
[class*="bg"] .btn-default.btn-fill:focus,
[class*="bg"] .btn-default.btn-fill:active,
[class*="bg"] .btn-default.btn-fill.active,
[class*="bg"] .open .dropdown-toggle.btn-fill.btn-default {
  border-color: #FFFFFF;
  opacity: 1;
  filter: alpha(opacity=100);
}

.nav-open .nav .caret {
  border-bottom-color: #FFFFFF;
  border-top-color: #FFFFFF;
}

.navbar-default .brand {
  color: #66615b !important;
}
.navbar-default .navbar-nav .nav-item .nav-link:not(.btn) {
  color: #9A9A9A;
}
.navbar-default .navbar-nav .active .nav-link,
.navbar-default .navbar-nav .active .nav-link:not(.btn):hover,
.navbar-default .navbar-nav .active .nav-link:not(.btn):focus,
.navbar-default .navbar-nav .nav-item .nav-link:not(.btn):hover,
.navbar-default .navbar-nav .nav-item .nav-link:not(.btn):focus {
  background-color: transparent;
  border-radius: 3px;
  color: #51bcda;
  opacity: 1;
  filter: alpha(opacity=100);
}
.navbar-default .navbar-nav .dropdown .nav-link:hover .caret,
.navbar-default .navbar-nav .dropdown .nav-link:focus .caret {
  border-bottom-color: #51bcda;
  border-top-color: #51bcda;
}
.navbar-default .navbar-nav .open .nav-link,
.navbar-default .navbar-nav .open .nav-link:hover,
.navbar-default .navbar-nav .open .nav-link:focus {
  background-color: transparent;
  color: #51bcda;
}
.navbar-default .navbar-nav .navbar-toggle:hover, .navbar-default .navbar-nav .navbar-toggle:focus {
  background-color: transparent;
}
.navbar-default:not(.navbar-transparent) .btn-default:hover {
  color: #51bcda;
  border-color: #51bcda;
}
.navbar-default:not(.navbar-transparent) .btn-neutral, .navbar-default:not(.navbar-transparent) .btn-neutral:hover, .navbar-default:not(.navbar-transparent) .btn-neutral:active {
  color: #9A9A9A;
}

/*      Navbar with icons            */
.navbar-icons.navbar .navbar-brand {
  margin-top: 12px;
  margin-bottom: 12px;
}
.navbar-icons .navbar-nav .nav-item .nav-link {
  text-align: center;
  padding: 6px 15px;
  margin: 6px 3px;
}
.navbar-icons .navbar-nav [class^="pe"] {
  font-size: 30px;
  position: relative;
}
.navbar-icons .navbar-nav p {
  margin: 3px 0 0;
}

.navbar-form {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.navbar-form .form-control {
  border-radius: 0;
  border: 0;
  padding: 0;
  background-color: transparent;
  height: 22px;
  font-size: 14px;
  line-height: 1.5em;
  color: #E3E3E3;
}
.navbar-transparent .navbar-form .form-control, [class*="bg"] .navbar-form .form-control {
  color: #FFFFFF;
  border: 0;
  border-bottom: 1px solid rgba(255, 255, 255, 0.6);
}

.navbar-toggle {
  margin-top: 19px;
  margin-bottom: 19px;
  border: 0;
}
.navbar-toggle .icon-bar {
  background-color: #FFFFFF;
}
.navbar-toggle .navbar-collapse,
.navbar-toggle .navbar-form {
  border-color: transparent;
}
.navbar-toggle.navbar-default .navbar-toggle:hover, .navbar-toggle.navbar-default .navbar-toggle:focus {
  background-color: transparent;
}

.navbar-light .navbar-nav .nav-link:hover {
  color: #E3E3E3;
}

.red {
  color: #ff0000;
}

.collapse .navbar-text {
  line-height: 55px;
}

.navbar-default .navbar-brand {
  color: #66615B;
}

.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #5e5e5e;
}

.navbar-collapse.show .navbar-nav .nav-item {
  padding-right: 100px;
}

.nav-tabs-navigation:last-child {
  border-bottom: 0 none;
}
.nav-tabs-navigation:last-child .nav-stacked {
  border-right: 1px solid #F1EAE0;
  font-size: 16px;
  font-weight: 600;
  padding: 20px 0;
}
.nav-tabs-navigation:last-child .nav-stacked .nav-item .nav-link {
  padding: 7px 25px;
}

.navbar-nav > li > .dropdown-menu,
.dropdown .dropdown-menu {
  transition: all 0.3s cubic-bezier(0.215, 0.61, 0.355, 1) 0s, opacity 0.3s ease 0s, height 0s linear 0.35s;
}

.navbar-toggler {
  outline: none !important;
  cursor: pointer;
}
.navbar .navbar-toggler .navbar-toggler-bar {
  background: #66615b;
}
.navbar[class*="bg-"] .navbar-toggler .navbar-toggler-bar, .navbar.navbar-transparent .navbar-toggler .navbar-toggler-bar {
  background: #fff;
}
.navbar-toggler .navbar-toggler-bar {
  display: block;
  position: relative;
  width: 24px;
  height: 2px;
  border-radius: 1px;
  margin: 0 auto;
}

.navbar-toggler .navbar-toggler-bar + .navbar-toggler-bar,
.navbar-toggler .navbar-toggler-icon + .navbar-toggler-icon {
  margin-top: 4px;
}

.navbar .navbar-toggler {
  margin-top: 24px;
}

.navbar .navbar-burger {
  margin-top: 20px;
}

.navbar-toggler-icon {
  display: block;
  position: relative;
  width: 24px;
  height: 2px;
  border-radius: 1px;
  margin: 0 auto;
  background: gray;
}

.no-transition {
  -webkit-transition: none;
  -moz-transition: none;
  -o-transition: none;
  -ms-transition: none;
  transition: none;
}

#description-areas .nav-stacked .nav-link.active:before,
#navtabs-row .nav-stacked .nav-link.active:before {
  border-right: 11px solid #F1EAE0;
  border-top: 11px solid transparent;
  border-bottom: 11px solid transparent;
  content: "";
  display: inline-block;
  position: absolute;
  right: 0;
  bottom: 7px;
}

#description-areas .nav-stacked .nav-link.active:after,
#navtabs-row .nav-stacked .nav-link.active:after {
  border-right: 11px solid #FFFFFF;
  border-top: 11px solid transparent;
  border-bottom: 11px solid transparent;
  content: "";
  display: inline-block;
  position: absolute;
  right: -1px;
  bottom: 7px;
}

#second-tabs {
  margin-left: 20px;
}

.scroll-area {
  max-height: 310px;
  overflow-y: scroll;
  list-style: outside none none;
  padding: 0px;
}

.burger-menu .collapse .navbar-nav a {
  color: #333333;
}

.navbar-transparent {
  background: transparent !important;
  border-bottom: 1px solid transparent;
  box-shadow: none;
}
.navbar-transparent .dropdown-menu .divider {
  background-color: rgba(255, 255, 255, 0.2);
}

.img-rounded {
  border-radius: 12px;
  transition: opacity 0.5s ease 0s;
  max-width: 100%;
}

.img-details {
  min-height: 50px;
  padding: 0 4px 0.5em;
}

.img-details img {
  width: 50px;
}

.img-details .author {
  margin-left: 10px;
  margin-top: -21px;
  width: 40px;
}

.img-circle {
  background-color: #FFFFFF;
  margin-bottom: 10px;
  padding: 4px;
  border-radius: 50% !important;
  max-width: 100%;
}

.img-thumbnail {
  border: 0 none;
  border-radius: 12px;
  box-shadow: 0 1px 2px rgba(164, 158, 147, 0.6);
  margin-bottom: 10px;
}

.img-no-padding {
  padding: 0px;
}

.example-page .img-rounded {
  margin: 50px 0 20px;
}

.img-shadow {
  box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);
}

.images-title {
  margin-bottom: 20px;
  height: 50px;
}

.nav-link .profile-photo-small {
  width: 40px;
  height: 30px;
  margin: -10px 0 0 -15px;
}

.profile-picture {
  margin: 0 auto;
}
.profile-picture .fileinput-new img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  margin-bottom: 10px;
}
.profile-picture .fileinput-exists img {
  max-width: 150px;
  max-height: 150px;
  border-radius: 50%;
  margin-bottom: 10px;
}

.card {
  border-radius: 12px;
  box-shadow: 0 6px 10px -4px rgba(0, 0, 0, 0.15);
  background-color: #FFFFFF;
  color: #333333;
  margin-bottom: 20px;
  position: relative;
  z-index: 1;
  border: 0 none;
  -webkit-transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 200ms ease;
  -moz-transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 200ms ease;
  -o-transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 200ms ease;
  -ms-transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 200ms ease;
  transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 200ms ease;
}
.card:not(.card-plain):hover {
  box-shadow: 0px 12px 19px -7px rgba(0, 0, 0, 0.3);
  transform: translateY(-10px);
  -webkit-transform: translateY(-10px);
  -ms-transform: translateY(-10px);
  -moz-transform: translateY(-10px);
}
.card.card-plain {
  background-color: transparent;
  box-shadow: none;
  border-radius: 0;
}
.card .card-footer {
  padding: 15px;
  background: transparent;
  border-top: 0 none;
}
.card .card-footer .social-line .btn:first-child {
  border-radius: 0 0 0 6px;
}
.card .card-footer .social-line .btn:last-child {
  border-radius: 0 0 6px 0;
}
.card .card-block .card-footer {
  padding: 0;
}
.card .card-block .card-description + .card-footer {
  padding-top: 10px;
}
.card.no-transition:hover, .card.card-register:hover, .card.page-carousel:hover {
  box-shadow: 0 6px 10px -4px rgba(0, 0, 0, 0.15);
  transform: none;
  -webkit-transform: none;
  -ms-transform: none;
  -moz-transform: none;
}

.section-dark .card-profile.card-plain .card-title {
  color: #FFFFFF !important;
}
.section-dark .card-profile.card-plain .card-description {
  color: rgba(255, 255, 255, 0.7);
}

.card-profile {
  margin-top: 30px;
  text-align: center;
}
.card-profile .card-cover {
  height: 130px;
  background-position: center center;
  background-size: cover;
  border-radius: 12px 12px 0 0;
}
.card-profile .card-block .card-title {
  margin-top: 5px !important;
}
.card-profile .card-block .card-category {
  margin-bottom: 5px;
  margin-top: 5px;
}
.card-profile .card-avatar {
  max-width: 120px;
  max-height: 120px;
  margin: -60px auto 0;
  border-radius: 50%;
  overflow: hidden;
}
.card-profile .card-avatar img {
  max-width: 100%;
  height: auto;
}
.card-profile .card-avatar.border-white {
  border: 4px solid #FFFFFF;
}
.card-profile .card-avatar.border-gray {
  border: 4px solid #ccc;
}

.section .card-profile {
  margin-top: 100px;
}

.card-register {
  background-color: #FF8F5E;
  border-radius: 8px;
  color: #fff;
  max-width: 350px;
  margin: 120px 0 70px;
  min-height: 400px;
  padding: 30px;
  z-index: 1;
}
.card-register .social-line .btn {
  margin-top: 0;
}

.section-image .card-register {
  margin-top: 0;
}

.card-register label {
  margin-top: 15px;
}

.card-register .title {
  color: #B33C12;
  text-align: center;
}

.card-register .btn {
  margin-top: 30px;
}

.card-register .forgot {
  text-align: center;
}

.footer {
  background-attachment: fixed;
  position: relative;
  line-height: 20px;
}

.footer nav > ul {
  list-style: none;
  margin: 0;
  padding: 0;
  font-weight: normal;
}

.footer nav > ul > li {
  display: inline-block;
  padding: 10px 15px;
  margin: 15px 3px;
  line-height: 20px;
  text-align: center;
}

.footer nav > ul a:not(.btn) {
  color: #777777;
  display: block;
  margin-bottom: 3px;
  line-height: 1.6;
  opacity: .8;
  font-size: 12px;
  text-transform: uppercase;
  font-weight: 600;
}

.footer nav > ul a:not(.btn):hover,
.footer nav > ul a:not(.btn):focus {
  color: #777777;
  opacity: 1;
}

.footer .copyright {
  color: #777777;
  padding: 10px 0px;
  font-size: 14px;
  margin: 15px 3px;
  line-height: 20px;
  text-align: center;
}

.footer .heart {
  color: #EB5E28;
}

.footer {
  background-color: #FFFFFF;
  line-height: 36px;
}
.footer.footer-black h4 {
  color: #FFFFFF;
}
.footer .links {
  display: inline-block;
}
.footer .links ul {
  list-style: none;
  margin: 0;
  padding: 0;
  font-weight: 600;
}
.footer .links ul > li {
  display: inline-block;
  padding-right: 20px;
}
.footer .links ul > li:last-child {
  padding-right: 0px;
}
.footer .links ul a:not(.btn) {
  color: #66615b;
  display: block;
  font-size: 0.9em;
  margin-bottom: 3px;
}
.footer .links ul a:not(.btn):hover, .footer .links ul a:not(.btn):focus {
  color: #403D39;
}
.footer .links ul.uppercase-links {
  text-transform: uppercase;
}
.footer .links ul.stacked-links {
  margin-top: 10px;
}
.footer .links ul.stacked-links > li {
  display: block;
  line-height: 26px;
}
.footer .links ul.stacked-links h4 {
  margin-top: 0px;
}
.footer hr {
  border-color: #DDDDDD;
  border-width: 1px 0 0;
  margin-top: 5px;
  margin-bottom: 5px;
}
.footer .copyright {
  color: #A49E9E;
  font-size: 0.9em;
}
.footer .copyright ul > li {
  padding-right: 0px;
}
.footer .title {
  color: #403D39;
}

.footer-black,
.footer-transparent,
.subscribe-line-transparent {
  background-color: #252422;
  color: #DDDDDD;
}
.footer-black .links ul a:not(.btn),
.footer-transparent .links ul a:not(.btn),
.subscribe-line-transparent .links ul a:not(.btn) {
  color: #A49E9E;
}
.footer-black .links ul a:not(.btn):hover, .footer-black .links ul a:not(.btn):focus,
.footer-transparent .links ul a:not(.btn):hover,
.subscribe-line-transparent .links ul a:not(.btn):hover,
.footer-transparent .links ul a:not(.btn):focus,
.subscribe-line-transparent .links ul a:not(.btn):focus {
  color: #F1EAE0;
}
.footer-black .copyright,
.footer-transparent .copyright,
.subscribe-line-transparent .copyright {
  color: #66615b;
}
.footer-black .copyright ul > li a:not(.btn),
.footer-transparent .copyright ul > li a:not(.btn),
.subscribe-line-transparent .copyright ul > li a:not(.btn) {
  color: #66615b;
}
.footer-black hr,
.footer-transparent hr,
.subscribe-line-transparent hr {
  border-color: #66615b;
}

.footer-transparent, .subscribe-line-transparent {
  background-size: cover;
  position: relative;
}
.footer-transparent .container, .subscribe-line-transparent .container {
  z-index: 2;
  position: relative;
}
.footer-transparent hr, .subscribe-line-transparent hr {
  border-color: #A49E9E;
}
.footer-transparent .copyright, .subscribe-line-transparent .copyright {
  color: #A49E9E;
}
.footer-transparent .copyright ul > li a:not(.btn), .subscribe-line-transparent .copyright ul > li a:not(.btn) {
  color: #A49E9E;
}
.footer-transparent::after, .subscribe-line-transparent::after {
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  position: absolute;
  background-color: rgba(17, 17, 17, 0.5);
  display: block;
  content: "";
  z-index: 1;
}

.footer-gray {
  background-color: #F3F2EE;
}

.footer-big {
  padding: 30px 0;
}
.footer-big hr {
  margin-top: 20px;
}
.footer-big .copyright {
  margin: 10px 0px 20px;
}
.footer-big .form-group {
  margin-top: 15px;
}

.subscribe-line {
  background-color: #FFFCF5;
  padding: 35px 0;
  background-position: center center;
  background-size: cover;
  background-attachment: fixed;
  margin-top: 0;
}
.subscribe-line .form-group {
  margin: 0;
}
.subscribe-line .form-control {
  height: auto;
  font-size: 1.825em;
  border: 0;
  padding: 0;
  font-weight: 300;
  line-height: 54px;
  background-color: transparent;
}
.subscribe-line .btn:not(.btn-lg) {
  margin-top: 7px;
}

.subscribe-line-black {
  background-color: #252422;
}
.subscribe-line-black .form-control {
  color: #FFFFFF;
}

.subscribe-line-transparent .form-control {
  color: #FFFFFF;
}

.social-line-black {
  background-color: #252422;
  color: #FFFFFF;
}

.bootstrap-switch {
  display: inline-block;
  direction: ltr;
  cursor: pointer;
  border-radius: 30px;
  border: 0;
  position: relative;
  text-align: left;
  overflow: hidden;
  margin-bottom: 5px;
  line-height: 8px;
  width: 61px !important;
  height: 26px;
  outline: none;
  z-index: 0;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  vertical-align: middle;
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}

.bootstrap-switch .bootstrap-switch-container {
  display: inline-flex;
  top: 0;
  height: 26px;
  border-radius: 4px;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  width: 100px !important;
}

.bootstrap-switch .bootstrap-switch-handle-on,
.bootstrap-switch .bootstrap-switch-handle-off,
.bootstrap-switch .bootstrap-switch-label {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  cursor: pointer;
  display: inline-block !important;
  height: 100%;
  color: #fff;
  padding: 6px 12px;
  font-size: 11px;
  text-indent: -5px;
  line-height: 15px;
  -webkit-transition: 0.25s ease-out;
  transition: 0.25s ease-out;
}

.bootstrap-switch .bootstrap-switch-handle-on,
.bootstrap-switch .bootstrap-switch-handle-off {
  text-align: center;
  z-index: 1;
  float: left;
  width: 50% !important;
  background-color: #66615B;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-primary,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-primary {
  color: #fff;
  background: #51cbce;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-info,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-info {
  color: #fff;
  background: #447DF7;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-success,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-success {
  color: #fff;
  background: #7AC29A;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-warning,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-warning {
  background: #FFA534;
  color: #fff;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-danger,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-danger {
  color: #fff;
  background: #FB404B;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-default,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-default {
  color: #fff;
  background: #cfcfca;
}

.bootstrap-switch .bootstrap-switch-label {
  text-align: center;
  z-index: 100;
  color: #333333;
  background: #ffffff;
  width: 22px !important;
  height: 22px;
  margin: 2px -11px;
  border-radius: 12px;
  position: relative;
  float: left;
  padding: 0;
  background-color: #FFFFFF;
  box-shadow: 0 1px 1px #FFFFFF inset, 0 1px 1px rgba(0, 0, 0, 0.25);
}

.bootstrap-switch .bootstrap-switch-handle-on {
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px;
}

.bootstrap-switch .bootstrap-switch-handle-off {
  text-indent: 6px;
}

.bootstrap-switch input[type='radio'],
.bootstrap-switch input[type='checkbox'] {
  position: absolute !important;
  top: 0;
  left: 0;
  opacity: 0;
  filter: alpha(opacity=0);
  z-index: -1;
}

.bootstrap-switch input[type='radio'].form-control,
.bootstrap-switch input[type='checkbox'].form-control {
  height: auto;
}

.bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-label {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5;
}

.bootstrap-switch.bootstrap-switch-small .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-small .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-small .bootstrap-switch-label {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
}

.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-label {
  padding: 6px 16px;
  font-size: 18px;
  line-height: 1.33;
}

.bootstrap-switch.bootstrap-switch-disabled,
.bootstrap-switch.bootstrap-switch-readonly,
.bootstrap-switch.bootstrap-switch-indeterminate {
  cursor: default !important;
}

.bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-label,
.bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-label,
.bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-label {
  opacity: 0.5;
  filter: alpha(opacity=50);
  cursor: default !important;
}

.bootstrap-switch.bootstrap-switch-animate .bootstrap-switch-container {
  -webkit-transition: margin-left 0.5s;
  transition: margin-left 0.5s;
}

.bootstrap-switch.bootstrap-switch-inverse .bootstrap-switch-handle-on {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
  border-bottom-right-radius: 3px;
  border-top-right-radius: 3px;
}

.bootstrap-switch.bootstrap-switch-inverse .bootstrap-switch-handle-off {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-container {
  margin-left: -2px !important;
}

.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-container {
  margin-left: -37px !important;
}

.bootstrap-switch.bootstrap-switch-on:hover .bootstrap-switch-label {
  width: 26px !important;
  margin: 2px -15px;
}

.bootstrap-switch.bootstrap-switch-off:hover .bootstrap-switch-label {
  width: 26px !important;
  margin: 2px -15px -13px -11px;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-handle-off {
  background-color: #66615B;
}

.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-handle-on {
  background-color: #cfcfca;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-danger ~ .bootstrap-switch-default {
  background-color: #FB404B;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-warning ~ .bootstrap-switch-default {
  background-color: #FFA534;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-success ~ .bootstrap-switch-default {
  background-color: #7AC29A;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-primary ~ .bootstrap-switch-default {
  background-color: #51cbce;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-info ~ .bootstrap-switch-default {
  background-color: #447DF7;
}

.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-danger,
.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-primary,
.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-info,
.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-warning,
.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-success {
  background-color: #cfcfca;
}

.dropdown-menu {
  background-color: #FFFCF5;
  border: 0 none;
  border-radius: 12px;
  display: block;
  margin-top: 10px;
  padding: 0px;
  position: absolute;
  visibility: hidden;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-box-shadow: 0 2px rgba(17, 16, 15, 0.1), 0 2px 10px rgba(17, 16, 15, 0.1);
  box-shadow: 0 2px rgba(17, 16, 15, 0.1), 0 2px 10px rgba(17, 16, 15, 0.1);
}
.show .dropdown-menu {
  opacity: 1;
  filter: alpha(opacity=100);
  visibility: visible;
}
.dropdown-menu .divider {
  background-color: #F1EAE0;
  margin: 0px;
}
.dropdown-menu .dropdown-header {
  color: #9A9A9A;
  font-size: 12px;
  padding: 10px 15px;
}
.dropdown-menu .no-notification {
  color: #9A9A9A;
  font-size: 1.2em;
  padding: 30px 30px;
  text-align: center;
}
.dropdown-menu .dropdown-item {
  padding: 0 !important;
}
.dropdown-menu .dropdown-item a {
  color: #66615b;
  font-size: 14px;
  padding: 10px 45px 10px 15px;
  clear: both;
  white-space: nowrap;
  width: 100%;
  display: block;
}
.dropdown-menu .dropdown-item a img {
  margin-top: -3px;
}
.dropdown-menu .dropdown-item a:focus {
  outline: 0 !important;
}
.btn-group.select .dropdown-menu {
  min-width: 100%;
}
.dropdown-menu .dropdown-item:first-child a,
.dropdown-menu .dropdown-item:first-child {
  border-top-left-radius: 12px;
  border-top-right-radius: 12px;
}
.dropdown-menu .dropdown-item:last-child a,
.dropdown-menu .dropdown-item:last-child {
  border-bottom-left-radius: 12px;
  border-bottom-right-radius: 12px;
}
.select .dropdown-menu .dropdown-item:first-child a {
  border-radius: 0;
  border-bottom: 0 none;
}
.dropdown-menu .dropdown-item a:hover,
.dropdown-menu .dropdown-item a:focus {
  color: #FFFFFF;
  opacity: 1;
  text-decoration: none;
}
.dropdown-menu .dropdown-item:hover,
.dropdown-menu .dropdown-item:focus {
  background-color: #66615B;
}
.dropdown-menu.dropdown-primary .dropdown-item:hover, .dropdown-menu.dropdown-primary .dropdown-item:focus {
  background-color: #6dd3d6;
}
.dropdown-menu.dropdown-info .dropdown-item:hover, .dropdown-menu.dropdown-info .dropdown-item:focus {
  background-color: #6ec7e0;
}
.dropdown-menu.dropdown-success .dropdown-item:hover, .dropdown-menu.dropdown-success .dropdown-item:focus {
  background-color: #86d9ab;
}
.dropdown-menu.dropdown-warning .dropdown-item:hover, .dropdown-menu.dropdown-warning .dropdown-item:focus {
  background-color: #fcd27b;
}
.dropdown-menu.dropdown-danger .dropdown-item:hover, .dropdown-menu.dropdown-danger .dropdown-item:focus {
  background-color: #f7765f;
}

.dropdown-divider {
  margin: 0 !important;
}

.btn-group.select.open {
  overflow: visible;
}

.dropdown-menu-right {
  right: -2px;
  left: auto;
}

@media (min-width: 768px) {
  .navbar-form {
    margin-top: 21px;
    margin-bottom: 21px;
    padding-left: 5px;
    padding-right: 5px;
  }

  .navbar-search-form {
    display: none;
  }

  .navbar-nav .dropdown-item .dropdown-menu,
  .dropdown .dropdown-menu,
  .dropdown-btn .dropdown-menu {
    transform: translate3d(0px, -40px, 0px);
    transition: all 0.3s cubic-bezier(0.215, 0.61, 0.355, 1) 0s, opacity 0.3s ease 0s, height 0s linear 0.35s;
  }

  .navbar-nav .dropdown-item.show .dropdown-menu,
  .dropdown.show .dropdown-menu,
  .dropdown-btn.show .dropdown-menu {
    transform: translate3d(0px, 0px, 0px);
    visibility: visible !important;
  }

  .bootstrap-select .dropdown-menu {
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition: all 150ms linear;
    -moz-transition: all 150ms linear;
    -o-transition: all 150ms linear;
    -ms-transition: all 150ms linear;
    transition: all 150ms linear;
  }

  .bootstrap-datetimepicker-widget {
    visibility: visible !important;
    opacity: 1;
    filter: alpha(opacity=100);
  }

  .dropup.show .dropdown-menu {
    -webkit-transform: translate3d(0, -10px, 0);
    -moz-transform: translate3d(0, -10px, 0);
    -o-transform: translate3d(0, -10px, 0);
    -ms-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0);
    opacity: 1;
    visibility: visible;
  }

  .dropup .dropdown-menu {
    transition: all 0.3s cubic-bezier(0.215, 0.61, 0.355, 1) 0s, opacity 0.3s ease 0s, height 0s linear 0.35s;
    -webkit-transform: translate3d(0, 30px, 0);
    -moz-transform: translate3d(0, 30px, 0);
    -o-transform: translate3d(0, 30px, 0);
    -ms-transform: translate3d(0, 30px, 0);
    transform: translate3d(0, 30px, 0);
    opacity: 0;
    visibility: hidden;
    display: block;
  }

  .bootstrap-select .show .dropdown-menu {
    transition: all 0.3s cubic-bezier(0.215, 0.61, 0.355, 1) 0s, opacity 0.3s ease 0s, height 0s linear 0.35s;
    transform: translate3d(0px, 0px, 0px);
  }

  .navbar-nav li .dropdown-menu:before,
  #dropdown-row .dropdown .dropdown-menu:before,
  .card.card-just-text .dropdown .dropdown-menu:before,
  .card-just-text .dropdown .dropdown-menu:before,
  .dropdown-btn .dropdown-menu:before {
    border-bottom: 11px solid #F1EAE0;
    border-left: 11px solid transparent;
    border-right: 11px solid transparent;
    content: "";
    display: inline-block;
    position: absolute;
    right: 12px;
    top: -11px;
  }

  #dropdown-row .dropdown .dropdown-menu:before {
    left: 12px !important;
    right: auto;
  }

  .navbar-nav li .dropdown-menu:after,
  #dropdown-row .dropdown .dropdown-menu:after,
  .card.card-just-text .dropdown .dropdown-menu:after,
  .card-just-text .dropdown .dropdown-menu:after,
  .dropdown-btn .dropdown-menu:after {
    border-bottom: 11px solid #FFFCF5;
    border-left: 11px solid transparent;
    border-right: 11px solid transparent;
    content: "";
    display: inline-block;
    position: absolute;
    right: 12px;
    top: -10px;
  }

  #dropdown-row .dropdown .dropdown-menu:after {
    left: 12px !important;
    right: auto;
  }

  #dropdown-row .dropdown .dropdown-menu {
    left: 15px;
  }

  .navbar-nav.navbar-right li .dropdown-menu:before,
  .navbar-nav.navbar-right li .dropdown-menu:after {
    left: auto;
    right: 12px;
  }

  .footer:not(.footer-big) nav ul li:first-child {
    margin-left: 0;
  }

  body > .navbar-collapse.collapse {
    display: none !important;
  }
}
#navbar .dropdown-menu .dropdown-item {
  padding: 3px 1.5rem !important;
}

.dropdown-sharing li {
  color: #66615b;
  font-size: 14px;
}
.dropdown-sharing li .social-line {
  line-height: 28px;
  padding: 10px 20px 5px 20px;
}
.dropdown-sharing li .social-line [class*="icon-"] {
  font-size: 20px;
}
.dropdown-sharing li:hover .social-line,
.dropdown-sharing li:hover a,
.dropdown-sharing li:hover .action-line,
.dropdown-sharing li:focus .social-line,
.dropdown-sharing li:focus a,
.dropdown-sharing li:focus .action-line {
  background-color: #FFFCF5;
  color: #66615b;
  opacity: 1;
  text-decoration: none;
}

.show .dropdown-sharing {
  margin-bottom: 1px;
}
.show .dropdown-sharing li:last-child {
  padding: 10px 15px;
}

.show .dropdown-actions {
  margin-bottom: 1px;
}

.dropdown-actions li {
  margin: -15px 35px;
}
.dropdown-actions li .action-line {
  padding: 5px 10px;
  line-height: 24px;
  font-weight: bold;
}
.dropdown-actions li .action-line [class*="icon-"] {
  font-size: 24px;
}
.dropdown-actions li .action-line .col-sm-9 {
  line-height: 34px;
}
.dropdown-actions li .link-danger {
  color: #f5593d;
}
.dropdown-actions li .link-danger:hover, .dropdown-actions li .link-danger:active, .dropdown-actions li .link-danger:focus {
  color: #f5593d;
}
.dropdown-actions li:hover a,
.dropdown-actions li:focus a {
  color: #66615b;
  opacity: 1;
  text-decoration: none;
}
.dropdown-actions .action-line .icon-simple {
  margin-left: -15px;
}

.dropup .dropdown-menu:before {
  border-top: 11px solid #DCD9D1;
  border-left: 11px solid transparent;
  border-right: 11px solid transparent;
  content: "";
  display: inline-block;
  position: absolute;
  right: 12px;
  bottom: -12px;
}

.dropup .dropdown-menu:after {
  border-top: 11px solid #FFFCF5;
  border-left: 11px solid transparent;
  border-right: 11px solid transparent;
  content: "";
  display: inline-block;
  position: absolute;
  right: 12px;
  bottom: -11px;
}

.dropup .dropdown-toggle:after,
.dropdown .dropdown-toggle:after {
  margin-left: 5px;
}

.dropdown-notification .dropdown-notification-list li {
  border-bottom: 1px solid #F1EAE0;
  color: #66615b;
  font-size: 16px;
  padding: 10px 5px;
  width: 330px;
}
.dropdown-notification .dropdown-notification-list li a {
  color: #66615b;
  white-space: normal;
}
.dropdown-notification .dropdown-notification-list li a .notification-text {
  padding-left: 40px;
  position: relative;
}
.dropdown-notification .dropdown-notification-list li a .notification-text .label {
  display: block;
  position: absolute;
  top: 50%;
  margin-top: -12px;
  left: 7px;
}
.dropdown-notification .dropdown-notification-list li a .notification-text .message {
  font-size: 0.9em;
  line-height: 0.7;
  margin-left: 10px;
}
.dropdown-notification .dropdown-notification-list li a .notification-text .time {
  color: #9A9A9A;
  font-size: 0.7em;
  margin-left: 10px;
}
.dropdown-notification .dropdown-notification-list li a .read-notification {
  font-size: 12px;
  opacity: 0;
  position: absolute;
  right: 5px;
  top: 50%;
  margin-top: -12px;
}
.dropdown-notification .dropdown-notification-list li:hover {
  background-color: #F0EFEB;
  color: #66615b;
  opacity: 1;
  text-decoration: none;
}
.dropdown-notification .dropdown-notification-list li:hover .read-notification {
  opacity: 1 !important;
}
.dropdown-notification .dropdown-footer {
  background-color: #E8E7E3;
  border-radius: 0 0 8px 8px;
}
.dropdown-notification .dropdown-footer .dropdown-footer-menu {
  list-style: outside none none;
  padding: 0px 5px;
}
.dropdown-notification .dropdown-footer .dropdown-footer-menu li {
  display: inline-block;
  text-align: left;
  padding: 0 10px;
}
.dropdown-notification .dropdown-footer .dropdown-footer-menu li a {
  color: #9C9B99;
  font-size: 0.9em;
  line-height: 35px;
}

.section-nucleo-icons {
  padding: 100px 0;
}
.section-nucleo-icons .icons-container {
  position: relative;
  max-width: 450px;
  height: 300px;
  max-height: 300px;
  margin: 0 auto;
}
.section-nucleo-icons .icons-container i {
  font-size: 34px;
  position: absolute;
  top: 0;
  left: 0;
}
.section-nucleo-icons .icons-container i:nth-child(1) {
  top: 5%;
  left: 7%;
}
.section-nucleo-icons .icons-container i:nth-child(2) {
  top: 28%;
  left: 24%;
}
.section-nucleo-icons .icons-container i:nth-child(3) {
  top: 40%;
}
.section-nucleo-icons .icons-container i:nth-child(4) {
  top: 18%;
  left: 62%;
}
.section-nucleo-icons .icons-container i:nth-child(5) {
  top: 74%;
  left: 3%;
}
.section-nucleo-icons .icons-container i:nth-child(6) {
  top: 36%;
  left: 44%;
  font-size: 65px;
  color: #f5593d;
  padding: 1px;
}
.section-nucleo-icons .icons-container i:nth-child(7) {
  top: 59%;
  left: 26%;
}
.section-nucleo-icons .icons-container i:nth-child(8) {
  top: 60%;
  left: 69%;
}
.section-nucleo-icons .icons-container i:nth-child(9) {
  top: 72%;
  left: 47%;
}
.section-nucleo-icons .icons-container i:nth-child(10) {
  top: 88%;
  left: 27%;
}
.section-nucleo-icons .icons-container i:nth-child(11) {
  top: 31%;
  left: 80%;
}
.section-nucleo-icons .icons-container i:nth-child(12) {
  top: 88%;
  left: 68%;
}
.section-nucleo-icons .icons-container i:nth-child(13) {
  top: 5%;
  left: 81%;
}
.section-nucleo-icons .icons-container i:nth-child(14) {
  top: 58%;
  left: 90%;
}
.section-nucleo-icons .icons-container i:nth-child(15) {
  top: 6%;
  left: 40%;
}

.section-dark .icons-container {
  color: #FFFFFF;
}

.info .icon {
  margin-top: 0;
  font-size: 3.4em;
}

.icon-primary {
  color: #51cbce;
}

.icon-info {
  color: #51bcda;
}

.icon-success {
  color: #6bd098;
}

.icon-warning {
  color: #fbc658;
}

.icon-danger {
  color: #f5593d;
}

.icon-neutral {
  color: #FFFFFF;
}

/*             Navigation menu                */
/*             Navigation Tabs                 */
.nav-tabs-navigation {
  text-align: center;
  border-bottom: 1px solid #F1EAE0;
  margin-bottom: 30px;
}
.nav-tabs-navigation .nav > .nav-item > .nav-link {
  padding-bottom: 20px;
}

.nav-tabs-wrapper {
  display: inline-block;
  margin-bottom: -6px;
  margin-left: 1.25%;
  margin-right: 1.25%;
  position: relative;
  width: auto;
}

.nav-tabs {
  border-bottom: 0 none;
  font-size: 16px;
  font-weight: 600;
}
.nav-tabs .nav-item .nav-link {
  border: 0 none;
  color: #A49E93;
  background-color: transparent;
}
.nav-tabs .nav-item .nav-link:hover {
  color: #66615b;
}
.nav-tabs .nav-item .nav-link.active {
  color: #66615b;
}
.nav-tabs .nav-item {
  color: #66615b;
  position: relative;
}
.nav-tabs .nav-item .nav-link.active,
.nav-tabs .nav-item .nav-link.active:hover,
.nav-tabs .nav-item .nav-link.active:focus {
  background-color: transparent;
  border: 0 none;
}
.nav-tabs .nav-item .nav-link.active:after,
.nav-tabs .nav-item .nav-link.active:hover:after,
.nav-tabs .nav-item .nav-link.active:focus:after {
  border-bottom: 11px solid #FFFFFF;
  border-left: 11px solid transparent;
  border-right: 11px solid transparent;
  content: "";
  display: inline-block;
  position: absolute;
  right: 40%;
  bottom: 5px;
}
.nav-tabs .nav-item .nav-link.active:before,
.nav-tabs .nav-item .nav-link.active:hover:before,
.nav-tabs .nav-item .nav-link.active:focus:before {
  border-bottom: 11px solid #F1EAE0;
  border-left: 11px solid transparent;
  border-right: 11px solid transparent;
  content: "";
  display: inline-block;
  position: absolute;
  right: 40%;
  bottom: 6px;
}
.nav-tabs .nav-item.show .nav-link {
  background-color: transparent;
}
.nav-tabs .dropdown-menu {
  margin-top: -6px;
  margin-left: -46px;
  border-radius: 8px;
}
.nav-tabs .dropdown-menu .dropdown-item:hover,
.nav-tabs .dropdown-menu .dropdown-item.active {
  color: #FFFFFF;
  background-color: #68B3C8;
}
.nav-tabs .dropdown-menu :before {
  border-bottom: 11px solid #F1EAE0;
  border-left: 11px solid transparent;
  border-right: 11px solid transparent;
  content: "";
  display: inline-block;
  position: absolute;
  right: 12px;
  top: -11px;
}
.nav-tabs .dropdown-menu :after {
  border-bottom: 11px solid #FFFCF5;
  border-left: 11px solid transparent;
  border-right: 11px solid transparent;
  content: "";
  display: inline-block;
  position: absolute;
  right: 12px;
  top: -10px;
}

.profile-content .tab-content .tab-pane {
  min-height: 200px;
}
.profile-content .tab-content #tweets, .profile-content .tab-content #connections, .profile-content .tab-content #media {
  height: 100%;
}

/*             Navigation Pills               */
.nav-pills .nav-item + .nav-link {
  margin-left: 0;
}
.nav-pills .nav-item .nav-link {
  border: 1px solid #66615B;
  border-radius: 0;
  color: #66615B;
  font-weight: 600;
  margin-left: -1px;
  padding: 10px 25px;
}
.nav-pills .nav-item.active .nav-link,
.nav-pills .nav-item.active .nav-link:hover,
.nav-pills .nav-item.active .nav-link:focus {
  background-color: #66615B;
  color: #FFFFFF;
}
.nav-pills .nav-item:first-child .nav-link {
  border-radius: 30px 0 0 30px !important;
  margin: 0;
}
.nav-pills .nav-item:last-child .nav-link {
  border-radius: 0 30px 30px 0 !important;
}
.nav-pills .nav-item .nav-link.active {
  background-color: #66615B;
  color: #FFFFFF;
}

.nav-pills-primary .nav-item .nav-link {
  border: 1px solid #51cbce !important;
  color: #51cbce !important;
}
.nav-pills-primary .nav-item .nav-link.active {
  border: 1px solid #51cbce !important;
  color: #FFFFFF !important;
}

.nav-pills-danger .nav-item .nav-link {
  border: 1px solid #f5593d !important;
  color: #f5593d !important;
}
.nav-pills-danger .nav-item .nav-link.active {
  border: 1px solid #f5593d !important;
  color: #FFFFFF !important;
}

.nav-pills-info .nav-item .nav-link {
  border: 1px solid #51bcda !important;
  color: #51bcda !important;
}
.nav-pills-info .nav-item .nav-link.active {
  border: 1px solid #51bcda !important;
  color: #FFFFFF !important;
}

.nav-pills-success .nav-item .nav-link {
  border: 1px solid #6bd098 !important;
  color: #6bd098 !important;
}
.nav-pills-success .nav-item .nav-link.active {
  border: 1px solid #6bd098 !important;
  color: #FFFFFF !important;
}

.nav-pills-warning .nav-item .nav-link {
  border: 1px solid #fbc658 !important;
  color: #fbc658 !important;
}
.nav-pills-warning .nav-item .nav-link.active {
  border: 1px solid #fbc658 !important;
  color: #FFFFFF !important;
}

.pagination > .page-item > .page-link,
.pagination > .page-item > span,
.pagination > .page-item:first-child > .page-link,
.pagination > .page-item:first-child > span,
.pagination > .page-item:last-child > .page-link,
.pagination > .page-item:last-child > span {
  background-color: transparent;
  border: 2px solid #f5593d;
  border-radius: 20px;
  color: #f5593d;
  height: 36px;
  margin: 0 2px;
  min-width: 36px;
  font-weight: 600;
}

.nav-pills-danger > .page-item > .page-link,
.pagination-danger > .page-item > .page-link,
.pagination-danger > .page-item > span,
.pagination-danger > .page-item:first-child > .page-link,
.pagination-danger > .page-item:first-child > span,
.pagination-danger > .page-item:last-child > .page-link,
.pagination-danger > .page-item:last-child > span {
  border: 2px solid #f5593d;
  color: #f5593d;
}

.nav-pills-danger > .page-item.active > .page-link,
.nav-pills-danger > .page-item.active > .page-link:hover,
.nav-pills-danger > .page-item.active > .page-link:focus,
.pagination-danger > .page-item > .page-link:hover,
.pagination-danger > .page-item > .page-link:focus,
.pagination-danger > .page-item > .page-link:active,
.pagination-danger > .page-item.active > .page-link,
.pagination-danger > .page-item.active > span,
.pagination-danger > .page-item.active > .page-link:hover,
.pagination-danger > .page-item.active > span:hover,
.pagination-danger > .page-item.active > .page-link:focus,
.pagination-danger > .page-item.active > span:focus {
  background-color: #f5593d !important;
  border-color: #f5593d !important;
  color: #FFFFFF;
}

.nav-text, .nav-icons {
  margin: 0 0 10px 0;
}
.nav-text > li > a, .nav-icons > li > a {
  display: block;
  padding: 0px 18px;
  color: #9A9A9A;
  text-align: center;
  opacity: 0.8;
  filter: alpha(opacity=80);
}
.nav-text > li > a:hover, .nav-text > li > a:focus, .nav-icons > li > a:hover, .nav-icons > li > a:focus {
  background-color: transparent;
  opacity: 1;
  filter: alpha(opacity=100);
}
.nav-text > li:first-child a, .nav-icons > li:first-child a {
  padding-left: 0;
}
.nav-text > li.active a, .nav-icons > li.active a {
  color: #51bcda;
}

.nav-icons > li {
  display: inline-block;
}
.nav-icons > li > a {
  padding: 0 10px;
  margin-bottom: 10px;
}
.nav-icons > li > a i {
  font-size: 1.6em;
  margin-bottom: 10px;
  width: 1.6em;
}

.nav-icons.nav-stacked > li {
  display: block;
}
.nav-icons.nav-stacked > li > a {
  margin-bottom: 20px;
}

.nav-blue > li.active a {
  color: #51cbce;
}

.nav-azure > li.active a {
  color: #51bcda;
}

.nav-green > li.active a {
  color: #6bd098;
}

.nav-orange > li.active a {
  color: #fbc658;
}

.nav-red > li.active a {
  color: #f5593d;
}

.nav-text {
  margin: 0 0 10px 0;
}
.nav-text > li > a {
  font-size: 0.9em;
  text-transform: uppercase;
  padding: 3px 0;
  text-align: left;
  font-weight: 500;
}
.nav-text > li:first-child > a {
  padding-top: 0;
}
.nav-text h4 {
  margin-top: 0;
}

.nav-text:not(.nav-stacked) > li {
  display: inline-block;
}
.nav-text:not(.nav-stacked) > li > a {
  margin-right: 15px;
}

.page-item:first-child .page-link,
.page-item:last-child .page-link {
  border-bottom-left-radius: 20px;
  border-top-left-radius: 20px;
  border-bottom-right-radius: 20px;
  border-top-right-radius: 20px;
}

.nav-pills-default .nav-item.show .nav-link,
.nav-pills-default .nav-link.active {
  background-color: #66615B !important;
}

.nav-pills-primary .nav-item.show .nav-link,
.nav-pills-primary .nav-link.active {
  background-color: #51cbce !important;
}

.nav-pills-info .nav-item.show .nav-link,
.nav-pills-info .nav-link.active {
  background-color: #51bcda !important;
}

.nav-pills-warning .nav-item.show .nav-link,
.nav-pills-warning .nav-link.active {
  background-color: #fbc658 !important;
}

.nav-pills-success .nav-item.show .nav-link,
.nav-pills-success .nav-link.active {
  background-color: #6bd098 !important;
}

.nav-pills-danger .nav-item.show .nav-link,
.nav-pills-danger .nav-link.active {
  background-color: #f5593d !important;
}

.pagination > li > a:hover,
.pagination > li > a:focus,
.pagination > li > a:active,
.pagination > li.active > a,
.pagination > li.active > span,
.pagination > li.active > a:hover,
.pagination > li.active > span:hover,
.pagination > li.active > a:focus,
.pagination > li.active > span:focus {
  background-color: #f5593d;
  border-color: #f5593d;
  color: #FFFFFF;
}

.page-item.active .page-link {
  background-color: #f5593d;
  color: white;
  border-color: #f5593d;
}

.nav-pills .nav-link {
  border-radius: 0;
}

.panel {
  border: 0;
  border-bottom: 1px solid #DDDDDD;
  box-shadow: none;
}

.panel-default > .panel-heading {
  background-color: #FFFFFF;
  border-color: #FFFFFF;
}

.panel-group .panel {
  border-radius: 0;
}

.panel-title {
  font-size: 1.35em;
}
.panel-title a {
  display: block;
  padding: .75rem;
}
.panel-title i {
  float: right;
  padding-top: 5px;
}

.panel-title a:hover,
.panel-title a:focus {
  text-decoration: none;
}

.gsdk-collapse {
  display: block;
  height: 0px;
  visibility: visible;
  overflow: hidden;
}

#accordion .panel-title a:hover,
#accordion .panel-title a:focus {
  color: #f5593d;
}
#accordion .card-header {
  background-color: #FFFFFF;
}

.card-collapse {
  padding: 0 !important;
}

.panel-title a[aria-expanded="true"] i {
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
  -webkit-transition: all 300ms linear;
  -moz-transition: all 300ms linear;
  -o-transition: all 300ms linear;
  -ms-transition: all 300ms linear;
  transition: all 300ms linear;
}

.carousel-control {
  background-color: #f5593d;
  border-radius: 50%;
  opacity: 1;
  text-shadow: none;
}
.carousel-control:hover, .carousel-control:focus {
  opacity: 1;
  background-color: #f33816;
}

.carousel-control.left {
  height: 30px;
  top: 48%;
  width: 30px;
  left: 20px;
  opacity: 0;
}

.carousel-control.right {
  height: 30px;
  right: 20px;
  top: 48%;
  width: 30px;
  opacity: 0;
}

.carousel-control .icon-prev, .carousel-control .icon-next, .carousel-control .fa, .carousel-control .fa {
  display: inline-block;
  z-index: 5;
}

.carousel-control-prev .fa {
  font-size: 26px;
  margin: 2px;
  padding-right: 3px;
}

.carousel-control-next .fa {
  font-size: 26px;
  margin: 2px;
  padding-left: 3px;
}

.carousel-control.left, .carousel-control.right {
  background-image: none;
}

.page-carousel {
  border-radius: 12px !important;
  border: none !important;
}

.carousel-inner .carousel-item img {
  border-radius: 12px;
  box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
  height: 400px;
  width: 100%;
}

.carousel-indicators {
  bottom: 0px;
}

.carousel-indicators li {
  background-color: #FFFFFF;
  border: 0 none;
}

.carousel-indicators .active {
  background-color: #f5593d;
}

.page-carousel:hover .carousel-control.right,
.page-carousel:hover .carousel-control.left {
  opacity: 1;
}

.modal-header {
  border-bottom: 1px solid #DDDDDD;
  padding: 20px;
  text-align: center;
  display: block !important;
}
.modal-header.no-border-header {
  border-bottom: 0 none !important;
}
.modal-header.no-border-header .modal-title {
  margin-top: 20px;
}
.modal-header .modal-title {
  color: #333333;
}
.modal-header button.close {
  margin-top: -25px;
}

.modal-content {
  border: 0 none;
  border-radius: 10px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.15), 0 0 1px 1px rgba(0, 0, 0, 0.1);
}
.modal-content .modal-header h6 {
  margin-top: 10px;
}

.modal-dialog {
  padding-top: 60px;
}

.modal-body {
  padding: 20px 50px;
  color: #000;
}

.modal-footer {
  border-top: 1px solid #DDDDDD;
  padding: 0px;
}
.modal-footer.no-border-footer {
  border-top: 0 none;
}

.modal-footer .left-side, .modal-footer .right-side {
  display: inline-block;
  text-align: center;
  width: 49%;
}

.modal-footer .btn-link {
  padding: 20px;
  width: 100%;
}

.modal-footer .divider {
  background-color: #DDDDDD;
  display: inline-block;
  float: inherit;
  height: 63px;
  margin: 0px -3px;
  width: 1px;
}

.modal.fade .modal-dialog {
  transform: none;
  -webkit-transform: none;
  -moz-transform: none;
}

.modal.in .modal-dialog {
  transform: none;
  -webkit-transform: none;
  -moz-transform: none;
}

.modal-backdrop.in {
  opacity: 0.25;
}

.modal-register .modal-footer {
  text-align: center;
  margin-bottom: 25px;
  padding: 20px 0 15px;
}
.modal-register .modal-footer span {
  width: 100%;
}

.modal-header:after {
  display: table;
  content: " ";
}

.modal-header:before {
  display: table;
  content: " ";
}

/*          Changes for small display      */
@media (max-width: 767px) {
  .navbar-transparent {
    background-color: rgba(0, 0, 0, 0.45);
  }

  body {
    position: relative;
    font-size: 12px;
  }

  h6 {
    font-size: 1em;
  }

  .navbar .container {
    left: 0;
    width: 100%;
    -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    position: relative;
  }

  .navbar .navbar-nav .dropdown-menu {
    height: 400px;
    overflow-y: scroll;
  }

  .demo-header .motto {
    padding-top: 30% !important;
  }

  .navbar-toggle .icon-bar {
    display: block;
    position: relative;
    background: #fff;
    width: 24px;
    height: 2px;
    border-radius: 1px;
    margin: 0 auto;
  }

  .fog-low {
    margin-bottom: -35px;
  }

  .presentation-title {
    font-size: 5em;
  }

  .presentation-subtitle {
    margin-top: 40px;
  }

  .title-brand {
    max-width: 450px;
  }
  .title-brand .type {
    font-size: 16px;
  }

  .navbar-header .navbar-toggle {
    margin-top: 12px;
    width: 40px;
    height: 40px;
  }

  .bar1,
  .bar2,
  .bar3 {
    outline: 1px solid transparent;
  }

  .bar1 {
    top: 0px;
    -webkit-animation: topbar-back 500ms linear 0s;
    -moz-animation: topbar-back 500ms linear 0s;
    animation: topbar-back 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }

  .bar2 {
    opacity: 1;
  }

  .bar3 {
    bottom: 0px;
    -webkit-animation: bottombar-back 500ms linear 0s;
    -moz-animation: bottombar-back 500ms linear 0s;
    animation: bottombar-back 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }

  .toggled .bar1 {
    top: 6px;
    -webkit-animation: topbar-x 500ms linear 0s;
    -moz-animation: topbar-x 500ms linear 0s;
    animation: topbar-x 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }

  .toggled .bar2 {
    opacity: 0;
  }

  .toggled .bar3 {
    bottom: 6px;
    -webkit-animation: bottombar-x 500ms linear 0s;
    -moz-animation: bottombar-x 500ms linear 0s;
    animation: bottombar-x 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }

  @keyframes topbar-x {
    0% {
      top: 0px;
      transform: rotate(0deg);
    }
    45% {
      top: 6px;
      transform: rotate(145deg);
    }
    75% {
      transform: rotate(130deg);
    }
    100% {
      transform: rotate(135deg);
    }
  }
  @-webkit-keyframes topbar-x {
    0% {
      top: 0px;
      -webkit-transform: rotate(0deg);
    }
    45% {
      top: 6px;
      -webkit-transform: rotate(145deg);
    }
    75% {
      -webkit-transform: rotate(130deg);
    }
    100% {
      -webkit-transform: rotate(135deg);
    }
  }
  @-moz-keyframes topbar-x {
    0% {
      top: 0px;
      -moz-transform: rotate(0deg);
    }
    45% {
      top: 6px;
      -moz-transform: rotate(145deg);
    }
    75% {
      -moz-transform: rotate(130deg);
    }
    100% {
      -moz-transform: rotate(135deg);
    }
  }
  @keyframes topbar-back {
    0% {
      top: 6px;
      transform: rotate(135deg);
    }
    45% {
      transform: rotate(-10deg);
    }
    75% {
      transform: rotate(5deg);
    }
    100% {
      top: 0px;
      transform: rotate(0);
    }
  }
  @-webkit-keyframes topbar-back {
    0% {
      top: 6px;
      -webkit-transform: rotate(135deg);
    }
    45% {
      -webkit-transform: rotate(-10deg);
    }
    75% {
      -webkit-transform: rotate(5deg);
    }
    100% {
      top: 0px;
      -webkit-transform: rotate(0);
    }
  }
  @-moz-keyframes topbar-back {
    0% {
      top: 6px;
      -moz-transform: rotate(135deg);
    }
    45% {
      -moz-transform: rotate(-10deg);
    }
    75% {
      -moz-transform: rotate(5deg);
    }
    100% {
      top: 0px;
      -moz-transform: rotate(0);
    }
  }
  @keyframes bottombar-x {
    0% {
      bottom: 0px;
      transform: rotate(0deg);
    }
    45% {
      bottom: 6px;
      transform: rotate(-145deg);
    }
    75% {
      transform: rotate(-130deg);
    }
    100% {
      transform: rotate(-135deg);
    }
  }
  @-webkit-keyframes bottombar-x {
    0% {
      bottom: 0px;
      -webkit-transform: rotate(0deg);
    }
    45% {
      bottom: 6px;
      -webkit-transform: rotate(-145deg);
    }
    75% {
      -webkit-transform: rotate(-130deg);
    }
    100% {
      -webkit-transform: rotate(-135deg);
    }
  }
  @-moz-keyframes bottombar-x {
    0% {
      bottom: 0px;
      -moz-transform: rotate(0deg);
    }
    45% {
      bottom: 6px;
      -moz-transform: rotate(-145deg);
    }
    75% {
      -moz-transform: rotate(-130deg);
    }
    100% {
      -moz-transform: rotate(-135deg);
    }
  }
  @keyframes bottombar-back {
    0% {
      bottom: 6px;
      transform: rotate(-135deg);
    }
    45% {
      transform: rotate(10deg);
    }
    75% {
      transform: rotate(-5deg);
    }
    100% {
      bottom: 0px;
      transform: rotate(0);
    }
  }
  @-webkit-keyframes bottombar-back {
    0% {
      bottom: 6px;
      -webkit-transform: rotate(-135deg);
    }
    45% {
      -webkit-transform: rotate(10deg);
    }
    75% {
      -webkit-transform: rotate(-5deg);
    }
    100% {
      bottom: 0px;
      -webkit-transform: rotate(0);
    }
  }
  @-moz-keyframes bottombar-back {
    0% {
      bottom: 6px;
      -moz-transform: rotate(-135deg);
    }
    45% {
      -moz-transform: rotate(10deg);
    }
    75% {
      -moz-transform: rotate(-5deg);
    }
    100% {
      bottom: 0px;
      -moz-transform: rotate(0);
    }
  }
  @-webkit-keyframes fadeIn {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }
  @-moz-keyframes fadeIn {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }
  @keyframes fadeIn {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }
  .navbar-nav {
    margin: 1px -15px;
  }
  .navbar-nav .open .dropdown-menu > li > a {
    padding: 15px 15px 5px 50px;
  }
  .navbar-nav .open .dropdown-menu > li:first-child > a {
    padding: 5px 15px 5px 50px;
  }
  .navbar-nav .open .dropdown-menu > li:last-child > a {
    padding: 15px 15px 25px 50px;
  }

  [class*="navbar-"] .navbar-nav > li > a, [class*="navbar-"] .navbar-nav > li > a:hover, [class*="navbar-"] .navbar-nav > li > a:focus, [class*="navbar-"] .navbar-nav .active > a, [class*="navbar-"] .navbar-nav .active > a:hover, [class*="navbar-"] .navbar-nav .active > a:focus, [class*="navbar-"] .navbar-nav .open .dropdown-menu > li > a, [class*="navbar-"] .navbar-nav .open .dropdown-menu > li > a:hover, [class*="navbar-"] .navbar-nav .open .dropdown-menu > li > a:focus, [class*="navbar-"] .navbar-nav .navbar-nav .open .dropdown-menu > li > a:active {
    color: white;
  }
  [class*="navbar-"] .navbar-nav > li > a:not(.btn),
  [class*="navbar-"] .navbar-nav > li > a:hover,
  [class*="navbar-"] .navbar-nav > li > a:focus,
  [class*="navbar-"] .navbar-nav .open .dropdown-menu > li > a:not(.btn),
  [class*="navbar-"] .navbar-nav .open .dropdown-menu > li > a:hover,
  [class*="navbar-"] .navbar-nav .open .dropdown-menu > li > a:focus {
    opacity: .7;
    background: transparent;
  }
  [class*="navbar-"] .navbar-nav.navbar-nav .open .dropdown-menu > li > a:active {
    opacity: 1;
  }
  [class*="navbar-"] .navbar-nav .dropdown > a:hover .caret {
    border-bottom-color: #777;
    border-top-color: #777;
  }
  [class*="navbar-"] .navbar-nav .dropdown > a:active .caret {
    border-bottom-color: white;
    border-top-color: white;
  }

  .dropdown-menu {
    display: none;
  }

  .navbar-fixed-top {
    -webkit-backface-visibility: hidden;
  }

  .social-line .btn {
    margin: 0 0 10px 0;
  }

  .subscribe-line .form-control {
    margin: 0 0 10px 0;
  }

  .social-line.pull-right {
    float: none;
  }

  .footer nav.pull-left {
    float: none !important;
  }

  .footer:not(.footer-big) nav > ul li {
    float: none;
  }

  .social-area.pull-right {
    float: none !important;
  }

  .form-control + .form-control-feedback {
    margin-top: -8px;
  }

  .navbar-toggle:hover, .navbar-toggle:focus {
    background-color: transparent !important;
  }

  .btn.dropdown-toggle {
    margin-bottom: 0;
  }

  .media-post .author {
    width: 20%;
    float: none !important;
    display: block;
    margin: 0 auto 10px;
  }

  .media-post .media-body {
    width: 100%;
  }

  .modal-footer .btn-simple {
    padding: 15px;
  }

  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-x: scroll;
    overflow-y: hidden;
    border: 1px solid #dddddd;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    -webkit-overflow-scrolling: touch;
  }

  .typography-line {
    padding-left: 100px !important;
  }

  .projects-1 .project-pills .nav.nav-pills {
    display: block !important;
  }
  .projects-1 .project-pills .nav.nav-pills .nav-item:first-child .nav-link {
    border-radius: 12px 12px 0 0 !important;
    margin-left: -1px;
  }
  .projects-1 .project-pills .nav.nav-pills .nav-item.active:first-child .nav-link {
    border-radius: 12px 12px 0 0 !important;
    margin-left: -1px;
  }
  .projects-1 .project-pills .nav.nav-pills .nav-item:last-child .nav-link {
    border-radius: 0 0 12px 12px !important;
    margin-left: -1px;
  }

  .testimonials-2 .testimonials-people img,
  .section-testimonials .testimonials-people img {
    display: none !important;
  }

  .presentation-page .section-cards,
  .presentation-page .section-components {
    overflow: hidden;
  }
  .presentation-page .section-cards .first-card,
  .presentation-page .section-components .first-card {
    top: 750px !important;
  }
  .presentation-page .section-cards .first-card .grid__link,
  .presentation-page .section-components .first-card .grid__link {
    width: 200px !important;
  }
  .presentation-page .section-cards .fourth-card,
  .presentation-page .section-components .fourth-card {
    top: 940px !important;
  }
  .presentation-page .section-cards .fourth-card .grid__link,
  .presentation-page .section-components .fourth-card .grid__link {
    width: 200px !important;
  }
  .presentation-page .section-cards .fifth-card,
  .presentation-page .section-components .fifth-card {
    top: 950px !important;
    left: 220px !important;
  }
  .presentation-page .section-cards .fifth-card .grid__link,
  .presentation-page .section-components .fifth-card .grid__link {
    width: 200px !important;
  }
  .presentation-page .section-cards .sixth-card,
  .presentation-page .section-components .sixth-card {
    top: 1335px !important;
    left: 220px !important;
  }
  .presentation-page .section-cards .sixth-card .grid__link,
  .presentation-page .section-components .sixth-card .grid__link {
    width: 200px !important;
  }
  .presentation-page .section-cards .seventh-card,
  .presentation-page .section-components .seventh-card {
    top: 1155px !important;
  }
  .presentation-page .section-cards .seventh-card .grid__link,
  .presentation-page .section-components .seventh-card .grid__link {
    width: 200px !important;
  }
  .presentation-page .section-content .image-container .add-animation {
    height: 250px !important;
    width: 180px !important;
  }
  .presentation-page .section-components .image-container .components-macbook {
    width: 580px !important;
    height: 400px !important;
  }
  .presentation-page .section-components .image-container .social-img,
  .presentation-page .section-components .image-container .share-btn-img {
    display: none;
  }
  .presentation-page .section-components .title {
    margin-top: -100px !important;
  }
  .presentation-page .section-examples {
    padding-top: 0 !important;
    margin-top: 10px !important;
  }
  .presentation-page .section-icons .icons-nucleo .nc-icon:not(.ninth-left-icon):not(.seventh-left-icon):not(.third-left-icon) {
    display: none !important;
  }
}
@media screen and (max-width: 991px) {
  .navbar-collapse {
    position: fixed;
    display: block;
    top: 0;
    height: 100%;
    width: 230px;
    right: 0;
    z-index: 1032;
    visibility: visible;
    background-color: #999;
    overflow-y: visible;
    border-top: none;
    text-align: left;
    border-left: 1px solid #CCC5B9;
    padding-right: 0px;
    padding-left: 40px;
    padding-top: 15px;
    -webkit-transform: translate3d(230px, 0, 0);
    -moz-transform: translate3d(230px, 0, 0);
    -o-transform: translate3d(230px, 0, 0);
    -ms-transform: translate3d(230px, 0, 0);
    transform: translate3d(230px, 0, 0);
    -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }
  .navbar-collapse ul {
    position: relative;
    z-index: 3;
    height: 95%;
  }
  .navbar-collapse .navbar-nav > .nav-item:last-child {
    border-bottom: 0;
  }
  .navbar-collapse .navbar-nav > .nav-item > .nav-link {
    margin: 0px 0px;
    color: #9A9A9A !important;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 12px;
    line-height: 1.5em;
    padding: 15px 0;
  }
  .navbar-collapse .navbar-nav > .nav-item > .nav-link:hover, .navbar-collapse .navbar-nav > .nav-item > .nav-link:active {
    color: #403D39 !important;
  }
  .navbar-collapse::after {
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    position: absolute;
    background-color: #FFFCF5;
    background-image: linear-gradient(to bottom, transparent 0%, rgba(112, 112, 112, 0) 60%, rgba(186, 186, 186, 0.15) 100%);
    display: block;
    content: "";
    z-index: 1;
  }
  .navbar-collapse.has-image::after {
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    position: absolute;
    background-color: rgba(17, 17, 17, 0.8);
    display: block;
    content: "";
    z-index: 1;
  }

  .nav-open .navbar-collapse {
    -webkit-transform: translate3d(0px, 0, 0);
    -moz-transform: translate3d(0px, 0, 0);
    -o-transform: translate3d(0px, 0, 0);
    -ms-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
  }
  .nav-open .wrapper {
    left: 0;
    -webkit-transform: translate3d(-230px, 0, 0);
    -moz-transform: translate3d(-230px, 0, 0);
    -o-transform: translate3d(-230px, 0, 0);
    -ms-transform: translate3d(-230px, 0, 0);
    transform: translate3d(-230px, 0, 0);
  }
  .nav-open .navbar-translate {
    -webkit-transform: translate3d(-230px, 0, 0);
    -moz-transform: translate3d(-230px, 0, 0);
    -o-transform: translate3d(-230px, 0, 0);
    -ms-transform: translate3d(-230px, 0, 0);
    transform: translate3d(-230px, 0, 0);
  }

  .wrapper .navbar-collapse {
    display: none;
  }

  .fixed-top .navbar-collapse {
    background-color: #FF8F5E;
    float: left;
  }

  .dropdown.show .dropdown-menu,
  .dropdown .dropdown-menu {
    background-color: transparent;
    border: 0;
    transition: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    width: auto;
    border-radius: 0;
  }
  .dropdown.show .dropdown-menu .dropdown-item:hover,
  .dropdown.show .dropdown-menu .dropdown-item:focus,
  .dropdown .dropdown-menu .dropdown-item:hover,
  .dropdown .dropdown-menu .dropdown-item:focus {
    background-color: transparent;
    border-radius: 0;
  }
  .dropdown.show .dropdown-menu .dropdown-item a:hover, .dropdown.show .dropdown-menu .dropdown-item a:focus,
  .dropdown .dropdown-menu .dropdown-item a:hover,
  .dropdown .dropdown-menu .dropdown-item a:focus {
    color: #403D39;
  }
  .dropdown.show .dropdown-menu:before, .dropdown.show .dropdown-menu:after,
  .dropdown .dropdown-menu:before,
  .dropdown .dropdown-menu:after {
    display: none;
  }

  .dropdown .dropdown-menu {
    display: none;
  }
  .dropdown.show .dropdown-menu {
    display: block;
  }

  .navbar-translate {
    width: 100%;
    position: relative;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }

  .wrapper {
    -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    left: 0;
    background-color: white;
  }
}
@media screen and (min-width: 767px) {
  .section-sections .section-cols {
    position: relative;
    z-index: 1;
  }
  .section-sections .section-cols .row:first-of-type {
    margin-top: 50px;
    margin-right: -120px;
    margin-left: -15px;
    -webkit-transform: translate3d(-80px, 0, 0);
    -moz-transform: translate3d(-80px, 0, 0);
    -o-transform: translate3d(-80px, 0, 0);
    -ms-transform: translate3d(-80px, 0, 0);
    transform: translate3d(-80px, 0, 0);
  }
  .section-sections .section-cols .row:nth-of-type(2) {
    margin-left: -100px;
    margin-right: -15px;
    transform: translateX(80px);
  }
  .section-sections .section-cols .row:nth-of-type(3) {
    margin-right: -120px;
    margin-left: 0px;
    transform: translateX(-120px);
  }
  .section-sections .section-cols .row:nth-of-type(4) {
    margin-right: -100px;
    margin-left: -15px;
    transform: translateX(-50px);
  }
}
@media screen and (min-width: 991px) {
  .burger-menu .navbar-collapse {
    position: fixed;
    display: block;
    top: 0;
    height: 100%;
    width: 230px;
    right: 0px;
    z-index: 1032;
    visibility: visible;
    background-color: #999;
    overflow-y: visible;
    border-top: none;
    text-align: left;
    border-left: 1px solid #CCC5B9;
    padding-right: 0px;
    padding-left: 40px;
    padding-top: 15px;
    -webkit-transform: translate3d(230px, 0, 0);
    -moz-transform: translate3d(230px, 0, 0);
    -o-transform: translate3d(230px, 0, 0);
    -ms-transform: translate3d(230px, 0, 0);
    transform: translate3d(230px, 0, 0);
    -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }
  .burger-menu .navbar-collapse .navbar-nav .nav-item:last-child {
    border-bottom: 0;
  }
  .burger-menu .navbar-collapse .navbar-nav {
    height: 100%;
    z-index: 2;
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
  }
  .burger-menu .navbar-collapse::after {
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    position: absolute;
    background-color: #FFFCF5;
    background-image: linear-gradient(to bottom, transparent 0%, rgba(112, 112, 112, 0) 60%, rgba(186, 186, 186, 0.15) 100%);
    display: block;
    content: "";
    z-index: 1;
  }
  .burger-menu .navbar-collapse.has-image::after {
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    position: absolute;
    background-color: rgba(17, 17, 17, 0.8);
    display: block;
    content: "";
    z-index: 1;
  }
  .burger-menu .navbar .container .navbar-toggler {
    display: block;
    margin-top: 20px;
  }
  .burger-menu .navbar-translate {
    width: 100%;
    position: relative;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }
  .burger-menu .wrapper {
    -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    left: 0;
    background-color: white;
  }
  .burger-menu .body .navbar-collapse.collapse {
    height: 100vh !important;
  }
  .burger-menu .navbar-collapse:before, .burger-menu .navbar-collapse:after,
  .burger-menu .navbar-nav:before,
  .burger-menu .navbar-nav:after {
    display: table;
    content: " ";
  }
  .nav-open .burger-menu .navbar-collapse.collapse {
    -webkit-transform: translate3d(0px, 0, 0);
    -moz-transform: translate3d(0px, 0, 0);
    -o-transform: translate3d(0px, 0, 0);
    -ms-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
  }
  .nav-open .burger-menu .wrapper {
    left: 0;
    -webkit-transform: translate3d(-230px, 0, 0);
    -moz-transform: translate3d(-230px, 0, 0);
    -o-transform: translate3d(-230px, 0, 0);
    -ms-transform: translate3d(-230px, 0, 0);
    transform: translate3d(-230px, 0, 0);
  }
  .nav-open .burger-menu .navbar-translate {
    -webkit-transform: translate3d(-230px, 0, 0);
    -moz-transform: translate3d(-230px, 0, 0);
    -o-transform: translate3d(-230px, 0, 0);
    -ms-transform: translate3d(-230px, 0, 0);
    transform: translate3d(-230px, 0, 0);
  }
  .burger-menu .dropdown.show .dropdown-menu,
  .burger-menu .dropdown .dropdown-menu {
    background-color: transparent;
    border: 0;
    transition: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    width: auto;
    border-radius: 0;
  }
  .burger-menu .dropdown.show .dropdown-menu .dropdown-item:hover,
  .burger-menu .dropdown.show .dropdown-menu .dropdown-item:focus,
  .burger-menu .dropdown .dropdown-menu .dropdown-item:hover,
  .burger-menu .dropdown .dropdown-menu .dropdown-item:focus {
    background-color: transparent;
    border-radius: 0;
  }
  .burger-menu .dropdown.show .dropdown-menu .dropdown-item a:hover, .burger-menu .dropdown.show .dropdown-menu .dropdown-item a:focus,
  .burger-menu .dropdown .dropdown-menu .dropdown-item a:hover,
  .burger-menu .dropdown .dropdown-menu .dropdown-item a:focus {
    color: #403D39;
  }
  .burger-menu .dropdown.show .dropdown-menu:before, .burger-menu .dropdown.show .dropdown-menu:after,
  .burger-menu .dropdown .dropdown-menu:before,
  .burger-menu .dropdown .dropdown-menu:after {
    display: none;
  }
  .burger-menu .dropdown .dropdown-menu {
    display: none;
  }
  .burger-menu .dropdown.show .dropdown-menu {
    display: block;
  }
}
/*!
 * Datetimepicker for Bootstrap 3
 * ! version : 4.7.14
 * https://github.com/Eonasdan/bootstrap-datetimepicker/
 */
.sr-only,
.bootstrap-datetimepicker-widget .btn[data-action="incrementHours"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="incrementMinutes"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="decrementHours"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="decrementMinutes"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="showHours"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="showMinutes"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="togglePeriod"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="clear"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="today"]::after,
.bootstrap-datetimepicker-widget .picker-switch::after,
.bootstrap-datetimepicker-widget table th.prev::after,
.bootstrap-datetimepicker-widget table th.next::after {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}

.bootstrap-datetimepicker-widget {
  list-style: none;
}

.bootstrap-datetimepicker-widget a .btn:hover {
  background-color: transparent;
}

.bootstrap-datetimepicker-widget.dropdown-menu {
  padding: 4px;
  width: 16em;
}

@media (min-width: 768px) {
  .bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs {
    width: 38em;
  }
}
@media (min-width: 992px) {
  .bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs {
    width: 38em;
  }
}
@media (min-width: 1200px) {
  .bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs {
    width: 38em;
  }
}
.bootstrap-datetimepicker-widget.dropdown-menu.bottom:before {
  border-bottom: 11px solid #F1EAE0;
  border-left: 11px solid transparent;
  border-right: 11px solid transparent;
  content: "";
  display: inline-block;
  position: absolute;
  right: 12px;
  left: auto;
  top: -11px;
}

.bootstrap-datetimepicker-widget.dropdown-menu.bottom:after {
  border-bottom: 11px solid #FFFFFF;
  border-left: 11px solid transparent;
  border-right: 11px solid transparent;
  content: "";
  display: inline-block;
  position: absolute;
  right: 12px;
  left: auto;
  top: -11px;
}

.bootstrap-datetimepicker-widget.dropdown-menu.top {
  margin-top: auto;
  margin-bottom: -20px;
}

.bootstrap-datetimepicker-widget.dropdown-menu.top.open {
  margin-top: auto;
  margin-bottom: 5px;
  background-color: #FFFFFF;
}

.bootstrap-datetimepicker-widget.dropdown-menu.pull-right:before {
  left: auto;
  right: 6px;
}

.bootstrap-datetimepicker-widget.dropdown-menu.pull-right:after {
  left: auto;
  right: 7px;
}

.bootstrap-datetimepicker-widget .list-unstyled {
  margin: 0;
}

.bootstrap-datetimepicker-widget a[data-action] {
  padding: 6px 0;
  border-width: 0;
  color: #66615B;
  background-color: transparent;
}

.bootstrap-datetimepicker-widget a[data-action="togglePicker"],
.bootstrap-datetimepicker-widget a[data-action="togglePicker"]:hover {
  color: #429cb6 !important;
}

.bootstrap-datetimepicker-widget a[data-action]:hover {
  background-color: transparent;
  color: rgba(255, 255, 255, 0.85);
}

.bootstrap-datetimepicker-widget a[data-action]:active {
  box-shadow: none;
}

.bootstrap-datetimepicker-widget .timepicker-hour,
.bootstrap-datetimepicker-widget .timepicker-minute,
.bootstrap-datetimepicker-widget .timepicker-second {
  width: 40px;
  height: 40px;
  line-height: 40px;
  font-weight: 300;
  font-size: 1.5em;
  margin: 3px;
  border-radius: 50%;
}

.bootstrap-datetimepicker-widget button[data-action] {
  width: 38px;
  height: 38px;
  padding: 0;
}

.bootstrap-datetimepicker-widget .btn[data-action="incrementHours"]::after {
  content: "Increment Hours";
}

.bootstrap-datetimepicker-widget .btn[data-action="incrementMinutes"]::after {
  content: "Increment Minutes";
}

.bootstrap-datetimepicker-widget .btn[data-action="decrementHours"]::after {
  content: "Decrement Hours";
}

.bootstrap-datetimepicker-widget .btn[data-action="decrementMinutes"]::after {
  content: "Decrement Minutes";
}

.bootstrap-datetimepicker-widget .btn[data-action="showHours"]::after {
  content: "Show Hours";
}

.bootstrap-datetimepicker-widget .btn[data-action="showMinutes"]::after {
  content: "Show Minutes";
}

.bootstrap-datetimepicker-widget .btn[data-action="togglePeriod"]::after {
  content: "Toggle AM/PM";
}

.bootstrap-datetimepicker-widget .btn[data-action="clear"]::after {
  content: "Clear the picker";
}

.bootstrap-datetimepicker-widget .btn[data-action="today"]::after {
  content: "Set the date to today";
}

.bootstrap-datetimepicker-widget .picker-switch {
  text-align: center;
  border-radius: 4px;
}

.bootstrap-datetimepicker-widget .picker-switch::after {
  content: "Toggle Date and Time Screens";
}

.bootstrap-datetimepicker-widget .picker-switch td {
  padding: 0;
  margin: 0;
  height: auto;
  width: auto;
  line-height: inherit;
}

.bootstrap-datetimepicker-widget .picker-switch td span {
  line-height: 2.5;
  height: 2.5em;
  width: 100%;
  border-radius: 4px;
  margin: 2px 0px !important;
}

.bootstrap-datetimepicker-widget table {
  width: 100%;
  margin: 0;
}

.bootstrap-datetimepicker-widget table td > div, .bootstrap-datetimepicker-widget table th > div {
  text-align: center;
}

.bootstrap-datetimepicker-widget table th {
  height: 20px;
  line-height: 20px;
  width: 20px;
}

.bootstrap-datetimepicker-widget table th.picker-switch {
  width: 145px;
}

.bootstrap-datetimepicker-widget table th.disabled, .bootstrap-datetimepicker-widget table th.disabled:hover {
  background: none;
  color: #cfcfca;
  cursor: not-allowed;
}

.bootstrap-datetimepicker-widget table th.prev span, .bootstrap-datetimepicker-widget table th.next span {
  border-radius: 4px;
  height: 27px;
  width: 27px;
  line-height: 28px;
  font-size: 12px;
  border-radius: 50%;
  text-align: center;
}

.bootstrap-datetimepicker-widget table th.prev::after {
  content: "Previous Month";
}

.bootstrap-datetimepicker-widget table th.next::after {
  content: "Next Month";
}

.bootstrap-datetimepicker-widget table th.dow {
  text-align: center;
  border-bottom: 1px solid #E3E3E3;
  font-size: 12px;
  text-transform: uppercase;
  color: #9A9A9A;
  font-weight: 400;
  padding-bottom: 5px;
  padding-top: 10px;
}

.bootstrap-datetimepicker-widget table thead tr:first-child th {
  cursor: pointer;
}

.bootstrap-datetimepicker-widget table thead tr:first-child th:hover span, .bootstrap-datetimepicker-widget table thead tr:first-child th.picker-switch:hover {
  background: #E3E3E3;
}

.bootstrap-datetimepicker-widget table td > div {
  border-radius: 4px;
  height: 54px;
  line-height: 54px;
  width: 54px;
  text-align: center;
}

.bootstrap-datetimepicker-widget table td.cw > div {
  font-size: .8em;
  height: 20px;
  line-height: 20px;
  color: #cfcfca;
}

.bootstrap-datetimepicker-widget table td.day > div {
  height: 30px;
  line-height: 31px;
  width: 30px;
  text-align: center;
  padding: 0px;
  border-radius: 50%;
  margin: 0 auto;
  z-index: -1;
  position: relative;
}

.bootstrap-datetimepicker-widget table td.minute > div, .bootstrap-datetimepicker-widget table td.hour > div {
  border-radius: 50%;
}

.bootstrap-datetimepicker-widget table td.day:hover > div, .bootstrap-datetimepicker-widget table td.hour:hover > div, .bootstrap-datetimepicker-widget table td.minute:hover > div, .bootstrap-datetimepicker-widget table td.second:hover > div {
  background: #E3E3E3;
  cursor: pointer;
}

.bootstrap-datetimepicker-widget table td.old > div, .bootstrap-datetimepicker-widget table td.new > div {
  color: #cfcfca;
}

.bootstrap-datetimepicker-widget table td.today > div:before {
  content: '';
  display: inline-block;
  border: 0 0 7px 7px solid transparent;
  border-bottom-color: #68B3C8;
  border-top-color: rgba(0, 0, 0, 0.2);
  position: absolute;
  bottom: 4px;
  right: 4px;
}

.bootstrap-datetimepicker-widget table td.active > div, .bootstrap-datetimepicker-widget table td.active:hover > div {
  background-color: #68B3C8;
  color: #FFFFFF;
}

.bootstrap-datetimepicker-widget table td.active.today:before > div {
  border-bottom-color: #FFFFFF;
}

.bootstrap-datetimepicker-widget table td.disabled > div, .bootstrap-datetimepicker-widget table td.disabled:hover > div {
  background: none;
  color: #cfcfca;
  cursor: not-allowed;
}

.bootstrap-datetimepicker-widget table td span {
  display: inline-block;
  width: 40px;
  height: 40px;
  line-height: 40px;
  margin: 3px 3px;
  cursor: pointer;
  border-radius: 50%;
  text-align: center;
}

.bootstrap-datetimepicker-widget table td span:hover {
  background: #E3E3E3;
}

.bootstrap-datetimepicker-widget table td span.active {
  background-color: #68B3C8;
  color: #FFFFFF;
}

.bootstrap-datetimepicker-widget table td span.old {
  color: #cfcfca;
}

.bootstrap-datetimepicker-widget table td span.disabled, .bootstrap-datetimepicker-widget table td span.disabled:hover {
  background: none;
  color: #cfcfca;
  cursor: not-allowed;
}

.bootstrap-datetimepicker-widget .timepicker-picker span,
.bootstrap-datetimepicker-widget .timepicker-hours span,
.bootstrap-datetimepicker-widget .timepicker-minutes span {
  border-radius: 50% !important;
}

.bootstrap-datetimepicker-widget.usetwentyfour td.hour {
  height: 27px;
  line-height: 27px;
}

.input-group.date .input-group-addon {
  cursor: pointer;
}

.table-condensed > tbody > tr > td,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > td,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > thead > tr > th {
  padding: 1px;
  text-align: center;
  z-index: 1;
  cursor: pointer;
}

.bootstrap-datetimepicker-widget {
  opacity: 0;
  -webkit-transform: translate3d(0px, -10px, 0px);
  -moz-transform: translate3d(0, -10px, 0);
  -o-transform: translate3d(0, -10px, 0);
  -ms-transform: translate3d(0, -10px, 0);
  transform: translate3d(0px, -10px, 0px);
}
.bootstrap-datetimepicker-widget.top {
  -webkit-transform: translate3d(0px, 0px, 0px);
  -moz-transform: translate3d(0, 0px, 0);
  -o-transform: translate3d(0, 0px, 0);
  -ms-transform: translate3d(0, 0px, 0);
  transform: translate3d(0px, 0px, 0px);
}
.bootstrap-datetimepicker-widget.open {
  opacity: 1;
  -webkit-transform: translate3d(0, 10px, 0);
  -moz-transform: translate3d(0, 10px, 0);
  -o-transform: translate3d(0, 10px, 0);
  -ms-transform: translate3d(0, 10px, 0);
  transform: translate3d(0, 10px, 0);
  transition: transform 0.5s cubic-bezier(0.215, 0.61, 0.355, 1) 0s;
}

.bootstrap-datetimepicker-widget.open.top {
  -webkit-transform: translate3d(0, -10px, 0);
  -moz-transform: translate3d(0, -10px, 0);
  -o-transform: translate3d(0, -10px, 0);
  -ms-transform: translate3d(0, -10px, 0);
  transform: translate3d(0, -10px, 0);
}
.bootstrap-datetimepicker-widget.open.top:before {
  border-top: 11px solid #DCD9D1;
  border-left: 11px solid transparent;
  border-right: 11px solid transparent;
  content: "";
  display: inline-block;
  position: absolute;
  right: 12px;
  bottom: -12px;
}
.bootstrap-datetimepicker-widget.open.top:after {
  border-top: 11px solid #FFFCF5;
  border-left: 11px solid transparent;
  border-right: 11px solid transparent;
  content: "";
  display: inline-block;
  position: absolute;
  right: 12px;
  bottom: -11px;
}

.btn-twitter {
  color: #55acee !important;
}
.btn-twitter:hover, .btn-twitter:focus, .btn-twitter:active {
  color: #55acee !important;
}

.btn-facebook {
  color: #3b5998 !important;
}
.btn-facebook:hover, .btn-facebook:focus, .btn-facebook:active {
  color: #3b5998 !important;
}

.btn-google {
  color: #dd4b39 !important;
}
.btn-google:hover, .btn-google:focus, .btn-google:active {
  color: #dd4b39 !important;
}

.btn-linkedin {
  color: #0976b4 !important;
}
.btn-linkedin:hover, .btn-linkedin:focus, .btn-linkedin:active {
  color: #0976b4 !important;
}

.btn-twitter-bg {
  background-color: #55acee !important;
  border-color: #55acee !important;
}
.btn-twitter-bg:hover {
  background-color: #3ea1ec !important;
  border-color: #3ea1ec !important;
}

.btn-facebook-bg {
  background-color: #3b5998 !important;
  border-color: #3b5998 !important;
}
.btn-facebook-bg:hover {
  background-color: #344e86 !important;
  border-color: #344e86 !important;
}

.btn-google-bg {
  background-color: #dd4b39 !important;
  border-color: #dd4b39 !important;
}
.btn-google-bg:hover {
  background-color: #d73925 !important;
  border-color: #d73925 !important;
}

.btn-github-bg {
  background-color: #767676 !important;
  border-color: #767676 !important;
}
.btn-github-bg:hover {
  background-color: dimgray !important;
  border-color: dimgray !important;
}

.landing-alert {
  margin-bottom: 0;
}

.page-header {
  background-color: #B2AFAB;
  background-position: center center;
  background-size: cover;
  min-height: 100vh;
  max-height: 999px;
  overflow: hidden;
  position: relative;
  width: 100%;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: center;
}
.page-header .filter::after {
  background-color: rgba(0, 0, 0, 0.5);
  content: "";
  display: block;
  height: 100%;
  left: 0;
  top: 0;
  position: absolute;
  width: 100%;
  z-index: 1;
}
.page-header.page-header-small {
  min-height: 65vh !important;
  max-height: 700px;
}
.page-header.page-header-xs {
  min-height: 40vh !important;
}
.page-header.section-dark .content-center,
.page-header.section-dark .category-absolute {
  z-index: 1;
}

.page-header .motto {
  text-align: left;
  z-index: 3;
  color: #fff;
  position: relative;
}

.landing-section {
  padding: 100px 0;
  z-index: 1;
}

.section-buttons {
  z-index: 1;
}

.landing-section .btn-simple {
  padding: 0;
}

.landing-section .column {
  padding: 0 75px 0 25px;
}

.team-player .img-circle, .team-player .img-thumbnail {
  display: block;
  margin-top: 50px;
  margin-left: auto;
  margin-right: auto;
  width: 120px;
}

.contact-form {
  margin-top: 30px;
}

.contact-form label {
  margin-top: 15px;
}

.contact-form .btn {
  margin-top: 30px;
}

.navbar-relative {
  position: relative;
  z-index: 2;
}

#register-navbar a {
  color: #FFF;
}

.register-background .container {
  margin-top: 11%;
  position: relative;
  z-index: 3;
}

.register-footer {
  bottom: 20px;
  position: absolute;
  z-index: 1;
  width: 100%;
  background: transparent;
  color: #FFFFFF;
}

.register-footer .fa-heart {
  color: #EB5E28;
}

.register-card label {
  margin-top: 15px;
}

.register-card .title {
  color: #B33C12;
  text-align: center;
}

.register-card .btn {
  margin-top: 30px;
}

.register-card .forgot {
  text-align: center;
}

.profile-content {
  position: relative;
}

.owner {
  text-align: center;
}

.owner .avatar {
  padding: 15px;
  max-width: 180px;
  margin: -85px auto 0;
  display: inline-block;
}

.owner .name h4 {
  margin-top: 10px;
}

.profile-tabs {
  margin: 50px 0;
  min-height: 300px;
}

#following h3 {
  margin: 20px 0 40px 0;
}

.profile-content .tab-content .tab-pane.active {
  height: 200px;
}

.follows .unfollow {
  width: 15px;
}

#follows .follows .unfollow .checkbox {
  margin-top: -15px;
}

#follows .follows h6 {
  margin-top: 15px;
}

.follows hr {
  margin-top: 10px;
}

.title-brand {
  max-width: 730px;
  margin: 0 auto;
  position: relative;
  text-align: center;
  color: #FFFFFF;
  display: block;
}
.title-brand .type {
  position: absolute;
  font-size: 20px;
  background: #132026;
  padding: 6px 10px;
  border-radius: 4px;
  top: 0;
  font-weight: 600;
  margin-top: 10px;
  right: -15px;
}

.presentation-title {
  font-size: 8em;
  font-weight: 700;
  margin: 0;
  color: #FFFFFF;
  background: #fbf8ec;
  background: -moz-linear-gradient(top, #FFFFFF 35%, #4e6773 100%);
  background: -webkit-linear-gradient(top, #FFFFFF 35%, #4e6773 100%);
  background: linear-gradient(to bottom, #FFFFFF 35%, #4e6773 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.presentation-subtitle {
  font-size: 1.7em;
  color: #FFFFFF;
}

.category-absolute {
  position: absolute;
  text-align: center;
  top: 100vh;
  margin-top: -60px;
  padding: 0 15px;
  width: 100%;
  color: rgba(255, 255, 255, 0.5);
}
.category-absolute .creative-tim-logo {
  max-width: 140px;
  top: -2px;
  left: 3px;
  position: relative;
}

.fog-low {
  position: absolute;
  left: 0;
  bottom: 0;
  margin-left: -35%;
  margin-bottom: -50px;
  width: 110%;
  opacity: .85;
}
.fog-low img {
  width: 100%;
}
.fog-low.right {
  margin-left: 30%;
  opacity: 1;
}

.page-header .content-center {
  margin-top: 85px;
}

.moving-clouds {
  position: absolute;
  z-index: 1;
  bottom: 0;
  left: 0;
  width: 250.625em;
  height: 43.75em;
  -webkit-animation: cloudLoop 80s linear infinite;
  animation: cloudLoop 80s linear infinite;
}

@keyframes cloudLoop {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  100% {
    -webkit-transform: translate3d(-50%, 0, 0);
    transform: translate3d(-50%, 0, 0);
  }
}
.following img {
  max-width: 70px;
}

.tim-row{
    margin-bottom: 20px;
}

.tim-white-buttons {
    background-color: #777777;
}
.tim-title{
    margin-top: 30px;
    margin-bottom: 25px;
    min-height: 32px;
}
.tim-title.text-center{
    margin-bottom: 50px;
}
.typography-line{
    padding-left: 180px;
    margin-bottom: 20px;
    position: relative;
    width: 100%;
}
.typography-line .note{
    bottom: 10px;
    color: #c0c1c2;
    display: block;
    font-weight: 400;
    font-size: 13px;
    line-height: 13px;
    left: 0;
    margin-left: 20px;
    position: absolute;
    width: 260px;
}
.tim-row{
    padding-top: 50px;
}
.tim-row h3{
    margin-top: 0;
}
.switch{
    margin-right: 20px;
}
#navbar-full .navbar{
    border-radius: 0 !important;
    margin-bottom: 0;
    z-index: 2;
}
.space{
    height: 130px;
    display: block;
}
.space-110{
    height: 110px;
    display: block;
}
.space-50{
    height: 50px;
    display: block;
}
.space-70{
    height: 70px;
    display: block;
}
.navigation-example .img-src{
    background-attachment: scroll;
}

.main{
    background-color: #fff;
/*     position: relative; */

}
.navigation-example{
    background-image: url('../img/ilya-yakover.jpg');
    background-position: center center;
    background-size: cover;
    background-attachment: fixed;
    margin-top:0;
}
#notifications{
    background-color: #FFFFFF;
    display: block;
    width: 100%;
    position: relative;
}
#carousel{
    padding-top: 0;
}
.note{
    text-transform: capitalize;
}
.subscribe-form{
    padding-top: 20px;
}
.page-header .card-register .title{
    margin-bottom: 10px;
}
.space-100{
    height: 100px;
    display: block;
    width: 100%;
}
.sharing-area .btn{
    padding: 0.5rem 10px !important;
}

.be-social{
    padding-bottom: 20px;
/*     border-bottom: 1px solid #aaa; */
    margin: 0 auto 40px;
}
.txt-white{
    color: #FFFFFF;
}
.txt-gray{
    color: #ddd !important;
}
.footer{
    background-attachment: fixed;
    position: relative;
    line-height: 20px;
}
.footer nav > ul {
  list-style: none;
  margin: 0;
  padding: 0;
  font-weight: normal;
}
.footer nav > ul > li{
    display: inline-block;
    padding: 10px 15px;
    margin: 15px 3px;
    line-height: 20px;
    text-align: center;
}

.footer nav > ul a:not(.btn) {
  color: #777777;
  display: block;
  margin-bottom: 3px;
}
.footer nav > ul a:not(.btn):hover, .footer nav > ul a:not(.btn):focus {
  color: #E3E3E3;
}
.footer .copyright {
  color: #777777;
  padding: 10px 15px;
  font-size: 14px;
  margin: 15px 3px;
  line-height: 20px;
  text-align: center;
}
.footer .heart{
    color: #EB5E28;
}

.social-share{
    float: left;
    margin-right: 8px;
}
.social-share a{
    color: #FFFFFF;
}
#subscribe_email{
    border-radius: 0;
    border-left: 0;
    border-right: 0;
}
.pick-class-label{
    border-radius: 8px;
    color: #ffffff;
    cursor: pointer;
    display: inline-block;
    font-size: 75%;
    font-weight: bold;
    line-height: 1;
    margin-right: 10px;
    padding: 23px;
    text-align: center;
    vertical-align: baseline;
    white-space: nowrap;
}

.parallax{
    width:100%;
    height:570px;
    display: block;
    background-attachment: fixed;
    background-repeat:no-repeat;
    background-size:cover;
    background-position: center center;
}

.logo-container .logo{
    overflow: hidden;
    border-radius: 50%;
    border: 1px solid #333333;
    width: 50px;
    float: left;
}

.logo-container .brand{
    font-size: 18px;
    color: #FFFFFF;
    line-height: 20px;
    float: left;
    margin-left: 10px;
    margin-top: 5px;
    width: 75px;
    height: 50px;
}
.logo-container{
    margin-top: 5px;
}
.logo-container .logo img{
    width: 100%;
}
.navbar-small .logo-container .brand{
    color: #333333;
}
.demo-header{
    background-size: cover;
    /*background-color: #FF8F5E;*/
    background-position: center top;
    margin-top: -100px;
    min-height: 600px;
}
.demo-height{
    min-height: 102vh;
}
.demo-height .motto{
    padding-top: 20% !important;
}
.demo-header-image{
    background-image: url('../img/city.jpg');
}
.demo-header .motto{
    color: #FFFFFF;
    padding-top: 15%;
    text-align: center;
    z-index: 3;
}
.demo-header .motto h3{
    margin-bottom: 0;
}
.separator{
    content: "Separator";
    color: #FFFFFF;
    display: block;
    width: 100%;
    padding: 20px;
}
.separator-line{
    background-color: #EEE;
    height: 1px;
    width: 100%;
    display: block;
}
.separator.separator-gray{
    background-color: #EEEEEE;
}
.social-buttons-demo .btn{
    margin-right: 5px;
    margin-bottom: 7px;
}

.img-container{
    width: 100%;
    overflow: hidden;
}
.img-container img{
    width: 100%;
}
.lightbox img{
    width: 100%;
}
.lightbox .modal-content{
    overflow: hidden;
}
.lightbox .modal-body{
    padding: 0;
}
@media screen and (min-width: 991px){
    .lightbox .modal-dialog{
        width: 960px;
    }
}

@media screen{
    .section-buttons .btn,
    .section-buttons .btn-morphing{
        margin-bottom: 10px;
    }
    .parallax .motto{
        top: 170px;
        margin-top: 0;
        font-size: 60px;
        width: 270px;
    }
}

.presentation .loader{
    opacity: 0;
    display: block;
    transition: all 0.4s;
    -webkit-transition: all 0.4s;
    position: fixed;
    left: 50%;
    top: 50%;
    z-index: 1031;
    margin-left: -32px;
    margin-top: -32px;
}
.presentation  .loader.visible{
    display: block;
    opacity: 1;
}
.presentation  .modal-content{
    background-color: transparent;
    box-shadow: 0 0 0;
}
.presentation .modal-backdrop.in{
    opacity: 0.45;
}
.presentation .preload-image{
    display: none;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.15), 0 0 1px 1px rgba(0, 0, 0, 0.1);
}
/*       Loading dots  */

/*      transitions */
.presentation .front, .presentation .front:after, .presentation .front .btn, .logo-container .logo, .logo-container .brand{
     -webkit-transition: all .2s;
    -moz-transition: all .2s;
    -o-transition: all .2s;
    transition: all .2s;
}
.presentation .section{
    padding: 100px 0;
}
.presentation .colors{
    padding: 100px 0;
}
.presentation > .description{
    padding-top: 20px;
}
.presentation .section-rotation{
    padding: 140px 0;
}
.presentation .section-images{
    padding: 80px 0;
}
.presentation .section-thin{
    padding: 0;
}
.presentation .section-pay{
    padding-top: 20px;
}
.presentation .colors{
    padding: 70px 0;
    z-index: 7;
    position: relative;
    margin-top: -300px;
}
.presentation .colors{
    border-top: 1px solid #DDDDDD;
}
.presentation .card-container{
     -webkit-perspective: 800px;
    -moz-perspective: 800px;
    -o-perspective: 800px;
    perspective: 800px;
    min-height: 500px;
    width: 300px;
    position: relative;
    margin-top: 90px;
}
.presentation .card-component{
    -webkit-transform-style: preserve-3d;
   -moz-transform-style: preserve-3d;
     -o-transform-style: preserve-3d;
        transform-style: preserve-3d;
	position: relative;
	height: 600px;
}
.presentation .card-component .front{
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -o-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform: rotateY( -28deg );
    -moz-transform: rotateY( -28deg );
    -o-transform: rotateY( -28deg );
    transform: rotateY( -28deg );

	position: absolute;
	top: 0;
	left: 0;
	background-color: #FFF;
    width: 100%;
    cursor: pointer;
    box-shadow: 10px 4px 14px rgba(0, 0, 0, 0.12);
    border-radius: 10px;
    overflow: hidden;
    border: 1px solid rgba(0,0,0,.12);
}

.presentation .front img{
    z-index: 2;
    position: relative;
}

.presentation .card-container:hover .front{
    top: -10px;
}

.presentation .card-component img{
    width: 100%;
}
.presentation .description .col-md-3{
    width: 16%;
    margin-left: 4%;
}
.presentation .first-card{
    z-index: 6;
}
.presentation .second-card{
    z-index: 5;
}
.presentation .third-card{
    z-index: 4;
}
.presentation .fourth-card{
    z-index: 3;
}
.presentation h1,
.presentation h2{
    font-weight: 200;
}
.presentation h4,
.presentation h5,
.presentation h6{
    font-weight: 300;
}
.presentation h4{
    font-size: 18px;
    line-height: 24px;
}
.presentation .info h4{
    font-size: 24px;
    line-height: 28px;
}

.presentation .section-gray h1 small{
    color: #888888;
}
.presentation .color-container{
    text-align: center;
}
.presentation .color-container img{
    width: 100%;
    margin-bottom: 10px;
}
.presentation .circle-color{
    width: 40px;
    height: 40px;
    border-radius: 10px;
    display: block;
    background-color: #cccccc;
    margin: 0 auto;
}
.presentation .circle-red{
    background-color: #ff3b30;
}
.presentation .circle-blue{
    background-color: #3472f7;
}
.presentation .circle-azure{
    background-color: #2ca8ff;
}
.presentation .circle-green{
    background-color: #05ae0e;
}
.presentation .circle-orange{
    background-color: #ff9500;
}

.presentation .section-gray-gradient{
    background: rgb(255,255,255); /* Old browsers */
    background: -moz-linear-gradient(top,  rgba(255,255,255,1) 25%, rgba(231,231,231,1) 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(25%,rgba(255,255,255,1)), color-stop(100%,rgba(231,231,231,1))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 25%,rgba(231,231,231,1) 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  rgba(255,255,255,1) 25%,rgba(231,231,231,1) 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  rgba(255,255,255,1) 25%,rgba(231,231,231,1) 100%); /* IE10+ */
    background: linear-gradient(to bottom,  rgba(255,255,255,1) 25%,rgba(231,231,231,1) 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e7e7e7',GradientType=0 ); /* IE6-9 */
}
.presentation .section-black{
    background-color: #333;
}

.rotating-card-container {
    -webkit-perspective: 900px;
   -moz-perspective: 900px;
     -o-perspective: 900px;
        perspective: 900px;
        margin-bottom: 30px;
}

.rotating-card {
   -webkit-transition: all 1.3s;
   -moz-transition: all 1.3s;
     -o-transition: all 1.3s;
        transition: all 1.3s;
-webkit-transform-style: preserve-3d;
   -moz-transform-style: preserve-3d;
     -o-transform-style: preserve-3d;
        transform-style: preserve-3d;

    margin-top: 20px;
  position: relative;
   background: none repeat scroll 0 0 #FFFFFF;
    border-radius: 20px;
    color: #444444;
}
.rotating-card-container .rotate,
.rotating-card .back{
    -webkit-transform: rotateY( 180deg );
    -moz-transform: rotateY( 180deg );
    -o-transform: rotateY( 180deg );
    transform: rotateY( 180deg );
}
.rotating-card-container:hover .rotate{
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    transform: rotateY(0deg);
}


.rotating-card .front,
.rotating-card .back {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -o-backface-visibility: hidden;
    backface-visibility: hidden;

    position: absolute;
    top: 0;
    left: 0;
    background-color: #FFF;
    box-shadow: 0 3px 17px rgba(0,0,0,.15);
}

.rotating-card .front {
    z-index: 2;
}

.rotating-card .back {
    z-index: 3;
    height: 500px;
    width: 100%;
    display: block;
    padding: 0 15px;
    background-color: #e5e5e5;
}

.rotating-card .back-contaier {
  background-color: white;
  padding: 30px 15px;

}

.rotating-card .image{
    border-radius: 20px 20px 0 0;
}
.rotating-card-container,
.rotating-card .front,
.rotating-card .back {
  width: 100%;
  min-height: 500px;
  border-radius: 20px;
}
/*       Fix bug for IE      */

@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
    .rotating-card .front, .rotating-card .back{
        -ms-backface-visibility: visible;
        backface-visibility: visible;
    }
    .rotating-card .back {
        visibility: hidden;
        -ms-transition: all 0.2s cubic-bezier(.92,.01,.83,.67);
    }
    .rotating-card .front{
        z-index: 4;
    }
    .rotating-card-container:hover .back{
        z-index: 5;
        visibility: visible;
    }
}

.fixed-section{
    top: 100px;
    max-height: 80vh;
    position: -webkit-sticky;
    position: -moz-sticky;
    position: -ms-sticky;
    position: -o-sticky;
    position: sticky;
    bottom: auto;
}
.fixed-section ul{
    padding: 0 !important;
}
.fixed-section ul li{
    list-style: none;
}
.fixed-section li a{
    font-size: 14px;
    padding: 2px;
    display: block;
    color: #666666;
}
.fixed-section li a.active{
    color: #00bbff;
}



/* prettyprint */
 pre.prettyprint{
    background-color: #eee !important;
    margin-bottom: 30px;
    margin-top: 30px;
    padding: 20px !important;
    font-size: 13px;
    text-align: left;
    border-radius: 4px !important;
    border: 1px transparent !important;
}
.presentation .atv,
.presentation .str{
    color: #0D9814;
}
.presentation .tag,
.presentation .pln,
.presentation .kwd{
    color: #195CEC;
}
.presentation .atn{
    color: #2C93FF;
}
.presentation .pln{
    color: #333;
}
.presentation .com{
    color: #999;
}

.presentation .text-white{
    color: #FFFFFF;
    text-shadow: 0 1px 2px rgba(0,0,0,.13);
}
.presentation .section-images .card-image{
    border-radius: 6px 6px 0 0;
    overflow: hidden;
    box-shadow: 0 -3px 8px rgba(0,0,0,0);
}
.presentation .section-images .card-image .image{
/*     border-radius: 6px; */
}
@media (max-width: 1200px){
    .presentation .section-images .image img{
        width: 100%;
    }

}
.presentation .card-text-adjust{
    padding-left: 40px;
}
.presentation .info.info-separator{
    position: relative;
}
.presentation .info.info-separator:after{
    height: 100%;
    position: absolute;
    background-color: #ccc;
    width: 1px;
    content: "";
    right: -7px;
    top: 0;
}
.presentation .info li{
    padding: 5px 0;
    border-bottom: 1px solid #E5E5E5;
    color: #666666;
}
.presentation .info ul{
    width: 240px;
    margin: 10px auto;
}
.presentation .info li:last-child{
    border: 0;
}

/*      layer animation          */

.layers-container{
    display: block;
    margin-top: 50px;
    position: relative;
}
.layers-container img {
  position: absolute;
  width: 100%;
  height: auto;
  top: 0;
  left: 0;
  text-align: center;
}

.section-black {
  background-color: #333;
}

#layerHover{
  top: 30px;
}
#layerImage{
    top: 50px;
}
#layerBody{
  top: 75px;
}

.animate {
  transition: 1.5s ease-in-out;
  -moz-transition: 1.5s ease-in-out;
  -webkit-transition: 1.5s ease-in-out;
}

.down {
  transform: translate(0,45px);
  -moz-transform: translate(0,45px);
  -webkit-transform: translate(0,45px);
}

.down-2x {
   transform: translate(0,90px);
  -moz-transform: translate(0,90px);
  -webkit-transform: translate(0,90px);
}


.navbar-default.navbar-small .logo-container .brand{
    color: #333333;
}
.navbar-transparent.navbar-small .logo-container .brand{
    color: #FFFFFF;
}
.navbar-default.navbar-small .logo-container .brand{
    color: #333333;
}
.section-thin{
    padding-bottom: 0;
}

.info.info-separator{
    position: relative;
}
.info.info-separator:after{
    height: 100%;
    position: absolute;
    background-color: #ccc;
    width: 1px;
    content: "";
    right: -7px;
    top: 0;
}
@media (max-width: 767px){
.info.info-separator:after{
    display: none;
  }
}
.info li{
    padding: 5px 0;
    border-bottom: 1px solid #E5E5E5;
    color: #666666;
}
.info ul{
    width: 240px;
    margin: 10px auto;
}
.info li:last-child{
    border: 0;
}
.payment-methods i {
    font-size: 28px;
    padding: 0 3px;
    width: 38px;
}
.payment-methods h4 {
    font-size: 18px;
    line-height: 38px;
}
.info .description .btn{
    width: 240px;
    font-weight: 500;
}
#buyButtonHeroes{
    margin-top: 31px;
}
.right-click{
    width: 100%;
    height: 100%;
    background: rgba(51, 51, 51, 0.8);
    position: fixed;
    z-index: 20000;
    display: none;
}
.onclick{
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: 20001;
}
.container-right-click{
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
}
.container-right-click .card-price#card-price-small{
    margin-top: 70px;
     -webkit-transition: all .2s;
    -moz-transition: all .2s;
    -o-transition: all .2s;
    transition: all .2s;
    position: relative;
    z-index: 20003;

}
.container-right-click .card-price#card-price-big{
    margin-top: 40px;
     -webkit-transition: all .2s;
    -moz-transition: all .2s;
    -o-transition: all .2s;
    transition: all .2s;
      position: relative;
    z-index: 20003;

}
.animated {
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
}

@-webkit-keyframes bounceInDown {
  0%, 60%, 75%, 90%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -3000px, 0);
            transform: translate3d(0, -3000px, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, 25px, 0);
            transform: translate3d(0, 25px, 0);
  }

  75% {
    -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0);
  }

  90% {
    -webkit-transform: translate3d(0, 5px, 0);
            transform: translate3d(0, 5px, 0);
  }

  100% {
    -webkit-transform: none;
            transform: none;
  }
}

@keyframes bounceInDown {
  0%, 60%, 75%, 90%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -3000px, 0);
            transform: translate3d(0, -3000px, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, 25px, 0);
            transform: translate3d(0, 25px, 0);
  }

  75% {
    -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0);
  }

  90% {
    -webkit-transform: translate3d(0, 5px, 0);
            transform: translate3d(0, 5px, 0);
  }

  100% {
    -webkit-transform: none;
            transform: none;
  }
}

.bounceInDown {
  -webkit-animation-name: bounceInDown;
          animation-name: bounceInDown;
}

.container-right-click h4{
    color: white;margin-top: 45px;font-weight: 200;margin-bottom: 0;
}
.icon-class{
    fill: #75c3b6;
}
.navbar-header{
    min-width: 135px;
}

#demo-navbar{
    border-radius: 0;
    margin-bottom: 0px;
}
.download-area{
    margin-top: 30px;
}
.sharing-area{
    margin-top: 50px;
}
.sharing-area .btn{
    margin-top: 14px;
}

/* nucleo icons  */

.demo-iconshtml {
    font-size: 62.5%;
}
.demo-icons body {
    font-size: 1.6rem;
    font-family: sans-serif;
    color: #333333;
    background: white;
}
.demo-icons a {
    color: #608CEE;
    text-decoration: none;
}
.demo-icons header {
    text-align: center;
    padding: 100px 0 0;
}
.demo-icons header h1 {
    font-size: 2.8rem;
}
.demo-icons header p {
    font-size: 1.4rem;
    margin-top: 1em;
}
.demo-icons header a:hover {
    text-decoration: underline;
}
.demo-icons .nc-icon {
    font-size: 34px;
}
.demo-icons section {
    width: 90%;
    max-width: 1200px;
    margin: 50px auto;
}
.demo-icons section h2 {
    border-bottom: 1px solid #e2e2e2;
    padding: 0 0 1em .2em;
    margin-bottom: 1em;
}
.demo-icons ul::after {
    clear: both;
    content: "";
    display: table;
}
.demo-icons ul li {
    width: 25%;
    float: left;
    padding: 16px 0;
    text-align: center;
    border-radius: .25em;
    -webkit-transition: background 0.2s;
    -moz-transition: background 0.2s;
    transition: background 0.2s;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    overflow: hidden;
}
.demo-icons ul li:hover {
    background: #f4f4f4;
}
.demo-icons ul p, .demo-icons ul em, .demo-icons ul input {
    display: inline-block;
    font-size: 1rem;
    color: #999999;
    -webkit-user-select: auto;
    -moz-user-select: auto;
    -ms-user-select: auto;
    user-select: auto;
    white-space: nowrap;
    width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    cursor: pointer;
}
.demo-icons ul p {
    padding: 20px 0 0;
    font-size: 12px;
    margin: 0;
}
.demo-icons ul p::selection, .demo-icons ul em::selection {
    background: #608CEE;
    color: #efefef;
}
.demo-icons ul em {
    margin-bottom: 8px;
    font-size: 12px;
}
.demo-icons ul em::before {
    content: '[';
}
.demo-icons ul em::after {
    content: ']';
}
.demo-icons ul input {
    text-align: center;
    background: transparent;
    border: none;
    box-shadow: none;
    outline: none;
    display: none;
}

@media only screen and (min-width: 768px) {
    .demo-icons ul li {
        width: 20%;
        float: left;
    }
}
@media only screen and (min-width: 1024px) {
    .demo-icons ul li {
        width: 12.5%;
        float: left;
        padding: 32px 0;
    }
}

/* for components and tutorial page */
    /*pre.prettyprint{
        background-color: #FFFCF5;
        border: 0px;
        margin-bottom: 0;
        margin-top: 20px;
        padding: 20px;
        text-align: left;
    }*/
.atv, .str{
    color: #75c3b6;
}
.tag, .pln, .kwd{
    color: #7A9E9F;
}
.atn{
    color: #68B3C8;
}
.pln{
    color: #333;
}
.com{
    color: #999;
}
.space-top{
    margin-top: 30px;
}
.area-line{
    /*border: 1px solid #999;*/
    border-left: 0;
    border-right: 0;
    color: #666;
    display: block;
    margin-top: 20px;
    padding: 8px 0;
    text-align: center;
}
.area-line a{
    color: #666;
}
.container-fluid{
    padding-right: 15px;
    padding-left: 15px;
}
.example-pages{
    margin-top: 50px;
}
.main .section:first-of-type{
    position: relative;
    z-index: 2;
}
.profile-content{
    padding-top: 0;
    position: relative;
    z-index: 2;
}
/*--------------------------------

nucleo-icons Web Font - built using nucleoapp.com
License - nucleoapp.com/license/

-------------------------------- */
@font-face {
  font-family: 'nucleo-icons';
  src: url('../fonts/nucleo-icons.eot');
  src: url('../fonts/nucleo-icons.eot') format('embedded-opentype'), url('../fonts/nucleo-icons.woff2') format('woff2'), url('../fonts/nucleo-icons.woff') format('woff'), url('../fonts/nucleo-icons.ttf') format('truetype'), url('../fonts/nucleo-icons.svg') format('svg');
  font-weight: normal;
  font-style: normal;
}
/*------------------------
	base class definition
-------------------------*/
.nc-icon {
  display: inline-block;
  font: normal normal normal 14px/1 'nucleo-icons';
  font-size: inherit;
  speak: none;
  text-transform: none;
  /* Better Font Rendering */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
/*------------------------
  change icon size
-------------------------*/
.nc-icon.lg {
  font-size: 1.33333333em;
  vertical-align: -16%;
}
.nc-icon.x2 {
  font-size: 2em;
}
.nc-icon.x3 {
  font-size: 3em;
}
/*----------------------------------
  add a square/circle background
-----------------------------------*/
.nc-icon.square,
.nc-icon.circle {
  padding: 0.33333333em;
  vertical-align: -16%;
  background-color: #eee;
}
.nc-icon.circle {
  border-radius: 50%;
}
/*------------------------
  list icons
-------------------------*/
.nc-icon-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}
.nc-icon-ul > li {
  position: relative;
}
.nc-icon-ul > li > .nc-icon {
  position: absolute;
  left: -1.57142857em;
  top: 0.14285714em;
  text-align: center;
}
.nc-icon-ul > li > .nc-icon.lg {
  top: 0;
  left: -1.35714286em;
}
.nc-icon-ul > li > .nc-icon.circle,
.nc-icon-ul > li > .nc-icon.square {
  top: -0.19047619em;
  left: -1.9047619em;
}
/*------------------------
  spinning icons
-------------------------*/
.nc-icon.spin {
  -webkit-animation: nc-icon-spin 2s infinite linear;
  -moz-animation: nc-icon-spin 2s infinite linear;
  animation: nc-icon-spin 2s infinite linear;
}
@-webkit-keyframes nc-icon-spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}
@-moz-keyframes nc-icon-spin {
  0% {
    -moz-transform: rotate(0deg);
  }
  100% {
    -moz-transform: rotate(360deg);
  }
}
@keyframes nc-icon-spin {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
/*------------------------
  rotated/flipped icons
-------------------------*/
.nc-icon.rotate-90 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1);
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
}
.nc-icon.rotate-180 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
}
.nc-icon.rotate-270 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
  -webkit-transform: rotate(270deg);
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -o-transform: rotate(270deg);
  transform: rotate(270deg);
}
.nc-icon.flip-y {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0);
  -webkit-transform: scale(-1, 1);
  -moz-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  -o-transform: scale(-1, 1);
  transform: scale(-1, 1);
}
.nc-icon.flip-x {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: scale(1, -1);
  -moz-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  -o-transform: scale(1, -1);
  transform: scale(1, -1);
}
/*------------------------
	font icons
-------------------------*/

.nc-air-baloon::before {
    content: "\ea01";
}

.nc-album-2::before {
    content: "\ea02";
}

.nc-alert-circle-i::before {
    content: "\ea04";
}

.nc-align-center::before {
    content: "\ea03";
}

.nc-align-left-2::before {
    content: "\ea05";
}

.nc-ambulance::before {
    content: "\ea06";
}

.nc-app::before {
    content: "\ea07";
}

.nc-atom::before {
    content: "\ea08";
}

.nc-badge::before {
    content: "\ea09";
}

.nc-bag-16::before {
    content: "\ea0a";
}

.nc-bank::before {
    content: "\ea0b";
}

.nc-basket::before {
    content: "\ea0c";
}

.nc-bell-55::before {
    content: "\ea0d";
}

.nc-bold::before {
    content: "\ea0e";
}

.nc-book-bookmark::before {
    content: "\ea0f";
}

.nc-bookmark-2::before {
    content: "\ea10";
}

.nc-box-2::before {
    content: "\ea11";
}

.nc-box::before {
    content: "\ea12";
}

.nc-briefcase-24::before {
    content: "\ea13";
}

.nc-bulb-63::before {
    content: "\ea14";
}

.nc-bullet-list-67::before {
    content: "\ea15";
}

.nc-bus-front-12::before {
    content: "\ea16";
}

.nc-button-pause::before {
    content: "\ea17";
}

.nc-button-play::before {
    content: "\ea18";
}

.nc-button-power::before {
    content: "\ea19";
}

.nc-calendar-60::before {
    content: "\ea1a";
}

.nc-camera-compact::before {
    content: "\ea1b";
}

.nc-caps-small::before {
    content: "\ea1c";
}

.nc-cart-simple::before {
    content: "\ea1d";
}

.nc-chart-bar-32::before {
    content: "\ea1e";
}

.nc-chart-pie-36::before {
    content: "\ea1f";
}

.nc-chat-33::before {
    content: "\ea20";
}

.nc-check-2::before {
    content: "\ea21";
}

.nc-circle-10::before {
    content: "\ea22";
}

.nc-cloud-download-93::before {
    content: "\ea23";
}

.nc-cloud-upload-94::before {
    content: "\ea24";
}

.nc-compass-05::before {
    content: "\ea25";
}

.nc-controller-modern::before {
    content: "\ea26";
}

.nc-credit-card::before {
    content: "\ea27";
}

.nc-delivery-fast::before {
    content: "\ea28";
}

.nc-diamond::before {
    content: "\ea29";
}

.nc-email-85::before {
    content: "\ea2a";
}

.nc-favourite-28::before {
    content: "\ea2b";
}

.nc-glasses-2::before {
    content: "\ea2c";
}

.nc-globe-2::before {
    content: "\ea2d";
}

.nc-globe::before {
    content: "\ea2e";
}

.nc-hat-3::before {
    content: "\ea2f";
}

.nc-headphones::before {
    content: "\ea30";
}

.nc-html5::before {
    content: "\ea31";
}

.nc-image::before {
    content: "\ea32";
}

.nc-istanbul::before {
    content: "\ea33";
}

.nc-key-25::before {
    content: "\ea34";
}

.nc-laptop::before {
    content: "\ea35";
}

.nc-layout-11::before {
    content: "\ea36";
}

.nc-lock-circle-open::before {
    content: "\ea37";
}

.nc-map-big::before {
    content: "\ea38";
}

.nc-minimal-down::before {
    content: "\ea39";
}

.nc-minimal-left::before {
    content: "\ea3a";
}

.nc-minimal-right::before {
    content: "\ea3b";
}

.nc-minimal-up::before {
    content: "\ea3c";
}

.nc-mobile::before {
    content: "\ea3d";
}

.nc-money-coins::before {
    content: "\ea3e";
}

.nc-note-03::before {
    content: "\ea3f";
}

.nc-palette::before {
    content: "\ea40";
}

.nc-paper::before {
    content: "\ea41";
}

.nc-pin-3::before {
    content: "\ea42";
}

.nc-planet::before {
    content: "\ea43";
}

.nc-refresh-69::before {
    content: "\ea44";
}

.nc-ruler-pencil::before {
    content: "\ea45";
}

.nc-satisfied::before {
    content: "\ea46";
}

.nc-scissors::before {
    content: "\ea47";
}

.nc-send::before {
    content: "\ea48";
}

.nc-settings-gear-65::before {
    content: "\ea49";
}

.nc-settings::before {
    content: "\ea4a";
}

.nc-share-66::before {
    content: "\ea4b";
}

.nc-shop::before {
    content: "\ea4c";
}

.nc-simple-add::before {
    content: "\ea4d";
}

.nc-simple-delete::before {
    content: "\ea4e";
}

.nc-simple-remove::before {
    content: "\ea4f";
}

.nc-single-02::before {
    content: "\ea50";
}

.nc-single-copy-04::before {
    content: "\ea51";
}

.nc-sound-wave::before {
    content: "\ea52";
}

.nc-spaceship::before {
    content: "\ea53";
}

.nc-sun-fog-29::before {
    content: "\ea54";
}

.nc-support-17::before {
    content: "\ea55";
}

.nc-tablet-2::before {
    content: "\ea56";
}

.nc-tag-content::before {
    content: "\ea57";
}

.nc-tap-01::before {
    content: "\ea58";
}

.nc-tie-bow::before {
    content: "\ea59";
}

.nc-tile-56::before {
    content: "\ea5a";
}

.nc-time-alarm::before {
    content: "\ea5b";
}

.nc-touch-id::before {
    content: "\ea5c";
}

.nc-trophy::before {
    content: "\ea5d";
}

.nc-tv-2::before {
    content: "\ea5e";
}

.nc-umbrella-13::before {
    content: "\ea5f";
}

.nc-user-run::before {
    content: "\ea60";
}

.nc-vector::before {
    content: "\ea61";
}

.nc-watch-time::before {
    content: "\ea62";
}

.nc-world-2::before {
    content: "\ea63";
}

.nc-zoom-split::before {
    content: "\ea64";
}
.ytp{
    position: absolute;
    left: -20px;
    top: 150px;

    
}

.box{
        width: 200px;
        padding: 20px;
        text-align: center;
        margin: 120px auto;
        background: #2c3e50;
        color: #FFF;
        position: relative;
        border-radius: 5px;
        overflow: hidden;      
    }
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<body>
    <nav class="navbar navbar-toggleable-md fixed-top navbar-transparent" color-on-scroll="500">
        <div class="container">
            <div class="navbar-translate">
                <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                </button>
                <a class="navbar-brand" href="/home">MAX MUSIC</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/prime.max/?hl=fr" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="hidden-lg-up">Instagram</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Star on GitHub" data-placement="bottom" href="https://github.com/Maxence-schroeder01" target="_blank">
                            <i class="fa fa-github"></i>
                            <p class="hidden-lg-up">GitHub</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
      <div class="page-header section-dark" style="background-image: url('http://demos.creative-tim.com/paper-kit-2/assets/img/antoine-barres.jpg')">
          <div class="filter"></div>
      <div class="content-center">
        <div class="container">
          <div class="title-brand">
            <h1 class="presentation-title">MAX MUSIC</h1>
                      
                                                  <div class="box">
                                                    <a href="https://maxence-schroeder.xyz/img/app/electron-musique-maxence-schroeder.zip" >dowload</a>
                                                  </div>
            <div class="fog-low right">
            </div>
          </div>            
      </div>

             
          </div>
    </div>
</div>
</body>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.1.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script><script  src="./script.js"></script>

</body>
</html>
