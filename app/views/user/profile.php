{% extends 'templates/default.php' %}

 {% block title %}{{ user.getNameOrUser() }}{% endblock %}
  {% block content %}
      <h2>{{ user.username }}</h2>
      <dl class="">
        <dt>Full Name</dt>
        {% if user.getFullName() %}

        <dd>{{ user.getFullName()}}</dd>
        {% endif %}
      </dl>
      <dl class="">
        <dt>Email</dt>
        <dd>{{ user.email }}</dd>
      </dl>

      <h2>Stats</h2>
      <script type="text/javascript">

window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer1", {
		title:{
			text: "Stats for Lagree Results "
		},
		data: [
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "line",
			dataPoints: [
				{% if stats is empty %}
				<p>No stats available</p>
				{% else %}
				    {%  for stat in stats %}
				      { label: "{{ stat.date }}",  y: {{ stat.stat }}  },
				    {% endfor %}
				{% endif %}

			]
		}
		]
	});
	chart.render();
  var chart2 = new CanvasJS.Chart("chartContainer2", {
		title:{
			text: "Stats for Physio Resistance "
		},
		data: [
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "bar",
			dataPoints: [
				{% if physios is empty %}
				<p>No stats available</p>
				{% else %}
				    {%  for physio in physios %}
				      { label: "{{ physio.date }}",  y: {{ physio.stat }}  },
				    {% endfor %}
				{% endif %}

			]
		}
		]
	});
	chart2.render();
  var chart3 = new CanvasJS.Chart("chartContainer3", {
		title:{
			text: "Stats for Cardio Time "
		},
		data: [
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "doughnut",
			dataPoints: [
				{% if cardios is empty %}
				<p>No stats available</p>
				{% else %}
				    {%  for cardio in cardios %}
				      { label: "{{ cardio.date }}",  y: {{ cardio.stat }}  },
				    {% endfor %}
				{% endif %}

			]
		}
		]
	});
	chart3.render();
  var chart4 = new CanvasJS.Chart("chartContainer4", {
		title:{
			text: "Stats for Strength Level "
		},
		data: [
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "line",
			dataPoints: [
				{% if strongs is empty %}
				<p>No stats available</p>
				{% else %}
				    {%  for strong in strongs %}
				      { label: "{{ strong.date }}",  y: {{ strong.stat }}  },
				    {% endfor %}
				{% endif %}

			]
		}
		]
	});
	chart4.render();

}
</script>
<div id="chartContainer1" style="height: 300px; width: 100%;"></div>
<div id="chartContainer2" style="height: 300px; width: 100%;"></div>
<div id="chartContainer3" style="height: 300px; width: 100%;"></div>
<div id="chartContainer4" style="height: 300px; width: 100%;"></div>

  {% endblock %}
