
// full day names
Calendar._DN = new Array("�ҷԵ��", "�ѹ���", "�ѧ���", "�ظ", "����ʺ��", "�ء��", "�����", "�ҷԵ��");


// short day names
Calendar._SDN = new Array("�", "�", "�", "�", "��", "�", "�", "�");

// First day of the week. "0" means display Sunday first, "1" means display
// Monday first, etc.
Calendar._FD = 0;

// full month names
Calendar._MN = new Array("���Ҥ�", "����Ҿѹ��", "�չҤ�", "����¹", "����Ҥ�", "�Զع�¹", "�á�Ҥ�", "�ԧ�Ҥ�", "�ѹ��¹", "���Ҥ�", "��Ȩԡ�¹","�ѹ�Ҥ�");

// short month names
Calendar._SMN = new Array ("�.�.", "�.�.","��.�.", "��.�.", "�.�.", "��.�.", "�.�.","�.�.", "�.�.", "�.�.", "�.�.", "�.�.");

// tooltips
Calendar._TT = {};
Calendar._TT["INFO"] = "��Ǫ�������� (Help the calendar)";

Calendar._TT["ABOUT"] = "�Ը���:\n" +
"- ������ \xab, \xbb ��������͹��ԷԹ����»�\n" +
"- ������ " + String.fromCharCode(0x2039) + ", " + String.fromCharCode(0x203a) + " ��������͹��ԷԹ�������͹\n" +
"- �س����ö�������ѧ����Ǥ�ҧ �������͡��.";
Calendar._TT["ABOUT_TIME"] = "\n\n" +
"Time selection:\n" +
"- Click on any of the time parts to increase it\n" +
"- or Shift-click to decrease it\n" +
"- or click and drag for faster selection.";

Calendar._TT["PREV_YEAR"] = "�շ������ (Previous Year)";
Calendar._TT["PREV_MONTH"] = "��͹������� (Previous Month)";
Calendar._TT["GO_TODAY"] = "���͡ �ѹ���";
Calendar._TT["NEXT_MONTH"] = "��͹˹�� (Next month)";
Calendar._TT["NEXT_YEAR"] = " ��˹��(Next year)";
Calendar._TT["SEL_DATE"] = "���͡�ѹ ";
Calendar._TT["DRAG_TO_MOVE"] = "����͹��ԷԹ (Drag to move)";
Calendar._TT["PART_TODAY"] = " (�ѹ���)";

// the following is to inform that "%s" is to be the first day of week
// %s will be replaced with the day name.
Calendar._TT["DAY_FIRST"] = "���͡�ѹ %s ���ѹ�����㹻�ԷԹ";

// This may be locale-dependent.  It specifies the week-end days, as an array
// of comma-separated numbers.  The numbers are from 0 to 6: 0 means Sunday, 1
// means Monday, etc.
Calendar._TT["WEEKEND"] = "0,6";

Calendar._TT["CLOSE"] = "�Դ";
Calendar._TT["TODAY"] = "�ѹ��� (Today)";
Calendar._TT["TIME_PART"] = "(Shift-)Click or drag to change value";

// date formats
Calendar._TT["DEF_DATE_FORMAT"] = "%Y-%m-%d";
//Calendar._TT["TT_DATE_FORMAT"] = "%a, %b %e";
Calendar._TT["TT_DATE_FORMAT"] = " �ѹ %A ��� %e  %B ";

Calendar._TT["WK"] = "�ѻ����";
Calendar._TT["TIME"] = "����:";
