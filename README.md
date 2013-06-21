##PrizmCloud Emebbed Document Viewer for Magento

Magento Extension for PrizmCloud Embedded Document Viewer. Embed our document viewer in your site. Your visitors view your documents in any of 300+ file types. Just like that.

You will need a PrizmCloud account to use PrizmCloud Document Viewer. [PrizmCloud Sign Up](http://prizmcloud.accusoft.com/register.html "PrizmCloud") 

View a [demo](http://prizmcloud.accusoft.com/demo.html)

###Installation Instructions

1. Download and upzip github zip
2. Log into the Admin Section
3. Find the Systems Tab -> Magento Connect then Magento Connect Manager
4. Log into Magento Connect Manager Using Your Admin Login
5. Find ‘Direct Package File Upload’ and choose the PrizmCloud_Document_Viewer-1.0.0.tgz zip file and click ‘Upload’
6. Click Return to Admin when upload complete

###Enabling and Configuring plugin

1. Admin > System > Configuration > Advanced > Advanced and see if your module is Enabled
2. Go to Admin > System > Configuration > General > PrizmCloud Document Viewer and configure your settings

### Add the Viewer to a Page

Within a cms page add this block tag to the content section editor (or within any editor)

```
{{block type="accusoft_prizmclouddocsviewer/viewer"}}
```
This tag accepts the following **optional** parameters: *(if these parameters are not present, the admin configurations will be used)*

* **v_type**: is the viewer type (either flash or html5)
* **doc_url**: is the document url
* **v_width**: is the viewer width in px
* **v_height**: is the viewer height in px
* **print_button**: options 'Yes' or 'No'
* **toolbar_color**: hex color, no '#' for example "CCCCCC"

For example:
```
{{block type="accusoft_prizmclouddocsviewer/viewer" v_type="html5" v_width=800 v_height=600 doc_url="http://domain.com/path/to/file.ext" print_button="Yes" toolbar_color="999999"}}
```

###Uninstall Instructions
1. Log into the Admin Section
2. Find the Systems Tab -> Magento Connect then Magento Connect Manager
3. Log into Magento Connect Manager Using Your Admin Login
4. Under Manage Existing Extensions, find PrizmCloud_Document_Viewer
5. Set dropdown to Uninstall and click on Commit Changes
6. Click Return to Admin when upload complete


