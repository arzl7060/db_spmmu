<?php
require_once "../../aute/koneksi.php";

require_once "header.php";

require_once "sidebar.php";
require_once "navbar.php";


?>




	
<link href="style.css" rel="stylesheet">
		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>Santri Putra</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Santri Putri</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>6543</h3>
						<p>Jumlah Santri</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Data Santri</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Nama</th>
								<th>Tanggal Lahir</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Nama</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Aktif</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Nama</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Berhenti</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Nama</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Alumni</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Nama</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Berhenti</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Nama</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Aktif</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Data Kamar</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Nama</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Nama</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Nama</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Nama</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Nama</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
	<!-- footer -->
	<script src="script.js"></script>
                    
</body>
</html>
	
	