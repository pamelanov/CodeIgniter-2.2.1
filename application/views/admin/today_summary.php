<h1><?php echo $judul; ?></h1>

<nav class="navbar navbar-default" id="searchTodaySum">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" id="tulisanTodaySum">Today's Summary</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <select class="js-example-basic-single" name="idMurid" id="selectToday">
                    <?php foreach($ops as $x) {
                        echo "<option value='" . $x->id . "'>" . $x->id_acc . ": " . $x->nama . "</option>";
                        }  
                    ?>
                    </select>
                 </div>
                    <button type="submit" class="btn btn-info">Search</button>
            </form>
        </ul>
    </div>
  </div>
</nav>