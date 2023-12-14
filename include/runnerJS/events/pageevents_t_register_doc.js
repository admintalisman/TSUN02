
Runner.pages.PageSettings.addPageEvent('dbo.t_register_doc',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var myInput=document.getElementById('type_t_register_images_124');function sendPic(){var file=myInput.files[0];}
myInput.addEventListener('change',sendPic,false);;});