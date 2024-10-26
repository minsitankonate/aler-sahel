(function(api) {

    api.sectionConstructor['eco-renewable-energy-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });

    const eco_renewable_energy_section_lists = ['banner', 'service'];
    eco_renewable_energy_section_lists.forEach(eco_renewable_energy_homepage_scroll);

    function eco_renewable_energy_homepage_scroll(item, index) {
        item = item.replace(/-/g, '_');
        wp.customize.section('eco_renewable_energy_' + item + '_section', function(section) {
            section.expanded.bind(function(isExpanding) {
                wp.customize.previewer.send(item, { expanded: isExpanding });
            });
        });
    }
})(wp.customize);