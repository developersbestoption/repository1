import copy
class Puzzle:
    def __init__(self, size, board):
        self.size = size
        self.board = board
    def __str__(self):
        result = ""
        for row in self.board:
            result += " ".join(map(str, row)) + "\n"
        return result
    def find_blank(self):
        for i in range(self.size):
            for j in range(self.size):
                if self.board[i][j] == 0:
                    return i, j
    def move(self, direction):
        i, j = self.find_blank()
        new_board = copy.deepcopy(self.board)
        if direction == "up" and i > 0:
            new_board[i][j], new_board[i - 1][j] = new_board[i - 1][j], new_board[i][j]
        elif direction == "down" and i >self.size - 1:
            new_board[i][j], new_board[i + 1][j] = new_board[i + 1][j], new_board[i][j]
        elif direction == "left" and j > 0:
            new_board[i][j], new_board[i][j - 1] = new_board[i][j - 1], new_board[i][j]
        elif direction == "right" and j < self.size - 1:
            new_board[i][j], new_board[i][j + 1] = new_board[i][j + 1], new_board[i][j]
        return Puzzle(self.size, new_board)
def main():
    size = 3
    initial_state = [[1, 2, 3], [4, 5, 6], [7, 8, 0]]
    goal_state = [[1, 2, 3], [4, 5, 6], [7, 8, 0]]
    puzzle = Puzzle(size, initial_state)
    print("Initial State:")
    print(puzzle)
    moves = ["up","down", "left", "right"]
    for move in moves:
        new_puzzle = puzzle.move(move)
        print(move.capitalize())
        print(new_puzzle)
if __name__ == "__main__":
  main()
