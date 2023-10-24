<h1>Upload Images</h1>
 
 <form name="photo" id="imageUploadForm" enctype="multipart/form-data" action="/upload/upload" method="post" >
     Select image to upload:
     <input type='file' name='files[]' multiple />
     <input type='submit' value='Upload Image' name='submit' />
 </form>

