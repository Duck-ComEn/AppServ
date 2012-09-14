
// full day names
Calendar._DN = new Array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์", "อาทิตย์");


// short day names
Calendar._SDN = new Array("อ", "จ", "อ", "พ", "พฤ", "ศ", "ส", "อ");

// First day of the week. "0" means display Sunday first, "1" means display
// Monday first, etc.
Calendar._FD = 0;

// full month names
Calendar._MN = new Array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน","ธันวาคม");

// short month names
Calendar._SMN = new Array ("ม.ค.", "ก.พ.","มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.","ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");

// tooltips
Calendar._TT = {};
Calendar._TT["INFO"] = "ตัวช่วยเหลือ (Help the calendar)";

Calendar._TT["ABOUT"] = "วิธีใช้:\n" +
"- กดปุ่ม \xab, \xbb เพื่อเลื่อนปฏิทินเป็นรายปี\n" +
"- กดปุ่ม " + String.fromCharCode(0x2039) + ", " + String.fromCharCode(0x203a) + " เพื่อเลื่อนปฏิทินเป็นรายเดือน\n" +
"- คุณสามารถกดปุ่มดังกล่าวค้าง เพื่อเลือกปี.";
Calendar._TT["ABOUT_TIME"] = "\n\n" +
"Time selection:\n" +
"- Click on any of the time parts to increase it\n" +
"- or Shift-click to decrease it\n" +
"- or click and drag for faster selection.";

Calendar._TT["PREV_YEAR"] = "ปีที่แล้ว (Previous Year)";
Calendar._TT["PREV_MONTH"] = "เดือนที่แล้ว (Previous Month)";
Calendar._TT["GO_TODAY"] = "เลือก วันนี้";
Calendar._TT["NEXT_MONTH"] = "เดือนหน้า (Next month)";
Calendar._TT["NEXT_YEAR"] = " ปีหน้า(Next year)";
Calendar._TT["SEL_DATE"] = "เลือกวัน ";
Calendar._TT["DRAG_TO_MOVE"] = "เลื่อนปฏิทิน (Drag to move)";
Calendar._TT["PART_TODAY"] = " (วันนี้)";

// the following is to inform that "%s" is to be the first day of week
// %s will be replaced with the day name.
Calendar._TT["DAY_FIRST"] = "เลือกวัน %s เป็นวันเริ่มในปฏิทิน";

// This may be locale-dependent.  It specifies the week-end days, as an array
// of comma-separated numbers.  The numbers are from 0 to 6: 0 means Sunday, 1
// means Monday, etc.
Calendar._TT["WEEKEND"] = "0,6";

Calendar._TT["CLOSE"] = "ปิด";
Calendar._TT["TODAY"] = "วันนี้ (Today)";
Calendar._TT["TIME_PART"] = "(Shift-)Click or drag to change value";

// date formats
Calendar._TT["DEF_DATE_FORMAT"] = "%Y-%m-%d";
//Calendar._TT["TT_DATE_FORMAT"] = "%a, %b %e";
Calendar._TT["TT_DATE_FORMAT"] = " วัน %A ที่ %e  %B ";

Calendar._TT["WK"] = "สัปดาห์";
Calendar._TT["TIME"] = "เวลา:";
