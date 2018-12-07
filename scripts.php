[
    {
        "id": 1544178034000,
        "trigger": 0,
        "priority": 0,
        "title": "RESET KHO 1",
        "description": "",
        "content": "pm clear com.trustme.cashrun\npm clear com.trustme.cashrun.giftcard\npm clear com.jeju.genie\npm hide com.jeju.genie\npm clear com.omnitel.android.lottewebview\npm hide com.omnitel.android.lottewebview\npm clear com.cultsotry.yanolja.nativeapp\npm hide com.cultsotry.yanolja.nativeapp\npm clear kr.co.ticketbay.mobile\npm hide kr.co.ticketbay.mobile\npm hide kr.co.ssg\npm hide com.ulugames.with.onestore\npm hide com.himart.main\npm hide com.campmobile.snow\npm hide com.ulugames.honors.onestore\npm hide com.ulugames.mx.onestore\npm hide com.ulugames.euros.onestore\npm hide com.ulugames.euros.google\nrm -rf /data/data/com.ulugames.sanguo.google/shared_prefs\npm hide com.ulugames.sanguo.google\npm hide com.skylinematrix.onestore.gor\npm hide com.indie.jzx.kr\nrm -rf /data/otp\nrm -rf /sdcard/.NASWall\nrm -rf /sdcard/igaw\nrm -rf /sdcard/data/build\npm clear com.android.keychain\npm clear com.google.vending\npm clear com.google.android.gms\n ",
        "as_root": true,
        "show_notification": false,
        "show_result": false,
        "result_in_file": false
    },
    {
        "id": 1544178034001,
        "trigger": 0,
        "priority": 0,
        "title": "x",
        "description": "Clears all files with tmp, temp and cache extension. Needs root.",
        "content": "# Clear temp files\n# Clears all files with tmp, temp and cache extension. Needs root.\n# Needs root.\nfind \/data\/data\/ -type f -name \".tmp\" -delete \nfind \/data\/data\/ -type f -name \".temp\" -delete \nfind \/data\/data\/ -type f -name \".cache\" -delete \nfind \/sdcard\/ -type f -name \".tmp\" -delete \nfind \/sdcard\/ -type f -name \".temp\" -delete \nfind \/sdcard\/ -type f -name \".cache\" -delete \n ",
        "as_root": true,
        "show_notification": false,
        "show_result": false,
        "result_in_file": false
    },
    {
        "id": 1544178034002,
        "trigger": 0,
        "priority": 0,
        "title": "Reboot in recovery",
        "description": "Reboots device in recovery mode.",
        "content": "# Reboot in recovery mode\n# Reboots device in recovery mode.\nsvc power reboot recovery\n ",
        "as_root": true,
        "show_notification": false,
        "show_result": false,
        "result_in_file": false
    },
    {
        "id": 1544178034003,
        "trigger": 0,
        "priority": 0,
        "title": "Reboot device",
        "description": "Reboots device.",
        "content": "# Reboot device\n# Reboots devices.\nsvc power reboot\n ",
        "as_root": true,
        "show_notification": false,
        "show_result": false,
        "result_in_file": false
    }
]
