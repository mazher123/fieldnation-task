SELECT user.*, AVG(test_result.correct) AS avg_correct_answers, MAX(test_result.time_taken) AS most_recent_test_time
FROM user
LEFT JOIN test_result ON user.user_id = test_result.user_id GROUP BY user.user_id