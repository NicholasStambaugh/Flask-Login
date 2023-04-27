import pandas as pd

# Read user data from a CSV file
user_data = pd.read_csv('user_data.csv')

# Print the number of rows in the user data
print('Number of users:', len(user_data))

# Calculate the percentage of users with each role
role_counts = user_data['role'].value_counts(normalize=True)
print('Role percentages:')
print(role_counts)

# Calculate the average age of users
avg_age = user_data['age'].mean()
print('Average user age:', avg_age)

# Calculate the number of users in each age group
age_bins = [0, 18, 25, 35, 50, 100]
age_labels = ['0-18', '19-25', '26-35', '36-50', '50+']
age_counts = pd.cut(user_data['age'], bins=age_bins, labels=age_labels).value_counts()
print('User age distribution:')
print(age_counts)
