$(function() {



    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Senior Manager",
            value: 1
        }, {
            label: "Manager",
            value: 1
        }, {
            label: "Senior Specialist",
            value: 1
        },{
            label: "Specialist",
            value: 1
        },{
        	label: "Individual Contributor",
        	value: 1,
        },
        {
            label: "Executive",
            value: 1
        },{
            label: "General Manager",
            value: 1
        }],
        resize: true
    });

});
