var graphData = [{
    // Visits
    data: [ [6, 1000], [7, 1600], [8, 1900], [9, 2100], [10, 2500], [11, 2200], [12, 2000], [13, 1950], [14, 1900], [15, 2000] ],
    color: '#71c73e'
}];

// Lines
$.plot($('#graph-bars'), graphData, {
    series: {
        bars: {
            show: true,
            barWidth: .9,
            align: 'center'
        },
        shadowSize: 0
    },
    grid: {
        color: '#646464',
        borderColor: 'transparent',
        borderWidth: 20,
        hoverable: true
    },
    xaxis: {
        tickColor: 'transparent',
        tickDecimals: 2
    },
    yaxis: {
        tickSize: 1000
    }
});