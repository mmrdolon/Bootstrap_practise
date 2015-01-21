<form action="add.php" method="post">

    <h1> User Registration</h1>


    <label>First_name:</label>
    <input type="text" name="first_name" /><br>
    <label>last_name:</label>
    <input type="text" name="last_name" /><br>
    <label>Email:</label>
    <input type="email" name="u_email" /><br>
    <label>Password:</label>
    <input type="password" name="password" /><br>
    <label>Birth Day:</label>



    <select name="dob_year" >

        <option  value="Year" >Year</option>


            <option  value="1991" >1985</option>
            <option  value="1992" >1986</option>
            <option  value="1993" >1987</option>
            <option  value="1994" >1988</option>
            <option  value="1995" >1989</option>
            <option  value="1996" >1990</option>
             <option  value="1991" >1991</option>
            <option  value="1992" >1992</option>
             <option  value="1993" >1993</option>
                <option value="1994" >1994</option>
        <option  value="1995" >1995</option>
                <option  value="1996" >1996</option>

        </select>

    </select>

    <select name="dob_month" >
        <option  value="Month" >Month</option>
        <option  value="1" >1</option>
        <option  value="2" >2</option>
        <option  value="3" >3</option>
        <option  value="4" >4</option>
        <option  value="5" >5</option>
        <option  value="6" >6</option>
        <option  value="7" >7</option>
        <option  value="8" >8</option>
        <option  value="9" >9</option>
        <option  value="10" >10</option>
        <option  value="11" >11</option>
        <option  value="12" >12</option>

    </select>

    <select name="dob_day" >
        <option  value="Day" >Day</option>

        <option  value="1" >1</option>
        <option  value="2" >2</option>
        <option  value="3" >3</option>
        <option value="4" >4</option>
        <option  value="5" >5</option>
        <option value="6" >6</option>
        <option  value="7" >7</option>
        <option  value="8" >8</option>
        <option  value="9" >9</option>
        <option  value="10" >10</option>
        <option  value="11" >11</option>
        <option value="12" >12</option>
        <option  value="13" >13</option>
        <option  value="14" >14</option>
        <option  value="15" >15</option>
        <option  value="16" >16</option>
        <option  value="17" >17</option>
        <option  value="18" >18</option>
        <option  value="19" >19</option>
        <option  value="20" >20</option>
        <option  value="21" >21</option>
        <option  value="22" >22</option>
        <option  value="23" >23</option>
        <option  value="24" >24</option>
        <option  value="25" >25</option>
        <option  value="26" >26</option>
        <option  value="27" >27</option>
        <option  value="28" >28</option>
        <option value="29" >29</option>
        <option value="30" >30</option>
        <option  value="31" >31</option>

    </select><br>

    <label>Gender:</label>

    <input type="radio" name="sex" value="male"/>Male
    <input type="radio" name="sex" value="female">Female
    <br>

    <label>Comment</label>
    <textarea name="comment" rows="4" cols="30" ></textarea><br>

    <label>Created:</label>
    <input type="datetime" name="created_date"><br>

    <label>Modified:</label>
    <input type="datetime" name="modified_date"><br>



    <button type="submit">Submit</button>
</form>
