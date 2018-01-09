<?php 
    header("Content-type: text/html; charset=utf-8");
    switch (substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1)) {
    case "errorpage_401.php":
        header('HTTP/1.1 401 Unauthorized');
        break;
    case "errorpage_403.php":
        header('HTTP/1.1 403 Forbidden');
        break;
    case "errorpage_404.php":
         header("HTTP/1.0 404 Not Found");
        break;
    case "errorpage_500.php":
        header('HTTP/1.1 500 Internal Server Error');
        break;         
	}
	session_start();
 
?>
<html>
<head>
<base href="http://www.spacequest.net/archives/" />
<title>SpaceQuest.Net - The Ultimate Space Quest Fansite!</title>
<meta name="robots" content="noindex,follow">
<meta name="Web_author" content="Website designed and created by Frans van Hofwegen - www.frenske.net" />
<STYLE TYPE="text/css"> 
<!-- 
H4 { margin-top: 0px; margin-bottom: 0px; margin-left: 0px; margin-right: 0px } 
--> 
</STYLE>
<SCRIPT LANGUAGE="JavaScript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->

<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->


<!-- Begin
function NewWindow(mypage, myname, w, h, scroll) {
var winl = (screen.width - w) / 2;
var wint = (screen.height - h) / 2;
winprops = 'height='+h+',width='+w+',top='+wint+',left='+winl+',scrollbars='+scroll+',resizable=0'
win = window.open(mypage, myname, winprops)
if (parseInt(navigator.appVersion) >= 4) { win.window.focus(); }
}
//  End -->

<!-- Begin

image1 = new Image();
image1.src = "/tabs/maintabover.gif";

image2 = new Image();
image2.src = "/tabs/sq1tabover.gif";

image3 = new Image();
image3.src = "/tabs/sq1tabover.gif";

image4 = new Image();
image4.src = "/tabs/sq2tabover.gif";

image5 = new Image();
image5.src = "/tabs/sq3tabover.gif";

image6 = new Image();
image6.src = "/tabs/sq4tabover.gif";

image7 = new Image();
image7.src = "/tabs/sq5tabover.gif";

image8 = new Image();
image8.src = "/tabs/sq6tabover.gif";

image9 = new Image();
image9.src = "/tabs/sq7tabover.gif";

image10 = new Image();
image10.src = "/tabs/misctabover.gif";

// End -->
</script>
<LINK REL="SHORTCUT ICON" HREF="http://www.spacequest.net/favicon.ico" type="image/x-icon" />
</head>
<body bgcolor="#373737" text="#FFFFFF" link="#FFFFFF" vlink="#CC0000" alink="#00FF00" leftmargin="0" topmargin="1" marginwidth="1" marginheight="1" onLoad="MM_preloadImages('http://www.spacequest.net/tabs/maintabover.gif','http://www.spacequest.net/tabs/sq1tabover.gif','http://www.spacequest.net/tabs/sq2tabover.gif','http://www.spacequest.net/tabs/sq3tabover.gif','http://www.spacequest.net/tabs/sq4tabover.gif','http://www.spacequest.net/tabs/sq5tabover.gif','http://www.spacequest.net/tabs/sq6tabover.gif','http://www.spacequest.net/tabs/sq7tabover.gif','http://www.spacequest.net/tabs/misctabover.gif')">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td colspan="3" valign="top" background="tabs/tabback.gif"> 
      <div align="center">
        <!--#include virtual="tabs/tabmenu.html" -->
      </div></td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td valign="top"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="353" background="tabs/infobox.gif"><img src="logoup.jpg" width="353" height="76" border="0"></td>
          <td height="76" background="tabs/infobox.gif"><blockquote>
            <div align="justify"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>Welcome! &gt;</strong> This
                      website pays tribute to Space Quest: the wacky sci-fi humor adventure
                      computer game series by Sierra On-Line, starring space janitor
                      Roger Wilco! Put on your Astro Chicken flight hat and enjoy the
                      website!</font>
              </div>
          </blockquote></td>
        </tr>
      </table>
     </td>
  </tr>
  <tr> 
    <td> 
      <div align="left"><H4><img src="logodown.jpg" width="875" height="74" border="0"></h4>
      </div>
    </td>
  </tr>
</table>
<table border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="142" valign="top" background="navmenu/greybackground.gif">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td background="navmenu/bluemenuspacer.gif"><div align="left">
             
            </div>
            <div align="right"></div></td>
        </tr>
      </table>
      <div align="center"><img src="navmenu/undergrey2.gif" width="142" height="25"></div>
      <div align="center">
        <p><font size="1" face="Arial, Helvetica, sans-serif">Please visit our
            sponsor:</font><br>
        <a href="http://www.eperfect.net" target="_blank"><img src="epklein.gif" alt="Eperfect.Net is supporting SpaceQuest.Net!" width="120" height="60" border="0"></a></p>
        </div> 
      </div>
      </form></td>
    <td width="25" valign="top" background="navmenu/lineleftgreyright.jpg"><img src="navmenu/lineleft.jpg" width="25" height="102"></td>
    <td valign="top" bgcolor="#000000"><p><img src="navmenu/topblack.gif" width="100%" height="20">
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr> 
          <td valign="top"> <div align="center"> 
              <p align="left"> <font color="#FFFFB1" size="3" face="Arial, Helvetica, sans-serif"><strong>We're updating SpaceQuest.Net</strong></font></p>
              </div>
            <blockquote>
              <p align="justify"><font size="2" face="Arial, Helvetica, sans-serif">We're currently busy redesigning SpaceQuest.Net. Please visit <a href="http://www.spacequest.net/archives/">www.spacequest.net/archives/</a> for the old website.</font></p>
              <p align="center"><a href="main.shtml"><img src="theyreback.jpg" width="880" height="547" alt="They're back!" /></a></p>
            </blockquote>
            <blockquote>
  <p align="center"><font color="#FF0000" size="2" face="Arial, Helvetica, sans-serif"><a href="http://www.abandonwarering.com/" target="_blank"><img src="extraimages/abutton.jpg" alt="Abandonwarering" width="116" height="38" border="0"></a></font></p>
          </blockquote></td>
        </tr>
      </table>
	  </td>
    <td width="25" valign="top" background="navmenu/linerightgreyleft.gif" bgcolor="393939"><img src="navmenu/spacer_leftbar.gif" width="25" height="25"></td>
  </tr>
  <tr> 
    <td colspan="2" valign="top" bgcolor="393939">&nbsp;</td>
    <td height="18" valign="bottom" background="navmenu/undergrey.gif" bgcolor="393939"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1" color="#CCCCCC">All
          original content (c) Frans van Hofwegen. All Space Quest related
        material (c) by Sierra Entertainment.</font></div></td>
    <td height="18" bgcolor="393939"><!--Space Quest was created by Scott Murphy, Josh Mandel and Mark Crowe and published by Sierra On-Line. It's an adventure game starring Roger Wilco. You can download the Space Quest games here, including the Spinal Frontier. Official Hint Book, manuals and design sketches are also up for download.-->
    </td>
  </tr>
</table>
</html>
