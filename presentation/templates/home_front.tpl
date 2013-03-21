{* smarty *}
{config_load file="site.conf"}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>{#site_title#}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link type="text/css" rel="stylesheet" href="styles/website.css" />
  </head>
  <body>
    <div id="doc" class="yui-t2">
      <div id="bd">
        <div id="yui-main">
          <div class="yui-b">
            <div id="header" class="yui-g">
              <a href="index.php">
                <img src="images/logo.png" alt="website logo" />
              </a>
            </div>
            <div id="contents" class="yui-g">
              {include file="home_ads_list.tpl"}
            </div>
          </div>
         </div>
         <div class="yui-b">
           {* Place list of departments here *}
        </div>
      </div>
    </div>
  </body>
</html>