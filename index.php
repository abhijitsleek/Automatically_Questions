<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dyamically Questions</title>
<style>
.mainwraper{
    text-align:center;
    padding: 100px;
}
.display-none{
    display:none;
}
.error {
    color: red;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="js/script.js"></script>
</head>
<body>
        <div class="mainwraper">
            <div>Questionire : <input type="text" name="" id="" placeholder="Questionire Name"  autocomplete="off"/></div>
                <div>Section : <input type="radio" name="section-opt" id="section-yes" value="yes" />Yes 
                                    <input type="radio" name="section-opt" id="section-no" value="no" />No 
                </div>
                    <div><button id="add-more" name="add-more" class="display-none" value="1">Add More</button></div>
                    <span id="error-msg" class="error"></span>

                    <!-- Step 1 Start -->
                    <div class="display-none" id="section-step-1">
                        <span id="section1-name-show"></span> <span>Total Question :18</span> <span>Total Marks : 43.5 &nbsp; <button id="section-1"  value="1">Remove</button></span>
                        <div>
                            <select id="category-drop-step-1" name="category-drop-step-1">
                                <option value="1_">Select Category</option>        
                                <option value="1_php">Php</option>        
                                <option value="1_file">File</option>        
                                <option value="1_array">Array</option>        
                                <option value="1_string">String</option>        
                            </select>
                        </div>
                        <div class="display-none" id="category-step-1">
                            <p id="category-name-show-step-1"></p>
                            Complexity
                            <select id="complexity-drop-step-1" name="complexity-drop-step-1">
                                <option value="1_">Select Complexity</option>        
                                <option value="1_basic">Basic</option>        
                                <option value="1_intermeded">Intermeded</option>        
                                <option value="1_advanced">Advanced</option>        
                            </select>
                        </div>
                        <div class="display-none" id="complexity-step-1">
                            <p id="complexity-name-show-step-1"></p>
                            Question Type 
                            <select id="question-drop-step-1" name="question-drop-step-1">
                                <option value="1_">Select Question</option>        
                                <option value="1_mcq-sa">MCQ-SA</option>        
                                <option value="1_mcq-ma">MCQ-MA</option>        
                                <option value="1_dtq">DTQ</option>        
                                <option value="1_frush-false">Frush-False</option>        
                            </select>
                        </div>
                        <div class="display-none" id="question-type-step-1">
                            <table id="myTable_step_1">
                            <tr>
                                <th>Question Type</th>
                                <th>Question No</th>
                                <th>Marks</th>
                            </tr>
                            </table>
                        </div>
                    </div>           
                    <!-- Step 1 End -->

                    <!-- Step 2 Start -->
                    <div class="display-none" id="section-step-2">
                        <span id="section2-name-show"></span> <span>Total Question :18</span> <span>Total Marks : 43.5 &nbsp; <button id="section-2"  value="2">Remove</button></span>
                        <div>
                            <select id="category-drop-step-2" name="category-drop-step-2">
                                <option value="2_">Select Category</option>        
                                <option value="2_php">Php</option>        
                                <option value="2_file">File</option>        
                                <option value="2_array">Array</option>        
                                <option value="2_string">String</option>        
                            </select>
                        </div>
                        <div class="display-none" id="category-step-2">
                            <p id="category-name-show-step-2"></p>
                            Complexity
                            <select id="complexity-drop-step-1" name="complexity-drop-step-1">
                                <option value="2_">Select Complexity</option>        
                                <option value="2_basic">Basic</option>        
                                <option value="2_intermeded">Intermeded</option>        
                                <option value="2_advanced">Advanced</option>        
                            </select>
                        </div>
                        <div class="display-none" id="complexity-step-2">
                            <p id="complexity-name-show-step-2"></p>
                            Question Type 
                            <select id="question-drop-step-2" name="question-drop-step-2">
                                <option value="2_">Select Question</option>        
                                <option value="2_mcq-sa">MCQ-SA</option>        
                                <option value="2_mcq-ma">MCQ-MA</option>        
                                <option value="2_dtq">DTQ</option>        
                                <option value="2_frush-false">Frush-False</option>        
                            </select>
                        </div>
                        <div class="display-none" id="question-type-step-2">
                            <table id="myTable_step_2">
                            <tr>
                                <th>Question Type</th>
                                <th>Question No</th>
                                <th>Marks</th>
                            </tr>
                            </table>
                        </div>
                    </div>           
                    <!-- Step 2 End -->

                    <!-- Step 3 Start -->
                    <div class="display-none" id="section-step-3">
                        <span id="section3-name-show"></span> <span>Total Question :18</span> <span>Total Marks : 43.5 &nbsp; <button id="section-3"  value="3">Remove</button></span>
                        <div>
                            <select id="category-drop-step-3" name="category-drop-step-3">
                                <option value="3_">Select Category</option>        
                                <option value="3_php">Php</option>        
                                <option value="3_file">File</option>        
                                <option value="3_array">Array</option>        
                                <option value="3_string">String</option>        
                            </select>
                        </div>
                        <div class="display-none" id="category-step-3">
                            <p id="category-name-show-step-3"></p>
                            Complexity
                            <select id="complexity-drop-step-1" name="complexity-drop-step-1">
                                <option value="3_">Select Complexity</option>        
                                <option value="3_basic">Basic</option>        
                                <option value="3_intermeded">Intermeded</option>        
                                <option value="3_advanced">Advanced</option>        
                            </select>
                        </div>
                        <div class="display-none" id="complexity-step-3">
                            <p id="complexity-name-show-step-3"></p>
                            Question Type 
                            <select id="question-drop-step-3" name="question-drop-step-3">
                                <option value="3_">Select Question</option>        
                                <option value="3_mcq-sa">MCQ-SA</option>        
                                <option value="3_mcq-ma">MCQ-MA</option>        
                                <option value="3_dtq">DTQ</option>        
                                <option value="3_frush-false">Frush-False</option>        
                            </select>
                        </div>
                        <div class="display-none" id="question-type-step-3">
                            <table id="myTable_step_3">
                            <tr>
                                <th>Question Type</th>
                                <th>Question No</th>
                                <th>Marks</th>
                            </tr>
                            </table>
                        </div>
                    </div>           
                    <!-- Step 3 End -->

                    <!-- Step 4 Start -->
                    <div class="display-none" id="section-step-4">
                        <span id="section4-name-show"></span> <span>Total Question :18</span> <span>Total Marks : 43.5 &nbsp; <button id="section-4"  value="4">Remove</button></span>
                        <div>
                            <select id="category-drop-step-4" name="category-drop-step-4">
                                <option value="4_">Select Category</option>        
                                <option value="4_php">Php</option>        
                                <option value="4_file">File</option>        
                                <option value="4_array">Array</option>        
                                <option value="4_string">String</option>        
                            </select>
                        </div>
                        <div class="display-none" id="category-step-4">
                            <p id="category-name-show-step-4"></p>
                            Complexity
                            <select id="complexity-drop-step-1" name="complexity-drop-step-1">
                                <option value="4_">Select Complexity</option>        
                                <option value="4_basic">Basic</option>        
                                <option value="4_intermeded">Intermeded</option>        
                                <option value="4_advanced">Advanced</option>        
                            </select>
                        </div>
                        <div class="display-none" id="complexity-step-4">
                            <p id="complexity-name-show-step-4"></p>
                            Question Type 
                            <select id="question-drop-step-4" name="question-drop-step-4">
                                <option value="4_">Select Question</option>        
                                <option value="4_mcq-sa">MCQ-SA</option>        
                                <option value="4_mcq-ma">MCQ-MA</option>        
                                <option value="4_dtq">DTQ</option>        
                                <option value="4_frush-false">Frush-False</option>        
                            </select>
                        </div>
                        <div class="display-none" id="question-type-step-4">
                            <table id="myTable_step_4">
                            <tr>
                                <th>Question Type</th>
                                <th>Question No</th>
                                <th>Marks</th>
                            </tr>
                            </table>
                        </div>
                    </div>           
                    <!-- Step 4 End -->

                    <!-- Step 5 Start -->
                    <div class="display-none" id="section-step-5">
                        <span id="section5-name-show"></span> <span>Total Question :18</span> <span>Total Marks : 43.5 &nbsp; <button id="section-5"  value="5">Remove</button></span>
                        <div>
                            <select id="category-drop-step-5" name="category-drop-step-5">
                                <option value="5_">Select Category</option>        
                                <option value="php">Php</option>        
                                <option value="5_file">File</option>        
                                <option value="5_array">Array</option>        
                                <option value="5_string">String</option>        
                            </select>
                        </div>
                        <div class="display-none" id="category-step-5">
                            <p id="category-name-show-step-5"></p>
                            Complexity
                            <select id="complexity-drop-step-1" name="complexity-drop-step-1">
                                <option value="5_">Select Complexity</option>        
                                <option value="5_basic">Basic</option>        
                                <option value="5_intermeded">Intermeded</option>        
                                <option value="5_advanced">Advanced</option>        
                            </select>
                        </div>
                        <div class="display-none" id="complexity-step-5">
                            <p id="complexity-name-show-step-5"></p>
                            Question Type 
                            <select id="question-drop-step-5" name="question-drop-step-5">
                                <option value="5_">Select Question</option>        
                                <option value="5_mcq-sa">MCQ-SA</option>        
                                <option value="5_mcq-ma">MCQ-MA</option>        
                                <option value="5_dtq">DTQ</option>        
                                <option value="5_frush-false">Frush-False</option>        
                            </select>
                        </div>
                        <div class="display-none" id="question-type-step-5">
                            <table id="myTable_step_5">
                            <tr>
                                <th>Question Type</th>
                                <th>Question No</th>
                                <th>Marks</th>
                            </tr>
                            </table>
                        </div>
                    </div>           
                    <!-- Step 5 End -->

                    <!-- Step 6 Start -->
                    <div class="display-none" id="section-step-6">
                        <span id="section6-name-show"></span> <span>Total Question :18</span> <span>Total Marks : 43.5 &nbsp; <button id="section-6"  value="6">Remove</button></span>
                        <div>
                            <select id="category-drop-step-6" name="category-drop-step-6">
                                <option value="6_">Select Category</option>        
                                <option value="6_php">Php</option>        
                                <option value="6_file">File</option>        
                                <option value="6_array">Array</option>        
                                <option value="6_string">String</option>        
                            </select>
                        </div>
                        <div class="display-none" id="category-step-6">
                            <p id="category-name-show-step-6"></p>
                            Complexity
                            <select id="complexity-drop-step-1" name="complexity-drop-step-1">
                                <option value="6_">Select Complexity</option>        
                                <option value="6_basic">Basic</option>        
                                <option value="6_intermeded">Intermeded</option>        
                                <option value="6_advanced">Advanced</option>        
                            </select>
                        </div>
                        <div class="display-none" id="complexity-step-6">
                            <p id="complexity-name-show-step-6"></p>
                            Question Type 
                            <select id="question-drop-step-6" name="question-drop-step-6">
                                <option value="6_">Select Question</option>        
                                <option value="6_mcq-sa">MCQ-SA</option>        
                                <option value="6_mcq-ma">MCQ-MA</option>        
                                <option value="6_dtq">DTQ</option>        
                                <option value="6_frush-false">Frush-False</option>        
                            </select>
                        </div>
                        <div class="display-none" id="question-type-step-6">
                            <table id="myTable_step_6">
                            <tr>
                                <th>Question Type</th>
                                <th>Question No</th>
                                <th>Marks</th>
                            </tr>
                            </table>
                        </div>
                    </div>           
                    <!-- Step 6 End -->
        </div>    
</body>
</html>