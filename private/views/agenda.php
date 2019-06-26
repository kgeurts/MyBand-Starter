

<?php include 'header-agenda.php';?>


<script>

  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: '2019-06-12',
      navLinks: true, // can click day/week names to navigate views

      weekNumbers: true,
      weekNumbersWithinDays: true,
      weekNumberCalculation: 'ISO',

      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
<?php
$i = 0; 
foreach ( $statement as $db   ): $i++?>
        {
          title: '<?php echo $db['titel']?>',
          start: '<?php echo $db['date']?>'
        },   

        <?php endforeach; ?>
        
      ]
    });

  });

</script>
<style>


  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>
</head>
<body>
<h3 style="text-align: center;">Kalender opkomende series en film's op netflix.</h3>
  <div id='calendar'></div>


    <script>
        $(function(){
            $('.response--main-navigation').basicResponsiveMenu({
                browserWidth:960,
                slideDir:'left',
                slideSpeed:400
            });
        });
    </script>

  <?php include "footer.php" ?>
</body>
</html>
</body>
</html


