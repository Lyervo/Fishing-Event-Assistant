<?php

 $response = '<form>
            <input type="text" placeholder="Enter participant name here..." id="insert_name">
            <br>
            <input type="radio" name="insert_gender" id="insert_gender_m" value="M" checked>Male
            <br>
            <input type="radio" name="insert_gender" id="insert_gender_f" value="F">Female
            <br>
            Fees paid<input type="checkbox" id="insert_fee">
            <br>
            <button onclick="add_participant()">Add Participants</button>
        </form>
        ';
 echo $response;