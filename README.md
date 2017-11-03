# Analytics
Used to implement web analytics (Google Analytics, Piwik)

## TODO
Build the PhpUnit tests

## Usage
```
// GOOGLE ANALYTICS
$trafic = \JDZ\Analytics\Trafic::getInstance([
  'type'    => 'googleAnalytics',
  'ua'      => 'xxx',
  'website' => 'xxx',
]);

if ( $trafic->isActive() ){
  echo "<script>"."\n";
  echo "(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){"."\n";
  echo "(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),"."\n";
  echo "m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)"."\n";
  echo "})(window,document,'script','//www.google-analytics.com/analytics.js','ga');"."\n";
  echo "ga('create', '".$trafic->ua."', '".$trafic->website."');"."\n";
  echo "ga('send', 'pageview');"."\n";
  echo "</script>"."\n";
}

// PIWIK
$trafic = \JDZ\Analytics\Trafic::getInstance([
  'type'            => 'piwik',
  'domain'          => 'xxx',
  'siteid'          => '1',
  'tracker'         => 'piwik.php',
  'setCookieDomain' => '',
  'setDomains'      => '',
]);

if ( $trafic->isActive() ){
  echo "<script>."\n";
  echo "var _paq = _paq || [];"."\n";
  if ( $trafic->setCookieDomain ){
    echo "_paq.push(['setCookieDomain', '".$trafic->setCookieDomain."']);"."\n";
  }
  if ( $trafic->setDomains ){
    echo "_paq.push(['setDomains', '".$trafic->setDomains."']);"."\n";
  }
  echo "_paq.push(['trackPageView']);"."\n";
  echo "_paq.push(['enableLinkTracking']);"."\n";
  echo "(function() {"."\n";
  echo "  var u='//".$trafic->domain."/';"."\n";
  echo "  _paq.push(['setTrackerUrl', u+'".$trafic->tracker."']);"."\n";
  echo "  _paq.push(['setSiteId', '".$trafic->siteid."']);"."\n";
  echo "  var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];"."\n";
  echo "  g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);"."\n";
  echo "})();"."\n";
  echo "</script>"."\n";
  echo "<noscript><p><img src=\"//".$trafic->domain."/".$trafic->tracker."?idsite=".$trafic->siteid."\" style=\"border:0;\" alt=\"\" /></p></noscript>"."\n";
}
```
