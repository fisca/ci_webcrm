// ============ Group Customer ========================
function configGroupCustomer() {
    $.ajax({
        url: 'index.php/site/config_group_customer',
        success: function(data) {
            $("#content").html(data);
        }
    });
    
    $.ajax({
        url: 'site/config_group_customer',
        success: function(data) {
            $("#content").html(data);
        }
    });

    return false;
}

// ============ Visit Type =============================
function configVisitType() {
    $.ajax({
        url: 'index.php/site/config_visit_type',
        success: function(data) {
            $("#content").html(data);
        }
    });
    
    $.ajax({
        url: 'site/config_visit_type',
        success: function(data) {
            $("#content").html(data);
        }
    });

    return false;
}

// ============ Employee =============================
function configEmployee() {
    $.ajax({
        url: 'index.php/site/config_employee',
        success: function(data) {
            $("#content").html(data);
        }
    });
    
    $.ajax({
        url: 'site/config_employee',
        success: function(data) {
            $("#content").html(data);
        }
    });

    return false;
}