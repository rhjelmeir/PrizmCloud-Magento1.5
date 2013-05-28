<?php

class Accusoft_Prizmclouddocsviewer_Block_Viewer extends Mage_Core_Block_Abstract
{
  protected function _toHtml()
  {
    $style = '<style>div.prizmcloud .prizmcloud_iframe {
  border:0;
  max-width:100%;
}</style>';
    $html = '<div class="prizmcloud">' . $style;

    if(Mage::getStoreConfig('prizmcloud/settings/pkey'))
    {
      $url_base      = 'http://connect.ajaxdocumentviewer.com/?key=';
      $pkey          = Mage::getStoreConfig('prizmcloud/settings/pkey');
      $ptype         = ($this->getv_type()) ? $this->getv_type() : Mage::getStoreConfig('prizmcloud/settings/ptype');
      $doc_url       = ($this->getdoc_url()) ? $this->getdoc_url() : Mage::getStoreConfig('prizmcloud/settings/doc_url');
      $width         = ($this->getv_width()) ? $this->getv_width() : Mage::getStoreConfig('prizmcloud/settings/width');
      $vwidth        = ($width) ? '&viewerwidth=' . $width : '';
      $iwidth        = ($width) ? 'width="'.($width + 20).'"' : '';
      $height        = ($this->getv_height()) ? $this->getv_height() : Mage::getStoreConfig('prizmcloud/settings/height');
      $vheight       = ($height) ? '&viewerheight=' . $height : '';
      $iheight       = ($height) ? 'height="'.($height + 20).'"' : '';

      if(
        ($this->getprint_button() && $this->getprint_button() === 'Yes') ||
        (Mage::getStoreConfig('prizmcloud/settings/print_button') && Mage::getStoreConfig('prizmcloud/settings/print_button') === 1))
      {
        $print_button = 'Yes';
      }
      else
      {
        $print_button = 'No';
      }
      $toolbar_color = ($this->gettoolbar_color()) ? $this->gettoolbar_color() : Mage::getStoreConfig('prizmcloud/settings/toolbar_color');
      $toolbar_color = ($toolbar_color) ? '&toolbar_color='.$toolbar_color : '';
      $url           = $url_base . $pkey . '&viewertype=' . $ptype . '&document=' . $doc_url . $vheight . $vwidth .  '&printButton=' . $print_button . $toolbar_color;
      $iframe        = '<iframe src="' . $url . '"' . $iwidth . $iheight . 'id="prizmcloud_docs_iframe" class="prizmcloud_iframe" seamless></iframe>';
      $html .= $iframe;
    }
    else
    {
      $html .= '<p class="error">Please sign up for an account to use PrizmCloud Document Viewer. If you already signed up, add your key via the admin configuration panel. <a href="http://prizmcloud.accusoft.com/register.html" target="_blank" title="PrizmCloud ">Prizm Cloud Sign Up</a> </p>';
    }
    $html .= '</div>';

    return $html;
  }
}
