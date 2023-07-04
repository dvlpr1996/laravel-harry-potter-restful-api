<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Laravel Harry Potter Restful Api</title>
		<style>
				body {
						padding: 5px 4px;
						background-color: #eee;
				}

				h1 {
						text-align: center;
						font-style: italic;
				}

				section {
					margin: 0 auto;
					max-width: 70rem;
				}

				table {
					width: 100%;
					overflow-x:auto;
					margin-top: 50px;
					border-collapse: collapse;
					font-family: arial, sans-serif;
				}

				td,
				th {
					padding: 8px;
					text-align: left;
					border: 1px solid #ccc;
				}

				th {
					text-align: center;
				}

				tr:nth-child(even) {
						background-color: #ddd;
				}
		</style>
</head>

<body>
		<h1>Laravel Harry Potter Restful Api</h1>
		<section>
				<table>
						<thead>
								<tr>
										<th>#</th>
										<th>verbs</th>
										<th>endpoints</th>
										<th>description</th>
								</tr>
						</thead>
						<tbody>
								<tr>
										<td>1</td>
										<td>Get</td>
										<td>/books</td>
										<td>Get all books</td>
								</tr>
								<tr>
										<td>2</td>
										<td>Get</td>
										<td>/books/:id</td>
										<td>Get book by id</td>
								</tr>
								<tr>
										<td>3</td>
										<td>Get</td>
										<td>/books/:slug</td>
										<td>Get book by slug</td>
								</tr>
								<tr>
										<td>4</td>
										<td>Get</td>
										<td>/books/:id,:id</td>
										<td>Get multiple books</td>
								</tr>
								<tr>
										<td>5</td>
										<td>Get</td>
										<td>/characters</td>
										<td>Get characters</td>
								</tr>
								<tr>
										<td>6</td>
										<td>Get</td>
										<td>/characters/:id</td>
										<td>Get character by id</td>
								</tr>
								<tr>
										<td>7</td>
										<td>Get</td>
										<td>/characters/:slug</td>
										<td>Get character by slug</td>
								</tr>
								<tr>
										<td>8</td>
										<td>Get</td>
										<td>/characters/:id,:id</td>
										<td>Get multiple characters</td>
								</tr>
								<tr>
										<td>9</td>
										<td>Get</td>
										<td>/spells</td>
										<td>Get all spells</td>
								</tr>
								<tr>
										<td>10</td>
										<td>Get</td>
										<td>/spells/:id</td>
										<td>Get spell by id</td>
								</tr>
								<tr>
										<td>11</td>
										<td>Get</td>
										<td>/spells/:slug</td>
										<td>Get spell by slug</td>
								</tr>
								<tr>
										<td>12</td>
										<td>Get</td>
										<td>/spells/:id,:id</td>
										<td>Get multiple spells</td>
								</tr>
								<tr>
										<td>13</td>
										<td>Get</td>
										<td>/potions</td>
										<td>Get all potions</td>
								</tr>
								<tr>
										<td>14</td>
										<td>Get</td>
										<td>/potions/:id</td>
										<td>Get potion by id</td>
								</tr>
								<tr>
										<td>15</td>
										<td>Get</td>
										<td>/potions/:slug</td>
										<td>Get potion by slug</td>
								</tr>
								<tr>
										<td>16</td>
										<td>Get</td>
										<td>/potions/:id,:id</td>
										<td>Get multiple potions</td>
								</tr>
								<tr>
										<td>17</td>
										<td>Get</td>
										<td>/houses</td>
										<td>Get all house</td>
								</tr>
								<tr>
										<td>18</td>
										<td>Get</td>
										<td>/houses/:id</td>
										<td>Get house by id</td>
								</tr>
								<tr>
										<td>19</td>
										<td>Get</td>
										<td>/houses/:slug</td>
										<td>Get house by slug</td>
								</tr>
								<tr>
										<td>20</td>
										<td>Get</td>
										<td>/houses/:id,:id</td>
										<td>Get multiple houses</td>
								</tr>
								<tr>
										<td>21</td>
										<td>Get</td>
										<td>/houses/house:id/features</td>
										<td>Get features of specific house</td>
								</tr>
								<tr>
										<td>22</td>
										<td>Get</td>
										<td>/staffs</td>
										<td>Get all staff</td>
								</tr>
								<tr>
										<td>23</td>
										<td>Get</td>
										<td>/staffs/:id</td>
										<td>Get staff by id</td>
								</tr>
								<tr>
										<td>24</td>
										<td>Get</td>
										<td>/staffs/:slug</td>
										<td>Get staff by slug</td>
								</tr>
								<tr>
										<td>25</td>
										<td>Get</td>
										<td>/staffs/:id,:id</td>
										<td>Get multiple staffs</td>
								</tr>
								<tr>
										<td>26</td>
										<td>Get</td>
										<td>/students</td>
										<td>Get all students</td>
								</tr>
								<tr>
										<td>27</td>
										<td>Get</td>
										<td>/students/:id</td>
										<td>Get student by id</td>
								</tr>
								<tr>
										<td>28</td>
										<td>Get</td>
										<td>/students/:slug</td>
										<td>Get student by slug</td>
								</tr>
								<tr>
										<td>29</td>
										<td>Get</td>
										<td>/students/:id,id</td>
										<td>Get multiple students</td>
								</tr>
								<tr>
										<td>30</td>
										<td>Get</td>
										<td>/peoples</td>
										<td>Get all normal peoples</td>
								</tr>
								<tr>
										<td>31</td>
										<td>Get</td>
										<td>/peoples/:id</td>
										<td>Get people by id</td>
								</tr>
								<tr>
										<td>32</td>
										<td>Get</td>
										<td>/peoples/:slug</td>
										<td>Get people by slug</td>
								</tr>
								<tr>
										<td>33</td>
										<td>Get</td>
										<td>/students</td>
										<td>Get all students</td>
								</tr>
								<tr>
										<td>34</td>
										<td>Get</td>
										<td>/students/:id</td>
										<td>Get student by id</td>
								</tr>
								<tr>
										<td>35</td>
										<td>Get</td>
										<td>/students/:slug</td>
										<td>Get student by slug</td>
								</tr>
								<tr>
										<td>36</td>
										<td>Get</td>
										<td>/students/:id,:id</td>
										<td>Get multiple students</td>
								</tr>
								<tr>
										<td>37</td>
										<td>Get</td>
										<td>/movies</td>
										<td>Get all movies</td>
								</tr>
								<tr>
										<td>38</td>
										<td>Get</td>
										<td>/movies/:id</td>
										<td>Get movie by id</td>
								</tr>
								<tr>
										<td>39</td>
										<td>Get</td>
										<td>/movies/:slug</td>
										<td>Get movie by slug</td>
								</tr>
								<tr>
										<td>40</td>
										<td>Get</td>
										<td>/movies/:id,:id</td>
										<td>Get multiple movies</td>
								</tr>
								<tr>
										<td>41</td>
										<td>Get</td>
										<td>/movies/{movie:id}/stars</td>
										<td>Get stars of specific movie</td>
								</tr>
								<tr>
										<td>42</td>
										<td>Get</td>
										<td>/movies/{movie:id}/producers</td>
										<td>Get producers of specific movie</td>
								</tr>
						</tbody>
				</table>
		</section>

</body>

</html>
