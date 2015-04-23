
<div class="container">
	<div class="row">
        <div class="col-lg-3">
            <form action="#" method="get">
                <div class="input-group">
                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                    <input class="form-control" id="system-search" name="q" placeholder="Search for" required>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
		<div class="col-lg-12">    	 	
    	 <table class="table table-list-search">
            <thead>
                        <tr>
                        	<div class="col-lg-2"><th>Id</th></div>
                        	<div class="col-lg-2"><th>Nom</th></div>
                            <div class="col-lg-2"><th>Finition</th></div>
                            <div class="col-lg-2"><th>Format</th></div>
                            <div class="col-lg-2"><th>recto_verso</th></div>
                            <div class="col-lg-2"><th>Gr/m2</th></div>
                            <div class="col-lg-2"><th>Qtés</th></div>
                            <div class="col-lg-2"><th>Prix</th></div>
                        </tr>
                    </thead>
        
                    <tbody><tr><?php 
$sql="SELECT * from produits ";
$req=mysql_query($sql);
while($donnees=mysql_fetch_assoc($req)){ 
?>
                        <td> <?php echo "{$donnees['id']}"; ?></td>
                        <td> <?php echo "{$donnees['Nom']}"; ?></td>
                        <td> <?php echo "{$donnees['Finition']}"; ?></td>
                        <td> <?php echo "{$donnees['Format']}"; ?></td>
                        <td> <?php echo "{$donnees['recto_verso']}"; ?></td>
                        <td> <?php echo "{$donnees['Gr/m2']}"; ?></td>
                        <td> <?php echo "{$donnees['Qtés']}"; ?></td>
                        <td> <?php echo "{$donnees['Prix']}"; ?></td>
                   </tr>  <?php } ?></tbody>
                </table>
		</div>	
	</div>  

	 <script type="text/javascript">
 $(document).ready(function() {
    var activeSystemClass = $('.list-group-item.active');

    //something is entered in search form
    $('#system-search').keyup( function() {
       var that = this;
        // affect all table rows on in systems table
        var tableBody = $('.table-list-search tbody');
        var tableRowsClass = $('.table-list-search tbody tr');
        $('.search-sf').remove();
        tableRowsClass.each( function(i, val) {
        
            //Lower text for case insensitive
            var rowText = $(val).text().toLowerCase();
            var inputText = $(that).val().toLowerCase();
            if(inputText != '')
            {
                $('.search-query-sf').remove();
                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Searching for: "'
                    + $(that).val()
                    + '"</strong></td></tr>');
            }
            else
            {
                $('.search-query-sf').remove();
            }

            if( rowText.indexOf( inputText ) == -1 )
            {
                //hide rows
                tableRowsClass.eq(i).hide();
                
            }
            else
            {
                $('.search-sf').remove();
                tableRowsClass.eq(i).show();
            }
        });
        //all tr elements are hidden
        if(tableRowsClass.children(':visible').length == 0)
        {
            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No entries found.</td></tr>');
        }
    });
});</script>