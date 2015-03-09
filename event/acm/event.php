<html>
<body>
<form action="create.php" method="post" >
<h2>Name of Event:</h2><br/><input type="text" name="name" size="30" maxlength="30" /><br/>
<h2>Event Description:</h2><br/><textarea name="desc" rows="5" cols="60" ></textarea><br/>
<h2>Date:</h2><br/><input type="text" name="day" maxlength="2" size="2" placeholder="dd" />
                   <input type="text" name="month" maxlength="2" size="2" placeholder="mm" />
	               <input type="text" name="year" maxlength="4" size="4" placeholder="yyyy" /><br/>
<h2>Time:</h2><br/><input type="text" name="hour" maxlength="2" size="2" placeholder="hr" />
                   <input type="text" name="min" maxlength="2" size="2" placeholder="min" />
<select name="meridian" >
<option selected>am</option>
<option>pm</option>
</select><br/>
<h2>Permission:</h2><br/><input type="text" name="perm" /><br />


<!-- ANNOUNCEMENTS -->
<h2>Announcements</h2><br/>


<!-- OPTION 1 -->
<h3>Date:			<input type="text" name="o1day" maxlength="2" size="2" placeholder="dd" />
                   <input type="text" name="o1month" maxlength="2" size="2" placeholder="mm" />
	               <input type="text" name="o1year" maxlength="4" size="4" placeholder="yyyy" /><br/></h3>
Building<br/><select name="o1b" >
<option selected>SJT</option>
<option>TT</option>
<option>MB</option>
<option>SMV</option>
</select><br/>
Morning<br/><input type="text" name="o1p1m" size="30" /><input type="text" name="o1p2m" size="30" /><br/>
Evening<br/><input type="text" name="o1p1e" size="30" /><input type="text" name="o1p2e" size="30" />


<!-- OPTION 2 -->
<h3>Date:			<input type="text" name="o2day" maxlength="2" size="2" placeholder="dd" />
                   <input type="text" name="o2month" maxlength="2" size="2" placeholder="mm" />
	               <input type="text" name="o2year" maxlength="4" size="4" placeholder="yyyy" /><br/></h3>

Building<br/><select name="o2b" >
<option selected>SJT</option>
<option>TT</option>
<option>MB</option>
<option>SMV</option>
</select><br/>
Morning<br/><input type="text" name="o2p1m" size="30" /><input type="text" name="o2p2m" size="30" /><br/>
Evening<br/><input type="text" name="o2p1e" size="30" /><input type="text" name="o2p2e" size="30" />


<!-- OPTION 3 -->
<h3>Date:			<input type="text" name="o3day" maxlength="2" size="2" placeholder="dd" />
                   <input type="text" name="o3month" maxlength="2" size="2" placeholder="mm" />
	               <input type="text" name="o3year" maxlength="4" size="4" placeholder="yyyy" /><br/></h3>
Building<br/><select name="o3b" >
<option selected>SJT</option>
<option>TT</option>
<option>MB</option>
<option>SMV</option>
</select><br/>
Morning<br/><input type="text" name="o3p1m" size="30" /><input type="text" name="o3p2m" size="30" /><br/>
Evening<br/><input type="text" name="o3p1e" size="30" /><input type="text" name="o3p2e" size="30" />


<!-- OPTION 4 -->
<h3>Date:			<input type="text" name="o4day" maxlength="2" size="2" placeholder="dd" />
                   <input type="text" name="o4month" maxlength="2" size="2" placeholder="mm" />
	               <input type="text" name="o4year" maxlength="4" size="4" placeholder="yyyy" /><br/></h3>
Building<br/><select name="o4b" >
<option selected>SJT</option>
<option>TT</option>
<option>MB</option>
<option>SMV</option>
</select><br/>
Morning<br/><input type="text" name="o4p1m" size="30" /><input type="text" name="o4p2m" size="30" /><br/>
Evening<br/><input type="text" name="o4p1e" size="30" /><input type="text" name="o4p2e" size="30" />


<h2>Event Day</h2><br/>
Volunteer1<br/><input type="text" name="v1"/>:::<input type ="text" name="pc1"/><br/> 
Volunteer2<br/><input type="text" name="v2"/>:::<input type ="text" name="pc2"/><br/> 
Volunteer3<br/><input type="text" name="v3"/>:::<input type ="text" name="pc3"/><br/>
Volunteer4<br/><input type="text" name="v4"/>:::<input type ="text" name="pc4"/><br/>
Volunteer5<br/><input type="text" name="v5"/>:::<input type ="text" name="pc5"/><br/>
No. Of Expected Participants:<br/><input type="text" name="enum" value="0" ><br/>
<br/><br/><input type="submit" value="Submit"/>
 
</form>
</body>
</html>