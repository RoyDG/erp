import nltk
import datetime

nltk.download('punkt')  # download the NLTK tokenizer

def parse_date_range(message):
    # parse the start and end date of a date range from the user's message
    tokens = nltk.word_tokenize(message.lower())
    start_date = None
    end_date = None
    for i, token in enumerate(tokens):
        if token in ['from', 'starting', 'beginning', 'begin', 'on']:
            start_date = parse_date(tokens[i+1:])
        elif token in ['to', 'until', 'till', 'end']:
            end_date = parse_date(tokens[i+1:])
    return start_date, end_date

def parse_date(tokens):
    # parse a date from a list of tokens
    now = datetime.datetime.now()
    day = month = year = None
    for i, token in enumerate(tokens):
        if token.isdigit():
            if int(token) < 32 and day is None:
                day = int(token)
            elif int(token) < 13 and month is None:
                month = int(token)
            elif year is None:
                year = int(token)
    if day is None:
        day = now.day
    if month is None:
        month = now.month
    if year is None:
        year = now.year
    return datetime.date(year, month, day)

def parse_time(tokens):
    # parse a time from a list of tokens
    now = datetime.datetime.now()
    hour = minute = second = None
    am_pm = ''
    for i, token in enumerate(tokens):
        if token.isdigit():
            if int(token) < 24 and hour is None:
                hour = int(token)
            elif int(token) < 60 and minute is None:
                minute = int(token)
            elif int(token) < 60 and second is None:
                second = int(token)
        elif token in ['am', 'pm']:
            am_pm = token
        elif ':' in token:
            parts = token.split(':')
            if len(parts) == 2:
                if int(parts[0]) < 24 and hour is None:
                    hour = int(parts[0])
                if int(parts[1]) < 60 and minute is None:
                    minute = int(parts[1])
    if hour is None:
        hour = 12
    if minute is None:
        minute = 0
    if am_pm == 'pm' and hour < 12:
        hour += 12
    return datetime.time(hour, minute, second)


def create_schedule():
    schedule = {}
    while True:
        message = input('>> ')
        if message.strip().lower() in ['exit', 'quit', 'done']:
            break
        elif 'add' in message.lower():
            tokens = nltk.word_tokenize(message.lower())
            for i, token in enumerate(tokens):
                if token == 'add':
                    start_date, end_date = parse_date_range(' '.join(tokens[i+1:]))
                    break
            events = []
            while True:
                event_message = input('- ')
                if event_message.strip().lower() in ['done', 'exit', 'quit']:
                    break
                tokens = nltk.word_tokenize(event_message.lower())
                for i, token in enumerate(tokens):
                    if token == 'at':
                        time = parse_time(tokens[i+1:])
                        description = ' '.join(tokens[:i])
                        events.append((time, description))
                        break
            for date in (start_date + datetime.timedelta(n) for n in range((end_date - start_date).days + 1)):
                if date not in schedule:
                    schedule[date] = []
                schedule[date].extend(events)
        elif 'view' in message.lower():
            tokens = nltk.word_tokenize(message.lower())
            for i, token in enumerate(tokens):
                if token == 'view':
                    date = parse_date(tokens[i+1:])
                    break
            if date in schedule:
                print(date.strftime('%A, %B %d, %Y'))
                for event in sorted(schedule[date]):
                    time = event[0].strftime('%I:%M %p')
                    description = event[1]
                    print(f'{time}: {description}')
            else:
                print(f'No events scheduled for {date.strftime("%A, %B %d, %Y")}.')
        else:
            print("I'm sorry, I didn't understand that.")
    print('Goodbye!')

create_schedule()
