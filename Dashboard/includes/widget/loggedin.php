<h4>Persoonlijke Gegevens</h4>
<p>
	Naam: <?php echo $users_data['users_name']; ?><br>
   	Achternaam: <?php echo $users_data['users_achternaam']; ?><br>
   	Geboorte Datum: <?php echo $users_data['users_gebdatum']; ?>
</p>

<li role="presentation" class="divider"></li>

<h4>Contact Info</h4>
<p>
	Telefoon: <?php echo $users_data['users_telefoon']; ?><br>
	Email: <?php echo $users_data['users_email']; ?>
</p>

<li role="presentation" class="divider"></li>

<h4>Bedrijf Omschrijving</h4>
<p>
	Titel: <?php echo $users_data['users_type']; ?><br>
	Omschrijving: <?php echo $users_data['users_about']; ?>
</p>