<div class="relative" style="height: {{ $height ?? '300px' }}; min-height: 300px;">
    <canvas id="{{ $chartId }}"></canvas>
</div>

@once
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
@endonce

<script>
(function() {
    const chartId = '{{ $chartId }}';
    const chartConfig = @json($chartConfig);
    
    function initChart() {
        const ctx = document.getElementById(chartId);
        if (ctx && typeof Chart !== 'undefined') {
            // Convert string functions to actual functions
            if (chartConfig.options && chartConfig.options.plugins) {
                if (chartConfig.options.plugins.tooltip && chartConfig.options.plugins.tooltip.callbacks) {
                    Object.keys(chartConfig.options.plugins.tooltip.callbacks).forEach(key => {
                        const funcStr = chartConfig.options.plugins.tooltip.callbacks[key];
                        if (typeof funcStr === 'string') {
                            try {
                                chartConfig.options.plugins.tooltip.callbacks[key] = eval('(' + funcStr + ')');
                            } catch(e) {
                                console.warn('Failed to parse callback function:', e);
                            }
                        }
                    });
                }
            }
            
            new Chart(ctx, chartConfig);
        } else if (ctx) {
            // Retry if Chart.js is not loaded yet
            setTimeout(initChart, 100);
        }
    }
    
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initChart);
    } else {
        initChart();
    }
})();
</script>

