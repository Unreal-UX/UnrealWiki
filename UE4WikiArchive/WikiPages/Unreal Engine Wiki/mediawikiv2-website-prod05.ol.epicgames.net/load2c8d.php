window.mwPerformance=(window.performance&&performance.mark)?performance:{mark:function(){}};window.mwNow=(function(){var perf=window.performance,navStart=perf&&perf.timing&&perf.timing.navigationStart;return navStart&&typeof perf.now==='function'?function(){return navStart+perf.now();}:function(){return Date.now();};}());window.isCompatible=function(str){var ua=str||navigator.userAgent;return!!((function(){'use strict';return!this&&!!Function.prototype.bind&&!!window.JSON;}())&&'querySelector'in document&&'localStorage'in window&&'addEventListener'in window&&!(ua.match(/webOS\/1\.[0-4]|SymbianOS|Series60|NetFront|Opera Mini|S40OviBrowser|MeeGo|Android.+Glass|^Mozilla\/5\.0 .+ Gecko\/$|googleweblight/)||ua.match(/PlayStation/i)));};(function(){var NORLQ,script;if(!isCompatible()){document.documentElement.className=document.documentElement.className.replace(/(^|\s)client-js(\s|$)/,'$1client-nojs$2');NORLQ=window.NORLQ||[];while(NORLQ.length){NORLQ.shift()();}window.NORLQ={push:function(
fn){fn();}};window.RLQ={push:function(){}};return;}function startUp(){mw.config=new mw.Map(true);mw.loader.addSource({"local":"/load.php"});mw.loader.register([["site","0w7ht31",[1]],["site.styles","04h752b",[],"site"],["noscript","0y9f5rs",[],"noscript"],["filepage","1dm4lcv"],["user.groups","0ihicp1",[5]],["user","0fkeqgb",[6],"user"],["user.styles","1awk4dx",[],"user"],["user.defaults","0nhfidf"],["user.options","0bhc5ha",[7],"private"],["user.tokens","071vexb",[],"private"],["mediawiki.language.data","14i3h1c",[176]],["mediawiki.skinning.elements","0qhobj6"],["mediawiki.skinning.content","1p7c6o2"],["mediawiki.skinning.interface","14p8c3p"],["mediawiki.skinning.content.parsoid","01rq23v"],["mediawiki.skinning.content.externallinks","07zci7y"],["jquery.accessKeyLabel","1gptklj",[25,133]],["jquery.appear","1rugmgm"],["jquery.async","1r2v9f4"],["jquery.autoEllipsis","0e32anl",[37]],["jquery.badge","1hvt8w4",[173]],["jquery.byteLength","0q69su1"],["jquery.byteLimit","1uzlx31",[21]],[
"jquery.checkboxShiftClick","10uljg8"],["jquery.chosen","13qucba"],["jquery.client","17xcq4z"],["jquery.color","0ttlse0",[27]],["jquery.colorUtil","15vszlr"],["jquery.confirmable","0aicwyg",[177]],["jquery.cookie","1juzmpp"],["jquery.expandableField","0d2bko5"],["jquery.farbtastic","030jr9g",[27]],["jquery.footHovzer","0t1o8ih"],["jquery.form","0pibbh8"],["jquery.fullscreen","02nz8tc"],["jquery.getAttrs","166bdbj"],["jquery.hidpi","0oxq691"],["jquery.highlightText","0ytha31",[133]],["jquery.hoverIntent","06e64j8"],["jquery.i18n","0j9w62d",[175]],["jquery.localize","19qy4c7"],["jquery.makeCollapsible","1w3lhqn"],["jquery.mockjax","1gnix0v"],["jquery.mw-jump","0zisg4t"],["jquery.placeholder","1pp4ag5"],["jquery.qunit","0ba96j1"],["jquery.spinner","0406l8o"],["jquery.jStorage","117xos0"],["jquery.suggestions","1f5jtbf",[37]],["jquery.tabIndex","0ufbkv6"],["jquery.tablesorter","1qgsdy0",[133,178]],["jquery.textSelection","0jyx5f0",[25]],["jquery.throttle-debounce","1ri0n6h"],[
"jquery.xmldom","1kc7nae"],["jquery.tipsy","18943c4"],["jquery.ui.core","1fyu59o",[56],"jquery.ui"],["jquery.ui.core.styles","1yj27xg",[],"jquery.ui"],["jquery.ui.accordion","0v1uq7p",[55,75],"jquery.ui"],["jquery.ui.autocomplete","1vo19wo",[64],"jquery.ui"],["jquery.ui.button","01hk1nd",[55,75],"jquery.ui"],["jquery.ui.datepicker","16wdbrw",[55],"jquery.ui"],["jquery.ui.dialog","08cy4kh",[59,62,66,68],"jquery.ui"],["jquery.ui.draggable","1xs2k6t",[55,65],"jquery.ui"],["jquery.ui.droppable","1izungw",[62],"jquery.ui"],["jquery.ui.menu","1dj6bj7",[55,66,75],"jquery.ui"],["jquery.ui.mouse","0ha7mjx",[75],"jquery.ui"],["jquery.ui.position","0k0khte",[],"jquery.ui"],["jquery.ui.progressbar","1fno9zl",[55,75],"jquery.ui"],["jquery.ui.resizable","0fl5k2g",[55,65],"jquery.ui"],["jquery.ui.selectable","0v8mbx7",[55,65],"jquery.ui"],["jquery.ui.slider","19duf9v",[55,65],"jquery.ui"],["jquery.ui.sortable","1be85d7",[55,65],"jquery.ui"],["jquery.ui.spinner","1snpyz7",[59],"jquery.ui"],[
"jquery.ui.tabs","0uhrbwc",[55,75],"jquery.ui"],["jquery.ui.tooltip","1s10mvw",[55,66,75],"jquery.ui"],["jquery.ui.widget","0lm3v87",[],"jquery.ui"],["jquery.effects.core","080kors",[],"jquery.ui"],["jquery.effects.blind","0gbay51",[76],"jquery.ui"],["jquery.effects.bounce","0cgl0zf",[76],"jquery.ui"],["jquery.effects.clip","12wi1gq",[76],"jquery.ui"],["jquery.effects.drop","1mu29im",[76],"jquery.ui"],["jquery.effects.explode","1fi6umb",[76],"jquery.ui"],["jquery.effects.fade","0gbvbfz",[76],"jquery.ui"],["jquery.effects.fold","034bcjf",[76],"jquery.ui"],["jquery.effects.highlight","0j7q4dv",[76],"jquery.ui"],["jquery.effects.pulsate","04lmd9j",[76],"jquery.ui"],["jquery.effects.scale","0664yuv",[76],"jquery.ui"],["jquery.effects.shake","14qdzq0",[76],"jquery.ui"],["jquery.effects.slide","0ylj3rb",[76],"jquery.ui"],["jquery.effects.transfer","13klptf",[76],"jquery.ui"],["json","0ihicp1"],["moment","0kfuxvf",[173]],["mediawiki.apihelp","1vmt664"],["mediawiki.template","0asqgrk"],[
"mediawiki.template.mustache","16akvd8",[93]],["mediawiki.template.regexp","0tjevug",[93]],["mediawiki.apipretty","1xxvnt2"],["mediawiki.api","1ly5rqt",[150,9]],["mediawiki.api.category","1ol5o6z",[138,97]],["mediawiki.api.edit","0oj1kjl",[138,148]],["mediawiki.api.login","0q1lhy5",[97]],["mediawiki.api.options","1p6ljuf",[97]],["mediawiki.api.parse","1l4iy05",[97]],["mediawiki.api.upload","0m4zlyx",[99]],["mediawiki.api.user","00vf6k5",[97]],["mediawiki.api.watch","1wmry7u",[97]],["mediawiki.api.messages","0zy5vz1",[97]],["mediawiki.api.rollback","1vtmi67",[97]],["mediawiki.content.json","1kwtx3o"],["mediawiki.confirmCloseWindow","19cp6hc"],["mediawiki.debug","0fvryte",[32]],["mediawiki.diff.styles","0nz3stk"],["mediawiki.feedback","18aq50t",[138,127,273]],["mediawiki.feedlink","1fdpo39"],["mediawiki.filewarning","0hficon",[269]],["mediawiki.ForeignApi","043udi3",[116]],["mediawiki.ForeignApi.core","0mugw2n",[97,265]],["mediawiki.helplink","13s1o4f"],["mediawiki.hidpi","1ee427v",[36],
null,null,"return'srcset'in new Image();"],["mediawiki.hlist","1mtca54"],["mediawiki.htmlform","1knetfn",[22,133]],["mediawiki.htmlform.checker","0pl5hfi",[52]],["mediawiki.htmlform.ooui","09h16y2",[269]],["mediawiki.htmlform.styles","05j4ojw"],["mediawiki.htmlform.ooui.styles","142j1uf"],["mediawiki.icon","1ljgfcw"],["mediawiki.inspect","06fihu8",[21,133]],["mediawiki.messagePoster","0k5zocm",[115]],["mediawiki.messagePoster.wikitext","1as1amn",[99,127]],["mediawiki.notification","0u8769f",[150]],["mediawiki.notify","0pyqvel"],["mediawiki.notification.convertmessagebox","0oktx94",[129]],["mediawiki.notification.convertmessagebox.styles","0v5o0wx"],["mediawiki.RegExp","0pe158l"],["mediawiki.pager.tablePager","1styamn"],["mediawiki.searchSuggest","0igjqcz",[35,48,97]],["mediawiki.sectionAnchor","1i9qnns"],["mediawiki.storage","1sdvjv4"],["mediawiki.Title","0rlhf7l",[21,150]],["mediawiki.Upload","1an4i3d",[103]],["mediawiki.ForeignUpload","0rx8oqj",[115,139]],[
"mediawiki.ForeignStructuredUpload.config","0msydx9"],["mediawiki.ForeignStructuredUpload","0qg4y7o",[141,140]],["mediawiki.Upload.Dialog","07odqh8",[144]],["mediawiki.Upload.BookletLayout","05t5wip",[139,177,262,91,271,273]],["mediawiki.ForeignStructuredUpload.BookletLayout","1udb4y7",[142,144,106,181,254,249]],["mediawiki.toc","11zops7",[154]],["mediawiki.Uri","0knztme",[150,95]],["mediawiki.user","11536tr",[104,137,8]],["mediawiki.userSuggest","0pv06mg",[48,97]],["mediawiki.util","0153wcw",[16,130]],["mediawiki.viewport","163qzc6"],["mediawiki.checkboxtoggle","0sjsyi0"],["mediawiki.checkboxtoggle.styles","01znfn6"],["mediawiki.cookie","00z883j",[29]],["mediawiki.toolbar","18s8fh6",[51]],["mediawiki.experiments","1cl5zg4"],["mediawiki.action.edit","048mnwv",[51,158,97,251]],["mediawiki.action.edit.styles","0xzzq9j"],["mediawiki.action.edit.collapsibleFooter","1gg40fm",[41,125,137]],["mediawiki.action.edit.preview","0nxtz5s",[33,46,51,97,111,177,269]],["mediawiki.action.history",
"1t1ux87"],["mediawiki.action.history.styles","0d0as3t"],["mediawiki.action.history.diff","0nz3stk"],["mediawiki.action.view.dblClickEdit","02dfy9m",[150,8]],["mediawiki.action.view.metadata","0fke356"],["mediawiki.action.view.categoryPage.styles","0hr329g"],["mediawiki.action.view.postEdit","1rw91l3",[177,129]],["mediawiki.action.view.redirect","00m3j4i",[25]],["mediawiki.action.view.redirectPage","1dlcyux"],["mediawiki.action.view.rightClickEdit","1kcm1ni"],["mediawiki.action.edit.editWarning","07901eb",[51,109,177]],["mediawiki.action.view.filepage","14qip8q"],["mediawiki.language","1fp5ct8",[174,10]],["mediawiki.cldr","18d0eii",[175]],["mediawiki.libs.pluralruleparser","0b9r46s"],["mediawiki.language.init","0bbfk27"],["mediawiki.jqueryMsg","0woxskz",[173,150,8]],["mediawiki.language.months","0sarg70",[173]],["mediawiki.language.names","02wxp1n",[176]],["mediawiki.language.specialCharacters","0qem0v5",[173]],["mediawiki.libs.jpegmeta","1n4nysp"],["mediawiki.page.gallery","06y532i",[
52,183]],["mediawiki.page.gallery.styles","063k11s"],["mediawiki.page.gallery.slideshow","0ckrzp6",[138,97,271,286]],["mediawiki.page.ready","0zq4ooz",[16,23,43]],["mediawiki.page.startup","0dt42hk"],["mediawiki.page.patrol.ajax","1ea9g2q",[46,138,97]],["mediawiki.page.watch.ajax","18odlch",[138,105,177,186]],["mediawiki.page.rollback","01eqzie",[46,107]],["mediawiki.page.image.pagination","0svm4ja",[46,150]],["mediawiki.rcfilters.filters.base.styles","02c6sx4"],["mediawiki.rcfilters.highlightCircles.seenunseen.styles","0584lpd"],["mediawiki.rcfilters.filters.dm","1x1ahhf",[21,147,101,148,265]],["mediawiki.rcfilters.filters.ui","0lleimd",[41,193,268,280,282,284,286]],["mediawiki.special","0njvcbc"],["mediawiki.special.apisandbox.styles","01h2ihg"],["mediawiki.special.apisandbox","0t1tqfr",[41,97,177,252,268]],["mediawiki.special.block","0felk3o",[120,150]],["mediawiki.special.changecredentials.js","19ukc67",[97,122]],["mediawiki.special.changeslist","03k4r4h"],[
"mediawiki.special.changeslist.enhanced","1lmos3o"],["mediawiki.special.changeslist.legend","1do8jj4"],["mediawiki.special.changeslist.legend.js","01np4ev",[41,154]],["mediawiki.special.changeslist.visitedstatus","08ef8f0"],["mediawiki.special.comparepages.styles","09n8e0t"],["mediawiki.special.contributions","16qnvwe",[177,249]],["mediawiki.special.edittags","1fufycs",[24]],["mediawiki.special.edittags.styles","077tb66"],["mediawiki.special.import","0fuqdz1"],["mediawiki.special.movePage","1c0ner1",[247,251]],["mediawiki.special.movePage.styles","1z0toiq"],["mediawiki.special.pageLanguage","18vxmv0",[269]],["mediawiki.special.pagesWithProp","026yppv"],["mediawiki.special.preferences","1ej8vbg",[109,173,131]],["mediawiki.special.preferences.styles","0009yet"],["mediawiki.special.recentchanges","1mabes1"],["mediawiki.special.search","1tvaazv",[260]],["mediawiki.special.search.commonsInterwikiWidget","1ylalqg",[147,97,177]],["mediawiki.special.search.interwikiwidget.styles","0onxl43"],[
"mediawiki.special.search.styles","1of982o"],["mediawiki.special.undelete","08hcoff"],["mediawiki.special.unwatchedPages","1678w91",[138,105]],["mediawiki.special.upload","0lyg6s3",[46,138,97,109,177,181,224,93]],["mediawiki.special.upload.styles","0bervm4"],["mediawiki.special.userlogin.common.styles","0qt3na7"],["mediawiki.special.userlogin.login.styles","1a8eolw"],["mediawiki.special.userlogin.signup.js","1g2tmcl",[97,121,177]],["mediawiki.special.userlogin.signup.styles","0t48oo2"],["mediawiki.special.userrights","030hrzb",[131]],["mediawiki.special.watchlist","1k6i72t",[138,105,177,269]],["mediawiki.special.watchlist.styles","193pvor"],["mediawiki.special.version","1c17b30"],["mediawiki.legacy.config","1230y2e"],["mediawiki.legacy.commonPrint","0l4nhrn"],["mediawiki.legacy.protect","068xsbx",[22]],["mediawiki.legacy.shared","1bontx2"],["mediawiki.legacy.oldshared","1ioc01v"],["mediawiki.legacy.wikibits","137o25k"],["mediawiki.ui","0cr8icc"],["mediawiki.ui.checkbox","1403qvt"],[
"mediawiki.ui.radio","1hhactt"],["mediawiki.ui.anchor","175ijqi"],["mediawiki.ui.button","1hiakcr"],["mediawiki.ui.input","1ahhbv0"],["mediawiki.ui.icon","1ra446i"],["mediawiki.ui.text","0je6vtf"],["mediawiki.widgets","1q68us3",[22,37,138,97,248,271]],["mediawiki.widgets.styles","07w0f5m"],["mediawiki.widgets.DateInputWidget","0h1f5tp",[250,91,271]],["mediawiki.widgets.DateInputWidget.styles","0jqikob"],["mediawiki.widgets.visibleByteLimit","0ojqero",[22,269]],["mediawiki.widgets.datetime","08clulz",[269,287,288]],["mediawiki.widgets.CategorySelector","0ihicp1",[254]],["mediawiki.widgets.CategoryMultiselectWidget","1eih5hs",[115,138,271]],["mediawiki.widgets.SelectWithInputWidget","0jqzflf",[256,271]],["mediawiki.widgets.SelectWithInputWidget.styles","02efah8"],["mediawiki.widgets.MediaSearch","1js3omf",[115,138,271]],["mediawiki.widgets.UserInputWidget","1332tqp",[97,271]],["mediawiki.widgets.UsersMultiselectWidget","1qi997w",[97,271]],["mediawiki.widgets.SearchInputWidget","0n1lae9",
[135,247]],["mediawiki.widgets.SearchInputWidget.styles","0msiu0e"],["mediawiki.widgets.StashedFileWidget","05kcmhs",[97,269]],["es5-shim","0ihicp1"],["dom-level2-shim","0ihicp1"],["oojs","16xnpon"],["mediawiki.router","1p04sss",[267]],["oojs-router","1nye1f6",[265]],["oojs-ui","0ihicp1",[272,271,273]],["oojs-ui-core","159mplo",[173,265,270,277,278,283,274,275]],["oojs-ui-core.styles","1hp126y"],["oojs-ui-widgets","1c3zqsb",[269,279,287,288]],["oojs-ui-toolbars","1ui6swm",[269,288]],["oojs-ui-windows","1gmokri",[269,288]],["oojs-ui.styles.indicators","00aej8b"],["oojs-ui.styles.textures","17wj3jv"],["oojs-ui.styles.icons-accessibility","1y79pfm"],["oojs-ui.styles.icons-alerts","08fmv5o"],["oojs-ui.styles.icons-content","0qqrv79"],["oojs-ui.styles.icons-editing-advanced","15ifgar"],["oojs-ui.styles.icons-editing-core","1glthw9"],["oojs-ui.styles.icons-editing-list","1eexuoq"],["oojs-ui.styles.icons-editing-styling","0g1jz7x"],["oojs-ui.styles.icons-interactions","0l2irs6"],[
"oojs-ui.styles.icons-layout","1eov4ri"],["oojs-ui.styles.icons-location","005zfi5"],["oojs-ui.styles.icons-media","0l6iis6"],["oojs-ui.styles.icons-moderation","11orfsz"],["oojs-ui.styles.icons-movement","1e4pbi1"],["oojs-ui.styles.icons-user","1dhfaux"],["oojs-ui.styles.icons-wikimedia","0jjh4iz"],["skins.cologneblue","1x1ug0y"],["skins.modern","1oqo646"],["skins.monobook.styles","05bjbiw"],["skins.vector.styles","1r5pyc5"],["skins.vector.styles.experimental.print","01r1p1y"],["skins.vector.styles.responsive","0lolwne"],["skins.vector.js","1d3mzem",[49,52]],["ext.pygments","1vqvadi"]]);;mw.config.set({"wgLoadScript":"/load.php","debug":!1,"skin":"vector","stylepath":"/skins","wgUrlProtocols":
"bitcoin\\:|ftp\\:\\/\\/|ftps\\:\\/\\/|geo\\:|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|magnet\\:|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|redis\\:\\/\\/|sftp\\:\\/\\/|sip\\:|sips\\:|sms\\:|ssh\\:\\/\\/|svn\\:\\/\\/|tel\\:|telnet\\:\\/\\/|urn\\:|worldwind\\:\\/\\/|xmpp\\:|\\/\\/","wgArticlePath":"/index.php?title=$1","wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgSearchType":null,"wgVariantArticlePath":!1,"wgActionPaths":{},"wgServer":"https://mediawikiv2-website-prod05.ol.epicgames.net","wgServerName":"mediawikiv2-website-prod05.ol.epicgames.net","wgUserLanguage":"en","wgContentLanguage":"en","wgTranslateNumerals":!0,"wgVersion":"1.30.0","wgEnableAPI":!0,"wgEnableWriteAPI":!0,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"EpicUnrealEngineWiki","5":"EpicUnrealEngineWiki talk","6":"File","7":"File talk","8":"MediaWiki","9"
:"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"epicunrealenginewiki":4,"epicunrealenginewiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgContentNamespaces":[0],"wgSiteName":"Epic Wiki","wgDBname":"wiki_pd05v2","wgExtraSignatureNamespaces":[],"wgAvailableSkins":{"cologneblue":"CologneBlue","modern":"Modern","monobook":"MonoBook","vector":"Vector","fallback":"Fallback","apioutput":"ApiOutput"},"wgExtensionAssetsPath":"/extensions","wgCookiePrefix":"wiki_pd05v2","wgCookieDomain":"","wgCookiePath":"/","wgCookieExpiration":2592000,"wgResourceLoaderMaxQueryLength":2000,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":
" %!\"$&'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgIllegalFileChars":":/\\\\","wgResourceLoaderStorageVersion":1,"wgResourceLoaderStorageEnabled":!0,"wgForeignUploadTargets":["local"],"wgEnableUploads":!1});var RLQ=window.RLQ||[];while(RLQ.length){RLQ.shift()();}window.RLQ={push:function(fn){fn();}};window.NORLQ={push:function(){}};}window.mediaWikiLoadStart=mwNow();mwPerformance.mark('mwLoadStart');script=document.createElement('script');script.src="/load.php?debug=false&lang=en&modules=jquery%2Cmediawiki&only=scripts&skin=vector&version=1kdd3b9";script.onload=script.onreadystatechange=function(){if(!script.readyState||/loaded|complete/.test(script.readyState)){script.onload=script.onreadystatechange=null;script=null;startUp();}};document.getElementsByTagName('head')[0].appendChild(script);}());