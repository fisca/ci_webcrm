// ============ Group Customer ========================
function configGroupCustomer() {
    $.ajax({
        url: 'index.php/site/config_group_customer',
        success: function(data) {
            $("#content").html(data);
        }
    });
       

    return false;
}

function saveGroupCustomer() {
    $.ajax({
        url: 'index.php/site/save_group_customer',
        type: 'POST',
        data: $("#formGroupCustomer").serialize(),
        success: function(data) {
            if (data === 'success') {
                alert("บันทึกรายการแล้ว");
                configGroupCustomer();
            }
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