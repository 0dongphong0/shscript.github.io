[
    {
        "id": 1544178034000,
        "trigger": 0,
        "priority": 0,
        "title": "RESET KHO 1",
        "description": "",
        "content": " ",
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
