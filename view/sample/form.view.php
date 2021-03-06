<div>
    
    <!-- Form AJAX -->
    <div class="eight columns">

        <h3>Form with AJAX Submit (and two way data binding)</h3>

        <form method="post" name="form_ajax">

            <label for="formAjaxTextField">Text Field:</label>
            <input type="text" id="formAjaxTextField" name="formAjaxTextField" ng-model="formAjax.data.textField" />

            <label for="formAjaxSelectField">Select Field:</label>
            <select id="formAjaxSelectField" name="formAjaxSelectField" ng-model="formAjax.data.selectField">
                <option value="0">Select</option>
                <option value="1">One</option>
                <option value="2">Two</option>
            </select>

            <fieldset>
                <label for="formAjaxCheckboxField">
                    <input type="checkbox" id="formAjaxCheckboxField" name="formAjaxCheckboxField" ng-model="formAjax.data.checkboxField" ng-true-value="1" ng-false-value="0" />
                    <span>Regular Checkbox</span>
                </label>
            </fieldset>

            <fieldset>
                <label for="formAjaxRadioField1">
                    <input type="radio" id="formAjaxRadioField1" name="formAjaxRadioField" ng-model="formAjax.data.radioField" value="one" />
                    <span>Regular Radio 1</span>
                </label>
                <label for="formAjaxRadioField2">
                    <input type="radio" id="formAjaxRadioField2" name="formAjaxRadioField" ng-model="formAjax.data.radioField" value="two" />
                    <span>Regular Radio 2</span>
                </label>
            </fieldset>

            <button type="button" ng-click="formAjax.submitForm()" id="formAjaxButtonSubmit" name="formAjaxButtonSubmit">Submit</button>

        </form>

        <p>
            <em>AngularJS Form <a href="http://tutorials.jenkov.com/angularjs/forms.html" title="AngularJS Forms" target="_blank">tutorial</a>.</em>
        </p>

        <p ng-show="formAjax.response.showFlag">
            <strong>Response:</strong>
            <br/>
            <code ng-bind="formAjax.response.string"></code>
        </p>

    </div>

    <!-- Form File -->
    <div class="eight columns">

        <h3>Form with File Upload</h3>

        <form name="formFile" id="formFile" action="/app_api.php?action=form_file_upload" ng-upload="formFileUploadComplete(content)" ng-upload-loading="formFileStartUploading()" method="post" enctype="multipart/form-data">

            <label for="formFileTextField">Text Field:</label>
            <input type="text" name="formFileTextField" id="formFileTextField" value="" />

            <label for="formFileSelectField">Select Field:</label>
            <select name="formFileSelectField" id="formFileSelectField">
                <option value="1">One</option>
                <option value="2">Two</option>
            </select>

            <label for="formFileFileField">File:</label>
            <input type="file" name="formFileUploadField" id="formFileFileField"/>

            <button type="submit" name="formFileButtonSubmit">Submit</button>

        </form>

        <p>
            <em>File upload uses <a href="https://github.com/twilson63/ngUpload" title="An AngularJS Service for uploading files using iframe" target="_blank">ngUpload</a> library (a service) for file upload via IFrame.</em>
        </p>

        <p ng-show="formFileResponseShowFlag">
            <strong>Response:</strong>
            <br/>
            <code ng-bind="formFileResponse"></code>
        </p>

    </div>
    
</div>