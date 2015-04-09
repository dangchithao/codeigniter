<?php // mylibrary
// function user
	public function info()
	{
		$u = new User();
		$u->get();
		echo "<table border='1' width='500px'>
                    <tr>
                        <td>ID</td>
                        <td>UserName</td>
                        <td>PassWord</td>
                        <td>Email Address</td>
                    </tr>";
		foreach($u->all as $t)
		{
			echo "
                    <tr>
                        <td>$t->id</td>
                        <td>$t->username</td>
                        <td>$t->password</td>
                        <td>$t->email</td>
                    </tr>";
		}
		echo "</table>";
		echo "<br/>".$u->get_sql();
	}
	// them user
	public function add()
	{
		$u = new User();
		if($_POST)
		{
			$u->username = $this->input->post('user');
			$u->password = $this->input->post('pword');
			$u->email = $this->input->post('email');
			if($u->username=="" || $u->password=="" || $u->email=="")
			{
				$u->error_message("mas", "<i style='color: red;'>Ban phai nhap day du cac truong !</i>");
			}
			else
			{
				$u->save();
			}
		} // End $_POST
		echo $u->error->mas;
		$this->load->view("form");
		$u->get();
		echo "<h2>Info table user</h2>";
		echo "<table border='1' width='750px'>
				<tr>
					<td>ID</td>
					<td>User Name</td>
					<td>PassWord</td>
					<td>Email Address</td>
				</tr>";
		foreach($u->all as $t)
		{
			echo"
				<tr>
					<td>$t->id</td>
					<td>$t->username</td>
					<td>$t->password</td>
					<td>$t->email</td>
				</tr>";
		}
		echo "</table>";
		
	}
	// delete
	public function del($username)
	{
		$u = new User();
		$u->where('id', $username)->get();
		$u->delete();
	}
	// update
	public function up()
	{
		$this->load->view("f");
	}