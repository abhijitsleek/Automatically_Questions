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
                        <span id="section1-name-show"></span> <span>Total Question :18</span> <span>Total Marks : 43.5</span>
                        <div>
                            <select id="category-drop-step-1" name="category-drop-step-1">
                                <option value="">Select Category</option>        
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
                                <option value="">Select Complexity</option>        
                                <option value="basic">Basic</option>        
                                <option value="intermeded">Intermeded</option>        
                                <option value="advanced">Advanced</option>        
                            </select>
                        </div>
                        <div class="display-none" id="complexity-step-1">
                            <p id="complexity-name-show-step-1"></p>
                            Question Type 
                            <select id="question-drop-step-1" name="question-drop-step-1">
                                <option value="">Select Question</option>        
                                <option value="mcq-sa">MCQ-SA</option>        
                                <option value="mcq-ma">MCQ-MA</option>        
                                <option value="dtq">DTQ</option>        
                                <option value="frush-false">Frush-False</option>        
                            </select>
                        </div>
                    </div>           
                    <!-- Step 1 End -->

                    <!-- Step 2 Start -->
                    <div class="display-none" id="section-step-2">
                        <span id="section2-name-show"></span> <span>Total Question :18</span> <span>Total Marks : 43.5</span>
                        <div>
                            <select id="category-drop-step-2" name="category-drop-step-2">
                                <option value="">Select Category</option>        
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
                                <option value="">Select Complexity</option>        
                                <option value="basic">Basic</option>        
                                <option value="intermeded">Intermeded</option>        
                                <option value="advanced">Advanced</option>        
                            </select>
                        </div>
                        <div class="display-none" id="complexity-step-1">
                            <p id="complexity-name-show"></p>
                            Question Type 
                            <select id="question-drop-step-1" name="question-drop-step-1">
                                <option value="">Select Question</option>        
                                <option value="mcq-sa">MCQ-SA</option>        
                                <option value="mcq-ma">MCQ-MA</option>        
                                <option value="dtq">DTQ</option>        
                                <option value="frush-false">Frush-False</option>        
                            </select>
                        </div>
                    </div>           
                    <!-- Step 2 End -->

                    <!-- Step 3 Start -->
                    <div class="display-none" id="section-step-3">
                        <span id="section3-name-show"></span> <span>Total Question :18</span> <span>Total Marks : 43.5</span>
                        <div>
                            <select id="category-drop-step-3" name="category-drop-step-3">
                                <option value="">Select Category</option>        
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
                                <option value="">Select Complexity</option>        
                                <option value="basic">Basic</option>        
                                <option value="intermeded">Intermeded</option>        
                                <option value="advanced">Advanced</option>        
                            </select>
                        </div>
                        <div class="display-none" id="complexity-step-1">
                            <p id="complexity-name-show"></p>
                            Question Type 
                            <select id="question-drop-step-1" name="question-drop-step-1">
                                <option value="">Select Question</option>        
                                <option value="mcq-sa">MCQ-SA</option>        
                                <option value="mcq-ma">MCQ-MA</option>        
                                <option value="dtq">DTQ</option>        
                                <option value="frush-false">Frush-False</option>        
                            </select>
                        </div>
                    </div>           
                    <!-- Step 3 End -->

                    <!-- Step 4 Start -->
                    <div class="display-none" id="section-step-4">
                        <span id="section4-name-show"></span> <span>Total Question :18</span> <span>Total Marks : 43.5</span>
                        <div>
                            <select id="category-drop-step-4" name="category-drop-step-4">
                                <option value="">Select Category</option>        
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
                                <option value="">Select Complexity</option>        
                                <option value="basic">Basic</option>        
                                <option value="intermeded">Intermeded</option>        
                                <option value="advanced">Advanced</option>        
                            </select>
                        </div>
                        <div class="display-none" id="complexity-step-1">
                            <p id="complexity-name-show"></p>
                            Question Type 
                            <select id="question-drop-step-1" name="question-drop-step-1">
                                <option value="">Select Question</option>        
                                <option value="mcq-sa">MCQ-SA</option>        
                                <option value="mcq-ma">MCQ-MA</option>        
                                <option value="dtq">DTQ</option>        
                                <option value="frush-false">Frush-False</option>        
                            </select>
                        </div>
                    </div>           
                    <!-- Step 4 End -->

                    <!-- Step 5 Start -->
                    <div class="display-none" id="section-step-5">
                        <span id="section5-name-show"></span> <span>Total Question :18</span> <span>Total Marks : 43.5</span>
                        <div>
                            <select id="category-drop-step-5" name="category-drop-step-5">
                                <option value="">Select Category</option>        
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
                                <option value="">Select Complexity</option>        
                                <option value="basic">Basic</option>        
                                <option value="intermeded">Intermeded</option>        
                                <option value="advanced">Advanced</option>        
                            </select>
                        </div>
                        <div class="display-none" id="complexity-step-1">
                            <p id="complexity-name-show"></p>
                            Question Type 
                            <select id="question-drop-step-1" name="question-drop-step-1">
                                <option value="">Select Question</option>        
                                <option value="mcq-sa">MCQ-SA</option>        
                                <option value="mcq-ma">MCQ-MA</option>        
                                <option value="dtq">DTQ</option>        
                                <option value="frush-false">Frush-False</option>        
                            </select>
                        </div>
                    </div>           
                    <!-- Step 5 End -->

                    <!-- Step 6 Start -->
                    <div class="display-none" id="section-step-6">
                        <span id="section6-name-show"></span> <span>Total Question :18</span> <span>Total Marks : 43.5</span>
                        <div>
                            <select id="category-drop-step-6" name="category-drop-step-6">
                                <option value="">Select Category</option>        
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
                                <option value="">Select Complexity</option>        
                                <option value="basic">Basic</option>        
                                <option value="intermeded">Intermeded</option>        
                                <option value="advanced">Advanced</option>        
                            </select>
                        </div>
                        <div class="display-none" id="complexity-step-1">
                            <p id="complexity-name-show"></p>
                            Question Type 
                            <select id="question-drop-step-1" name="question-drop-step-1">
                                <option value="">Select Question</option>        
                                <option value="mcq-sa">MCQ-SA</option>        
                                <option value="mcq-ma">MCQ-MA</option>        
                                <option value="dtq">DTQ</option>        
                                <option value="frush-false">Frush-False</option>        
                            </select>
                        </div>
                    </div>           
                    <!-- Step 6 End -->
        </div>    
</body>
</html>